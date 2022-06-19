<?php

namespace App\Http\Controllers\cursoLaravel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\cursoLaravel\FormularioController;

class HomeController extends Controller
{
     public function GetHome(){
        
        $personas=FormularioController::ObtenerDatosPersonas();
        //dump($personas);
        
        $dato=array_push($personas,['Marcos',30]);

       // dump($dato);
        return view('index');
        //echo 'Hola San Juan Tec';

     }

     
}
