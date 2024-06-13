@extends('biblioteca.master')

@section('Contenido')
<!-- 
        - #DETALLE DE LIBRO
      -->

      <section class="book-detail">

          @include('biblioteca.partials.msg')
          <div class="contenedor">
                <figure class="book-detail-banner">
                    <img src="{{ asset($book->imagenPortada) }}" alt="{{ $book->titulo }}"> <!--Portada imagen del libro-->
                </figure>

                <div class="book-detail-content">
                    <!-- <p class="detail-subtitle">{{ $book->titulo }}</p> Titulo -->
                    <h1 class="h1 detail-title">{{ $book->titulo }}</h1> <!--Titulo-->

                    <div class="meta-wrapper">
                        <div class="badge-wrapper">
                            <div class="badge badge-fill">{{ $book->autor }}</div> <!--Autor-->
                            <div class="badge badge-outline">{{ $book->codigoLibro }}</div><!--Codigo del libro-->
                        </div>

                        <div class="ganre-wrapper">
                            <a href="{{route('categorias.show', ['id' => $book->idCategoria])}}">{{ $book->genero }}</a> <!--categoria del libro-->
                        </div>

                        <div class="date-time">
                            <div>
                                <ion-icon name="calendar-outline"></ion-icon>
                                <time datetime="{{ $book->añoPublicacion }}">{{ $book->añoPublicacion }}</time> <!--Fecha de publicacion-->
                            </div>
                            <div>
                                <ion-icon name="book"></ion-icon>
                                <time datetime="PT{{ $book->numeroPaginas }}M">{{ $book->numeroPaginas }} páginas</time> <!--Numero de paginas-->
                            </div>
                        </div>
                    </div>

                    <p class="storyline">{{ $book->sinopsis }}</p> <!--Sinopsis-->

                    <div class="details-actions">
                        <button class="share">
                            <span style="font-size: 2.5em; color: gold;">{{ $book->precio }} €</span> <!--Precio del libro-->
                        </button>

                        <div class="title-wrapper">
                            <p class="title">Valoración General</p>
                            <div class="rating" style="color: gold;">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < $book->valoracion)
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>

                        <!-- <button class="btn btn-primary" style="font-size: 1em;">
                            <ion-icon name="cart" style="font-size: 1.5em;"></ion-icon>
                            <span>Añadir al carrito</span> 
                        </button> -->
                        <button>
                            <form action="{{route('add')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $book->idLibro }}">
                                <input type="submit" name="btn" class="btn btn-success w-100" value="Añadir al carrito">

                            </form>
                        </button>

                    </div>
                </div>

        </div>
        
    </section><!--AÑADIR AL CARRITO-->
    
    <!-- 
        - #LIBROS MAS POPULARES/ LISTA DE LIBROS DE ID 39 AL 45
      -->

      <section class="event">
        <div class="contenedor">

          <div class="flex-wrapper">

            <div class="title-wrapper">

              <h2 class="h2 section-title">Quizás le interese...</h2>
            </div>

          </div>

          <ul class="books-list  has-scrollbar">  <!--LISTA DE LOS CUATRO LIBROS MAS POPULARES-->

          @foreach($books as $book)
            @if($book->idLibro >= 46 && $book->idLibro <= 57) <!-- Ajustar el rango de idLibro -->
            <li> <!--LIBRO {{$book->idLibro}}-->
                <div class="book-card">

                    <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!--LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                        <figure class="card-banner">
                            <img src=" {{ asset($book->imagenPortada) }}" alt="{{ $book->titulo }}"> <!--IMAGEN PORTADA DEL LIBRO -->
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
            @endif
            @endforeach
            

          </ul>

        </div>
      </section>

@endsection
