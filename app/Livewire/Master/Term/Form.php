<?php

namespace App\Livewire\Master\Term;

use App\Models\Term;
use Livewire\Attributes\On;
use Livewire\Component;

class Form extends Component
{
    public $status,$type,$term_name,$start_date,$end_date,$termModel;

    public function rules()
    {
        return [
            'term_name' => 'required|min:3',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ];
    }
    public function mount(){
        $this->status = true;
        $this->type = 'Add';
    }
   public function save(){
        $this->validate();
        if ($this->termModel) {
            $this->termModel->update([
                'name' => $this->term_name,
                'start' => $this->start_date,
                'end' => $this->end_date,
                'status' => $this->status,
            ]);
            return redirect()->to('/term')->with('success','Term Updated Successfully');
        }else{
            Term::create([
                'name' => $this->term_name,
                'start' => $this->start_date,
                'end' => $this->end_date,
                'status' => $this->status,
            ]);
            return redirect()->to('/term')->with('success','New Term Created');
        }
    }
    #[On('editTerm')]
    public function editTerm($id){
        $term = Term::find($id);
        $this->term_name = $term->name;
        $this->start_date = $term->start;
        $this->end_date = $term->end;
        $this->status = $term->status;
        $this->termModel  = $term;
        $this->type = 'Update';

    }
    public function render()
    {
        return view('livewire.master.term.form');
    }
}
