<?php
require_once("conexion.php");
session_start();
$hoy = date("Y-m-d");
$ayer = strtotime ( '-15 day' , strtotime ( $hoy ) ) ;
$ayer = date ( 'Y-m-d' , $ayer );
$query = "SELECT COUNT(*) AS C, idTipoAlerta from alerta
WHERE fechaAlerta BETWEEN '{$ayer}' AND '{$hoy}'
GROUP BY idTipoAlerta
order BY C DESC
LIMIT 1";
$res = mysqli_query($conexion,$query);
$row=mysqli_fetch_array($res);
$idTipo = $row['idTipoAlerta'];

$query = "SELECT nombreTipoAlerta FROM tipoalerta WHERE idTipoAlerta={$idTipo}";
$res = mysqli_query($conexion,$query);
$row=mysqli_fetch_array($res);
$tipo = $row['nombreTipoAlerta'];

$query = "SELECT count(*) as total from alerta WHERE fechaAlerta BETWEEN '{$ayer}' AND '{$hoy}'";
$res = mysqli_query($conexion,$query);
$row=mysqli_fetch_array($res);
$total = $row['total'];

$query = "SELECT COUNT(*) AS C, idZona from alerta
WHERE fechaAlerta BETWEEN '{$ayer}' AND '{$hoy}'
GROUP BY idTipoAlerta
order BY C DESC
LIMIT 1";
$res = mysqli_query($conexion,$query);
$row=mysqli_fetch_array($res);
$idZona = $row['idZona'];

$query = "SELECT Estado, Municipio, Zona FROM zona WHERE idZona='{$idZona}'";
$res = mysqli_query($conexion,$query);
$row=mysqli_fetch_array($res);
$estado = $row['Estado'];
$municipio = $row['Municipio'];
$zona = $row['Zona'];

$query = "SELECT COUNT(*) AS C, HOUR(horaAlerta) as Hora
FROM alerta
WHERE fechaAlerta BETWEEN '{$ayer}' AND '{$hoy}'
GROUP BY HOUR(horaAlerta)
ORDER BY C DESC
LIMIT 1";
$res = mysqli_query($conexion,$query);
$row=mysqli_fetch_array($res);
$hora = $row['Hora'];


echo "<ul>";
echo "<li>Cantidad de registros: {$total}</li>";
echo "<li>Tipo de Delito con mas concurrencias: {$tipo}</li>";
echo "<li>Estado con mas concurrencias: {$estado}</li>";
echo "<li>Municipio con mas concurrencias: {$municipio}</li>";
echo "<li>zona con mas concurrencias: {$zona}</li>";
echo "<li>Horas mas concurrentes: {$hora}</li>";
echo "</ul>";
?>
