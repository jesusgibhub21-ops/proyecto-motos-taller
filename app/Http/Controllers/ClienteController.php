<?php

namespace App\Http\Controllers;

// VINCULACIÓN 1: El modelo Cliente
// Esto conecta el controlador con la clase que creamos antes.
// Sin esta línea, el controlador no sabe qué es un "Cliente".
use App\Models\Cliente; 
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // VINCULACIÓN 2: El método index (Listar)
    // Cuando entras a /clientes, Laravel viene aquí.
    public function index()
    {
        // El Modelo va a la tabla 'clientes' y trae todo.
        $clientes = Cliente::all(); 
        
        // Esto busca un archivo en resources/views/clientes/index.blade.php
        // y le pasa la variable $clientes para que la pinte en pantalla.
        return view('clientes.index', compact('clientes')); 
    }

    // VINCULACIÓN 3: Crear (Formulario)
    // Solo muestra la vista con el formulario vacío.
    public function create()
    {
        return view('clientes.create');
    }

    // VINCULACIÓN 4: Store (Guardar)
    // Recibe los datos del formulario (Request).
    // Usa el $fillable que definiste en el Modelo para proteger la base de datos.
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index'); // Vuelve al inicio tras guardar.
    }

    // VINCULACIÓN 5: Edit y Update
    // Laravel busca automáticamente al
    // cliente en la base de datos usando el ID que viene en la URL.
    public function edit(Cliente $cliente) 
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all()); // Actualiza los campos permitidos.
        return redirect()->route('clientes.index');
    }

    // VINCULACIÓN 6: Destroy (Eliminar)
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}