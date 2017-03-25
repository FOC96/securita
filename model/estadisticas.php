<?php
	require_once 'conexion.php';
	if(isset($_POST[''])){
		$query = 'INSERT INTO reporte(idUsuario, idAlerta,descripcion) VALUES (\''.$_SESSION['id'].'\', \''.$_POST['idAlerta'].'\',\''.$_POST['descripcion'].');';
		if ($resultado = $conexion->query($query)) {
		    echo '1';
		} else {
			echo '2';
		}
	} else{
		echo '3';
	}
?>