<?php 

session_start();
include "conexion.php";

$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}


$eliminar=$_GET['eli'];
$ins=$_SESSION['inst'];

$query="DELETE FROM `horarios` WHERE `horarios`.`id_hora` ='$eliminar'";
mysqli_query($conn,$query);
header("location:../vista/admin/horarios_beta.php?instructor=$ins");





 ?>