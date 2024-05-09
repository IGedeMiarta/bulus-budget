<?php

namespace App\Livewire\Master\Term;

use App\Models\Term;
use Livewire\Component;

class Table extends Component
{
  
    public function render()
    {
        $data['table'] = Term::latest()->paginate(10); 
        return view('livewire.master.term.table',$data);
    }
    
    public function edit($id){
        $this->dispatch('editTerm',id:$id);
    }
    public function delete($id){
        Term::find($id)->delete();
        return redirect()->to('/term')->with('success','Carline Deleted Successfully');
    }
}
