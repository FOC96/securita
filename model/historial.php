<?php
require_once("conexion.php");
session_start();
$query = "SELECT a.fechaAlerta, a.horaAlerta, b.Zona, b.Estado, b.Municipio, c.nombreTipoAlerta,
d.descripcionReporte FROM zona b, alerta a, tipoalerta c, reporte d
WHERE a.idZona = b.idZona
AND a.idTipoAlerta = c.idTipoAlerta
AND d.idAlerta = a.idAlerta";
$res = mysqli_query($conexion,$query);
echo "<table>";
echo "<tr>";
echo "<th>Fecha</th><th>Hora</th><th>Zona</th><th>Estado</th><th>Municipio</th><th>Alerta</th>";
while($row=mysqli_fetch_array($res)){
  echo "<tr>";
  echo "<td>{$row['fechaAlerta']}</td>";
  echo "<td>{$row['horaAlerta']}</td>";
  echo "<td>{$row['Zona']}</td>";
  echo "<td>{$row['Estado']}</td>";
  echo "<td>{$row['Municipio']}</td>";
  echo "<td>{$row['nombreTipoAlerta']}</td>";
  echo "</tr>";
  echo "<tr><th>Descripcion</th></tr>";
  echo "<tr>";
  echo "<td colspan=6>{$row['descripcionReporte']}</td>";
  echo "</tr>";
}
echo "<table>";
?>
