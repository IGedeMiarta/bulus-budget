<?php

namespace App\Livewire\Master\Item;

use App\Models\Item;
use Livewire\Attributes\On;
use Livewire\Component;

class Add extends Component
{
    public $group,$sub_group,$name,$status,$code;
    public $item;
    public $type;
    public function mount(){
        $this->status = 1;
        $this->type = 'Add';
    }
    public function rules()
    {
        return [
            'group' => 'required|min:3',
            'sub_group' => 'required|min:3',
            'name' => 'required|min:3',
            'code' => 'required|min:2',
        ];
    }
    public function save(){
        $this->validate();
        if ($this->item) {
            $this->item->update([
                'group' => $this->group,
                'sub_group' => $this->sub_group,
                'code' => $this->code,
                'name' => $this->name,
                'status' => $this->status,
            ]);
            return redirect()->to('/item')->with('success','Item Updated Successfully');
        }else{
            Item::create([
                'group' => $this->group,
                'sub_group' => $this->sub_group,
                'code' => $this->code,
                'name' => $this->name,
                'status' => $this->status,
            ]);
            return redirect()->to('/item')->with('success','New Item Created');
        }
       
    }
    #[On('editItem')]
    public function editItem($id){
        $item = Item::find($id);
        $this->group = $item->group;
        $this->sub_group = $item->sub_group;
        $this->code = $item->code;
        $this->name = $item->name;
        $this->status = $item->status;
        $this->item = $item;
        $this->type = 'Update';

    }
    public function render()
    {
        return view('livewire.master.item.add');
    }
}
