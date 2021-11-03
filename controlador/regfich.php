<?php
include ('conexion.php');

$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}


$fich=$_POST['fich'];
$cantap=$_POST['can_apren'];
$jor=$_POST['jornad'];
$tipf=$_POST['tipof'];
$cod_prog=$_POST['program'];
$dateI=$_POST['date_i'];
$dateF=$_POST['date_f'];





$verificarficha= mysqli_query($conn,"SELECT * FROM `ficha` where `Nº ficha`='$fich'");

if (mysqli_num_rows($verificarficha) > 0) {

    //-----------fichaexise
	
    header("location:../vista/horarios.php?vl=2");	
}else{
	 $query = "INSERT INTO `ficha` (`ID_F`, `Nº ficha`,`fc_cant_aprend`,`fc_jornada`,`fc_tipo_formacion`,`fic_date_I`,`fic_date_F`,`fc_id_programa`) VALUES (NULL, '$fich', '$cantap', '$jor', '$tipf','$dateI','$dateF','$cod_prog');";
  
   
    header("location:../vista/horarios.php?vl=1"); 
  	
}

	
	mysqli_query($conn, $query); 
	 

  ?>