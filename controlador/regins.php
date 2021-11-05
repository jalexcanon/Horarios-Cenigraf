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

$email=$_POST['correo'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$ced=$_POST['dnis'];
$rol=$_POST['rol'];
$pcon=md5($_POST['contra']);
$scon=md5($_POST['contra2']);



$verificarcorreo= mysqli_query($conn,"SELECT * FROM instructor where email='$email'");
$verifiCC= mysqli_query($conn,"SELECT * FROM instructor where Cedula='$ced'");

if (mysqli_num_rows($verificarcorreo) > 0) {

    //------------------
    header("location:../vista/horarios.php?v=2");	
}elseif (mysqli_num_rows($verifiCC) > 0) {
  
  header("location:../vista/horarios.php?v=4"); 

}elseif($pcon==$scon) {
	$query = "INSERT INTO `instructor` (`ID`, `Nombre`, `Apellido`, `Cedula`, `email`, `contrasena`, `rol`) VALUES (NULL,'$nom','$ape','$ced', '$email','$pcon','$rol')";
  
   
    header("location:../vista/horarios.php?v=1"); 
  	
	mysqli_query($conn, $query); 
	 
}else {
    
	  header("location:../vista/horarios.php?v=3"); 
}
  ?>