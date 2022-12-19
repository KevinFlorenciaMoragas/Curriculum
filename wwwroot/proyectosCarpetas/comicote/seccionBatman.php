<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
    <header class="row">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <i class="bi bi-book"></i>Comicote
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Secciones
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="seccionBatman.php">Batman</a></li>
                                        <li><a class="dropdown-item" href="seccionCapitan.php">Capitan America</a></li>
                                        <li>
                                            <hr class="dropdown-divider" href="seccionSpiderman.php">
                                        </li>
                                        <li><a class="dropdown-item" href="login.php"><?php if (isset($_SESSION['Nombre'])) {
                                                                                                                        echo ($_SESSION['Nombre']);
                                                                                                                    } else {
                                                                                                                        echo ("Iniciar sesion");
                                                                                                                    } ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        <section class="row">
            <section id="fotoBatman" class="col-12 col-sm-12 col-md-6 col-lg-6">
                <img class="img-fluid" src="img/batmanSeccion.jpg">
            </section>
            <section id="textoBatman" class="col-12 col-sm-12 col-md-6 col-lg-6">
                <h1 class="text-center">Batman</h1>
                <p> Presenció el asesinato de sus padres cuando era niño lo marcó profundamente y lo llevó a entrenarse
                    en la perfección física e intelectual para ponerse un disfraz de murciélago con el fin de combatir
                    el crimen.</p>
            </section>
            <section class="row">
                <section class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h1>Enemigos</h1>
                </section>

                <section class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <section class="row">
                        <h2 class="text-center">Joker</h2>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                            <img src="img/joker.jpg" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                            <p id="contenidoVillanos">Si bien sus orígenes y rasgos han variado con el transcurso del
                                tiempo, por lo
                                general se le asocia con una personalidad psicópata con un humor sádico y retorcido​ lo
                                que le ha
                                llevado a ser catalogado como la antítesis de Batman. Ha estado involucrado en ciertos
                                momentos
                                decisivos de Batman, como el asesinato de Jason Todd y la parálisis de Barbara Gordon.
                                Su apariencia
                                física —caracterizada por el rostro desfigurado, la piel blanca, el cabello teñido de
                                verde y los
                                labios rojos— proviene de los efectos de la caída accidental del criminal en un
                                recipiente de
                                químicos.</p>
                        </div>
                    </section>
                </section>
                <section class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <section class="row">
                        <h2 class="text-center">Dos Caras</h2>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                            <img src="img/dosCaras.jpg" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                            <p id="contenidoVillanos">Una vez fue un sobresaliente fiscal de distrito de Gotham City,
                                Harvey Dent está marcado horriblemente en el lado izquierdo de su cara después que el
                                jefe de la mafia Sal Maroni lanza productos químicos ácidos en él durante un juicio en
                                la corte. Posteriormente, se vuelve loco y adopta la personalidad de "Dos Caras",
                                convirtiéndose en un criminal obsesionado con la dualidad y el conflicto entre el bien y
                                el mal. En los últimos años, los escritores han retratado la obsesión de Dos-Caras con
                                el azar y el destino como resultado de la esquizofrenia, el trastorno bipolar y el
                                trastorno de identidad disociativo. Él toma obsesivamente todas las decisiones
                                importantes al voltear su antiguo amuleto de la suerte, una moneda de dos cabezas que
                                también estaba dañada en un lado por el ácido. La versión moderna se establece como una
                                vez que ha sido un amigo personal y aliado de James Gordon y Batman.4​</p>
                        </div>
                    </section>
                </section>
                <section class="row">
                    <section class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="text-center">Mejores Comics</h1>
                        <h2 class="text-center">El largo Halloween</h2>
                    </section>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                        <img src="img/largoHalloween.jpg" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                        <p id="contenidoVillanos">La trama, que muestra un año completo de la vida de Batman y Gotham
                            City, está ambientada en los primeros años del hombre murciélago, presentando al héroe
                            intentando descubrir a un misterioso asesino, mientras al mismo tiempo que transcurre el
                            caso, ocurre una evolución en la galería de villanos del bat-universo, quienes pasan de
                            maleantes u mafiosos, a supervillanos con disfraces teatrales. Además, vuelve a relatar (con
                            importantes cambios que eliminan su clásico y marcado trastorno mental) el origen definitivo
                            de Dos Caras,​ alterando el anterior origen Post-Crisis expuesto en el Annual N.º 14 de la
                            serie Batman llamado "The Eye of Beholder" por su autor Andrew Helfer publicado en 1990.​
                        </p>
                        <b>Precio</b>
                        <b id="autores">8€</b>
                        <br>
                        <input type="button" value="Comprar" style="background-color: red; " id="buttonComprar">

                    </div>
                    <section class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="text-center">La Broma Asesina</h2>
                    </section>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                        <img src="img/BromaAsesina.jpg" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                        <p id="contenidoVillanos">La historia trata sobre temas como la locura, la maldad y el bien.4​
                            Su escritor expone al héroe y al villano como dos personajes sumamente parecidos y alude a
                            que ambos pasaron por momentos muy difíciles, que los llevaron a convertirse en lo que son.
                            También expone la posibilidad de que Batman esté tan enfermo mentalmente como el Joker, con
                            la diferencia fundamental de que El Caballero Oscuro demuestra y canaliza su locura de forma
                            diferente.The Killing Joke presenta numerosas influencias de la obra anterior del escritor,
                            Watchmen, y tiene prácticamente el mismo estilo en el uso de las viñetas y diversas técnicas
                            de representación gráfica, en las que cambian tanto los colores como los estilos de
                            diseño.​La novela se volvió una de las historias más importantes del Joker y de la editorial
                            y fue una de las pocas que se decidió conservar intactas en el relanzamiento que DC hizo de
                            todas sus historias en septiembre de 2011 como parte de su nueva línea argumental titulada
                            The New 52. El reinicio se debió a que deseaban darle nueva vida a sus personajes para
                            atraer a lectores más jóvenes.​ La obra también sirvió de inspiración para un gran número de
                            adaptaciones y trabajos cinematográficos sobre Batman, así como para diversos espectáculos.
                        </p>
                        <b>Precio</b>
                        <b id="autores">8€</b>
                        <br>
                        <input type="button" value="Comprar" style="background-color: red; " id="buttonComprar">

                    </div>
                </section>
                <section class="row">
                    <section class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h1>Peliculas</h1>
                        <h2>El Caballero Oscuro</h2>
                    </section>
                    <section class="col-12 col-sm-12 col-md-12 col-lg-12 item-align-center">
                        <div id="video_container">
                            <video controls width=1000 preload poster="img/caballero-oscuro.png" class="img-fluid">
                                <source src="/Practica 4/videos/DarkKnight.mp4" type="video/mp4">

                                <!-- LINK TO FLASH FALLBACK PLAYER HERE. COULD BE EMBED OR OBJECT ELEMENT -->
                            </video>
                        </div>

                    </section>
                </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>