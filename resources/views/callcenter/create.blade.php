@extends('callcenter.master')

<!-- Form Contact section-->
<section class="bg-light py-5">
    <div class="container px-5 my-5 px-5">

        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">

                <form id="contactForm" action="{{route('callcenter.store')}}">
                    <!-- Num Doc input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="dni" type="text" placeholder="Introduzca su dni" data-sb-validations="required" />
                        <label for="dni">Numero de Documento</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Requerido</div>
                    </div>
                    <!-- Tipo Doc input-->
                    <div class="form-floating mb-3">
                        <!-- Checkbox para DNI -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" id="dni" name="tipo_documento" value="DNI">
                            <label class="form-check-label" for="dni">DNI</label>
                        </div>

                        <!-- Radio button para NIF -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" id="nif" name="tipo_documento" value="NIF">
                            <label class="form-check-label" for="nif">NIF</label>
                        </div>

                    </div>
                    <!-- Nombre input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nombre" type="text"  data-sb-validations="required" />
                        <label for="nombre">Nombre</label>
                    </div>
                    <!-- Apellidos input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="apellidos" type="text"  data-sb-validations="required" />
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <!-- Calle input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="calle" type="text"  data-sb-validations="required" />
                        <label for="calle">Calle</label>
                    </div>
                    <!-- Numero de Calle input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="num_calle" type="number"  data-sb-validations="required" />
                        <label for="num_calle">Numero de Calle</label>
                    </div>
                    <!-- Codigo Postal input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="cod_postal" type="number"  data-sb-validations="required" />
                        <label for="cod_postal">Codigo Postal</label>
                    </div>
 
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="enviar" type="submit">Enviar</button></div>
                </form>
            </div>
        </div>
    </div>
</section>