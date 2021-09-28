<?php 
 
include ('conexion.php');

$sfl=$_POST['sfl'];
$sfm=$_POST['sfm'];
$sfx=$_POST['sfx'];
$sfj=$_POST['sfj'];
$sfv=$_POST['sfv'];
$sfs=$_POST['sfs'];
$ids=$_POST['ins'];

$ofl=$_POST['ofl'];
$ofm=$_POST['ofm'];
$ofx=$_POST['ofx'];
$ofj=$_POST['ofj'];
$ofv=$_POST['ofv'];
$ofs=$_POST['ofs'];
$ids=$_POST['ins'];

$dfl=$_POST['dfl'];
$dfm=$_POST['dfm'];
$dfx=$_POST['dfx'];
$dfj=$_POST['dfj'];
$dfv=$_POST['dfv'];
$dfs=$_POST['dfs'];
$ids=$_POST['ins'];


$lunes=1;
$martes=2;
$miercoles=3;
$jueves=4;
$viernes=5;
$sabado=6;

//6:00-7:40
//lunes
$lolo="INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$lunes', '$sfl', '$ids');";
mysqli_query($conn,$lolo);
//Martes
$lolo="INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$martes', '$sfm', '$ids');";
mysqli_query($conn,$lolo);
//Miercoles
$lolo="INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$miercoles', '$sfx', '$ids');";
mysqli_query($conn,$lolo);
//jueves
$lolo="INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$jueves', '$sfj', '$ids');";
mysqli_query($conn,$lolo);
//viernes
$lolo="INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$viernes', '$sfv', '$ids');";
mysqli_query($conn,$lolo);
//sabado
$lolo="INSERT INTO `6:00-7:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$sabado', '$sfs', '$ids');";
mysqli_query($conn,$lolo);

//8:00-9:40
//lunes
$lolo2="INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$lunes', '$ofl', '$ids');";
mysqli_query($conn,$lolo2);
//Martes
$lolo2="INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$martes', '$ofm', '$ids');";
mysqli_query($conn,$lolo2);
//Miercoles
$lolo2="INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$miercoles', '$ofx', '$ids');";
mysqli_query($conn,$lolo2);
//jueves
$lolo2="INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$jueves', '$ofj', '$ids');";
mysqli_query($conn,$lolo2);
//viernes
$lolo2="INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$viernes', '$ofv', '$ids');";
mysqli_query($conn,$lolo2);
//sabado
$lolo2="INSERT INTO `8:00-9:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$sabado', '$ofs', '$ids');";
mysqli_query($conn,$lolo2);


/*
for ($i=1; $i <=6 ; $i++) { 
	$lolo3="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$i',NULL, '$ids');";
mysqli_query($conn,$lolo3);
}
*/
//10:00-11:40
//lunes
$lolo3="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$lunes', '$dfl', '$ids');";
mysqli_query($conn,$lolo3);
//Martes
$lolo3="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$martes', '$dfm', '$ids');";
mysqli_query($conn,$lolo3);
//Miercoles
$lolo3="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$miercoles', '$dfx', '$ids');";
mysqli_query($conn,$lolo3);
//jueves
$lolo3="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$jueves', '$dfj', '$ids');";
mysqli_query($conn,$lolo3);
//viernes
$lolo3="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$viernes', '$dfv', '$ids');";
mysqli_query($conn,$lolo3);
//sabado
$lolo3="INSERT INTO `10:00-11:40` (`id`, `dia`, `ficha`, `instructor`) VALUES (NULL, '$sabado', '$dfs', '$ids');";
mysqli_query($conn,$lolo3);



header("location:../vista/horarios.php");



?>