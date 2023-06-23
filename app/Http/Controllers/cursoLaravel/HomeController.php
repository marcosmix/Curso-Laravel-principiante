<?php

namespace App\Http\Controllers\cursoLaravel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\cursoLaravel\FormularioController;

class HomeController extends Controller
{
     public function GetHome(){
        
        

        return view('welcome');

     }

     
}
