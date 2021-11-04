<?php
include ('conexion.php');
session_start();
$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}

$sed=$_POST['sed'];
$nom_A=$_POST['nombre_ambiente'];
$capA=$_POST['capacidad'];
$N_E=$_POST['No_de_equipos'];

$query = "INSERT INTO `ambiente` (`id_A`, `Nombre_ambiente`, `Capacidad_ambiente`, `No_equipos`,`id_sede`) VALUES (NULL, '$nom_A ', '$capA', '$N_E','$sed')";
mysqli_query($conn,$query);

header("location:../vista/horarios.php?va=1");






?>