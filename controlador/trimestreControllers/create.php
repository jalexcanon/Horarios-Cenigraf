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

$date_I=$_POST['date_i_I'];     $date_f_I=$_POST['date_f_I']; $valor_1=$_POST['valor_I'];
$date_II=$_POST['date_i_II'];   $date_f_II=$_POST['date_f_II']; $valor_2=$_POST['valor_II'];
$date_III=$_POST['date_i_III']; $date_f_III=$_POST['date_f_III']; $valor_3=$_POST['valor_III'];
$date_IV=$_POST['date_i_IV'];   $date_f_IV=$_POST['date_f_IV']; $valor_4=$_POST['valor_IV'];

$query = "INSERT INTO `trimestres` (`id`,`fecha_inicio`,`fecha_fin`,`trimestre`) VALUES 
     (NULL, '$date_i_I', '$date_f_I','$valor_1'),
     (NULL,'$date_i_II', '$date_f_II','$valor_2'),
     (NULL,'$date_i_III', '$date_f_III','$valor_3'),
     (NULL,'$date_i_IV', '$date_f_IV','$valor_4')";
 $querys=mysqli_query($conn,"UPDATE ficha set `estatus_trim`=1 where ID_F='$ficha_fechas'");
 
  
   
    header("location:../../vista/create-trimestre.php?vtf=1"); 
 

	
	mysqli_query($conn, $query); 
	 

  ?>