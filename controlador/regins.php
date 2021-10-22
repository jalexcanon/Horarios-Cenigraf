<?php
include ('conexion.php');

$email=$_POST['correo'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$ced=$_POST['dnis'];
$rol=$_POST['rol'];
$pcon=md5($_POST['contra']);
$scon=md5($_POST['contra2']);

function regi(){
	include("../vista/horarios.php");
}

$verificarcorreo= mysqli_query($conn,"SELECT * FROM instructor where email='$email'");

if (mysqli_num_rows($verificarcorreo) > 0) {
	
    regi();
	?>
    <h3>El correo ya está registrado, intente con otro correo</h3>
    <?php
	
}
elseif($pcon==$scon) {
	$query = "INSERT INTO `instructor` (`ID`, `Nombre`, `Apellido`, `Cedula`, `email`, `contrasena`, `rol`) VALUES (NULL,'$nom','$ape','$ced', '$email','$pcon','$rol')";

   regi();
    ?>
    <h3>Usuario Registrado</h3>
    <?php
  	
	mysqli_query($conn, $query); 
	 
}else {
	regi();
	?>
    <h3>La contraseña no coinside</h3>
    <?php
}




 


  ?>