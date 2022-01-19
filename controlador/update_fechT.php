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
$id_ficha=$_GET['id_F'];
$id_fech=$_POST['id_fech'];
$date_Iup=$_POST['date_Iup'];
$date_Fup=$_POST['date_Fup'];

mysqli_query($conn,"UPDATE tb_trimestre set Trim_date_Inc='$date_Iup', Trim_date_fin='$date_Fup' where id_T='$id_fech'");


$consulta=mysqli_query($conn,"SELECT * FROM tb_trimestre where id_T='$id_fech'");
$row=mysqli_fetch_array($consulta);

echo $row['Trim_date_Inc'];




// header("location:../vista/update_fechT.php?upfech=$id_ficha");
 ?>