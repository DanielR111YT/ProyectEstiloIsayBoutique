<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los contactos de la base de datos
        $contactos = Contacto::all();

        // Devolver la vista 'index' y pasar los contactos como datos
        return view('contacto.index', ['contactos' => $contactos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar el formulario para crear un nuevo contacto
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255',
            'telefono' => 'required|string|max:20',
            'direccion' => 'nullable|string|max:255',
            'comentario' => 'nullable|string',
        ]);

        // Crear un nuevo contacto en la base de datos
        $contacto = new Contacto();
        $contacto->nombres = $request->nombres;
        $contacto->apellidos = $request->apellidos;
        $contacto->correo_electronico = $request->correo;
        $contacto->telefono = $request->telefono;
        $contacto->direccion = $request->direccion;
        $contacto->comentario = $request->comentario;
        $contacto->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('mensaje', '¡Contacto guardado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        // Mostrar los detalles de un contacto específico
        return view('contacto.show', ['contacto' => $contacto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
