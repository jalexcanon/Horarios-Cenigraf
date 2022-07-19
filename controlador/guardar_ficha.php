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

$id_trim=$_SESSION['id_trim'];//variable de id trimestre
$ficha_=$_GET['f_h'];
$ins=$_POST['ins'];
$days=$_POST['days'];
$hours=$_POST['hour'];
$amb=$_POST['idAB'];
$hora_i=2;
$descripcion=$_POST['descrip'];

$querys=mysqli_query($conn,"SELECT SUM(horas_instructor) AS total FROM horarios,tb_trimestre
WHERE horarios.id_trim_fch=tb_trimestre.id_T AND horarios.instructor=$ins 
AND tb_trimestre.estatus_trim_H=0 AND horarios.id_trim_fch=$id_trim");//suma horas de instructor del estado de la ficha trimestre fecha en el horario---
$row=mysqli_fetch_array($querys);
$sum=$row['total'];

$verificar_dia_hora_ficha=mysqli_query($conn,"SELECT * FROM `horarios`,`tb_trimestre` 
WHERE `horarios`.`id_trim_fch`=`tb_trimestre`.`id_T` AND `horarios`.`dia`='$days'
AND `horarios`.`hora`='$hours' AND `horarios`.`ficha`='$ficha_' AND `horarios`.`id_trim_fch`= '$id_trim' 
AND `tb_trimestre`.`estatus_trim_H`=0");//verificar_dia_hora_ficha del estado 0 

$verificar_dia_hora_instructor=mysqli_query($conn,"SELECT * FROM `horarios`,`tb_trimestre` 
WHERE `horarios`.`id_trim_fch`=`tb_trimestre`.`id_T` AND `horarios`.`dia`='$days' 
AND `horarios`.`hora`='$hours' AND `horarios`.`instructor`='$ins' AND `tb_trimestre`.`estatus_trim_H`=0");//verificar_dia_hora_instructor estado 0 

if ($sum<40) {  
    if (mysqli_num_rows($verificar_dia_hora_ficha)>0) {
      
       echo"<script>
           window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
           alert('El dia y hora de la ficha ya estan registrados.');
      </script>";
    }else{
      if (mysqli_num_rows($verificar_dia_hora_instructor)>0) {
        echo "<script>
                  alert('El dia y hora del instructor ya estan asignados.');
                  window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>";
      }else{ 
        $query="INSERT INTO `horarios` (`id_hora`, `dia`, `ficha`, `instructor`, `hora`,
        `id_ambiente`,`horas_instructor`,`id_trim_fch`,`descripcion`) 
        VALUES (NULL,'$days','$ficha_','$ins','$hours','$amb',
        '$hora_i','$id_trim','$descripcion')";
        mysqli_query($conn,$query);
  
      echo "<script>
                  window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>";
            }
   
       }
    }
elseif ($sum>=40) {
  $cons=mysqli_query($conn,"SELECT * FROM instructor where ID='$ins'");
  $rows=mysqli_fetch_assoc($cons);
  $nom=$rows['Nombre'];
  $ape=$rows['Apellido'];
  echo "<script>
                  alert('El instructor $nom $ape completo sus $sum horas.');
                   window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>"; 
   
}
