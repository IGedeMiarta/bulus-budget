<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function item(){
        $data['title'] = 'Master Item';
        return view('master.item',$data);
    }
    public function carline(){
        $data['title'] = 'Master Carline';
        return view('master.carline',$data);
    }
    public function term(){
        $data['title'] = 'Master Term';
        return view('master.term',$data);
    }
     public function period(){
        $data['title'] = 'Master Period';
        return view('master.period',$data);
    }
}
