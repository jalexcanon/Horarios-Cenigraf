<?php
include ('conexion.php');
session_start();
$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}

$ficha_fechas=$_POST['ficha_fecha'];
$date_i_I=$_POST['date_i_I'];     $date_f_I=$_POST['date_f_I'];
$date_i_II=$_POST['date_i_II'];   $date_f_II=$_POST['date_f_II'];
$date_i_III=$_POST['date_i_III']; $date_f_III=$_POST['date_f_III'];
$date_i_IV=$_POST['date_i_IV'];   $date_f_IV=$_POST['date_f_IV'];
$date_i_V=$_POST['date_i_V'];     $date_f_V=$_POST['date_f_V'];
$date_i_VI=$_POST['date_i_VI'];   $date_f_VI=$_POST['date_f_VI'];



	 $query = "INSERT INTO `tb_trimestre` (`id_T`, `date_Inc`, `date_Fin`, `id_fch`) VALUES 
     (NULL, '$date_i_I', '$date_f_I', '$ficha_fechas'), 
     (NULL, '$date_i_II', '$date_f_II', '$ficha_fechas'), 
     (NULL, '$date_i_III', '$date_f_III', '$ficha_fechas'), 
     (NULL, '$date_i_IV', '$date_f_IV', '$ficha_fechas'), 
     (NULL, '$date_i_V', '$date_f_V', '$ficha_fechas'), 
     (NULL, '$date_i_VI', '$date_f_VI', '$ficha_fechas');";
  
   
    header("location:../vista/horarios.php?vtf=1"); 
 

	
	mysqli_query($conn, $query); 
	 

  ?>