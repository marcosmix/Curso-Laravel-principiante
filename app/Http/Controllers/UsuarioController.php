<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use App\Models\Ingreso;

class UsuarioController extends Controller
{
   
    public function index(){
        $listado_usuarios=Perfil::all();

        return view( 'perfiles.index' , compact('listado_usuarios'));
    }


    public function create(){
    
    }

    public function store(Request $request){

    }

    public function show(Perfil $perfil){
        //
    }

    
    public function edit(Perfil $perfil){
        //
    }

    public function update(Request $request, Perfil $perfil)
    {
        //
    }

   
    public function destroy(Perfil $perfil)
    {
        //
    }
}
