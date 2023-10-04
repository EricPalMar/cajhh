<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'serial' => 'required|string|max:1000',
            'modelo' => 'required|string|max:250',
            'marca' => 'required|string|max:250',
            'valor' => 'required|numeric',
            'fechaAdquisicion' => 'required|date',
            'fechaSalida' => 'nullable|date',
        ]);
    
        Inventario::create($request->all());
    
        return redirect()->route('inventario.index')
            ->with('success', 'Activo de inventario agregado correctamente.');
    }
    public function create()
{
    return view('inventario.create');
}
    
}
