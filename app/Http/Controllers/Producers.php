<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class Producers extends Controller
{
    public function getInfo(){
        //Manufacturer::;
        return Manufacturer::where('id', 1)->get();
    }
}
