<?php 

include ('conexion.php');
$ins=$_GET['instructor'];
$fich=$_POST['fich'];
$days=$_POST['days'];
$hours=$_POST['hour'];

if ($hours==1) {

	$query="INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}
if ($hours==2) {

	$query="INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}
if ($hours==3) {

	$query="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}
if ($hours==4) {

	$query="INSERT INTO `12:00-13:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}
if ($hours==5) {

	$query="INSERT INTO `14:20-16:00` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}
if ($hours==6) {

	$query="INSERT INTO `16:20-18:00` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}
if ($hours==7) {

	$query="INSERT INTO `18:15-19:45` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}
if ($hours==8) {

	$query="INSERT INTO `20:00-21:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL,'$days','$fich','$ins')";
    mysqli_query($conn,$query);
}


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
                  window.location= '../vista/horarios_beta.php?instructor=$ins'
              </script>";     
    
}elseif ($sum>=40) {
	echo "<script>
                  alert('El instructor completo sus $sum horas.');
                  window.location= '../vista/horarios_beta.php?instructor=$ins'
              </script>"; 
   
}


//header("location:../vista/horarios_beta.php?instructor=$ins");
?>