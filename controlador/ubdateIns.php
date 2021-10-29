<?php 
//----------------------------------------------
//----------------------------------------------
//----------------------------------------------
include("conexion.php");
 session_start();

  $correo=$_SESSION['ema'];
 
  
 if (!isset($correo)) {
    header("location:../index.php");
 }
  

$email=$_POST['correo'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$ced=$_POST['dnis'];
$rol=$_POST['rol'];
$ubd=$_GET['ubd'];

$query="UPDATE instructor set Nombre='$nom', Apellido='$ape', Cedula='$ced', email='$email', rol='$rol' where ID='$ubd'";
mysqli_query($conn,$query);

header("location:../vista/horarios.php");




?>