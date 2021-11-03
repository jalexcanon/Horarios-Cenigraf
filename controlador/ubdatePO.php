<?php
include("conexion.php");
 session_start();

  $correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}
$idpo=$_GET['ubPO'];
$nom_p=$_POST['nomp'];
$nivl_p=$_POST['nivel_prog'];
$comp=$_POST['texto'];


$query="UPDATE `programa` set `Nom_program`='$nom_p', `nivel_form`='$nivl_p', `competencias`='$comp' where `id_program`='$idpo'";
 mysqli_query($conn,$query);
 echo "<script>
                  alert('Se actualizo el programa exitosamente.');
                  window.location= '../vista/horarios.php';
              </script>";    





?>