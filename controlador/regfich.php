<?php
include ('conexion.php');


$fich=$_POST['fich'];
$nomprom=$_POST['nomp'];
$nivelf=$_POST['nivel'];
$trim=$_POST['trime'];




$verificarficha= mysqli_query($conn,"SELECT * FROM `ficha` where `Nº ficha`='$fich'");

if (mysqli_num_rows($verificarficha) > 0) {

    //-----------fichaexise
	
    header("location:../vista/horarios.php?vl=2");	
}else{
	$query = "INSERT INTO `ficha` (`ID_F`, `Nº ficha`, `Nombre_programa`, `nivel_formacion`, `trimestre_actual`) VALUES (NULL, '$fich', '$nomprom', '$nivelf', '$trim');";
  
   
    header("location:../vista/horarios.php?vl=1"); 
  	
}

	
	mysqli_query($conn, $query); 
	 

  ?>