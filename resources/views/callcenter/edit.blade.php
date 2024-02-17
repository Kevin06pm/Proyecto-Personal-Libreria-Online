@extends('callcenter.master')
<div class="text-center">
    <h1>Edición del contacto {{$contact->nombre}}</h1>
</div>
<div class="text-center">
<a class="btn btn-outline-warning" href="{{route('callcenter.index')}}">Menu Principal</a>
</div>
<!-- Form Contact section-->
<section class="bg-light py-5">
    <div class="container px-5 my-5 px-5">

        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">

                <form id="contactForm" action="{{route('callcenter.update',$contact->id)}}">
                    <!-- Num Doc input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="dni" type="text" placeholder="Introduzca su dni" value="{{ $contact->numero_documento ?? old('numero_documento') }} " />
                        <label for="dni">Numero de Documento</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Requerido</div>
                    </div>
                    <!-- Tipo Doc input-->
                    <div class="form-floating mb-3">
                        <!-- Radio button para DNI -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" id="dni" name="tipo_documento" value="DNI" {{ ($contact->numero_documento == 'DNI') ? 'checked' : '' }}>
                            <label class="form-check-label" for="dni">DNI</label>
                        </div>

                        <!-- Radio button para NIF -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" id="nif" name="tipo_documento" value="NIF" {{ ($contact->numero_documento == 'NIF') ? 'checked' : '' }}>
                            <label class="form-check-label" for="nif">NIF</label>
                        </div>
                    </div>


                    <!-- Nombre input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nombre" type="text" value="{{$contact->nombre ?? old('nombre')}}" />
                        <label for="nombre">Nombre</label>
                    </div>
                    <!-- Apellidos input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="apellidos" type="text"  value="{{$contact->apellidos ?? old('apellidos')}}" />
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <!-- Calle input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="calle" type="text" value="{{$contact->calle ?? old('calle')}}" />
                        <label for="calle">Calle</label>
                    </div>
                    <!-- Numero de Calle input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="num_calle" type="number"  value="{{$contact->numero_domicilio ?? old('numero_domicilio')}}" />
                        <label for="num_calle">Numero de Calle</label>
                    </div>
                    <!-- Codigo Postal input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="cod_postal" type="number"  value="{{$contact->cod_postal ?? old('cod_postal')}}" />
                        <label for="cod_postal">Codigo Postal</label>
                    </div>

                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="enviar" type="submit">Enviar</button></div>
                </form>
            </div>
        </div>
    </div>
</section>