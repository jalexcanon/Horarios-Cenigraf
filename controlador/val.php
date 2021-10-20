<?php
include('conexion.php');
session_start();
$email=$_POST['correo'];
$con=md5($_POST['contra']);




$consulta="SELECT * FROM instructor where email='$email' and contrasena='$con'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_fetch_array($resultado);


$_SESSION['rol']=$filas['rol'];
$_SESSION['nam']=$filas['Nombre'];


if($filas['rol']==1){
 $_SESSION['ema']=$filas['email'];
    header("location:../vista/horarios.php");

}elseif($filas['rol']==2) {
 $_SESSION['ema']=$filas['email'];
    header("location:../vista/horarios.php");
}
else{
    
    header("location:../index.php");


}

mysqli_free_result($resultado);
mysqli_close($conn);

?>