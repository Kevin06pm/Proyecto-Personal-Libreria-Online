@extends('callcenter.common.layout')

<div class="container">
    <div class="text-center">
        <h1>LISTA DE CONTACTOS</h1>
    </div>
    <table class="table mx-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$contacto->nombre}}</td>
                <td>{{$contacto->apellidos}}</td>
            </tr>
        </tbody>
    </table>
</div>
