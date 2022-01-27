<?php 
include ('../../controlador/conexion.php');
session_start();
$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}

$ficha=$_GET['fich'];
$estado=$_GET['est'];
$trim_f=$_SESSION['trim'];

if ($estado==1) {
	mysqli_query($conn,"UPDATE tb_trimestre set estatus_trim_H=0 where id_fch=$ficha and Trimestre='$trim_f'");
	header("location:horarios_ficha.php?ficha=$ficha");
	
}elseif ($estado==2) {
	mysqli_query($conn,"UPDATE tb_trimestre set estatus_trim_H=1 where id_fch=$ficha and Trimestre='$trim_f'");
	header("location:horarios_ficha.php?ficha=$ficha");
}

 ?>