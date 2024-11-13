<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        $trabajadores = Trabajador::all();
        return view('tareas.create', compact('trabajadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'trabajador_id' => 'required|exists:trabajadores,id',
            'fecha_limite' => 'required|date',
            'descripcion' => 'required',
        ]);

        Tarea::create($request->all());

        return redirect()->route('tareas.index');
    }

    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);
        $trabajadores = Trabajador::all();
        return view('tareas.edit', compact('tarea', 'trabajadores'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'trabajador_id' => 'required|trabajadores,id',
            'fecha_limite' => 'required|date',
            'descripcion' => 'required',
        ]);

        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->all());

        return redirect()->route('tareas.index');
    }

    public function destroy($id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();

        return redirect()->route('tareas.index');
    }
}
