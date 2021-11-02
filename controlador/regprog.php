<?php
//-----------------
include ('conexion.php');



$nom_p=$_POST['nomp'];
$nivl_p=$_POST['nivel_prog'];
$comp=$_POST['texto'];


$query = "INSERT INTO `programa` (`id_program`,`Nom_program`,`nivel_form`,`competencias`) VALUES (null,'$nom_p','$nivl_p','$comp');";
mysqli_query($conn, $query);  
   
header("location:../vista/horarios.php?vp=1"); 
  	


	
	 
	 

  ?>