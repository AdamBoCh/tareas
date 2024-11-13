<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajador::all();
        return view('trabajadores.index', compact('trabajadores'));
    }

    public function create()
    {
        return view('trabajadores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:trabajadores',
        ]);

        Trabajador::create($request->all());

        return redirect()->route('trabajadores.index');
    }

    public function show($id)
    {
        $trabajador = Trabajador::findOrFail($id);
        return view('trabajadores.show', compact('trabajador'));
    }
}
