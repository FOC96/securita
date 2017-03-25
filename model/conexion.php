<?php 
	$host ="127.0.0.1";
	$user = "root";
	$pass ="";
	$database ="securitadb";


	$conexion = new mysqli($host, $user, $pass, $database);

	if ($conexion->connect_error) 
	{
    	die("Connection failed: " . $conexion->connect_error);
	} else {
		$conexion->query("SET NAMES 'utf8'");
	}
 ?>