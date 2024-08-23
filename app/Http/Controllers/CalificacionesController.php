<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function index()
    {
        return view('calificaciones.index');
    }

    public function calcular(Request $request)
    {
        $calificaciones = $request->input('calificaciones');
        $promedio = array_sum($calificaciones) / count($calificaciones);

        return view('calificaciones.resultado', compact('promedio'));
    }
}
