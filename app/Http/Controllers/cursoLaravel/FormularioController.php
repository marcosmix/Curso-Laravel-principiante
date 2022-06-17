<?php

namespace App\Http\Controllers\cursoLaravel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    static public function ObtenerDatosPersonas()
    {
        return [['Juan', 25], ['Pedro', 30], ['Maria', 35]];
    }
}
