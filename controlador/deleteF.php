<?php

include "conexion.php";

session_start();
$correo=$_SESSION['ema'];
if (!isset($correo)) {
    
    header("location:../index.php");
 }
 $rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}

$eliminarf=$_GET['eliF'];

$query="DELETE FROM `ficha` WHERE `ficha`.`ID_F`='$eliminarf'";

mysqli_query($conn,$query);
echo "<script>
                  alert('Se elimino la ficha exitosamente.');
                  window.location= '../vista/horarios.php';
              </script>";   






 ?>