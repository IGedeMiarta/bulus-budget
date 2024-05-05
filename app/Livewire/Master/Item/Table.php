<?php

namespace App\Livewire\Master\Item;

use App\Models\Item;
use Livewire\Component;

class Table extends Component
{
    
    public function render()
    {
        $data['table'] = Item::latest()->paginate(10); 
        return view('livewire.master.item.table',$data);
    }
    public function edit($id){
        $this->dispatch('editItem',id:$id);
    }
    public function delete($id){
        Item::find($id)->delete();
        return redirect()->to('/item')->with('success','Item Deleted Successfully');
    }
}
