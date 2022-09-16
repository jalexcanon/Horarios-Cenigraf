<?php
include ('../conexion.php');
session_start();
$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}


$ficha=$_POST['fich'];
$cantidad_aprendices=$_POST['can_apren'];
$jornada=$_POST['jornad'];
$tipo_formacion=$_POST['tipof'];
$instructor_tecnico=$_POST['instructor_tecnico'];
$programa=$_POST['program'];

$verificar_ficha= mysqli_query($conn,"SELECT * FROM `ficha` where `Nº ficha`='$ficha'");

if (mysqli_num_rows($verificar_ficha) > 0) {

    //-----------fichaexise
	
    header("location:../vista/create-ficha.php?vl=2");	
} else  {
	 $query = "INSERT INTO `ficha` (`ID_F`, `Nº ficha`,`fc_cant_aprend`,`fc_jornada`,`fc_tipo_formacion`,`id_instructor`,`fc_id_programa`) 
     VALUES (NULL, '$ficha', '$cantidad_aprendices', '$jornada', '$tipo_formacion','$instructor_tecnico','$programa')";
  
   
    header("location:../../vista/create-ficha.php?vl=1"); 
  	
}

	
	mysqli_query($conn, $query); 
	 

  ?>