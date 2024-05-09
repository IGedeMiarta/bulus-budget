<?php

namespace App\Livewire\Master\Period;

use App\Models\Period;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $data['table'] = Period::with('getTerm')->latest()->paginate(10); 
        return view('livewire.master.period.table',$data);
    }
     public function edit($id){
        $this->dispatch('editPeriod',id:$id);
    }
    public function delete($id){
        Period::find($id)->delete();
        return redirect()->to('/period')->with('success','Period Deleted Successfully');
    }
}
