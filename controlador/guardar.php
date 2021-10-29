<?php 
//--------------------------------------------------------------
//----------------------------------------------
//----------------------------------------------
include ('conexion.php');
$ins=$_GET['instructor'];
$fich=$_POST['fich'];
$days=$_POST['days'];
$hours=$_POST['hour'];

$hora_i=2;

$querys="SELECT SUM(horas_instructor) as total FROM horarios WHERE horarios.instructor=$ins";
$resuls=mysqli_query($conn,$querys);
$row=mysqli_fetch_array($resuls);
$sum=$row['total'];



if ($sum<40) {
	$query="INSERT INTO `horarios` (`id_hora`, `dia`, `ficha`, `instructor`, `hora`,`horas_instructor`) VALUES (NULL,'$days','$fich','$ins','$hours','$hora_i');";
    mysqli_query($conn,$query);
    $sum2=38-$sum;
    echo "<script>
                  alert('El instructor le faltan $sum2 horas por asignar.');
                  window.location= '../vista/admin/horarios_beta.php?instructor=$ins'
              </script>";     
    
}elseif ($sum>=40) {
	echo "<script>
                  alert('El instructor completo sus $sum horas.');
                  window.location= '../vista/admin/horarios_beta.php?instructor=$ins'
              </script>"; 
   
}


//header("location:../vista/horarios_beta.php?instructor=$ins");
?>