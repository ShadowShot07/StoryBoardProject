<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!---------------------------- 
        Link al css o a los css 
    ----------------------------->
    <link rel="stylesheet" href="styles/style.css">

    <!--------------- 
        Canvas 
    ----------------->

    <title>John Green</title>
</head>

<body>

    <!-------------------------------------- 
        div que coge todo el contenido 
    --------------------------------------->
    <div class="container">
        <header>
            <!----------------------------- 
                div para el logo 
            
            <div class="logo">
                <img src="#" alt="">
            </div> ------------------------------>
            <!-------------------------------
                div que contiene el navbar
             ------------------------------->
            <div class="navbar">
                <input type="checkbox" id="menu">
                <label for="menu"> Menu </label>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Example 1</a>
                        </li>
                        <li>
                            <a href="#">Example 2</a>
                        </li>
                        <li>
                            <a href="#">Example 3</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!----------------------------------------
            Empieza el contenido de la página
         ---------------------------------------->
        <div class="body-page">
            <div class="carousel">
                <div class="carousel-inner">
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item">
                        <img src="img/johnGreenLibro2.png">
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="img/johnGreenLibro4.jpg">
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="img/johnGreenLibro6.jpg">
                    </div>
                    <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                    <label for="carousel-2" class="carousel-control next control-1">›</label>
                    <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                    <label for="carousel-3" class="carousel-control next control-2">›</label>
                    <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                    <label for="carousel-1" class="carousel-control next control-3">›</label>
                    <ol class="carousel-indicators">
                        <li>
                            <label for="carousel-1" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-2" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-3" class="carousel-bullet">•</label>
                        </li>
                    </ol>
                </div>
            </div>
            <!---------------------------
                Secciones de la página
             --------------------------->
            <section>
                <h2>Biografia de John Green</h2>
                <div>
                    John Green nació el 24 de agosto del año 1977 en la ciudad de Indianapolis, Indiana (Estados Unidos). Es hijo de Sydney Green y de Mike Green,
                    quien fue director de un centro de Conservación Natural.En su niñez vivió en Orlando, Florida, en donde sufrió acoso escolar.
                    Las cosas mejoraron para John cuando su familia se trasladó al estado de Alabama, concretamente a Birmingham, y fue internado en la Indian Spings School.
                    Estudió Lengua Inglesa y Estudios Religiosos en la Kenyon College de Ohio. Trabajó como capellán en un hospital pediátrico y como asistente editorial.
                </div>
                <div>
                    <img src="img/johnGreen2.jpeg" width="300" height="300">
                </div>
            </section>
            <section>
                <h3>Libros del autor</h3>
                <div>
                    <div>
                        <img src="img/johnGreenLibro1.jpg" width="300" height="300">
                    </div>
                    <div>
                        <h4>Bajo la misma estrella</h4>
                        <div>
                            Hazel tenía un libro favorito el cual compartió con Augustus titulado Un dolor imperial, escrito por Peter Van Houten, un bohemio norteamericano
                            que residía en Ámsterdam, quien no solía dar conferencias de prensa ni responder las cartas de sus admiradores. Él les responde que no les dirá que ocurre
                            después del final de Un dolor imperial a no ser que se vean en persona, por lo que los invita a viajar a Ámsterdam. Lo cual, lleva a Gus a utilizar el deseo
                            que la fundación The Genies les entrega a los niños con cáncer y decide usarlo para viajar con Hazel a Ámsterdam, a conocer al autor de la maravillosa novela.
                            Después de recibir el alta y algunas consultas a sus doctores, Hazel consigue el permiso para viajar a Ámsterdam con su madre y con Gus.
                        </div>
                    </div>
                    <div>
                        <img src="img/johnGreenLibro3.jpg" width="300" height="300">
                    </div>
                    <div>
                        <h4>Mil veces hasta siempre</h4>
                        <div>
                            Aza nunca tuvo intención de investigar el misterio del multimillonario fugitivo Russell Pickett. Pero hay una recompensa de cien mil dólares en juego y
                            su mejor y más intrépida amiga, Daisy, no está dispuesta a dejarla escapar. Así, juntas, recorrerán la corta distancia y las enormes diferencias que les
                            separan del hijo de Russell Pickett, Davis.
                            Aza lo está intentando. Trata de ser una buena hija, una buena amiga, una buena estudiante y, tal vez, incluso una buena detective,
                            mientras vive en la espiral cada vez más estrecha de sus propios pensamientos.
                        </div>
                    </div>
                    <div>
                        <img src="img/johnGreenLibro5.jpg" width="300" height="300">
                    </div>
                    <div>
                        <h4>Ciudades de papel</h4>
                        <div>
                            Una joven desaparece dejando una serie de pistas que solo su mejor amigo de la infancia podrá descifrar...En su último año de instituto, Quentin no ha
                            aprobado ni en popularidad ni en asuntos del corazón. Pero todo cambia cuando su vecina, la legendaria, inalcanzable y enigmática Margo Spiegelman, se
                            presenta en mitad de la noche para proponerle que le acompañe en un plan de venganza inaudito. Después de una intensa noche que reaviva el vínculo de
                            una infancia compartida y parece sellar un nuevo destino para ambos, Margo desaparece dejando tras de sí un extraño cerco de pistas que solamente Quentin
                            posee la clave para descifrar.
                        </div>
                    </div>
                    <div>
                        <img src="img/johnGreenLibro7.jpg" width="300" height="300">
                    </div>
                    <div>
                        <h4>Buscando a Alaska</h4>
                        <div>
                            Cansado de su aburrida existencia, Miles, de 16 años, se muda a un colegio internado para ir en busca de lo que el poeta Rabelais llamó el “Gran quizá”.
                            Ahí, su recién descubierta libertad y una enigmática chica, Alaska, lo lanzan de lleno a la vida. Pero cuando Miles siente que está por alcanzar su objetivo,
                            una tragedia inesperada amenaza con arrebatárselo.
                        </div>
                    </div>
                    <div>
                        <img src="img/johnGreenLibro9.jpg" width="300" height="300">
                    </div>
                    <div>
                        <h4>El teorema Katherine</h4>
                        <div>
                            Según Colin Singleton existen dos tipos de persona: los que dejan y los que son dejados. Él, sin duda, pertenece al segundo.
                            Su última ex, Katherine XIX, no es una reina, sino la Katherine número diecinueve que le ha roto el corazón.
                            Para escapar de su mal de amores, y con el propósito de hallar un teorema que explique su maldición de las Katherines, Colin emprende junto a su
                            amigo Hassan una aventura que le llevará a Gutshot, un pueblecito de Tennessee, y a la sospecha de que en la vida la inteligencia no siempre es la mejor
                            compañera de viaje.
                        </div>
                    </div>
                    <div>
                        <img src="img/johnGreenLibro11.jpg" width="300" height="300">
                    </div>
                    <div>
                        <h4>Let It Snow</h4>
                        <div>
                            Una tormenta en Navidad sepulta a los residentes de Gracetown bajo metros de nieve causando el caos. Una alma aventurera se adentra en la tormenta,
                            saliendo de su tren atascado y se ve envuelta en sucesos que cambiarán algunas vidas. Durante los próximos tres días una chica se hará un arriesgado
                            corte de pelo, tres amigos correrán para ganar una carrera hasta The Waffle House (y los hash brown como premio) y el destino de un pequeño cerdito está
                            en las manos de una camarera con problemas amorosos.
                        </div>
                    </div>
                </div>
            </section>
            <!------------------------------------------------------------
            Termina el div con el contenido principal de la página
         ------------------------------------------------------------>
        </div>
        <!----------------------
            div para el footer
         ---------------------->
        <div>
            <footer>
                <div>

                </div>
                <div>

                </div>
            </footer>
        </div>
        <!------------------------------
        Cierre del div container
     ------------------------------>
    </div>
</body>

</html>