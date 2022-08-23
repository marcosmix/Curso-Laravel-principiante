<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    protected $guarded=['id_pago'];

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function perfil(){
        return $this->belongsTo('App\Models\Perfil');
    }

    public function etiquetas(){
        return $this->belongsToMany('App\Models\Etiqueta');
    }
}