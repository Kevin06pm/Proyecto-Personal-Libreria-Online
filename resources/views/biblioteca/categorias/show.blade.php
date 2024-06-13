@extends('biblioteca.master')

@section('Contenido')


    <section class="recommended" style="margin-top: 100px" >
        <div class="contenedor" >
            <h2 class="h2 section-title"> CATEGORIA
                <strong style="color: gold;">
                  
                    LIBROS
                </strong>
            </h2>
        
            <ul class="books-list"> <!--EMPEQUEÑEZE LA IMAGEN-->
                @foreach($categorias->books as $book) <!--FUNCION PARA QUE APAREZCAN LOS LIBROS DE LA CATEGORIA A LA CUAL SE DIO CLICK EN INDEX-->
                    <li> 
                        <div class="book-card">
                            <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!--LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                                <figure class="card-banner">
                                    <img src="{{ asset($book->imagenPortada) }}" alt="{{ $book->titulo }}"> <!--IMAGEN PORTADA DEL LIBRO -->
                                </figure>
                            </a>
                            <div class="title-wrapper">
                                <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!--LINK CUANDO LE DES CLICK AL TITULO TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                                    <h3 class="card-title">{{ $book->titulo }}</h3> <!--Titulo del libro-->
                                </a>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <time>{{ $book->valoracion }}</time> <!--Valoracion del libro-->
                                </div>
                            </div>
                            <div class="card-meta">
                                <div class="badge badge-outline">{{ $book->autor }}</div> <!--Autor del libro-->
                                <div class="duration">
                                    <ion-icon name="cash" style="font-size: 1.5em"></ion-icon>
                                    <time style="font-size: 1.5em;">{{ $book->precio }} €</time> <!--Precio del libro-->
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </section>
    
@endsection