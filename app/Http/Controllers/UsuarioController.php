<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use App\Models\Ingreso;

class UsuarioController extends Controller
{
   
    public function index(){
        $perfiles=Perfil::all();

        return view( 'perfiles.index' , compact('perfiles'));
    }


    public function create(){
        return view('perfiles.create');
    }

    public function store(Request $request){
        $nuevo_perfil=new Perfil;
        $nuevo_perfil->create($request->all());
        return redirect(route('perfiles.index'));
    }

    public function show(Perfil $perfil){
        
    }

    
    public function edit($perfil_id){
        $perfil = Perfil::find($perfil_id);
        return view('perfiles.edit',compact('perfil'));
    }

    public function update(Request $request,$perfil_id){
        $perfil = Perfil::find($perfil_id);
        $perfil->update($request->all());
        return redirect(route('perfiles.index'));
    }

   
    public function destroy($perfil_id){
        $perfil=Perfil::find($perfil_id);
        $perfil->delete();
        return redirect(route('perfiles.index'));
    }
}
