@extends('biblioteca.master')

@section('Contenido')

<section class="recommended" style="background-color:black; padding-top: 150px">
    <div class="contenedor">
        <h2 class="h2 section-title"> Mis
            <strong style="color: gold;">Compras</strong>
        </h2>

        <ul class="books-list">
            <!--PARA EVITAR QUE SE REPITAN LIBROS-->
            <?php 
                // Filtrar compras para evitar duplicados por idLibro
                $comprasFiltradas = $compras->unique('idLibro'); 
            ?>
            @foreach($comprasFiltradas as $compra)
            <li>
                <div class="book-card">
                    <a href="#">
                        <!--LINK CUANDO LE DES CLICK A LA IMAGEN TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                        <figure class="card-banner">
                            <img src="{{ $compra->book->imagenPortada }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="{{ $compra->book->titulo }}">
                        </figure>
                    </a>
                    <div class="title-wrapper">
                        <a href="#">
                            <!--LINK CUANDO LE DES CLICK AL TITULO TE LLEVARA A SHOW A VER LOS DETALLES DEL LIBRO-->
                            <h5 class="card-title">{{ $compra->book->titulo }}</h5>
                        </a>
                    </div>
                    <div class="card-meta">
                        <div class="badge badge-outline">{{ $compra->book->autor }}</div><!--Autor del libro-->
                        
                        <div class="card-meta">
                            <div class="badge badge-outline" style="margin-left: 40px; border: 2px solid green; color:green"> !COMPRADO¡</div><!--Autor del libro-->
                        </div>
                    </div>

                </div>
            </li>
            @endforeach
        </ul>

    </div>
</section>

@endsection
