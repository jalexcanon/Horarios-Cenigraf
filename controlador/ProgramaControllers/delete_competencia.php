<?php
include "../conexion.php";
session_start();
$correo=$_SESSION['ema'];


if (!isset($correo)) {
    
    header("location:../../index.php");
 }
 $rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../../horarios.php');
}

$id_competencia=$_GET['delete'];


$query="DELETE FROM competencias WHERE id ='$id_competencia'";
mysqli_query($conn,$query);
 ?>