<?php
include("../conexion.php");
session_start();

$correo = $_SESSION['ema'];

if (!isset($correo)) {
    header("location:../../index.php");
}
$rol = $_SESSION['rol'];
if ($rol == 2) {
    header('location:../../horarios.php');
}
$idpo = $_GET['ubP'];
$competencias_programa = $_POST['competencias'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$instructor = $_POST['instructor'];

$resultados_programa = $_POST['resultados'];
$resultados_instructor = $_POST['instructor_resultados'];

$dataCode = count($competencias_programa);
if ($dataCode > 0) {
    for ($i = 0; $i < $dataCode; $i++) {
        $sqlCode  = ("SELECT *  FROM competencias WHERE competencias='$competencias_programa[$i]' ");
        $queryCode      = mysqli_query($conn, $sqlCode);
        if (mysqli_num_rows($queryCode) > 0) {
        } else {
            $queryInsertCode = "INSERT INTO `competencias` (`id`, `competencias`, 
            `fecha_ini`, `fecha_fin`,`instructor`,`programas_id`) 
            VALUES (null,'$competencias_programa[$i]', 
            '$fecha_inicio[$i]', '$fecha_fin[$i]','$instructor[$i]','$idpo');";
            $resultado = mysqli_query($conn, $queryInsertCode);
        }
    }

    $dataCode_resultados = count($resultados_programa);
    if ($dataCode_resultados > 0) {
        for ($i = 0; $i < $dataCode_resultados; $i++) {
            $sqlCode_resultados  = ("SELECT *  FROM resultados WHERE resultados='$resultados_programa[$i]' ");
            $queryCode_resultados      = mysqli_query($conn, $sqlCode_resultados);
            if (mysqli_num_rows($queryCode_resultados) > 0) {
            } else {
                $queryInsertCode_resultados = "INSERT INTO `resultados` (`id`, `resultados`,`instructor`,`programas_id`) 
            VALUES (null,'$resultados_programa[$i]','$resultados_instructor[$i]', '$idpo');";
                $resultado = mysqli_query($conn, $queryInsertCode_resultados);
            }
        }


        header("location:../../vista/competencias-resultados.php?ubP=$idpo");
    }
}
