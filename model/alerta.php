<?php
require_once('conexion.php');
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$tipo = $_POST['tipo'];
$zona = $_POST['zona'];
$query = "INSERT INTO alerta(fechaAlerta, horaAlerta, latitud, longitud, idTipoAlerta, idZona)
          VALUES((SELECT CURDATE()),(SELECT CURTIME()),{$latitud},{$longitud},{$tipo},{$zona});";
echo $query;
mysqli_query($conexion,$query);
$query = "INSERT INTO reporte(idUsuario, idAlerta) VALUES
          VALUES({1},{1});";
mysqli_query($conexion,$query);
echo $query;
?>
