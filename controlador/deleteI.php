<?php 
//--------------------------------------------------------------
//----------------------------------------------
//----------------------------------------------
session_start();
if (!isset($correo)) {
    $correo=$_SESSION['ema'];
    header("location:../index.php");
 }

include "conexion.php";

$eliminar=$_GET['eli'];

$query="DELETE FROM instructor WHERE instructor.ID='$eliminar'";
mysqli_query($conn,$query);
header("location:../vista/horarios.php");





 ?>