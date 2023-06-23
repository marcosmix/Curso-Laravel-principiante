<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Gasto;
use App\Models\Item;
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
        $etiquetas=Etiqueta::all();

        return view('Gastos.create',compact('categorias','perfiles','etiquetas'));
    }

    public function store(Request $request){

        $gasto=new Gasto();

        $gasto->created([
            'detalle'=>$request->detalle,
            'importe'=>$request->importe,
            'fecha'=>$request->fecha,
            'fijo'=>isset($request->fijo)?true:false,
            'id_categoria'=>$request->id_categoria,
            'id_perfil'=>$request->id_perfil,
        ]);
        
       
       $gasto_id=Gasto::latest('id')->first()->id;
      
       foreach($request->nombre_item as $key=>$item){
            if(isset($item)){
              
                $item=new Item;
                $item->create([   'nombre' => $item,
                                 'importe' => $request->importe_item[$key],
                                'id_gasto' => $gasto_id] );
                $item=null;
            }
        }
        // dd($request->etiquetas);
        $gasto->etiquetas()->attach([1,2,3]);
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
