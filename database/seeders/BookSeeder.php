<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([ //ID 1
            'titulo' => 'Más Allá de los Recuerdos: Un Viaje de Conocimiento y Soledad',
            'autor' => 'Lara Lionheart Rotfuss',
            'genero' => 'Viajes en el tiempo',
            'añoPublicacion' => 2023,
            'numeroPaginas' => 2368,
            'sinopsis' => 'En esta obra introspectiva, un protagonista anónimo se embarca en un viaje interior para descubrir el verdadero significado de la vida y la soledad. A través de encuentros fortuitos y reflexiones personales, el protagonista se sumerge en un mundo de conocimiento y autodescubrimiento.',
            'imagenPortada' => 'ruta_de_la_imagen_1.jpg',
            'codigoLibro' => 'MR001',
            'valoracion' => 4.7,
            'precio' => 25.99,
            'idCategoria' => 12
        ]);

        Book::create([ //ID 2
            'titulo' => 'Indigno De Ser Humano',
            'autor' => 'Osamu Dazai',
            'genero' => 'Novela psicológica',
            'añoPublicacion' => 1948,
            'numeroPaginas' => 176,
            'sinopsis' => 'Esta novela autobiográfica sigue la vida del autor, reflejando sus luchas con la depresión y su búsqueda de significado en un mundo que considera indigno de vivir. Dazai explora temas de alienación, desesperación y redención en esta obra introspectiva.',
            'imagenPortada' => './assets/images/2.jpg',
            'codigoLibro' => 'ID001',
            'valoracion' => 4.6,
            'precio' => 18.99,
            'idCategoria' => 10
        ]);

        Book::create([ //ID 3
            'titulo' => 'El Estrecho Sendero Entre Deseos',
            'autor' => 'Patrick Rothfuss',
            'genero' => 'Fantasía',
            'añoPublicacion' => 2023,
            'numeroPaginas' => 624,
            'sinopsis' => 'En esta cautivadora novela, Rothfuss examina la complejidad de los deseos humanos y las relaciones interpersonales en la sociedad japonesa moderna. A través de personajes vívidamente retratados, el autor profundiza en las pasiones humanas y los conflictos internos.',
            'imagenPortada' => './assets/images/3.jpg',
            'codigoLibro' => 'ES001',
            'valoracion' => 4.8,
            'precio' => 22.99,
            'idCategoria' => 1
        ]);

        Book::create([ //ID 4
            'titulo' => 'El Visitante',
            'autor' => 'Stephen King',
            'genero' => 'Terror',
            'añoPublicacion' => 2018,
            'numeroPaginas' => 496,
            'sinopsis' => 'En esta novela de suspense sobrenatural, un extraño llega a un pequeño pueblo de Maine y desencadena una serie de eventos inexplicables y aterradores. Con su característica maestría del suspense, King teje una trama inquietante que mantiene a los lectores al borde de sus asientos.',
            'imagenPortada' => './assets/images/4.webp',
            'codigoLibro' => 'EV001',
            'valoracion' => 4.9,
            'precio' => 20.99,
            'idCategoria' => 5
        ]);

        Book::create([ //ID 5
            'titulo' => 'The Beginning After The End: Retribution, Book 10',
            'autor' => 'TurtleMe',
            'genero' => 'Fantasía',
            'añoPublicacion' => 2024,
            'numeroPaginas' => 500,
            'sinopsis' => 'No quería que me adoraran como a una deidad, un reemplazo instantáneo de los asuras que seguían intentando matar a estas personas a pesar de haber sido considerados dioses durante tanto tiempo.
            
            “No soy tu salvador”.
            
            Arthur Leywin finalmente ha regresado al continente de Dicathen, pero su hogar todavía está firmemente en manos del enemigo. Su demostración de poder sin precedentes trae esperanza a sus aliados y miedo a sus enemigos, pero también lo enreda más profundamente en un conflicto entre los asuras divinos, con Agrona Vritra de un lado y Kezess Indrath del otro. Con los crímenes de su vida pasada persiguiéndolo en la forma del Legado, Arthur ya no puede permitirse el lujo de perfeccionar sólo su propia fuerza, sino que también debe empoderar a sus seres más cercanos o arriesgarse a perderlos a todos.',
            'imagenPortada' => './assets/images/5.jpeg',
            'codigoLibro' => 'TB001',
            'valoracion' => 4.8,
            'precio' => 24.99,
            'idCategoria' => 1
        ]);

        Book::create([ //ID 6
            'titulo' => 'Harry Potter y la piedra filosofal',
            'autor' => 'J.K. Rowling',
            'genero' => 'Fantasía',
            'añoPublicacion' => 1997,
            'numeroPaginas' => 256,
            'sinopsis' => 'El primer libro de la famosa serie de Harry Potter sigue al joven mago mientras descubre su verdadera identidad y se adentra en el mundo mágico de Hogwarts. Una historia de aventuras, amistad y el eterno conflicto entre el bien y el mal.',
            'imagenPortada' => './assets/images/6.avif',
            'codigoLibro' => 'HP001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 1
        ]);

        Book::create([ //ID 7
            'titulo' => 'El Señor de los Anillos: La Comunidad del Anillo',
            'autor' => 'J.R.R. Tolkien',
            'genero' => 'Fantasía',
            'añoPublicacion' => 1954,
            'numeroPaginas' => 432,
            'sinopsis' => 'Frodo Bolsón emprende un viaje para destruir el Anillo Único y evitar que caiga en manos del Señor Oscuro Sauron. Acompañado por un variado grupo de compañeros, se enfrenta a peligros inimaginables en su búsqueda para salvar a la Tierra Media.',
            'imagenPortada' => './assets/images/7.jpg',
            'codigoLibro' => 'LOTR001',
            'valoracion' => 4.8,
            'precio' => 25.99,
            'idCategoria' => 1
        ]);

        Book::create([ //ID 8
            'titulo' => 'El código Da Vinci',
            'autor' => 'Dan Brown',
            'genero' => 'Misterio',
            'añoPublicacion' => 2003,
            'numeroPaginas' => 592,
            'sinopsis' => 'El profesor de simbología Robert Langdon se ve envuelto en una intrincada trama de conspiración y secretos religiosos cuando es llamado para resolver el misterio del asesinato de un curador en el Louvre. Una emocionante aventura que desentraña los misterios del pasado.',
            'imagenPortada' => './assets/images/8.jpg',
            'codigoLibro' => 'DC001',
            'valoracion' => 4.7,
            'precio' => 22.99,
            'idCategoria' => 2
        ]);

        Book::create([ //ID 9
            'titulo' => 'Juego de tronos',
            'autor' => 'George R.R. Martin',
            'genero' => 'Fantasía',
            'añoPublicacion' => 1996,
            'numeroPaginas' => 694,
            'sinopsis' => 'En el continente de Poniente, las casas nobles luchan por el control del Trono de Hierro. Intrigas políticas, traiciones y batallas épicas se entrelazan en esta saga que ha inspirado una exitosa serie de televisión. Nadie está a salvo en el juego de tronos.',
            'imagenPortada' => './assets/images/9.jpg',
            'codigoLibro' => 'GOT001',
            'valoracion' => 4.9,
            'precio' => 29.99,
            'idCategoria' => 1
        ]);

        Book::create([ //ID 10
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'genero' => 'Fantasía',
            'añoPublicacion' => 1967,
            'numeroPaginas' => 432,
            'sinopsis' => 'Cien años de soledad narra la historia de la familia Buendía a lo largo de varias generaciones en el pueblo ficticio de Macondo. El realismo mágico se mezcla con la historia de América Latina en esta obra maestra que explora temas de amor, soledad, violencia y destino.',
            'imagenPortada' => './assets/images/10.jpg',
            'codigoLibro' => 'CAS001',
            'valoracion' => 4.8,
            'precio' => 21.99,
            'idCategoria' => 1
        ]);

        Book::create([ //ID 11
            'titulo' => 'Crimen y castigo',
            'autor' => 'Fiódor Dostoyevski',
            'genero' => 'Novela psicológica',
            'añoPublicacion' => 1866,
            'numeroPaginas' => 576,
            'sinopsis' => 'Rodion Raskólnikov, un estudiante pobre en San Petersburgo, comete un crimen por una teoría que justifica sus acciones. Esta novela profundiza en la moralidad, la culpabilidad y el significado de la redención en la sociedad rusa del siglo XIX.',
            'imagenPortada' => './assets/images/11.webp',
            'codigoLibro' => 'CY001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 10
        ]);

        Book::create([ //ID 12
            'titulo' => 'The Beginning After The End: Transcendence, Book 8',
            'autor' => 'TurtleMe',
            'genero' => 'Fantasía',
            'añoPublicacion' => 2024,
            'numeroPaginas' => 500,
            'sinopsis' => 'La saga culmina con una épica confrontación entre las fuerzas del bien y el mal. Arthur debe trascender sus propios límites y asumir su verdadero papel en el destino del mundo. Las revelaciones finales y las batallas decisivas determinarán el futuro de Dicathen y el legado de Arthur Leywin.',
            'imagenPortada' => './assets/images/12.jpg',
            'codigoLibro' => 'TB002',
            'valoracion' => 4.8,
            'precio' => 24.99,
            'idCategoria' => 1
        ]);

        Book::create([ //ID 13
            'titulo' => 'La Máquina del Tiempo',
            'autor' => 'H.G. Wells',
            'genero' => 'Viajes en el tiempo',
            'añoPublicacion' => 1895,
            'numeroPaginas' => 118,
            'sinopsis' => 'En esta novela clásica de ciencia ficción, un inventor construye una máquina que le permite viajar a través del tiempo. Desde un futuro distante hasta el fin mismo del universo, el protagonista se enfrenta a peligros y maravillas en un viaje que desafía la imaginación.',
            'imagenPortada' => './assets/images/13.jpg',
            'codigoLibro' => 'MT001',
            'valoracion' => 4.5,
            'precio' => 14.99,
            'idCategoria' => 12
        ]);

        Book::create([ //ID 14
            'titulo' => 'Maldito Karma',
            'autor' => 'David Safier',
            'genero' => 'Humor',
            'añoPublicacion' => 2007,
            'numeroPaginas' => 320,
            'sinopsis' => 'La presentadora de televisión Kim Lange tiene un grave problema: ha muerto aplastada por los restos de una estación espacial rusa. Pero esto es solo el principio de sus problemas, ya que renace como una hormiga debido al mal karma acumulado a lo largo de su vida. Para volver a su familia, tendrá que acumular buen karma, pero su camino estará lleno de obstáculos y sorpresas cómicas.',
            'imagenPortada' => './assets/images/14.jpg',
            'codigoLibro' => 'T002',
            'valoracion' => 4.5,
            'precio' => 18.99,
            'idCategoria' => 7
        ]);

        Book::create([ //ID 15
            'titulo' => 'Orgullo y Prejuicio',
            'autor' => 'Jane Austen',
            'genero' => 'Novela psicológica',
            'añoPublicacion' => 1813,
            'numeroPaginas' => 432,
            'sinopsis' => 'La obra maestra de Jane Austen sigue la vida de Elizabeth Bennet mientras navega por el complejo mundo de la sociedad inglesa del siglo XIX. Con personajes inolvidables y una sátira ingeniosa, "Orgullo y Prejuicio" es una exploración perspicaz de la moralidad y el amor.',
            'imagenPortada' => './assets/images/15.jpg',
            'codigoLibro' => 'OP001',
            'valoracion' => 4.8,
            'precio' => 19.99,
            'idCategoria' => 10
        ]);

        Book::create([ //ID 16
            'titulo' => 'Steve Jobs',
            'autor' => 'Walter Isaacson',
            'genero' => 'Biografía',
            'añoPublicacion' => 2011,
            'numeroPaginas' => 656,
            'sinopsis' => 'Walter Isaacson nos ofrece una visión íntima de la vida y el legado de Steve Jobs, el visionario cofundador de Apple. Desde sus humildes comienzos hasta su impacto en la tecnología moderna, esta biografía revela las complejidades de uno de los empresarios más influyentes del siglo XX.',
            'imagenPortada' => './assets/images/16.jpg',
            'codigoLibro' => 'SJ001',
            'valoracion' => 4.9,
            'precio' => 24.99,
            'idCategoria' => 8
        ]);

        Book::create([ //ID 17
            'titulo' => 'Las Crónicas de Narnia: El León, la Bruja y el Armario',
            'autor' => 'C.S. Lewis',
            'genero' => 'Literatura juvenil',
            'añoPublicacion' => 1950,
            'numeroPaginas' => 208,
            'sinopsis' => 'En esta primera entrega de la serie, cuatro hermanos descubren un mundo mágico detrás de un armario en la casa de campo de su tío. Aventuras emocionantes, criaturas míticas y lecciones morales esperan a medida que exploran el misterioso reino de Narnia.',
            'imagenPortada' => './assets/images/17.jpg',
            'codigoLibro' => 'N001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 9
        ]);

        Book::create([ //ID 18
            'titulo' => 'El Ministerio del Tiempo: Mi Tiempo Se Agota',
            'autor' => 'Javier Olivares',
            'genero' => 'Viajes en el tiempo',
            'añoPublicacion' => 2015,
            'numeroPaginas' => 320,
            'sinopsis' => 'En esta novela basada en la serie de televisión española del mismo nombre, un equipo de agentes viaja a través de la historia española para proteger el curso del tiempo. Intriga, historia y aventura se entrelazan en este emocionante viaje a través de las épocas.',
            'imagenPortada' => './assets/images/18.jpg',
            'codigoLibro' => 'MT002',
            'valoracion' => 4.7,
            'precio' => 16.99,
            'idCategoria' => 12
        ]);

        Book::create([ //ID 19
            'titulo' => 'El Show de Truman',
            'autor' => 'Andrew Niccol',
            'genero' => 'Humor',
            'añoPublicacion' => 1998,
            'numeroPaginas' => 240,
            'sinopsis' => 'Este libro lleva al lector detrás de escena de la famosa película, explorando los momentos más divertidos y desconcertantes del rodaje. Con anécdotas del elenco y el equipo, este relato humorístico es un tributo a una de las películas más queridas de todos los tiempos.',
            'imagenPortada' => './assets/images/19.webp',
            'codigoLibro' => 'T001',
            'valoracion' => 4.6,
            'precio' => 14.99,
            'idCategoria' => 7
        ]);

        Book::create([ //ID 20
            'titulo' => 'Mujercitas',
            'autor' => 'Louisa May Alcott',
            'genero' => 'Literatura juvenil',
            'añoPublicacion' => 1868,
            'numeroPaginas' => 448,
            'sinopsis' => 'Este clásico sigue las vidas de las hermanas March mientras atraviesan la adolescencia en Nueva Inglaterra durante y después de la Guerra Civil estadounidense. Con temas de amor, amistad y crecimiento personal, "Mujercitas" ha cautivado a lectores de todas las edades durante generaciones.',
            'imagenPortada' => './assets/images/20.jpg',
            'codigoLibro' => 'MJ001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 9
        ]);
        
    }
}
