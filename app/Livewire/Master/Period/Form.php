<?php

namespace App\Livewire\Master\Period;

use App\Models\Period;
use App\Models\Term;
use Livewire\Attributes\On;
use Livewire\Component;

class Form extends Component
{
    public $status,$terms,$term_id,$period_name,$group,$type;
    public $periodModel;
    public function mount(){
        $this->status = true;
        $this->terms = Term::all();
        $this->type = 'Add';
    }
     public function rules()
    {
        return [
            'term_id' => 'required',
            'period_name' => 'required|min:3',
            'group' => 'required|min:3'
        ];
    }
     public function save(){
        $this->validate();
        if ($this->periodModel) {
            $this->periodModel->update([
                'term_id' => $this->term_id,
                'name' => $this->period_name,
                'group' => $this->group,
                'status' => $this->status,
            ]);
            return redirect()->to('/period')->with('success','Period Updated Successfully');
        }else{
            Period::create([
                'term_id' => $this->term_id,
                'name' => $this->period_name,
                'group' => $this->group,
                'status' => $this->status,
            ]);
            return redirect()->to('/period')->with('success','New Period Created');
        }
    }
    #[On('editPeriod')]
    public function editPeriod($id){
        $period = Period::find($id);
        $this->term_id = $period->term_id;
        $this->period_name = $period->name;
        $this->group = $period->group;
        $this->status = $period->status;
        $this->periodModel  = $period;
        $this->type = 'Update';

    }
    public function render()
    {
        return view('livewire.master.period.form');
    }
}
