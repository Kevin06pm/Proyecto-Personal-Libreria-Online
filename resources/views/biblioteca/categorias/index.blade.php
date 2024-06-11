@extends('biblioteca.master')
@section('enlace')
<link rel="stylesheet" href="{{ asset('assets/css/categoriasEstilo.css') }}">

@endsection
@section('Contenido')
    <!-- 
        - #CATEGORIAS
      -->
      
    <br><br><br><br><br>
    <!--Contenedor general-> Contenedor_categorias y caja_registro-->
    <section >
        <div class="caja">
            <!--Contenedor de categorias-->
            <div class="contenedor_categorias" >
                <!--Categoria fantasia, con imagen de fondo-->
                <a href="{{route('categorias.show', 1) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/fantasia.jpg') }}'); cursor: pointer;">
                        <div class="textos">
                            <h3>FANTASÍA</h3>
                        </div>
                    </div>
                </a>

                <!--Categoria misterio, con imagen de fondo-->
                <a href="{{route('categorias.show', 2) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/misterio.jpg') }}')">
                        <div class="textos">
                            <h3>MISTERIO</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumerge tu mente en narrativas llenas de suspense y giros inesperados, donde el desconcierto y la intriga te mantendrán cautivo hasta el último suspiro                
                        </div> -->
                    </div>
                </a>
                
                <!--Categoria aventura, con imagen de fondo-->
                <a href="{{route('categorias.show', 3) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/aventura.jpg!s1') }}')">
                        <div class="textos">
                            <h3>AVENTURA</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en relatos históricos que te transportarán a civilizaciones perdidas, eventos trascendentales y momentos que dieron forma al curso de la humanidad
                        </div> -->
                    </div>
                </a>
                
                <!--Categoria romance, con imagen de fondo-->
                <a href="{{route('categorias.show', 4) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/romance.webp') }}')">
                        <div class="textos">
                            <h3>ROMANCE</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en las cautivadoras travesias romanticas y dejate llevar por la magia de los encuentros apasionados y los destinos entrelazados.
                        </div> -->
                    </div>
                </a>

                <!--Categoria terror, con imagen de fondo-->
                <a href="{{route('categorias.show', 5) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/terror.png') }}')">
                        <div class="textos">
                            <h3>TERROR</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumerge tu alma en relatos aterradores,donde lo desconocido despertara temores profundos y las pesadillas tomaran forma en palabras que te erizaran la piel.
                        </div> -->
                    </div>
                </a>

                <!--Categoria drama, con imagen de fondo-->
                <a href="{{route('categorias.show', 6) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/drama.jpg') }}')">
                        <div class="textos">
                            <h3>DRAMA</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en narrativas emotivas que capturan la esencia de la existencia, revelando la belleza, la superación y la autenticidad en cada página.                
                        </div> -->
                    </div>
                </a>
                
                <!--Categoria humor, con imagen de fondo-->
                <a href="{{route('categorias.show', 7) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/humor.jpg') }}')">
                        <div class="textos">
                            <h3>HUMOR</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en relatos históricos que te transportarán a civilizaciones perdidas, eventos trascendentales y momentos que dieron forma al curso de la humanidad
                        </div> -->
                    </div>
                </a>

                <!--Categoria biografia, con imagen de fondo-->
                <a href="{{route('categorias.show', 8) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/biografia.jpg') }}')">
                        <div class="textos">
                            <h3>BIOGRAFÍA</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en relatos históricos que te transportarán a civilizaciones perdidas, eventos trascendentales y momentos que dieron forma al curso de la humanidad
                        </div> -->
                    </div>
                </a>
                

                <!--Categoria literatura juvenil, con imagen de fondo-->
                <a href="{{route('categorias.show', 9) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/literatura_juvenil.jpg') }}')">
                        <div class="textos">
                            <h3>LITERATURA JUVENIL</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en relatos históricos que te transportarán a civilizaciones perdidas, eventos trascendentales y momentos que dieron forma al curso de la humanidad
                        </div> -->
                    </div>
                </a>

                <!--Categoria novela psicologica, con imagen de fondo-->
                <a href="{{route('categorias.show', 10) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/psicologia.jpg') }}')">
                        <div class="textos">
                            <h3>NOVELA PSICOLOGICA</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en relatos históricos que te transportarán a civilizaciones perdidas, eventos trascendentales y momentos que dieron forma al curso de la humanidad
                        </div> -->
                    </div>
                </a>

                <!--Categoria literatura clasica, con imagen de fondo-->
                <a href="{{route('categorias.show', 11) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/literatura_clasica.jpg') }}')">
                        <div class="textos">
                            <h3>LITERATURA CLÁSICA</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en relatos históricos que te transportarán a civilizaciones perdidas, eventos trascendentales y momentos que dieron forma al curso de la humanidad
                        </div> -->
                    </div>
                </a>

                <!--Categoria viajes en el tiempo, con imagen de fondo-->
                <a href="{{route('categorias.show', 12) }}" style="text-decoration: none;">
                    <div class="categorias" style="background-image: url('{{ asset('assets/images/categoria/viajes_tiempo.avif') }}')">
                        <div class="textos">
                            <h3>VIAJES EN EL TIEMPO</h3>
                        </div>
                        <!-- <div class="descripcion_categorias">
                            Sumérgete en relatos históricos que te transportarán a civilizaciones perdidas, eventos trascendentales y momentos que dieron forma al curso de la humanidad
                        </div> -->
                    </div>
                </a>

            </div>
	    </div>

    </section>
    <br><br><br><br><br>

@endsection
