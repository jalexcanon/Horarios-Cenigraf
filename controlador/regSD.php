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

$nombreC=$_POST['nombreC'];
$Direc=$_POST['Direc'];
$phone=$_POST['phone'];

$query = "INSERT INTO `sede` (`id`,`nombre_sede`,`direccion_sede`,`telefono_sede`) VALUES (NULL, '$nombreC', '$Direc', '$phone');";
mysqli_query($conn, $query); 

   
header("location:../vista/horarios.php?vs=1"); 
  		
	


?>