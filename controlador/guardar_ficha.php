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

$ficha_=$_GET['f_h'];
$ins=$_POST['ins'];
$days=$_POST['days'];
$hours=$_POST['hour'];
$amb=$_POST['idAB'];
$hora_i=2;

$querys="SELECT SUM(horas_instructor) as total FROM horarios WHERE horarios.instructor=$ins";
$resuls=mysqli_query($conn,$querys);
$row=mysqli_fetch_array($resuls);
$sum=$row['total'];

$verificar_dia_hora_ficha=mysqli_query($conn,"SELECT * FROM `horarios` where `dia`='$days'  AND `hora`='$hours' and `ficha`='$ficha_'");
$verificar_dia_hora_ambiente=mysqli_query($conn,"SELECT * FROM `horarios` where `dia`='$days' AND `hora`='$hours' and `id_ambiente`='$amb'");
$verificar_dia_hora_instructor=mysqli_query($conn,"SELECT * FROM `horarios` where `dia`='$days' AND `hora`='$hours' and `instructor`='$ins'");

if ($sum<40) {  
  
  if (mysqli_num_rows($verificar_dia_hora_ambiente)>0) {

    echo "<script>
                  alert('El dia  y hora del ambeinte ya estan registrados..');
                  window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>";
  }else{ 
    if (mysqli_num_rows($verificar_dia_hora_ficha)>0) {

    echo "<script>
                  alert('El dia y hora de la ficha ya estan registrados.');
                  window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>";
    }else{
      if (mysqli_num_rows($verificar_dia_hora_instructor)>0) {
        echo "<script>
                  alert('El dia y hora del instructor ya estan asignados.');
                  window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>";
      }else{ 
    $query="INSERT INTO `horarios` (`id_hora`, `dia`, `ficha`, `instructor`, `hora`,`id_ambiente`,`horas_instructor`) 
    VALUES (NULL,'$days','$ficha_','$ins','$hours','$amb','$hora_i')";
    mysqli_query($conn,$query);
  
    echo "<script>
                  alert('Horario registrado.');
                  window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>";}
   
       }
    }
}elseif ($sum>=40) {
  $cons=mysqli_query($conn,"SELECT * FROM instructor where ID='$ins'");
  $rows=mysqli_fetch_assoc($cons);
  $nom=$rows['Nombre'];
  $ape=$rows['Apellido'];
  echo "<script>
                  alert('El instructor $nom $ape completo sus $sum horas.');
                   window.location= '../vista/admin/horarios_ficha.php?ficha=$ficha_'
              </script>"; 
   
}
?>