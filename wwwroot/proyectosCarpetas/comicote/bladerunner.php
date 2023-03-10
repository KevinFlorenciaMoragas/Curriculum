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
                        <img src="img/blade_runner_2019_2.jpg" class="img-fluid">
                    </section>
                    <section class="col-lg-8 col-md-8 col-sm-12 col-12" id="textoDescripcion">
                        <b id="etiquetas">Autores:</b>
                        <b id="autores">Andr??s Guinaldo, Marco Lesko, Mike Johnson </b><br>
                        <b id="etiquetas">NORMA Editorial</b>
                        <b id="autores">NORMA Editorial </b>
                        <p>LLEGA LA CONCLUSI??N DE ESTA NUEVA AVENTURA INSPIRADA EN LA PEL??CULA DE RIDLEY SCOTT</p>
                        <p>Los ??ngeles, 2029. La ciudad est?? bajo asedio del ej??rcito de replicantes mejorados de Yotun.
                            Su muralla mar??tima ha sido hecha pedazos, la torre del departamento de polic??a ha ardido
                            hasta los cimientos, y en las calles reina el caos, con numerosos replicantes rebel??ndose
                            contra sus propietarios humanos.
                        </p>
                        <p>Mientras tanto, la Blade Runner Aahna Ashina ha conseguido reunirse con Freysa, su pareja
                            replicante, pero tambi??n ha acabado convirti??ndose en sospechosa de la divisi??n Blade
                            Runner. El tiempo empieza a acab??rsele a Ashina, que lucha desesperadamente para detener a
                            Yotun de una vez por todas, mientras se mantiene fuera del alcance de la justicia...</p>
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