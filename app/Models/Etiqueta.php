<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    protected $fillable=['nombre'];

    public function gastos(){
        return $this->belongsToMany('App\Models\Gasto');
    }
}