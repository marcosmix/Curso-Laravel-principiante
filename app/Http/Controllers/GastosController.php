<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Gasto;
use App\Models\Perfil;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    public function index(){
        // $gastos=Gasto::all();
        // return view('Gastos.index',compact('gastos'));
        
        return view('Gastos/index', ['gastos'=>Gasto::all()]);
    }

    public function create(){
       
        $categorias=Categoria::all();
        $perfiles=Perfil::all();

        return view('Gastos.create',compact('categorias','perfiles'));
    }

    public function store(Request $request){
        $gasto=new Gasto();
        
        
        if($request->fijo=='on')
            $request->fijo = 1;
        else
            $request->fijo = 0;
        

        $gasto->create($request->all());
        
        return redirect()->back();
    }

    public function show(Gasto $gasto){
        return view('Gastos.show',compact($gasto));
    }

    public function edit(Gasto $gasto){
        return view('Gasto.edit',compact('gasto'));
    }

    public function update(Request $request, Gasto $gasto){
        $gasto->update($request->all());
        return redirect()->back();
    }

    public function destroy(Gasto $gasto){
        $gasto->delete();
        return redirect()->back();
    }
}
