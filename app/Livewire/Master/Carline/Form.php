<?php

namespace App\Livewire\Master\Carline;

use App\Models\Carline;
use Livewire\Attributes\On;
use Livewire\Component;

class Form extends Component
{
    public $category,$commodity,$destination,$carmaker,$carline,$year,$status;
    public $carlineModel;
    public $type;
    public function mount(){
        $this->status = 1;
        $this->type = 'Add';
    }
    public function rules()
    {
        return [
            'category' => 'required|min:3',
            'commodity' => 'required|min:3',
            'destination' => 'required|min:3',
            'carmaker' => 'required|min:2',
            'carline' => 'required|min:2',
            'year' => 'required|min:2|numeric',
        ];
    }
    public function save(){
        $this->validate();
        if ($this->carlineModel) {
            $this->carlineModel->update([
                'category' => $this->category,
                'commodity' => $this->commodity,
                'destination' => $this->destination,
                'carmaker' => $this->carmaker,
                'carline' => $this->carline,
                'year' => $this->year,
                'status' => $this->status,
            ]);
            return redirect()->to('/carline')->with('success','Carline Updated Successfully');
        }else{
            Carline::create([
                'category' => $this->category,
                'commodity' => $this->commodity,
                'destination' => $this->destination,
                'carmaker' => $this->carmaker,
                'carline' => $this->carline,
                'year' => $this->year,
                'status' => $this->status,
            ]);
            return redirect()->to('/carline')->with('success','New Carline Created');
        }
    }
    #[On('editCarline')]
    public function editCarline($id){
        $carline = Carline::find($id);
        $this->category = $carline->category;
        $this->commodity = $carline->commodity;
        $this->destination = $carline->destination;
        $this->carmaker = $carline->carmaker;
        $this->carline = $carline->carline;
        $this->year = $carline->year;
        $this->status = $carline->status;
        $this->carlineModel = $carline;
        $this->type = 'Update';

    }
    public function render()
    {
        return view('livewire.master.carline.form');
    }
}
