@extends('biblioteca.master')

@section('Contenido')

<main>
    <article>

      <!-- 
        - #CABEZERA DE LA PAGINA/ LIBRO ID 1
      -->

      <section class="principal">
        <div class="contenedor">

          <div class="principal-content">

            <!-- <p class="principal-subtitle">Libro Mas Popular</p> -->

            <h1 class="h1 principal-title">
              <strong>  </strong> {{ $book->titulo }}<!--Titulo del libro-->
            </h1>

            <div class="meta-wrapper">
                <div class="badge-wrapper">
                    <div class="badge badge-fill">{{ $book->autor }}</div> <!-- Autor del libro -->
                </div>
                <div class="ganre-wrapper">
                    <a href="#">{{ $book->genero }}</a> <!-- Categoría del libro -->
                </div>
                <div class="date-time">
                    <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <data>{{ $book->valoracion }}</data> <!-- Valoración del libro -->
                    </div>
                </div>
            </div>

            <div class="meta-wrapper">

              <button class="btn btn-primary">
                <ion-icon name="cart"></ion-icon>
  
                <span>Añadir al carrito</span> <!--AÑADIR AL CARRITO-->
    
              </button>

              <button class="btn btn-primary">
                <ion-icon name="information-circle" ></ion-icon>
      
              </button>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #LIBROS MAS POPULARES/ LISTA DE LIBROS DE ID 2 AL 5
      -->

      <section class="upcoming">
        <div class="contenedor">

          <div class="flex-wrapper">

            <div class="title-wrapper">

              <h2 class="h2 section-title">Los Mas Populares</h2>
            </div>

            <ul class="filter-list">

              <li>
                <button class="filter-btn">Libros</button>
              </li>

            </ul>

          </div>

          <ul class="movies-list  has-scrollbar">  <!--LISTA DE LOS CUATRO LIBROS MAS POPULARES-->

          @foreach($books as $book)
            @if($book->idLibro >= 2 && $book->idLibro <= 7) <!-- Ajustar el rango de idLibro -->
            <li> <!--LIBRO {{$book->idLibro}}-->
                <div class="movie-card">

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
        - #LIBROS RECOMENDADOS/ LISTA DE LIBROS DE ID 6 AL ID 13
      -->

      <section class="top-rated">
        <div class="contenedor">

          <h2 class="h2 section-title">Libros Recomendados <strong style="color: gold;">Para Ti</strong></h2>

          <ul class="movies-list">

          @foreach($books as $book)
            @if($book->idLibro >= 6 && $book->idLibro <= 13)
            <li> <!--LIBRO {{ $book->idLibro }}-->
                <div class="movie-card">
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
        - #LISTA DEL LIBRO ID 14 AL 17 
      -->

      <section class="tv-series">
        <div class="contenedor">

          <p class="section-subtitle">Libros</p>

          <h2 class="h2 section-title">Recomendados por Booktokers</h2>

          <ul class="movies-list">

          @foreach($books as $book)
            @if($book->idLibro >= 14 && $book->idLibro <= 17)
            <li> <!-- LIBRO {{ $book->idLibro }} -->
                <div class="movie-card">
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
        - #CTA
      -->

      <section class="cta">
        <div class="contenedor">

          <div class="title-wrapper">
            <h2 class="cta-title">Trial start first 30 days.</h2>

            <p class="cta-text">
              Enter your email to create or restart your membership.
            </p>
          </div>

          <form action="" class="cta-form">
            <input type="email" name="email" required placeholder="Enter your email" class="email-field">

            <button type="submit" class="cta-form-btn">Get started</button>
          </form>

        </div>
      </section>

    </article>
  </main>



@endSection