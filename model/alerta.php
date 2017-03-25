<?php
require_once('conexion.php');
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$tipo = $_POST['tipo'];
$zona = $_POST['zona'];
echo $query = "INSERT INTO alerta(fechaAlerta, horaAlerta, latitud, longitud, idTipoAlerta, idZona)
          VALUE({$latitud},{$longitud},{$tipo},{$zona});";
mysqli_query($conexion,$query);
$query = "INSERT INTO reporte(idUsuario, idAlerta) VALUES
          VALUE({$_SESSION['id']},{$tipo});";
mysqli_query($conexion,$query);
?>
