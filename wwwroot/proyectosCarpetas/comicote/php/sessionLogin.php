<?php
if(!empty($_POST["login"])){
    if(empty($_POST["Email"]) && empty($_POST["Contraseña"])){
        echo "<script>alert('Datos incorretos');</script";
    }else{
        $Password =$_POST["Contraseña"];
        $Email =$_POST["Email"];
        $sql = $connection->query("SELECT * FROM $database_name.$table_name WHERE `Email` ='$Email' and `Contraseña`='$Password'");
        $sqlString = ("SELECT * FROM $database_name.$table_name WHERE `Email` ='$Email' and `Contraseña`='$Password'");
        $query = mysqli_query($connection,$sqlString);
        $numrows = mysqli_num_rows($query);
        //$consulta = "SELECT * FROM $database_name.$table_name WHERE `Email`='$Email' and `Contraseña`='$Password'";
        $resultado=mysqli_query($connection,$sqlString);
        $filas = mysqli_fetch_array($resultado);

        if($datos = $sql->fetch_object()){
            session_start();
            $_SESSION['id'] = $datos->id;
            $_SESSION['Nombre'] = $datos->Nombre;
            $_SESSION['Apellido1'] = $datos->Apellido1;
            $_SESSION['Apellido2'] = $datos->Apellido2;
            $_SESSION['Telefono'] = $datos->Telefono;
            $_SESSION['Email'] = $datos->Email;
            header('Location: index.php');
        }else{
          //  $_POST['mensaje']="Datos incorrectos";
          echo "<script>alert('Datos incorretos');</script";
        }
    }
}
