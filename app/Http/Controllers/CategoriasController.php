<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    
    public function index()
    {
        $categorias=Categoria::all();
        return view('categorias.index',compact('categorias'));
    }

    
    public function create(){
        return view('categorias.create');
    }

    
    public function store(Request $request){
        
        if($request->nombre!=""){
        $categoria=new Categoria();
        $categoria->create($request->all());
        return redirect(route('categorias.index'))->with('status','todo ok');   
        }else{
            return back();
        }
        
    }

   
    public function show(Categoria $categoria)
    {
        //
    }

   
    public function edit(Categoria $categoria)
    {   
        return view('categorias.edit',compact('categoria'));
    }

    
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect(route('categorias.index'));   
    }

   
    public function destroy(Categoria $categoria){
        $categoria->delete();
        return redirect()->back();
    }
}
