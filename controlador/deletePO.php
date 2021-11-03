<?php
include "conexion.php";
session_start();
$correo=$_SESSION['ema'];


if (!isset($correo)) {
    
    header("location:../index.php");
 }
 $rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}

$eliminarPO=$_GET['eliP'];

$query="DELETE FROM `programa` WHERE `id_program`='$eliminarPO'";

mysqli_query($conn,$query);
echo "<script>
                  alert('Se elimino el programa exitosamente.');
                  window.location= '../vista/horarios.php';
              </script>";   






 ?>