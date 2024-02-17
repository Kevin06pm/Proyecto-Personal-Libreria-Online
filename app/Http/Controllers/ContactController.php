<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contact::all();
        return view('callcenter.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('callcenter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_documento' => 'required |regex:/^[0-9]{8}[AZ]{1}$/',
            'tipo_documento' => 'required | in:DNI,NIF',
            'nombre' => 'required |regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/',
            'apellidos' => 'required regex:/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/',
            'calle' => 'required | regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/',
            'numero_domicilio' => 'required |  regex:/[0-9]+/',
            'cod_postal' => 'required |  regex:/^(?:0?[1-9]|[1-4]\d|5[0-2])\d{3}$/'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacto = Contact::find($id);
        return view('callcenter.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::find($id);
        return view('callcenter.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'numero_documento' => 'required |regex:/^[0-9]{8}[AZ]{1}$/',
            'tipo_documento' => 'required | in:DNI,NIF',
            'nombre' => 'required |regex:/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/',
            'apellidos' => 'required regex:/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/',
            'calle' => 'required | regex:/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/',
            'numero_domicilio' => 'required |  regex:/[0-9]+/',
            'cod_postal' => 'required |  regex:/^(?:0?[1-9]|[1-4]\d|5[0-2])\d{3}$/'
        ]);

        $contact = Contact::find($id);
        $contact->update($request->all());

        return redirect()->route('callcenter.show', $contact->id)->with('EXITO!',"El contacto ha sido actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('callcenter.index')->with('EXITO!',"El contacto ha sido borrado correctamente");
    
    }
}
