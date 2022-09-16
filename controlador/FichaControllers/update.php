<?php
include("../conexion.php");
 session_start();

  $correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}
$id_ficha=$_GET['ubf'];
$ficha=$_POST['fich'];
$cantidad_aprendices=$_POST['can_apren'];
$jornada=$_POST['jornad'];
$tipo_formacion=$_POST['tipof'];
$instructor=$_POST['instructor_tecnico'];
$cod_programa=$_POST['program'];



 $query="UPDATE ficha set `Nº ficha`='$ficha', `fc_cant_aprend`='$cantidad_aprendices', 
 `fc_jornada`='$jornada',`fc_tipo_formacion` ='$tipo_formacion',`id_instructor` ='$instructor', 
 `fc_id_programa`='$cod_programa' where `ID_F`='$id_ficha'";
 mysqli_query($conn,$query);
 echo "<script>
     window.location= '../../vista/show-ficha.php?v=1';
      </script>";    
?>