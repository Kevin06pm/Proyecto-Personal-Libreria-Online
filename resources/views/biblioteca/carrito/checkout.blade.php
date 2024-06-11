@extends('biblioteca.master')

@section('Contenido')

<style>

    /*ESTILO DEL RESUMEN DEL CARRITO*/

     .payment-container {
        margin-top: 20px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px; /* Ancho máximo ajustado */
        margin-left: auto;
        margin-right: auto;
    }

    .payment-title {
        font-size: 1.5em;
        color: #333;
        margin-bottom: 15px;
        padding: 10px;
        background-color: #f0ad4e; /* Color de fondo separado */
        border-radius: 8px;
        text-align: center;
    }

    .payment-details {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .payment-item {
        padding: 10px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .payment-label {
        font-weight: bold;
        color: #555;
    }

    .payment-value {
        color: #333;
    }

    .payment-total {
        margin-top: 15px;
        font-size: 1.2em;
        font-weight: bold;
        text-align: center;
    }

    .payment-total span {
        color: #ff6347;
    }

    /* Estilos CSS para el botón de pagar */
    .pay-button {
        text-align: center;
        margin-top: 20px;
    }

    .pay-button button {
        padding: 10px 20px;
        background-color: #5cb85c; /* Color de fondo del botón de pagar */
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .pay-button button:hover {
        background-color: #4cae4c; /* Color de fondo del botón de pagar al pasar el mouse */
    }
    
</style>

<section class="upcoming">
    
    <div class="contenedor">

        <div class="flex-wrapper" style="padding-top: 2%">
        <div class="title-wrapper">
            <h2 class="h2 section-title">Carrito de Compras</h2>
        </div>
        <div class="card-meta" style="display: flex; justify-content: center; align-items: center;">
            <a href="{{route('clear')}}" class="btn btn-info text-center" style="border-color:white; border-width:4px; padding: 5px 25px; width: 100%; height: auto; font-size: 1.2em;">
                <i id="trash-icon" class="fas fa-trash-alt" style="font-size: 1.5em;"></i>
            </a> <!--VACIAR EL CARRITO-->
        </div>
    </div>

    <!-- Mensaje emergente -->
    <div id="mensaje" style="position: absolute; background-color: black; color: gold; padding: 5px; display: none; border: 2px solid gold;">
        Vaciar el carrito
    </div>
    
    
    <ul class="movies-list has-scrollbar" style="border-radius: 1em; border: 10px solid gold; padding: 2% 2% 2% 2%;">
            @if(Cart::count())     
                @foreach(Cart::content() as $libro)
                   
                    <li> 
                        <div class="movie-card">
                            <a href="{{ route('biblioteca.show', ['id' => $libro->name]) }}"> <!-- Ajustar el enlace según sea necesario -->
                                <figure class="card-banner">
                                    <img src="{{ asset($libro->options->imagenPortada) }}" alt="{{ $libro->name }}"> <!-- IMAGEN PORTADA DEL LIBRO -->
                                </figure>
                            </a>

                            
                            <div class="title-wrapper" style="margin-bottom:0px">
                                <h3 class="card-title" style="font-size:1.2em">{{ $libro->name }}</h3> <!--TITULO DEL LIBRO-->
                            </div>

                            <div class="card-meta" style="padding-bottom: 6%;">
                                <div class="badge badge-outline" style="font-size:0.9em">{{ $libro->options->autor }}</div> <!-- AUTOR DEL LIBRO -->
                            </div>

                            <div class="card-meta">
                            
                                <form action="{{route('increaseQuantity')}}" method="post"> <!--aumentar libro de carrito-->
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$libro->rowId}}">
                                    <input type="submit" name="btn" class="btn btn-success btn-success" style="font-size: 1.18em; border-color:darkgreen; border-radius:10%; padding: 5px 27px; padding-top: 0px; padding-bottom:5%;  " 
                                    value="+">
                                </form>

                                <div class="rating">
                                    <time style="font-size: 1.4em; color:gold">{{ $libro->qty }}</time>
                                </div>

                                <form action="{{route('decreaseQuantity')}}" method="post"> <!--disminuir libro de carrito-->
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$libro->rowId}}">
                                    <input type="submit" name="btn" class="btn btn-success btn-success" style="font-size: 1.2em;border-color:darkgreen; border-radius:10%; padding: 5px 27px; padding-top:0%; padding-bottom:5%;  " 
                                    value="-">
                                </form>
                                
                                <div class="duration">
                                    <ion-icon name="cash" style="font-size: 1.5em"></ion-icon>
                                    <time style="font-size: 1.5em;">{{ $libro->price }} €</time> <!-- PRECIO DEL LIBRO -->
                                </div>

                            </div>
                            @include('biblioteca.partials.delete')

                            <form action="{{route('removeitem')}}" method="post" style="display: flex; padding-top: 10%; justify-content: center; align-items: center;"> <!--Eliminar libro de carrito-->
                                @csrf
                                <input type="hidden" name="rowId" value="{{$libro->rowId}}">
                                <input type="submit" name="btn" class="btn btn-danger" style="padding: 5px 2px 5px 15px; width: 50%; height: auto; font-size: 1.2em;"
                                value="ELIMINAR">
                            </form>
                        </div>
                    </li>

                @endforeach

                
                
            @else
            <div class="summary-container" style="margin-left: 15%; background-color: #f8f9fa; border-radius: 10px; text-align: center;">
                <img src="{{ asset('assets/images/carrito_vacio2.png') }}" alt="carrito_vacio">
            </div>

            @endif
        </ul>

        
        <!-- RESUMEN DEL CARRITO -->
        <div class="payment-container">
            <h3 class="payment-title">Resumen del Carrito</h3>
            <div class="payment-details">
                <div class="payment-item">
                    <span class="payment-label">Subtotal:</span>
                    <span class="payment-value">{{ Cart::subtotal() }} €</span>
                </div>
                <div class="payment-item">
                    <span class="payment-label">Impuestos:</span>
                    <span class="payment-value">{{ Cart::tax() }} €</span>
                </div>
                <div class="payment-item">
                    <span class="payment-label">Total:</span>
                    <span class="payment-value">{{ Cart::total() }} €</span>
                </div>
            </div>

            <div class="pay-button" style="text-align: center;"> <!--bOTON DE PAGAR-->
                <button style="width: 200px;">Pagar</button>
            </div>

        </div>

        

    </div>
</section>

@endsection
