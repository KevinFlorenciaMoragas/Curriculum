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
        <section class="main">
            <section class="col-lg-12 col-md-12 col-sm-12 col-12">
                <section class="row">
                    <section class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="img/castigador.jpg" class="img-fluid">
                    </section>
                    <section class="col-lg-8 col-md-8 col-sm-12 col-12" id="textoDescripcion">
                        <b id="etiquetas">Autores:</b>
                        <b id="autores">Jason Aaron, Jes??s Saiz, Paul Azaceta </b><br>
                        <b id="etiquetas">Editoriales</b>
                        <b id="autores">Panini Comics</b>
                        <p>
                            Frank Castle est?? determinado a utilizar a La Mano para poner fin a su guerra. Pero los
                            Ap??stoles de Guerra se niegan a que tal cosa ocurra. El Castigador nunca ha tenido enemigos
                            m??s duros. Y eso sin mencionar a Lady Bullseye y a Dama Mortal, contratadas para derrocar a
                            Frank como l??der de La Mano.
                        </p>
                        <input type="button" value="Comprar" style="background-color: red; " id="buttonComprar">
                    </section>
                </section>
            </section>
        </section>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>