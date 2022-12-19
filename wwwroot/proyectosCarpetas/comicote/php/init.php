<?php 

	//print("estoy en initdb");
	require_once("MySQLdb.php");
	
	if(isset($_POST['actionSubmitCreate'])) $_POST['Control']="Create";
	if(isset($_POST['actionSubmitLogin'])) $_POST['Control']="Login";
	if(isset($_POST['actionSubmitUpdate'])) $_POST['Control'] ="Update";
	$db = new MySQLdb();
	//require_once("../loginV2.php");
?>