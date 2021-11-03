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
$idfc=$_GET['ubf'];
$fich=$_POST['fich'];
$cantap=$_POST['can_apren'];
$jor=$_POST['jornad'];
$tipf=$_POST['tipof'];
$cod_prog=$_POST['program'];
$dateI=$_POST['date_i'];
$dateF=$_POST['date_f'];


 $query="UPDATE ficha set `Nº ficha`='$fich', `fc_cant_aprend`='$cantap', `fc_jornada`='$jor',`fc_tipo_formacion` ='$tipf',`fic_date_I` ='$dateI', `fic_date_F`='$dateF' where `ID_F`='$idfc'";
 mysqli_query($conn,$query);
 echo "<script>
                  alert('Se actualizo la ficha exitosamente.');
                  window.location= '../vista/horarios.php';
              </script>";    








?>