@extends('biblioteca.master')

@section('Contenido')

<main>
    <article style="margin-top: 40px">

      <!-- 
        - #CABEZERA DE LA PAGINA/ LIBRO ID 1
      -->

      <section class="principal">
      @include('biblioteca.partials.msg')
        <div class="contenedor">
            <div class="meta-wrapper">
              <div class="principal-content">
                <p class="principal-subtitle">Libro Mas Popular</p>
                <h1 class="h1 principal-title">
                      {{ $book->titulo }}<!--Titulo del libro-->
                </h1>
              </div>
            </div>

            <div class="meta-wrapper">
                <div class="badge-wrapper">
                    <div class="badge badge-fill" style="font-size:1.2em">{{ $book->autor }}</div> <!-- Autor del libro -->
                </div>
                <div class="ganre-wrapper">
                    <a href="{{route('categorias.show', 12) }}" style="font-size:1.2em">{{ $book->genero }}</a> <!-- Categoría del libro -->
                </div>
                <div class="date-time">
                    <div class="rating">
                        <ion-icon name="star" style="font-size:1.2em"></ion-icon>
                        <data style="font-size:1.2em">{{ $book->valoracion }}</data> <!-- Valoración del libro -->
                    </div>
                </div>
            </div>


            <div class="meta-wrapper" >
                <button>
                    <form action="{{route('add')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $book->idLibro }}">
                        <input style="font-size:1.3em" type="submit" name="btn" class="btn btn-success w-100" value="Añadir al carrito">

                    </form>
                </button>
            </div>

          </div>
        </div>
      </section>

      <!-- 
        - #LIBROS MAS POPULARES/ LISTA DE LIBROS DE ID 2 AL 11
      -->

      <section class="event">
        <div class="contenedor">

          <div class="flex-wrapper">

            <div class="title-wrapper">

              <h2 class="h2 section-title">Los Mas Populares</h2>
            </div>


          </div>

          <ul class="books-list  has-scrollbar">  <!--LISTA DE LOS CUATRO LIBROS MAS POPULARES-->

          @foreach($books as $book)
            @if($book->idLibro >= 2 && $book->idLibro <= 10) <!-- Ajustar el rango de idLibro -->
            <li> <!--LIBRO {{$book->idLibro}}-->
                <div class="book-card">

                    <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!--LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                        <figure class="card-banner">
                            <img src="{{ $book->imagenPortada }}" alt="{{ $book->titulo }}"> <!--IMAGEN PORTADA DEL LIBRO -->
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

      <!-- 
        - #LIBROS RECOMENDADOS/ LISTA DE LIBROS DE ID 10 AL ID 18
      -->

      <section class="recommended">
        <div class="contenedor">

          <h2 class="h2 section-title">Libros Recomendados <strong style="color: gold;">Para Ti</strong></h2>

          <ul class="books-list">

          @foreach($books as $book)
            @if($book->idLibro >= 11 && $book->idLibro <= 18)
            <li> <!--LIBRO {{ $book->idLibro }}-->
                <div class="book-card">
                    <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!--LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                        <figure class="card-banner">
                            <img src="{{ $book->imagenPortada }}" alt="{{ $book->titulo }}"> <!--IMAGEN PORTADA DEL LIBRO -->
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




      <!-- 
        - #LISTA DEL LIBRO ID 18 AL 25
      -->

      <section class="event">
        <div class="contenedor">

          <h2 class="h2 section-title" style="margin-bottom: 50px">Libros Recomendados <strong style="color: gold;">Por Booktokers</strong></h2>

          <ul class="books-list  has-scrollbar">

            @foreach($books as $book)
              @if($book->idLibro >= 19 && $book->idLibro <= 25)
              <li> <!-- LIBRO {{ $book->idLibro }} -->
                  <div class="book-card">
                      <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!-- LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO -->
                          <figure class="card-banner">
                              <img src="{{ $book->imagenPortada }}" alt="{{ $book->titulo }}"> <!-- IMAGEN PORTADA DEL LIBRO -->
                          </figure>
                      </a>
                      <div class="title-wrapper">
                          <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!-- LINK CUANDO LE DES CLICK AL TITULO TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO -->
                              <h3 class="card-title">{{ $book->titulo }}</h3> <!-- Titulo del libro -->
                          </a>
                          <div class="rating">
                              <ion-icon name="star"></ion-icon>
                              <time>{{ $book->valoracion }}</time> <!-- Valoracion del libro -->
                          </div>
                      </div>
                      <div class="card-meta">
                          <div class="badge badge-outline">{{ $book->autor }}</div> <!-- Autor del libro -->
                          <div class="duration">
                              <ion-icon name="cash" style="font-size: 1.5em"></ion-icon>
                              <time style="font-size: 1.5em;">{{ $book->precio }} €</time> <!-- Precio del libro -->
                          </div>
                      </div>
                  </div>
              </li>
              @endif
            @endforeach
            
          </ul>

        </div>
      </section>

      <!-- 
        - #LIBROS RECOMENDADOS/ LISTA DE LIBROS DE ID 26 AL ID 37
      -->

      <section class="recommended">
        <div class="contenedor">

          <h2 class="h2 section-title">Los Más <strong style="color: gold;">Leidos</strong></h2>

          <ul class="books-list">

          @foreach($books as $book)
            @if($book->idLibro >= 26 && $book->idLibro <= 37)
            <li> <!--LIBRO {{ $book->idLibro }}-->
                <div class="book-card">
                    <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!--LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                        <figure class="card-banner">
                            <img src="{{ $book->imagenPortada }}" alt="{{ $book->titulo }}"> <!--IMAGEN PORTADA DEL LIBRO -->
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

      <!-- 
        - #LIBROS MAS POPULARES/ LISTA DE LIBROS DE ID 38 AL 45
      -->

      <section class="event">
        <div class="contenedor">

          <div class="flex-wrapper">

            <div class="title-wrapper">

              <h2 class="h2 section-title">Viejos clásicos</h2>
            </div>

          </div>

          <ul class="books-list  has-scrollbar">  <!--LISTA DE LOS CUATRO LIBROS MAS POPULARES-->

          @foreach($books as $book)
            @if($book->idLibro >= 38 && $book->idLibro <= 45) <!-- Ajustar el rango de idLibro -->
            <li> <!--LIBRO {{$book->idLibro}}-->
                <div class="book-card">

                    <a href="{{ route('biblioteca.show', ['id' => $book->idLibro]) }}"> <!--LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                        <figure class="card-banner">
                            <img src="{{ $book->imagenPortada }}" alt="{{ $book->titulo }}"> <!--IMAGEN PORTADA DEL LIBRO -->
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


    </article>
  </main>



@endSection