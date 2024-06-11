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
            'imagenPortada' => './assets/images/1.png',
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

        Book::create([ //ID 21
            'titulo' => 'El misterio de la cripta embrujada',
            'autor' => 'Eduardo Mendoza',
            'genero' => 'Misterio',
            'añoPublicacion' => 1979,
            'numeroPaginas' => 224,
            'sinopsis' => 'El detective privado loco y entrañable, protagonista de esta novela, se ve envuelto en un caso lleno de misterios, asesinatos y enigmas por resolver. En un Madrid de la posguerra, con sus calles y sus gentes como telón de fondo, la historia nos sumerge en un viaje trepidante lleno de humor y suspense.',
            'imagenPortada' => './assets/images/el_misterio_de_la_cripta_embrujada.jpg',
            'codigoLibro' => 'EM001',
            'valoracion' => 4.7,
            'precio' => 14.99,
            'idCategoria' => 2
        ]);
        
        Book::create([ //ID 22
            'titulo' => 'El nombre de la rosa',
            'autor' => 'Umberto Eco',
            'genero' => 'Misterio',
            'añoPublicacion' => 1980,
            'numeroPaginas' => 592,
            'sinopsis' => 'En una abadía benedictina en el siglo XIV, el monje franciscano William de Baskerville llega para resolver una serie de misteriosos asesinatos. Acompañado por su joven ayudante, Adso de Melk, se sumerge en un mundo de intrigas, herejías y secretos. El nombre de la rosa es una obra maestra que combina historia, filosofía y misterio de manera magistral.',
            'imagenPortada' => './assets/images/el_nombre_de_la_rosa.jpg',
            'codigoLibro' => 'UR001',
            'valoracion' => 4.8,
            'precio' => 17.99,
            'idCategoria' => 2
        ]);
        
        Book::create([ //ID 23
            'titulo' => 'La chica del tren',
            'autor' => 'Paula Hawkins',
            'genero' => 'Misterio',
            'añoPublicacion' => 2015,
            'numeroPaginas' => 496,
            'sinopsis' => 'Rachel, una mujer divorciada y alcohólica, viaja en tren cada día observando a una pareja aparentemente perfecta desde la ventana. Un día, ve algo impactante que la lleva a una intrincada trama de misterio y engaño. La historia se entrelaza con los oscuros secretos de los personajes, manteniendo al lector en vilo hasta la última página.',
            'imagenPortada' => './assets/images/la_chica_del_tren.jpg',
            'codigoLibro' => 'PH001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 2
        ]);
        
        Book::create([ //ID 24
            'titulo' => 'El misterio de Salem\'s Lot',
            'autor' => 'Stephen King',
            'genero' => 'Misterio',
            'añoPublicacion' => 1975,
            'numeroPaginas' => 480,
            'sinopsis' => 'Ben Mears regresa a la tranquila Salem\'s Lot para escribir un libro sobre su infancia, pero pronto descubre que algo siniestro acecha en la oscuridad. Con la ayuda de algunos residentes valientes, se enfrenta a una antigua maldad que amenaza con destruir el pueblo. Esta novela de Stephen King te dejará en vilo hasta el final, con su atmósfera tensa y sus giros sorprendentes.',
            'imagenPortada' => './assets/images/el_misterio_de_salems_lot.jpg',
            'codigoLibro' => 'SK001',
            'valoracion' => 4.9,
            'precio' => 21.99,
            'idCategoria' => 2
        ]);
        
        Book::create([ //ID 25
            'titulo' => 'Orgullo y prejuicio',
            'autor' => 'Jane Austen',
            'genero' => 'Romance',
            'añoPublicacion' => 1813,
            'numeroPaginas' => 432,
            'sinopsis' => 'Esta novela clásica sigue la historia de Elizabeth Bennet y el señor Darcy, dos personajes con personalidades opuestas que, a pesar de sus diferencias, se enamoran en medio de las convenciones sociales y las expectativas familiares en la Inglaterra del siglo XIX.',
            'imagenPortada' => './assets/images/orgullo_y_prejuicio.jpg',
            'codigoLibro' => 'JA001',
            'valoracion' => 4.8,
            'precio' => 15.99,
            'idCategoria' => 4
        ]);
        
        Book::create([ ////ID 26
            'titulo' => 'Cumbres borrascosas',
            'autor' => 'Emily Brontë',
            'genero' => 'Romance',
            'añoPublicacion' => 1847,
            'numeroPaginas' => 416,
            'sinopsis' => 'La historia de Catherine y Heathcliff, dos amantes atormentados cuya pasión ardiente se ve obstaculizada por la venganza, los celos y las circunstancias sociales. Ambientada en la brumosa campiña inglesa, esta novela es un clásico del romance lleno de intensidad y drama.',
            'imagenPortada' => './assets/images/cumbres_borrascosas.jpg',
            'codigoLibro' => 'EB001',
            'valoracion' => 4.7,
            'precio' => 14.99,
            'idCategoria' => 4
        ]);
        
        Book::create([ //ID 27
            'titulo' => 'Amanecer',
            'autor' => 'Stephenie Meyer',
            'genero' => 'Romance',
            'añoPublicacion' => 2008,
            'numeroPaginas' => 756,
            'sinopsis' => 'La culminación de la saga "Crepúsculo", "Amanecer" sigue la historia de Bella Swan y Edward Cullen mientras enfrentan desafíos sobrenaturales y luchan por su amor contra todas las adversidades. Este libro combina romance, fantasía y acción en una emocionante conclusión.',
            'imagenPortada' => './assets/images/amanecer.jpg',
            'codigoLibro' => 'SM001',
            'valoracion' => 4.5,
            'precio' => 18.99,
            'idCategoria' => 4
        ]);
        
        Book::create([ //ID 28
            'titulo' => 'Posdata: Te amo',
            'autor' => 'Cecelia Ahern',
            'genero' => 'Romance',
            'añoPublicacion' => 2004,
            'numeroPaginas' => 512,
            'sinopsis' => 'Después de la muerte de su esposo Gerry, Holly encuentra consuelo en una serie de cartas que él dejó antes de fallecer. Cada carta la guía en un viaje de autoexploración y sanación mientras aprende a vivir sin su amor. "Posdata: Te amo" es una historia emotiva sobre el poder del amor perdurable.',
            'imagenPortada' => './assets/images/posdata_te_amo.jpg',
            'codigoLibro' => 'CA001',
            'valoracion' => 4.6,
            'precio' => 16.99,
            'idCategoria' => 4
        ]);
        
        Book::create([ //ID 29
            'titulo' => 'Bajo la misma estrella',
            'autor' => 'John Green',
            'genero' => 'Romance',
            'añoPublicacion' => 2012,
            'numeroPaginas' => 336,
            'sinopsis' => 'Hazel Grace Lancaster, una adolescente con cáncer, conoce a Augustus Waters en un grupo de apoyo. Juntos, comparten una historia de amor que desafía las probabilidades y les lleva a vivir aventuras inolvidables. Esta novela conmovedora es un himno a la vida, el amor y la búsqueda de significado.',
            'imagenPortada' => './assets/images/bajo_la_misma_estrella.jpg',
            'codigoLibro' => 'JG001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 4
        ]);

        Book::create([ //ID 30
            'titulo' => 'El resplandor',
            'autor' => 'Stephen King',
            'genero' => 'Terror',
            'añoPublicacion' => 1977,
            'numeroPaginas' => 544,
            'sinopsis' => 'Jack Torrance acepta un trabajo como cuidador de un hotel aislado durante el invierno, llevando a su familia a un lugar lleno de oscuros secretos y presencias sobrenaturales. A medida que el aislamiento y la locura se apoderan de él, su hijo Danny, dotado de un poder psíquico llamado "resplandor", descubre los terrores ocultos del hotel.',
            'imagenPortada' => './assets/images/el_resplandor.jpg',
            'codigoLibro' => 'SK002',
            'valoracion' => 4.9,
            'precio' => 21.99,
            'idCategoria' => 5
        ]);
        
        Book::create([ //ID 31
            'titulo' => 'It',
            'autor' => 'Stephen King',
            'genero' => 'Terror',
            'añoPublicacion' => 1986,
            'numeroPaginas' => 1138,
            'sinopsis' => 'En el pequeño pueblo de Derry, Maine, un grupo de niños se enfrenta a una entidad malévola que toma la forma de sus peores miedos. Treinta años después, los amigos de la infancia se reúnen para enfrentarse al terror que pensaban haber dejado atrás. "It" es una novela épica de terror que explora temas de amistad, memoria y el mal absoluto.',
            'imagenPortada' => './assets/images/it.jpg',
            'codigoLibro' => 'SK003',
            'valoracion' => 4.8,
            'precio' => 19.99,
            'idCategoria' => 5
        ]);
        
        Book::create([ //ID 32
            'titulo' => 'El exorcista',
            'autor' => 'William Peter Blatty',
            'genero' => 'Terror',
            'añoPublicacion' => 1971,
            'numeroPaginas' => 400,
            'sinopsis' => 'Cuando la joven Regan comienza a mostrar un comportamiento violento y perturbador, su madre busca ayuda en la medicina y la psiquiatría, pero pronto se da cuenta de que el mal que posee a su hija es mucho más siniestro y poderoso. "El exorcista" es una obra maestra del horror que ha aterrorizado a los lectores desde su publicación.',
            'imagenPortada' => './assets/images/el_exorcista.jpg',
            'codigoLibro' => 'WB001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 5
        ]);
        
        Book::create([ //ID 33
            'titulo' => 'Misery',
            'autor' => 'Stephen King',
            'genero' => 'Terror',
            'añoPublicacion' => 1987,
            'numeroPaginas' => 368,
            'sinopsis' => 'Paul Sheldon, un famoso escritor, sufre un accidente y es rescatado por una fan obsesionada llamada Annie Wilkes. A medida que se recupera en su aislada casa, Paul descubre que Annie es mucho más peligrosa de lo que parece. "Misery" es una novela claustrofóbica y tensa que muestra el lado oscuro de la fama y la obsesión.',
            'imagenPortada' => './assets/images/misery.jpg',
            'codigoLibro' => 'SK004',
            'valoracion' => 4.6,
            'precio' => 16.99,
            'idCategoria' => 5
        ]);

        Book::create([ //ID 34
            'titulo' => 'Los miserables',
            'autor' => 'Victor Hugo',
            'genero' => 'Drama',
            'añoPublicacion' => 1862,
            'numeroPaginas' => 1232,
            'sinopsis' => 'Esta épica novela sigue las vidas entrelazadas de varios personajes, incluido el exconvicto Jean Valjean y el implacable inspector Javert, en la Francia del siglo XIX. A través de sus experiencias, Victor Hugo explora temas de redención, justicia social y el poder del amor y la compasión.',
            'imagenPortada' => './assets/images/los_miserables.jpg',
            'codigoLibro' => 'VH001',
            'valoracion' => 4.9,
            'precio' => 21.99,
            'idCategoria' => 6
        ]);
        
        Book::create([ //ID 35
            'titulo' => 'Mil soles espléndidos',
            'autor' => 'Khaled Hosseini',
            'genero' => 'Drama',
            'añoPublicacion' => 2007,
            'numeroPaginas' => 432,
            'sinopsis' => 'Ambientada en Afganistán, esta conmovedora novela sigue la vida de dos mujeres, Mariam y Laila, cuyos destinos se entrelazan en medio de la agitación política y social del país. A través de sus experiencias, Hosseini teje una historia de amor, sacrificio y esperanza en medio de la adversidad.',
            'imagenPortada' => './assets/images/mil_soles_esplendidos.jpg',
            'codigoLibro' => 'KH001',
            'valoracion' => 4.8,
            'precio' => 19.99,
            'idCategoria' => 6
        ]);
        
        Book::create([ //ID 36
            'titulo' => 'La sombra del viento',
            'autor' => 'Carlos Ruiz Zafón',
            'genero' => 'Drama',
            'añoPublicacion' => 2001,
            'numeroPaginas' => 569,
            'sinopsis' => 'En el oscuro y misterioso mundo de la posguerra en Barcelona, Daniel Sempere descubre un libro que cambiará su vida para siempre. A medida que investiga la historia detrás del autor, se encuentra inmerso en un laberinto de secretos, traiciones y amor perdido. "La sombra del viento" es una saga cautivadora que te llevará en un viaje emocional.',
            'imagenPortada' => './assets/images/la_sombra_del_viento.jpg',
            'codigoLibro' => 'CRZ001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 6
        ]);
        
        Book::create([ //ID 37
            'titulo' => 'El niño con el pijama de rayas',
            'autor' => 'John Boyne',
            'genero' => 'Drama',
            'añoPublicacion' => 2006,
            'numeroPaginas' => 215,
            'sinopsis' => 'Esta novela conmovedora narra la historia de Bruno, un niño alemán cuyo padre es un oficial nazi. Cuando la familia se muda cerca de un campo de concentración, Bruno hace amistad con Shmuel, un niño judío prisionero. A través de su inocente amistad, Boyne ofrece una perspectiva conmovedora sobre la inocencia y la crueldad en tiempos de guerra.',
            'imagenPortada' => './assets/images/el_nino_con_el_pijama_de_rayas.jpg',
            'codigoLibro' => 'JB001',
            'valoracion' => 4.6,
            'precio' => 16.99,
            'idCategoria' => 6
        ]);

        Book::create([ //ID 38
            'titulo' => 'El guardián entre el centeno',
            'autor' => 'J.D. Salinger',
            'genero' => 'Drama',
            'añoPublicacion' => 1951,
            'numeroPaginas' => 224,
            'sinopsis' => 'La historia sigue a Holden Caulfield, un adolescente alienado que lucha por encontrar su lugar en el mundo después de ser expulsado de la escuela. A lo largo de sus andanzas por Nueva York, Holden reflexiona sobre la hipocresía de la sociedad y su propia lucha contra la adultez. "El guardián entre el centeno" es una novela atemporal sobre la soledad, la identidad y la transición a la edad adulta.',
            'imagenPortada' => './assets/images/el_guardian_entre_el_centeno.jpg',
            'codigoLibro' => 'JDS001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 6
        ]);

        Book::create([ //ID 39
            'titulo' => 'El restaurante del fin del mundo',
            'autor' => 'Douglas Adams',
            'genero' => 'Humor',
            'añoPublicacion' => 1980,
            'numeroPaginas' => 224,
            'sinopsis' => 'En esta hilarante novela, Arthur Dent se encuentra en una situación inusual cuando descubre que su casa está a punto de ser demolida para dar paso a una autopista intergaláctica. Afortunadamente, su amigo Ford Prefect lo rescata justo a tiempo para embarcarse en una aventura a través del espacio, donde conocerán a una variedad de personajes extravagantes y enfrentarán situaciones absurdas y cómicas.',
            'imagenPortada' => './assets/images/el_restaurante_del_fin_del_mundo.jpg',
            'codigoLibro' => 'DA001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 7
        ]);
        
        Book::create([ //ID 40
            'titulo' => 'Guía del autoestopista galáctico',
            'autor' => 'Douglas Adams',
            'genero' => 'Humor',
            'añoPublicacion' => 1979,
            'numeroPaginas' => 208,
            'sinopsis' => 'Arthur Dent, un terrícola común y corriente, se encuentra en una situación extraordinaria cuando descubre que su casa está a punto de ser demolida para dar paso a una autopista intergaláctica. Afortunadamente, su amigo Ford Prefect lo rescata justo a tiempo para embarcarse en una aventura a través del espacio, donde conocerán a una variedad de personajes extravagantes y enfrentarán situaciones absurdas y cómicas.',
            'imagenPortada' => './assets/images/guia_del_autoestopista_galactico.jpg',
            'codigoLibro' => 'DA002',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 7
        ]);
        
        Book::create([ //ID 41
            'titulo' => '¡Malditas matemáticas!',
            'autor' => 'Carl Honoré',
            'genero' => 'Humor',
            'añoPublicacion' => 2010,
            'numeroPaginas' => 352,
            'sinopsis' => 'En este divertido y perspicaz libro, Carl Honoré explora el mundo de las matemáticas desde una perspectiva humorística y accesible. A través de anécdotas, ejemplos y juegos, Honoré desmitifica la idea de que las matemáticas son aburridas y difíciles, mostrando cómo pueden ser sorprendentes, entretenidas y útiles en la vida cotidiana.',
            'imagenPortada' => './assets/images/malditas_matematicas.jpg',
            'codigoLibro' => 'CH001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 7
        ]);
        
    }
}
