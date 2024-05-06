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
}
