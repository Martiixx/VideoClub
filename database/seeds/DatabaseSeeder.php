<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Movie;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $arrayPeliculas = array(
        array(
            'title' => 'El padrino',
            'year' => '1972',
            'director' => 'Francis Ford Coppola',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjEyMjcyNDI4MF5BMl5BanBnXkFtZTcwMDA5Mzg3OA@@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusil�nime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
        ),
        array(
            'title' => 'El Padrino. Parte II',
            'year' => '1974',
            'director' => 'Francis Ford Coppola',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BNDc2NTM3MzU1Nl5BMl5BanBnXkFtZTcwMTA5Mzg3OA@@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Continuaci�n de la historia de los Corleone por medio de dos historias paralelas: la elecci�n de Michael Corleone como jefe de los negocios familiares y los or�genes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, lleg� a ser un poderos�simo jefe de la mafia de Nueva York.'
        ),
        array(
            'title' => 'La lista de Schindler',
            'year' => '1993',
            'director' => 'Steven Spielberg',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMzMwMTM4MDU2N15BMl5BanBnXkFtZTgwMzQ0MjMxMDE@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones p�blicas, organiza un ambicioso plan para ganarse la simpat�a de los nazis. Despu�s de la invasi�n de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una f�brica de Cracovia. All� emplea a cientos de operarios jud�os, cuya explotaci�n le hace prosperar r�pidamente. Su gerente (Ben Kingsley), tambi�n jud�o, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
        ),
        array(
            'title' => 'Pulp Fiction',
            'year' => '1994',
            'director' => 'Quentin Tarantino',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjE0ODk2NjczOV5BMl5BanBnXkFtZTYwNDQ0NDg4._V1_SY317_CR4,0,214,317_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misi�n: recuperar un misterioso malet�n. '
        ),
        array(
            'title' => 'Cadena perpetua',
            'year' => '1994',
            'director' => 'Frank Darabont',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BODU4MjU4NjIwNl5BMl5BanBnXkFtZTgwMDU2MjEyMDE@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la c�rcel de Shawshank. Con el paso de los a�os conseguir� ganarse la confianza del director del centro y el respeto de sus compa�eros de prisi�n, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.'
        ),
        array(
            'title' => 'El golpe',
            'year' => '1973',
            'director' => 'George Roy Hill',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY5MjM1OTAyOV5BMl5BanBnXkFtZTgwMDkwODg4MDE@._V1._CR52,57,915,1388_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Chicago, a�os treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso g�ngster (Robert Shaw). Para ello urdir�n un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.'
        ),
        array(
            'title' => 'La vida es bella',
            'year' => '1997',
            'director' => 'Roberto Benigni',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQwMTM2MjE4Ml5BMl5BanBnXkFtZTgwODQ2NTYxMTE@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intenci�n de abrir una librer�a. All� conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido har� lo imposible para hacer creer a su hijo que la terrible situaci�n que est�n padeciendo es tan s�lo un juego.'
        ),
        array(
            'title' => 'Uno de los nuestros',
            'year' => '1990',
            'director' => 'Martin Scorsese',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY2OTE5MzQ3MV5BMl5BanBnXkFtZTgwMTY2NTYxMTE@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Henry Hill, hijo de padre irland�s y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los g�ngsters de su barrio, donde la mayor�a de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece a�os, Henry decide abandonar la escuela y entrar a formar parte de la organizaci�n mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual ir� subiendo de categor�a. '
        ),
        array(
            'title' => 'Alguien volo sobre el nido del cuco',
            'year' => '1975',
            'director' => 'Milos Forman',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTk5OTA4NTc0NF5BMl5BanBnXkFtZTcwNzI5Mzg3OA@@._V1_SY317_CR12,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un esp�ritu libre que vive contracorriente, es recluido en un hospital psiqui�trico. La inflexible disciplina del centro acent�a su contagiosa tendencia al desorden, que acabar� desencadenando una guerra entre los pacientes y el personal de la cl�nica con la fr�a y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabell�n est� en juego.'
        ),
        array(
            'title' => 'American History X',
            'year' => '1998',
            'director' => 'Tony Kaye',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjMzNDUwNTIyMF5BMl5BanBnXkFtZTcwNjMwNDg3OA@@._V1_SY317_CR17,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Derek (Edward Norton), un joven "skin head" californiano de ideolog�a neonazi, fue encarcelado por asesinar a un negro que pretend�a robarle su furgoneta. Cuando sale de prisi�n y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano peque�o (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a �l lo condujo a la c�rcel.'
        ),
        array(
            'title' => 'Sin perdon',
            'year' => '1992',
            'director' => 'Clint Eastwood',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTkzNTc0NDc4OF5BMl5BanBnXkFtZTcwNTY1ODg3OA@@._V1_SY317_CR5,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades econ�micas para sacar adelante a su hijos. Su �nica salida es hacer un �ltimo trabajo. En compa��a de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendr� que matar a dos hombres que cortaron la cara a una prostituta.'
        ),
        array(
            'title' => 'El precio del poder',
            'year' => '1983',
            'director' => 'Brian De Palma',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjAzOTM4MzEwNl5BMl5BanBnXkFtZTgwMzU1OTc1MDE@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Tony Montana es un emigrante cubano fr�o y sanguinario que se instala en Miami con el prop�sito de convertirse en un g�ngster importante. Con la colaboraci�n de su amigo Manny Rivera inicia una fulgurante carrera delictiva con el objetivo de acceder a la c�pula de una organizaci�n de narcos.'
        ),
        array(
            'title' => 'El pianista',
            'year' => '2002',
            'director' => 'Roman Polanski',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTc4OTkyOTA3OF5BMl5BanBnXkFtZTYwMDIxNjk5._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Wladyslaw Szpilman, un brillante pianista polaco de origen jud�o, vive con su familia en el ghetto de Varsovia. Cuando, en 1939, los alemanes invaden Polonia, consigue evitar la deportaci�n gracias a la ayuda de algunos amigos. Pero tendr� que vivir escondido y completamente aislado durante mucho tiempo, y para sobrevivir tendr� que afrontar constantes peligros.'
        ),
        array(
            'title' => 'Seven',
            'year' => '1995',
            'director' => 'David Fincher',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQwNTU3MTE4NF5BMl5BanBnXkFtZTcwOTgxNDM2Mg@@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, est� a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendr�n que colaborar en la resoluci�n de una serie de asesinatos cometidos por un psic�pata que toma como base la relaci�n de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las v�ctimas, sobre los que el asesino se ensa�a de manera imp�dica, se convertir�n para los polic�as en un enigma que les obligar� a viajar al horror y la barbarie m�s absoluta.'
        ),
        array(
            'title' => 'El silencio de los corderos',
            'year' => '1991',
            'director' => 'Jonathan Demme',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQ2NzkzMDI4OF5BMl5BanBnXkFtZTcwMDA0NzE1NA@@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'El FBI busca a "Buffalo Bill", un asesino en serie que mata a sus v�ctimas, todas adolescentes, despu�s de prepararlas minuciosamente y arrancarles la piel. Para poder atraparlo recurren a Clarice Starling, una brillante licenciada universitaria, experta en conductas psic�patas, que aspira a formar parte del FBI. Siguiendo las instrucciones de su jefe, Jack Crawford, Clarice visita la c�rcel de alta seguridad donde el gobierno mantiene encerrado a Hannibal Lecter, antiguo psicoanalista y asesino, dotado de una inteligencia superior a la normal. Su misi�n ser� intentar sacarle informaci�n sobre los patrones de conducta de "Buffalo Bill".'
        ),
        array(
            'title' => 'La naranja mecanica',
            'year' => '1971',
            'director' => 'Stanley Kubrick',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY3MjM1Mzc4N15BMl5BanBnXkFtZTgwODM0NzAxMDE@._V1_SY317_CR0,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Gran Breta�a, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos m�s salvajes apaleando, violando y aterrorizando a la poblaci�n. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisi�n, se someter� voluntariamente a una innovadora experiencia de reeducaci�n que pretende anular dr�sticamente cualquier atisbo de conducta antisocial.'
        ),
        array(
            'title' => 'La chaqueta metalica',
            'year' => '1987',
            'director' => 'Stanley Kubrick',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjA4NzY4ODk4Nl5BMl5BanBnXkFtZTgwOTcxNTYxMTE@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Un grupo de reclutas se prepara en Parish Island, centro de entrenamiento de la marina norteamericana. All� est� el sargento Hartman, duro e implacable, cuya �nica misi�n en la vida es endurecer el cuerpo y el alma de los novatos, para que puedan defenderse del enemigo. Pero no todos los j�venes est�n preparados para soportar sus m�todos. '
        ),
        array(
            'title' => 'Blade Runner',
            'year' => '1982',
            'director' => 'Ridley Scott',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTA4MDQxNTk2NDheQTJeQWpwZ15BbWU3MDE2NjIyODk@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'A principios del siglo XXI, la poderosa Tyrell Corporation cre�, gracias a los avances de la ingenier�a gen�tica, un robot llamado Nexus 6, un ser virtualmente id�ntico al hombre pero superior a �l en fuerza y agilidad, al que se dio el nombre de Replicante. Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra. Despu�s de la sangrienta rebeli�n de un equipo de Nexus-6, los Replicantes fueron desterrados de la Tierra. Brigadas especiales de polic�a, los Blade Runners, ten�an �rdenes de matar a todos los que no hubieran acatado la condena. Pero a esto no se le llamaba ejecuci�n, se le llamaba "retiro". '
        ),
        array(
            'title' => 'Taxi Driver',
            'year' => '1976',
            'director' => 'Martin Scorsese',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQ1Nzg3MDQwN15BMl5BanBnXkFtZTcwNDE2NDU2MQ@@._V1_SY317_CR9,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Para sobrellevar el insomnio cr�nico que sufre desde su regreso de Vietnam, Travis Bickle (Robert De Niro) trabaja como taxista nocturno en Nueva York. Es un hombre insociable que apenas tiene contacto con los dem�s, se pasa los d�as en el cine y vive prendado de Betsy (Cybill Shepherd), una atractiva rubia que trabaja como voluntaria en una campa�a pol�tica. Pero lo que realmente obsesiona a Travis es comprobar c�mo la violencia, la sordidez y la desolaci�n dominan la ciudad. Y un d�a decide pasar a la acci�n.'
        ),
        array(
            'title' => 'El club de la lucha',
            'year' => '1999',
            'director' => 'David Fincher',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjIwNTYzMzE1M15BMl5BanBnXkFtZTcwOTE5Mzg3OA@@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Un joven hastiado de su gris y mon�tona vida lucha contra el insomnio. En un viaje en avi�n conoce a un carism�tico vendedor de jab�n que sostiene una teor�a muy particular: el perfeccionismo es cosa de gentes d�biles; s�lo la autodestrucci�n hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendr� un �xito arrollador.'
        )
    );
    
    private function seedCatalog(){
        DB::table('movies')->delete();
        foreach ($this->arrayPeliculas as $pelicula){
            $p = new Movie;
            $p->title =$pelicula['title'];
            $p->year =$pelicula['year'];
            $p->director =$pelicula['director'];
            $p->poster =$pelicula['poster'];
            $p->rented =$pelicula['rented'];
            //$p->synopsis =$pelicula['synopsis'];
            $p->save();
        }
    }
    
    private function seedUsers(){
        DB::table('users')->delete();
        $u = new User;
        $u2 = new User;
        $u->name="Martin";
        $u2->name="Juan";
        $u->email="Martin@correo.cl";
        $u2->email="Juan@correo.cl";
        $u->password=bcrypt('password');
        $u2->password=bcrypt('password');
        $u->save();
        $u2->save();
    }
    
    public function run()
    {
        //self::seedCatalog();		
        //$this->command->info('Tabla	cat�logo	inicializada	con	datos!'); 
        // $this->call(UsersTableSeeder::class);
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
    
   
}
