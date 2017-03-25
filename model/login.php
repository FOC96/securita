<?php
require_once("conexion.php");
if(isset($_POST['user']) && isset($_POST['pass'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $query = "SELECT idUsuario,count(*) as EXISTE FROM usuario WHERE correo='{$user}' AND contrasena='{$pass}' OR telefono = '{$user}' AND contrasena='{$pass}'";
  $res = mysqli_query($conexion,$query);
  $row=mysqli_fetch_array($res);
  if($row["EXISTE"]>0){
    session_start();
    $_SESSION["id"]=$row["idUsuario"];
    echo "ok";
  }
  else{
    echo "incorrecto";
  }
}
 ?>
