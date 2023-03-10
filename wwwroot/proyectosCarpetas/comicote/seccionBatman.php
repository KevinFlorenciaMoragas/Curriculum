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
                <p> Presenci?? el asesinato de sus padres cuando era ni??o lo marc?? profundamente y lo llev?? a entrenarse
                    en la perfecci??n f??sica e intelectual para ponerse un disfraz de murci??lago con el fin de combatir
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
                            <p id="contenidoVillanos">Si bien sus or??genes y rasgos han variado con el transcurso del
                                tiempo, por lo
                                general se le asocia con una personalidad psic??pata con un humor s??dico y retorcido??? lo
                                que le ha
                                llevado a ser catalogado como la ant??tesis de Batman. Ha estado involucrado en ciertos
                                momentos
                                decisivos de Batman, como el asesinato de Jason Todd y la par??lisis de Barbara Gordon.
                                Su apariencia
                                f??sica ???caracterizada por el rostro desfigurado, la piel blanca, el cabello te??ido de
                                verde y los
                                labios rojos??? proviene de los efectos de la ca??da accidental del criminal en un
                                recipiente de
                                qu??micos.</p>
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
                                Harvey Dent est?? marcado horriblemente en el lado izquierdo de su cara despu??s que el
                                jefe de la mafia Sal Maroni lanza productos qu??micos ??cidos en ??l durante un juicio en
                                la corte. Posteriormente, se vuelve loco y adopta la personalidad de "Dos Caras",
                                convirti??ndose en un criminal obsesionado con la dualidad y el conflicto entre el bien y
                                el mal. En los ??ltimos a??os, los escritores han retratado la obsesi??n de Dos-Caras con
                                el azar y el destino como resultado de la esquizofrenia, el trastorno bipolar y el
                                trastorno de identidad disociativo. ??l toma obsesivamente todas las decisiones
                                importantes al voltear su antiguo amuleto de la suerte, una moneda de dos cabezas que
                                tambi??n estaba da??ada en un lado por el ??cido. La versi??n moderna se establece como una
                                vez que ha sido un amigo personal y aliado de James Gordon y Batman.4???</p>
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
                        <p id="contenidoVillanos">La trama, que muestra un a??o completo de la vida de Batman y Gotham
                            City, est?? ambientada en los primeros a??os del hombre murci??lago, presentando al h??roe
                            intentando descubrir a un misterioso asesino, mientras al mismo tiempo que transcurre el
                            caso, ocurre una evoluci??n en la galer??a de villanos del bat-universo, quienes pasan de
                            maleantes u mafiosos, a supervillanos con disfraces teatrales. Adem??s, vuelve a relatar (con
                            importantes cambios que eliminan su cl??sico y marcado trastorno mental) el origen definitivo
                            de Dos Caras,??? alterando el anterior origen Post-Crisis expuesto en el Annual N.?? 14 de la
                            serie Batman llamado "The Eye of Beholder" por su autor Andrew Helfer publicado en 1990.???
                        </p>
                        <b>Precio</b>
                        <b id="autores">8???</b>
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
                        <p id="contenidoVillanos">La historia trata sobre temas como la locura, la maldad y el bien.4???
                            Su escritor expone al h??roe y al villano como dos personajes sumamente parecidos y alude a
                            que ambos pasaron por momentos muy dif??ciles, que los llevaron a convertirse en lo que son.
                            Tambi??n expone la posibilidad de que Batman est?? tan enfermo mentalmente como el Joker, con
                            la diferencia fundamental de que El Caballero Oscuro demuestra y canaliza su locura de forma
                            diferente.The Killing Joke presenta numerosas influencias de la obra anterior del escritor,
                            Watchmen, y tiene pr??cticamente el mismo estilo en el uso de las vi??etas y diversas t??cnicas
                            de representaci??n gr??fica, en las que cambian tanto los colores como los estilos de
                            dise??o.???La novela se volvi?? una de las historias m??s importantes del Joker y de la editorial
                            y fue una de las pocas que se decidi?? conservar intactas en el relanzamiento que DC hizo de
                            todas sus historias en septiembre de 2011 como parte de su nueva l??nea argumental titulada
                            The New 52. El reinicio se debi?? a que deseaban darle nueva vida a sus personajes para
                            atraer a lectores m??s j??venes.??? La obra tambi??n sirvi?? de inspiraci??n para un gran n??mero de
                            adaptaciones y trabajos cinematogr??ficos sobre Batman, as?? como para diversos espect??culos.
                        </p>
                        <b>Precio</b>
                        <b id="autores">8???</b>
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