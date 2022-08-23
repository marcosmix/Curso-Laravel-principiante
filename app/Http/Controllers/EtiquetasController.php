<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetasController extends Controller
{
    public function index(){
        $etiquetas=Etiqueta::all();
        return view('etiquetas.index',compact('etiquetas'));
    }

    public function create(){
        return view('etiquetas/create');
    }

    public function store(Request $request){
        $etiqueta = new Etiqueta();
        $etiqueta->create($request->all());
        
        return redirect()->back();
    }

    public function show(Etiqueta $etiqueta){
    }

    public function edit(Etiqueta $etiqueta){
        return view('etiquetas.edit',compact('etiqueta'));
    }

    public function update(Request $request, Etiqueta $etiqueta){
        $etiqueta->update($request->all());

        return redirect()->back();
    }

    public function destroy(Etiqueta $etiqueta){
        $etiqueta->delete();
        return redirect()->back();
    }
}
