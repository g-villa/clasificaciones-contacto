<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index()
    {
        return view('contactos.index');
    }

    public function guardar(Request $request)
    {
        $contacto = $request->only(['nombre', 'telefono', 'direccion']);
        session()->push('contactos', $contacto);

        return redirect()->route('contactos.lista');
    }

    public function lista()
    {
        $contactos = session('contactos', []);
        return view('contactos.lista', compact('contactos'));
    }
}

