@extends('biblioteca.master')

@section('Contenido')

<section class="upcoming">
    
    <div class="contenedor">

        <div class="flex-wrapper">
            <div class="title-wrapper">
                <h2 class="h2 section-title">Carrito de Compras</h2>
            </div>
        </div>
    
        <ul class="movies-list has-scrollbar">
            @if(Cart::count())     
                @foreach(Cart::content() as $libro)
                    <li> 
                        <div class="movie-card">
                            <a href="#  "> <!-- Ajustar el enlace según sea necesario -->
                                <figure class="card-banner">
                                    <img src="{{ asset($libro->options->imagenPortada) }}" alt="{{ $libro->name }}"> <!-- IMAGEN PORTADA DEL LIBRO -->
                                </figure>
                            </a>
                            <div class="title-wrapper">
                                <h3 class="card-title">{{ $libro->name }}</h3>
                                <div class="rating">
                                    <time>{{ $libro->qty }}</time>
                                </div>
                            </div>
                            <div class="card-meta">
                                <div class="badge badge-outline">{{ $libro->options->autor }}</div> <!-- AUTOR DEL LIBRO -->
                                <div class="duration">
                                    <ion-icon name="cash" style="font-size: 1.5em"></ion-icon>
                                    <time style="font-size: 1.5em;">{{ $libro->price }} €</time> <!-- PRECIO DEL LIBRO -->
                                </div>
                            </div>

                            <div class="card-meta">
                                <form action="{{route('removeitem')}}" method="post"> <!--Eliminar libro de carrito-->
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$libro->rowId}}">
                                    <input type="submit" name="btn" class="btn btn-danger btn-success" value="X">
                                </form>

                                <form action="{{route('increaseQuantity')}}" method="post"> <!--aumentar libro de carrito-->
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$libro->rowId}}">
                                    <input type="submit" name="btn" class="btn btn-danger btn-success" value="+">
                                </form>

                                <form action="{{route('decreaseQuantity')}}" method="post"> <!--disminuir libro de carrito-->
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$libro->rowId}}">
                                    <input type="submit" name="btn" class="btn btn-danger btn-success" value="-">
                                </form>


                            </div>
                        </div>
                    </li>

                    
                @endforeach

                
                
            @else
            <div class="summary-container" style="margin-top: 30px; padding: 20px; background-color: #f8f9fa; border-radius: 10px; ">
                <p class="text-central">El carrito esta vacio</p>
            </div>

            @endif
        </ul>
        @include('biblioteca.partials.msg')
        <a href="{{route('clear')}}" class="text-center">Vaciar carrito</a>
        <!-- Contenedor para mostrar subtotal, impuestos y total -->
        <div class="summary-container" style="margin-top: 50px; padding: 20px; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h3 class="h3 section-title">Resumen del Carrito</h3>
            <p class="summary-item">Subtotal: <span>{{ Cart::subtotal() }} €</span></p>
            <p class="summary-item">Impuestos: <span>{{ Cart::tax() }} €</span></p>
            <p class="summary-item">Total: <span>{{ Cart::total() }} €</span></p>
        </div>

    </div>
</section>

@endsection
