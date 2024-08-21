<?php

namespace App\Http\Controllers;

use App\Models\Mesin;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    function index(){
        $mesins = Mesin::all(); 
        // dd($mesins); debug cek data
        return view('produksi.mesin.index',compact(['mesins']));
    }
    function create(){
       return view('produksi.mesin.create');
    }

}
