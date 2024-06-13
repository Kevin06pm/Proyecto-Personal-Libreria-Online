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
            'imagenPortada' => './assets/images/5.jpg',
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
            'sinopsis' => '"Tuve que aceptar que ya no era sólo Arthur Leywin y que ya no podía estar limitado por las circunstancias de mi nacimiento. Si iba a escapar, si iba a enfrentarme cara a cara con los seres más poderosos de este mundo, necesitaba esforzarme hasta mi límite máximo... y luego necesitaba esforzarme aún más". Después de casi morir víctima de su propia fuerza, Arthur Leywin despierta y se encuentra lejos del continente donde nació por segunda vez. Solo, destrozado y sin forma de decirle a su familia que está vivo, Arthur debe recuperar sus fuerzas para sobrevivir. Mientras asciende a través de una antigua mazmorra llena de bestias hostiles y pruebas tortuosas, descubre un poder antiguo y absoluto, un poder que lo arruinará o lo llevará a nuevas alturas. Pero la mazmorra no renunciará fácilmente a sus conocimientos. Antes de poder saquear sus profundidades, Arthur debe aprender a desenredar los hilos del destino. Debe unirse con el aliado más improbable si espera escapar con vida.',
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
            'imagenPortada' => './assets/images/21.webp',
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
            'imagenPortada' => './assets/images/22.jpg',
            'codigoLibro' => 'UR001',
            'valoracion' => 4.8,
            'precio' => 17.99,
            'idCategoria' => 2
        ]);

        Book::create([ //ID 23
            'titulo' => 'La historia de mi vida',
            'autor' => 'Helen Keller',
            'genero' => 'Biografía',
            'añoPublicacion' => 1903,
            'numeroPaginas' => 240,
            'sinopsis' => 'En esta conmovedora autobiografía, Helen Keller relata su notable vida como la primera persona sordociega en obtener un título universitario. Desde su lucha temprana por la comunicación hasta su activismo en favor de las personas con discapacidades, Keller inspira con su fuerza, determinación y fe en el potencial humano.',
            'imagenPortada' => './assets/images/23.png',
            'codigoLibro' => 'HK001',
            'valoracion' => 4.6,
            'precio' => 18.99,
            'idCategoria' => 8
        ]);

        Book::create([ //ID 24
            'titulo' => 'Diarios',
            'autor' => 'Anaïs Nin',
            'genero' => 'Biografía',
            'añoPublicacion' => 1966,
            'numeroPaginas' => 384,
            'sinopsis' => 'Los diarios de Anaïs Nin ofrecen una mirada íntima a la vida y las experiencias de la famosa escritora y diarista. A lo largo de sus páginas, Nin reflexiona sobre su arte, su sexualidad, sus relaciones personales y su búsqueda de la autenticidad. Estos diarios son una ventana a la mente y el corazón de una figura influyente en la literatura del siglo XX.',
            'imagenPortada' => './assets/images/24.jpg',
            'codigoLibro' => 'AN001',
            'valoracion' => 4.7,
            'precio' => 21.99,
            'idCategoria' => 8
        ]);
        
        Book::create([ //ID 25
            'titulo' => 'La chica del tren',
            'autor' => 'Paula Hawkins',
            'genero' => 'Misterio',
            'añoPublicacion' => 2015,
            'numeroPaginas' => 496,
            'sinopsis' => 'Rachel, una mujer divorciada y alcohólica, viaja en tren cada día observando a una pareja aparentemente perfecta desde la ventana. Un día, ve algo impactante que la lleva a una intrincada trama de misterio y engaño. La historia se entrelaza con los oscuros secretos de los personajes, manteniendo al lector en vilo hasta la última página.',
            'imagenPortada' => './assets/images/25.jpeg',
            'codigoLibro' => 'PH001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 2
        ]);

        Book::create([ //ID 26
            'titulo' => 'It',
            'autor' => 'Stephen King',
            'genero' => 'Terror',
            'añoPublicacion' => 1986,
            'numeroPaginas' => 1138,
            'sinopsis' => 'En el pequeño pueblo de Derry, Maine, un grupo de niños se enfrenta a una entidad malévola que toma la forma de sus peores miedos. Treinta años después, los amigos de la infancia se reúnen para enfrentarse al terror que pensaban haber dejado atrás. "It" es una novela épica de terror que explora temas de amistad, memoria y el mal absoluto.',
            'imagenPortada' => './assets/images/26.gif',
            'codigoLibro' => 'SK003',
            'valoracion' => 4.8,
            'precio' => 19.99,
            'idCategoria' => 5
        ]);

        Book::create([ //ID 27
            'titulo' => 'Emperador Mágico',
            'autor' => 'Ye Xiao',
            'genero' => 'Fantasía',
            'añoPublicacion' => 2019,
            'numeroPaginas' => 368,
            'sinopsis' => 'El emperador demonio Zhuo Yifan, luego de ser atacado por los siete emperadores y de ser traicionado por su discípulo en busca de capturar el antiguo "libro de los nueve secretos", renace en el cuerpo de un criado llamado Zhuo Fan. Ahora, el emperador demonio buscará recobrar todo su poder para derrotar a los siete emperadores y a su traicionero discípulo, mientras sirve a la dama mayor de la familia Luo. ¿Podrá recuperar su antigua vida, vencer a sus enemigos y elevar a la familia Luo junto a él?',
            'imagenPortada' => './assets/images/27.jpg',
            'codigoLibro' => 'EM001',
            'valoracion' => 4.6,
            'precio' => 15.99,
            'idCategoria' => 1
        ]);
        
        Book::create([ //ID 28
            'titulo' => 'El exorcista',
            'autor' => 'William Peter Blatty',
            'genero' => 'Terror',
            'añoPublicacion' => 1971,
            'numeroPaginas' => 400,
            'sinopsis' => 'Cuando la joven Regan comienza a mostrar un comportamiento violento y perturbador, su madre busca ayuda en la medicina y la psiquiatría, pero pronto se da cuenta de que el mal que posee a su hija es mucho más siniestro y poderoso. "El exorcista" es una obra maestra del horror que ha aterrorizado a los lectores desde su publicación.',
            'imagenPortada' => './assets/images/28.jpg',
            'codigoLibro' => 'WB001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 5
        ]);
        
        Book::create([ //ID 29
            'titulo' => 'El misterio de Salem\'s Lot',
            'autor' => 'Stephen King',
            'genero' => 'Misterio',
            'añoPublicacion' => 1975,
            'numeroPaginas' => 480,
            'sinopsis' => 'Ben Mears regresa a la tranquila Salem\'s Lot para escribir un libro sobre su infancia, pero pronto descubre que algo siniestro acecha en la oscuridad. Con la ayuda de algunos residentes valientes, se enfrenta a una antigua maldad que amenaza con destruir el pueblo. Esta novela de Stephen King te dejará en vilo hasta el final, con su atmósfera tensa y sus giros sorprendentes.',
            'imagenPortada' => './assets/images/29.jpg',
            'codigoLibro' => 'SK001',
            'valoracion' => 4.9,
            'precio' => 21.99,
            'idCategoria' => 2
        ]);

        Book::create([ //ID 30
            'titulo' => 'Divergente',
            'autor' => 'Veronica Roth',
            'genero' => 'Literatura juvenil',
            'añoPublicacion' => 2011,
            'numeroPaginas' => 496,
            'sinopsis' => 'En una sociedad dividida en facciones basadas en virtudes humanas, Beatrice Prior descubre que es una divergente, alguien que no encaja en una sola facción. Cuando el secreto de su divergencia la pone en peligro, Beatrice se une a los valientes y peligrosos para desenterrar la verdad sobre su mundo. Esta trilogía ofrece una mezcla de acción, romance y exploración de la identidad.',
            'imagenPortada' => './assets/images/30.jpg',
            'codigoLibro' => 'VR001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 9
        ]);
        
        Book::create([ //ID 31
            'titulo' => 'El corredor del laberinto',
            'autor' => 'James Dashner',
            'genero' => 'Literatura juvenil',
            'añoPublicacion' => 2009,
            'numeroPaginas' => 384,
            'sinopsis' => 'Thomas despierta en un ascensor en movimiento, sin memoria de quién es ni cómo llegó allí. Es transportado a un lugar conocido como el Área, rodeado por un laberinto aparentemente imposible. Con un grupo de jóvenes, Thomas debe desentrañar los secretos del laberinto para encontrar una salida y descubrir la verdad sobre su identidad. Esta serie ofrece una mezcla de intriga, acción y misterio.',
            'imagenPortada' => './assets/images/31.webp',
            'codigoLibro' => 'JD001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 9
        ]);
        
        Book::create([ //ID 32
            'titulo' => 'Amanecer',
            'autor' => 'Stephenie Meyer',
            'genero' => 'Romance',
            'añoPublicacion' => 2008,
            'numeroPaginas' => 756,
            'sinopsis' => 'La culminación de la saga "Crepúsculo", "Amanecer" sigue la historia de Bella Swan y Edward Cullen mientras enfrentan desafíos sobrenaturales y luchan por su amor contra todas las adversidades. Este libro combina romance, fantasía y acción en una emocionante conclusión.',
            'imagenPortada' => './assets/images/32.jpg',
            'codigoLibro' => 'SM001',
            'valoracion' => 4.5,
            'precio' => 18.99,
            'idCategoria' => 4
        ]);
        
        Book::create([ //ID 33
            'titulo' => 'Posdata: Te amo',
            'autor' => 'Cecelia Ahern',
            'genero' => 'Romance',
            'añoPublicacion' => 2004,
            'numeroPaginas' => 512,
            'sinopsis' => 'Después de la muerte de su esposo Gerry, Holly encuentra consuelo en una serie de cartas que él dejó antes de fallecer. Cada carta la guía en un viaje de autoexploración y sanación mientras aprende a vivir sin su amor. "Posdata: Te amo" es una historia emotiva sobre el poder del amor perdurable.',
            'imagenPortada' => './assets/images/33.jpg',
            'codigoLibro' => 'CA001',
            'valoracion' => 4.6,
            'precio' => 16.99,
            'idCategoria' => 4
        ]);
        
        

        Book::create([ //ID 34
            'titulo' => 'El resplandor',
            'autor' => 'Stephen King',
            'genero' => 'Terror',
            'añoPublicacion' => 1977,
            'numeroPaginas' => 544,
            'sinopsis' => 'Jack Torrance acepta un trabajo como cuidador de un hotel aislado durante el invierno, llevando a su familia a un lugar lleno de oscuros secretos y presencias sobrenaturales. A medida que el aislamiento y la locura se apoderan de él, su hijo Danny, dotado de un poder psíquico llamado "resplandor", descubre los terrores ocultos del hotel.',
            'imagenPortada' => './assets/images/34.jpg',
            'codigoLibro' => 'SK002',
            'valoracion' => 4.9,
            'precio' => 21.99,
            'idCategoria' => 5
        ]);

        Book::create([ //ID 35
            'titulo' => 'Bajo la misma estrella',
            'autor' => 'John Green',
            'genero' => 'Romance',
            'añoPublicacion' => 2012,
            'numeroPaginas' => 336,
            'sinopsis' => 'Hazel Grace Lancaster, una adolescente con cáncer, conoce a Augustus Waters en un grupo de apoyo. Juntos, comparten una historia de amor que desafía las probabilidades y les lleva a vivir aventuras inolvidables. Esta novela conmovedora es un himno a la vida, el amor y la búsqueda de significado.',
            'imagenPortada' => './assets/images/35.jpg',
            'codigoLibro' => 'JG001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 4
        ]);
                
        Book::create([ //ID 36
            'titulo' => 'Misery',
            'autor' => 'Stephen King',
            'genero' => 'Terror',
            'añoPublicacion' => 1987,
            'numeroPaginas' => 368,
            'sinopsis' => 'Paul Sheldon, un famoso escritor, sufre un accidente y es rescatado por una fan obsesionada llamada Annie Wilkes. A medida que se recupera en su aislada casa, Paul descubre que Annie es mucho más peligrosa de lo que parece. "Misery" es una novela claustrofóbica y tensa que muestra el lado oscuro de la fama y la obsesión.',
            'imagenPortada' => './assets/images/36.jpg',
            'codigoLibro' => 'SK004',
            'valoracion' => 4.6,
            'precio' => 16.99,
            'idCategoria' => 5
        ]);

        Book::create([ //ID 37
            'titulo' => 'El fin de la eternidad',
            'autor' => 'Isaac Asimov',
            'genero' => 'Viajes en el tiempo',
            'añoPublicacion' => 1955,
            'numeroPaginas' => 256,
            'sinopsis' => 'En este clásico de la ciencia ficción, la Eternidad es una organización que controla los viajes en el tiempo para influir en la historia humana. Andrew Harlan es un técnico de la Eternidad que se encuentra en una encrucijada cuando se enamora de una mujer de una época diferente. Asimov explora temas de libre albedrío, determinismo y las consecuencias imprevistas de la manipulación del tiempo.',
            'imagenPortada' => './assets/images/37.jpg',
            'codigoLibro' => 'IA001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 12
        ]);

        Book::create([ //ID 38
            'titulo' => 'Los miserables',
            'autor' => 'Victor Hugo',
            'genero' => 'Drama',
            'añoPublicacion' => 1862,
            'numeroPaginas' => 1232,
            'sinopsis' => 'Esta épica novela sigue las vidas entrelazadas de varios personajes, incluido el exconvicto Jean Valjean y el implacable inspector Javert, en la Francia del siglo XIX. A través de sus experiencias, Victor Hugo explora temas de redención, justicia social y el poder del amor y la compasión.',
            'imagenPortada' => './assets/images/38.jpg',
            'codigoLibro' => 'VH001',
            'valoracion' => 4.9,
            'precio' => 21.99,
            'idCategoria' => 6
        ]);

        Book::create([ //ID 39
            'titulo' => 'La luz al final del túnel',
            'autor' => 'Arthur C. Clarke',
            'genero' => 'Viajes en el tiempo',
            'añoPublicacion' => 1987,
            'numeroPaginas' => 256,
            'sinopsis' => 'En esta novela de ciencia ficción, un experimento científico en un acelerador de partículas conduce a un viaje en el tiempo inesperado. Un grupo de científicos se encuentra atrapado en un túnel temporal donde pueden presenciar momentos clave de la historia de la humanidad. Clarke teje una trama intrigante que explora las paradojas del tiempo y las consecuencias de alterar el curso de los eventos.',
            'imagenPortada' => './assets/images/39.jpg',
            'codigoLibro' => 'ACC001',
            'valoracion' => 4.5,
            'precio' => 15.99,
            'idCategoria' => 12
        ]);

        
        
        Book::create([ //ID 40
            'titulo' => 'Mil soles espléndidos',
            'autor' => 'Khaled Hosseini',
            'genero' => 'Drama',
            'añoPublicacion' => 2007,
            'numeroPaginas' => 432,
            'sinopsis' => 'Ambientada en Afganistán, esta conmovedora novela sigue la vida de dos mujeres, Mariam y Laila, cuyos destinos se entrelazan en medio de la agitación política y social del país. A través de sus experiencias, Hosseini teje una historia de amor, sacrificio y esperanza en medio de la adversidad.',
            'imagenPortada' => './assets/images/40.jpg',
            'codigoLibro' => 'KH001',
            'valoracion' => 4.8,
            'precio' => 19.99,
            'idCategoria' => 6
        ]);

        Book::create([ //ID 41
            'titulo' => 'La sombra del viento',
            'autor' => 'Carlos Ruiz Zafón',
            'genero' => 'Drama',
            'añoPublicacion' => 2001,
            'numeroPaginas' => 569,
            'sinopsis' => 'En el oscuro y misterioso mundo de la posguerra en Barcelona, Daniel Sempere descubre un libro que cambiará su vida para siempre. A medida que investiga la historia detrás del autor, se encuentra inmerso en un laberinto de secretos, traiciones y amor perdido. "La sombra del viento" es una saga cautivadora que te llevará en un viaje emocional.',
            'imagenPortada' => './assets/images/41.jpg',
            'codigoLibro' => 'CRZ001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 6
        ]);
        
        
        
        Book::create([ //ID 42
            'titulo' => 'El niño con el pijama de rayas',
            'autor' => 'John Boyne',
            'genero' => 'Drama',
            'añoPublicacion' => 2006,
            'numeroPaginas' => 215,
            'sinopsis' => 'Esta novela conmovedora narra la historia de Bruno, un niño alemán cuyo padre es un oficial nazi. Cuando la familia se muda cerca de un campo de concentración, Bruno hace amistad con Shmuel, un niño judío prisionero. A través de su inocente amistad, Boyne ofrece una perspectiva conmovedora sobre la inocencia y la crueldad en tiempos de guerra.',
            'imagenPortada' => './assets/images/42.webp',
            'codigoLibro' => 'JB001',
            'valoracion' => 4.6,
            'precio' => 16.99,
            'idCategoria' => 6
        ]);

        

        Book::create([ //ID 43
            'titulo' => 'El restaurante del fin del mundo',
            'autor' => 'Douglas Adams',
            'genero' => 'Humor',
            'añoPublicacion' => 1980,
            'numeroPaginas' => 224,
            'sinopsis' => 'En esta hilarante novela, Arthur Dent se encuentra en una situación inusual cuando descubre que su casa está a punto de ser demolida para dar paso a una autopista intergaláctica. Afortunadamente, su amigo Ford Prefect lo rescata justo a tiempo para embarcarse en una aventura a través del espacio, donde conocerán a una variedad de personajes extravagantes y enfrentarán situaciones absurdas y cómicas.',
            'imagenPortada' => './assets/images/43.jpg',
            'codigoLibro' => 'DA001',
            'valoracion' => 4.9,
            'precio' => 19.99,
            'idCategoria' => 7
        ]);
        
        Book::create([ //ID 44
            'titulo' => 'Guía del autoestopista galáctico',
            'autor' => 'Douglas Adams',
            'genero' => 'Humor',
            'añoPublicacion' => 1979,
            'numeroPaginas' => 208,
            'sinopsis' => 'Arthur Dent, un terrícola común y corriente, se encuentra en una situación extraordinaria cuando descubre que su casa está a punto de ser demolida para dar paso a una autopista intergaláctica. Afortunadamente, su amigo Ford Prefect lo rescata justo a tiempo para embarcarse en una aventura a través del espacio, donde conocerán a una variedad de personajes extravagantes y enfrentarán situaciones absurdas y cómicas.',
            'imagenPortada' => './assets/images/44.jpg',
            'codigoLibro' => 'DA002',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 7
        ]);

        Book::create([ //ID 45
            'titulo' => 'El guardián entre el centeno',
            'autor' => 'J.D. Salinger',
            'genero' => 'Drama',
            'añoPublicacion' => 1951,
            'numeroPaginas' => 224,
            'sinopsis' => 'La historia sigue a Holden Caulfield, un adolescente alienado que lucha por encontrar su lugar en el mundo después de ser expulsado de la escuela. A lo largo de sus andanzas por Nueva York, Holden reflexiona sobre la hipocresía de la sociedad y su propia lucha contra la adultez. "El guardián entre el centeno" es una novela atemporal sobre la soledad, la identidad y la transición a la edad adulta.',
            'imagenPortada' => './assets/images/45.jpg',
            'codigoLibro' => 'JDS001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 6
        ]);
        
        Book::create([ //ID 46
            'titulo' => '¡Malditas matemáticas!',
            'autor' => 'Carl Honoré',
            'genero' => 'Humor',
            'añoPublicacion' => 2010,
            'numeroPaginas' => 352,
            'sinopsis' => 'En este divertido y perspicaz libro, Carl Honoré explora el mundo de las matemáticas desde una perspectiva humorística y accesible. A través de anécdotas, ejemplos y juegos, Honoré desmitifica la idea de que las matemáticas son aburridas y difíciles, mostrando cómo pueden ser sorprendentes, entretenidas y útiles en la vida cotidiana.',
            'imagenPortada' => './assets/images/46.jpg',
            'codigoLibro' => 'CH001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 7
        ]);

        Book::create([ //ID 47
            'titulo' => 'Elon Musk: Tesla, SpaceX y la búsqueda de un futuro fantástico',
            'autor' => 'Ashlee Vance',
            'genero' => 'Biografía',
            'añoPublicacion' => 2015,
            'numeroPaginas' => 400,
            'sinopsis' => 'Ashlee Vance presenta una exploración fascinante de la vida y los logros de Elon Musk, el visionario empresario detrás de empresas como Tesla, SpaceX y PayPal. Desde su infancia en Sudáfrica hasta su ascenso como líder en la innovación tecnológica, esta biografía revela la mente brillante y la determinación inquebrantable de Musk para cambiar el mundo.',
            'imagenPortada' => './assets/images/47.jpg',
            'codigoLibro' => 'AV001',
            'valoracion' => 4.7,
            'precio' => 20.99,
            'idCategoria' => 8
        ]);
        
        Book::create([ //ID 48
            'titulo' => 'Leonardo da Vinci',
            'autor' => 'Walter Isaacson',
            'genero' => 'Biografía',
            'añoPublicacion' => 2017,
            'numeroPaginas' => 624,
            'sinopsis' => 'Walter Isaacson ofrece una exploración profunda de la vida y obra del genio renacentista Leonardo da Vinci. A través de sus cuadernos, dibujos y obras de arte, Isaacson revela la mente polifacética de da Vinci, destacando su curiosidad insaciable, su habilidad para combinar arte y ciencia, y su búsqueda eterna de conocimiento y perfección.',
            'imagenPortada' => './assets/images/48.webp',
            'codigoLibro' => 'WI002',
            'valoracion' => 4.9,
            'precio' => 24.99,
            'idCategoria' => 8
        ]);

        Book::create([ //ID 49
            'titulo' => 'Percy Jackson y el ladrón del rayo',
            'autor' => 'Rick Riordan',
            'genero' => 'Literatura juvenil',
            'añoPublicacion' => 2005,
            'numeroPaginas' => 384,
            'sinopsis' => 'Percy Jackson descubre que es un semidiós, hijo de Poseidón, y es llevado al Campamento Mestizo, un refugio para jóvenes como él. Cuando el rayo de Zeus es robado, Percy se embarca en una peligrosa misión para recuperarlo y evitar una guerra entre los dioses. Esta emocionante serie combina mitología griega con aventuras modernas y humor juvenil.',
            'imagenPortada' => './assets/images/49.jpg',
            'codigoLibro' => 'RR001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 9
        ]);

        Book::create([ //ID 50
            'titulo' => 'El extraño caso del Dr. Jekyll y Mr. Hyde',
            'autor' => 'Robert Louis Stevenson',
            'genero' => 'Novela psicológica',
            'añoPublicacion' => 1886,
            'numeroPaginas' => 144,
            'sinopsis' => 'En esta clásica novela, el respetable Dr. Jekyll desarrolla una droga que libera su lado oscuro, manifestado en la forma de Mr. Hyde. A medida que Jekyll lucha por controlar su alter ego malévolo, se sumerge en una exploración de la dualidad humana, el bien y el mal, y los límites de la identidad. Esta obra maestra del horror psicológico ha inspirado numerosas adaptaciones y sigue siendo relevante hoy en día.',
            'imagenPortada' => './assets/images/50.webp',
            'codigoLibro' => 'RLS001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 10
        ]);
        
        Book::create([ //ID 51
            'titulo' => 'Flores para Algernon',
            'autor' => 'Daniel Keyes',
            'genero' => 'Novela psicológica',
            'añoPublicacion' => 1959,
            'numeroPaginas' => 311,
            'sinopsis' => 'Charlie Gordon, un hombre con discapacidad intelectual, se somete a una cirugía experimental que aumenta su inteligencia. A medida que su mente se expande, Charlie registra su progreso y sus desafíos en un diario. A través de su viaje, Daniel Keyes explora temas de inteligencia, identidad y la naturaleza humana, en una narrativa emocionalmente poderosa.',
            'imagenPortada' => './assets/images/51.jpg',
            'codigoLibro' => 'DK001',
            'valoracion' => 4.7,
            'precio' => 17.99,
            'idCategoria' => 10
        ]);
        
        Book::create([ //ID 52
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'genero' => 'Literatura clásica',
            'añoPublicacion' => 1605,
            'numeroPaginas' => 1056,
            'sinopsis' => 'La obra cumbre de la literatura española, "Don Quijote de la Mancha" cuenta las aventuras de un hidalgo enloquecido que se cree caballero andante. Junto a su fiel escudero Sancho Panza, Don Quijote emprende una serie de extravagantes aventuras que exploran temas como la realidad y la locura. La obra es una sátira inteligente y una exploración profunda de la naturaleza humana.',
            'imagenPortada' => './assets/images/52.jpg',
            'codigoLibro' => 'MC001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 11
        ]);


        Book::create([ ////ID 53
            'titulo' => 'Romeo y Julieta',
            'autor' => 'William Shakespeare',
            'genero' => 'Romance',
            'añoPublicacion' => 1597,
            'numeroPaginas' => 320,
            'sinopsis' => 'Romeo y Julieta es una tragedia romántica que narra la historia de dos jóvenes amantes cuyas familias están enemistadas. Su amor prohibido desencadena una serie de eventos que culminan en un trágico final.',
            'imagenPortada' => './assets/images/53.jpg',
            'codigoLibro' => 'RJ001',
            'valoracion' => 4.6,
            'precio' => 12.99,
            'idCategoria' => 4 
        ]);
        
        Book::create([ ////ID 54
            'titulo' => 'Cumbres borrascosas',
            'autor' => 'Emily Brontë',
            'genero' => 'Romance',
            'añoPublicacion' => 1847,
            'numeroPaginas' => 416,
            'sinopsis' => 'La historia de Catherine y Heathcliff, dos amantes atormentados cuya pasión ardiente se ve obstaculizada por la venganza, los celos y las circunstancias sociales. Ambientada en la brumosa campiña inglesa, esta novela es un clásico del romance lleno de intensidad y drama.',
            'imagenPortada' => './assets/images/54.jpg',
            'codigoLibro' => 'EB001',
            'valoracion' => 4.7,
            'precio' => 14.99,
            'idCategoria' => 4
        ]);

        Book::create([ //ID 55
            'titulo' => 'Anna Karenina',
            'autor' => 'León Tolstói',
            'genero' => 'Literatura clásica',
            'añoPublicacion' => 1877,
            'numeroPaginas' => 864,
            'sinopsis' => 'En esta obra magistral, Tolstói presenta un retrato vívido de la sociedad rusa del siglo XIX a través de la historia de Anna Karenina, una mujer atrapada entre el deber y el deseo. La novela explora temas como el amor prohibido, el matrimonio, la moralidad y las consecuencias de nuestras acciones.',
            'imagenPortada' => './assets/images/55.jpg',
            'codigoLibro' => 'LT001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 11
        ]);

        Book::create([ //ID 56
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'genero' => 'Literatura clásica',
            'añoPublicacion' => 1949,
            'numeroPaginas' => 328,
            'sinopsis' => 'En esta distopía, George Orwell presenta un sombrío futuro donde un gobierno totalitario, encabezado por el Gran Hermano, controla todos los aspectos de la vida de los ciudadanos. Winston Smith, un hombre que trabaja en el Ministerio de la Verdad, se rebela contra el sistema opresivo en un mundo de vigilancia constante y manipulación de la verdad.',
            'imagenPortada' => './assets/images/56.jpg',
            'codigoLibro' => 'GO001',
            'valoracion' => 4.8,
            'precio' => 18.99,
            'idCategoria' => 11
        ]);

        Book::create([ //ID 57
            'titulo' => 'Moby Dick',
            'autor' => 'Herman Melville',
            'genero' => 'Literatura clásica',
            'añoPublicacion' => 1851,
            'numeroPaginas' => 624,
            'sinopsis' => 'En esta épica novela, el capitán Ahab busca vengarse de Moby Dick, la gran ballena blanca que le arrancó una pierna en un encuentro anterior. A bordo del barco ballenero Pequod, Ahab y su tripulación se enfrentan a peligros y desafíos en una obsesiva búsqueda que conduce a la destrucción. "Moby Dick" es una meditación profunda sobre la naturaleza humana, el destino y el poder de la obsesión.',
            'imagenPortada' => './assets/images/57.jpg',
            'codigoLibro' => 'HM001',
            'valoracion' => 4.6,
            'precio' => 16.99,
            'idCategoria' => 11
        ]);

        
        
    }
}
