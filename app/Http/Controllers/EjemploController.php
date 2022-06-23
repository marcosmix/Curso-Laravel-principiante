<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function index(){
        $presente=true;
        // $a='aprobo';

     // return view('ejemplo', compact('presente'));
        return view('ejemplo',['presente'=>$presente]);
    }
}
