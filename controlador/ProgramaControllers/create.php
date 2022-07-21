<?php
include ('../conexion.php');
session_start();
$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../../horarios.php');
}

$nom_p=$_POST['nomp'];
$nivl_p=$_POST['nivel_prog'];
$competencias_programa=$_POST['competencias'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];
$instructor=$_POST['instructor'];

$resultados_programa=$_POST['resultados'];
$resultados_instructor=$_POST['instructor_resultados'];

$verificar_nombre_programa=mysqli_query($conn,"SELECT * FROM `programa` where `Nom_program`='$nom_p'");

if (mysqli_num_rows($verificar_nombre_programa)>0) {

header("location:../../vista/create-programa.php?vp=2"); 
  
}else{

$query = "INSERT INTO `programa` (`id_program`,`Nom_program`,`nivel_form`) VALUES (null,'$nom_p','$nivl_p');";
mysqli_query($conn, $query);  

$newid = mysqli_insert_id($conn);
$dataCode = count($competencias_programa);
if($dataCode >0){
    for ($i=0; $i <$dataCode; $i++) { 
    $sqlCode  = ("SELECT *  FROM competencias WHERE competencias='$competencias_programa[$i]' ");
    $queryCode  	= mysqli_query($conn, $sqlCode);
    if(mysqli_num_rows($queryCode)>0){
        }else{
            $queryInsertCode = "INSERT INTO `competencias` (`id`, `competencias`, 
            `fecha_ini`, `fecha_fin`,`instructor`,`programas_id`) 
            VALUES (null,'$competencias_programa[$i]', 
            '$fecha_inicio[$i]', '$fecha_fin[$i]', '$instructor[$i]', '$newid');";
            $resultado = mysqli_query($conn, $queryInsertCode);
        }
    } 

}

$dataCode_resultados = count($resultados_programa);
if($dataCode_resultados >0){
    for ($i=0; $i <$dataCode_resultados; $i++) { 
    $sqlCode_resultados  = ("SELECT *  FROM resultados WHERE resultados='$resultados_programa[$i]' ");
    $queryCode_resultados  	= mysqli_query($conn, $sqlCode_resultados);
    if(mysqli_num_rows($queryCode_resultados)>0){
        }else{
            $queryInsertCode_resultados = "INSERT INTO `resultados` (`id`, `resultados`,`instructor_resultados`,`programas_id`) 
            VALUES (null,'$resultados_programa[$i]','$resultados_instructor[$i]', '$newid');";
            $resultado = mysqli_query($conn, $queryInsertCode_resultados);
        }
    } 

   
header("location:../../vista/create-programa.php?vp=1"); 

}
}