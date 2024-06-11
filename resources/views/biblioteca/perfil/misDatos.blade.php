@extends('biblioteca.master')

@section('Contenido')
<div class="container" style="padding-top: 10%; padding-bottom: 10%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mis Datos</div>

                <div class="card-body">
                    <h4>Datos personales y de contacto</h4>
                    <br>
                    <p><strong>Nombre y Apellidos:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }} </p>
                    <p><strong>Libros que lees al año:</strong> 1 libro/año</p>
                    <br>
                    <button class="btn btn-primary">Editar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
