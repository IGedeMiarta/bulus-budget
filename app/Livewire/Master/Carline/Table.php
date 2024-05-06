<?php

namespace App\Livewire\Master\Carline;

use App\Models\Carline;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $data['table'] = Carline::latest()->paginate(10); 
        return view('livewire.master.carline.table',$data);
    }
    public function edit($id){
        $this->dispatch('editCarline',id:$id);
    }
    public function delete($id){
        Carline::find($id)->delete();
        return redirect()->to('/carline')->with('success','Carline Deleted Successfully');
    }
}
