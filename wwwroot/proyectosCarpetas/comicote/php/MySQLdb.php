<?php

class MySQLdb{


	//Properties

	 private $server = "localhost";
	 private $username = "root";
	 private $password = "";
	 private $database_name = "comicote";
	 private $table_name = "clientes";
	 private $connection;
	 private $tableFields ="";


	//Builder
	function __construct(){
		$Control = $_POST['Control'];
		//1-conectar al servidor
		$this->connectToServerDataBase();
		//2-Crear base de datos
		$this->createDataBase();
		//3-campos 
		$this->defineTableField1();
		//crear tabla
		$this->createTable();
		//insertar		
		if($Control == "Create") $this -> functionInsertRegister();
		if($Control == "Login") $this -> functionLogin();
		if($Control == "Update") $this -> functionUpdate1();
	}


	function connectToServerDataBase(){
		$this->connection = mysqli_connect($this->server, $this->username, $this->password);
	}
	function createDataBase()
	{
		$query = "CREATE DATABASE IF NOT EXISTS $this->database_name";
		$ok = mysqli_query($this->connection, $query);
	}
	function createTable()
	{
	 $query = "CREATE TABLE IF NOT EXISTS $this->database_name.$this->table_name($this->tableFields) ENGINE = MYISAM";
		$ok = mysqli_query($this->connection, $query);
	}
	function defineTableField1(){
		$this->tableFields = "
		`id` int(6) NOT NULL AUTO_INCREMENT,
		`Nombre` varchar(20) NOT NULL,
		`Apellido1` varchar(20) NOT NULL,
		`Apellido2` varchar(20),
		`Telefono` varchar(20) NOT NULL,
		`Email` varchar(40) NOT NULL,
		`Contraseña` varchar(40) NOT NULL,
		 PRIMARY KEY (`id`)";
	}
	function functionInsertRegister(){
		$Nombre = $_POST["Nombre"];
		$Apellido1 = $_POST["Apellido1"];
		$Apellido2 = $_POST["Apellido2"];
		$Telefono = $_POST["Telefono"];
		$Contraseña = $_POST["Contraseña"];
		$Mail = $_POST["Email"];
		$query = "INSERT INTO $this->database_name.$this->table_name(`Nombre`,`Apellido1`,`Apellido2`,`Telefono`,`Contraseña`,`Email`) VALUES ('$Nombre','$Apellido1', '$Apellido2','$Telefono','$Contraseña','$Mail');";
		$ok = mysqli_query($this->connection,$query);
		if($ok){
			$_POST["Result"] = "Insert correcto";
			header('Location: ../index.php');
		}else{
			$_POST["Result"] = "Insert no correcto";
		}
	}
	function functionLogin(){
		$Email = $_POST["Email"];
		$Contraseña = $_POST["Contraseña"];
		$sql = "SELECT Email, Contraseña FROM  $this->database_name.$this->table_name WHERE `Contraseña` = '$Contraseña' AND `Email` = '$Email'";
		$result = mysqli_query($this-> connection,$sql);
		if(mysqli_num_rows($result) > 0){
			//header('Location: ../index.php');
		}else{
			$_POST["Result"] ="Los datos no son correctos";
		}
	}
	function functionRead1()
	{
		$Login = $_POST["Nombre"];
		$Password = $_POST["Contraseña"];
		$query = mysqli_query($this->connection, "SELECT * FROM $this->database_name.$this->table_name WHERE `Nombre`='$Login' and `Contraseña`='$Password'");
		$numrows = mysqli_num_rows($query);
		if ($numrows > 0) {
			$_POST["Result"] ="Read OK => Num rows: " . $numrows;
		}else{
			$_POST["Result"] ="Read Not Ok";
		} 
		return $numrows;
	}

		function functionUpdate1()
		{
			$Login = $_POST["Nombre"];
			$Password = $_POST["Contraseña"];
			$Password2 = $_POST["ContraseñaNueva"];
			$numrows = $this->functionRead1();
			if ($numrows > 0) {
				if ($Password != $Password2) {
					$query = "UPDATE $this->database_name.$this->table_name SET `Contraseña`='$Password2' WHERE `Nombre`='$Login'";
					$ok = mysqli_query($this->connection, $query);
					if ($ok){
					//	$_POST["Result"] ="Update Ok";
					echo "<script> alert('Cambio Correto')</script>";
					header('Location: ../areaCliente.php');
					} 
					else{
						//$_POST["Result"] ="Update Not Ok";
						echo "<script> alert('Cambio Incorrecto')</script>";
					} 
				} else {
					//$_POST["Result"] = "Password and Password 2 are the same";
					echo "<script> alert('Password and Password 2 are the same')</script>";
				}
			} else {
				//$_POST["Result"] = "Num rows is equal 0 or less";
			}
		}
        
    }


?>