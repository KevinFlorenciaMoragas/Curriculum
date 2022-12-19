<?php
include"db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesChat.css">
    <title>Document</title>
</head>

<body>
    <div id="contenedor">
        <div id="caja-chat">
            <div id="chat">
                <?php
                    $consulta = "SELECT * FROM chat ORDER BY id DESC";
                    $ejecutar = $conexion->query($consulta);
                    while($fila = $ejecutar->fetch_array());
                ?>
                <div id="datos-chat">
                    <span style="color: #1c62c4;"><?php echo $fila['nombre']; ?></span>
                    <span> <?php echo $fila['mensaje']; ?></span>
                    <span><?php echo $fila['fecha']; ?></span>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <form method="POST" action="index.php">
            <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $nombre = $_POST['nombre'];
                $mensaje = $_POST['mensaje'];
                $consulta = "INSERT INTO chat(nombre,mensaje) VALUES ('$nombre','$mensaje')";
                $ejecutar = $conexion->query($consulta);
                if($ejecutar){
                    echo "<embed loop='false' src="
                }
            }
        
        
        ?>
    </div>
</body>

</html>