<?php 
	$host ="127.0.0.1";
	$user = "";
	$pass ="";
	$database ="securitadb";


	$conexion = new mysqli($host, $user, $pass, $database);

	if ($conexion->connect_error) 
	{
    die("Connection failed: " . $conexion->connect_error);
	} 

 ?>