<?php
	require_once 'conexion.php';
	if(isset($_POST['nombre'],$_POST['correo'],$_POST['telefono'],$_POST['pass'])){
		$query = 'INSERT INTO usuario(nombreUsuario, correo, telefono,contrasena) VALUES (\''.$_POST['nombre'].'\', \''.$_POST['correo'].'\',\''.$_POST['telefono'].'\',\''.$_POST['pass'].'\');';
		if ($resultado = $conexion->query($query)) {
		    echo '1';
		} else {
			echo '2';
		}
	} else {
		echo '3';
	}
?>