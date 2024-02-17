@extends('callcenter.master')

<div class="container">
    <div class="text-center">
        <h1>LISTA DE CONTACTOS</h1>
    </div>
    <table class="table mx-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Numero Documento</th>
                <th scope="col">Tipo Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Calle</th>
                <th scope="col">Numero Domicilio</th>
                <th scope="col">Codigo Postal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$contacto->id}}</td>
                <td>{{$contacto->numero_documento}}</td>
                <td>{{$contacto->tipo_documento}}</td>
                <td>{{$contacto->nombre}}</td>
                <td>{{$contacto->apellidos}}</td>
                <td>{{$contacto->calle}}</td>
                <td>{{$contacto->numero_domicilio}}</td>
                <td>{{$contacto->cod_postal}}</td>
                <td><a type="button" class="btn btn-outline-primary" href="../callcenter">REGRESAR</a></td>
            </tr>
        </tbody>
    </table>
</div>