<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Producers extends Controller
{
    public function all(){
        $producers = Manufacturer::all();
        return view('manufacturer.all',compact('producers'));
    }

    public function getInfo($id){

        $producer = Manufacturer::find($id);
        return view('manufacturer.info',compact('producer'));
    }
}
