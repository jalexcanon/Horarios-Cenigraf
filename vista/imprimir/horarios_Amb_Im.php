<?php 
include ('../../controlador/conexion.php');
session_start();
$correo=$_SESSION['ema'];
$inst=$_SESSION['nam'];
 if (!isset($correo)) {
    header("location:../../index.php");
 }
 
 $id_amb=$_GET['amb'];
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Horario Ambiente Imprimir </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
  <?php 
   $camb=mysqli_query($conn,"SELECT * FROM ambiente WHERE id_A=$id_amb");
   $c_amb=mysqli_fetch_assoc($camb);
   ?>
  <tr>
   <td colspan="6" rowspan="3"><img class="imagen" src="../../img/sena_horarios_1.png"></td>
   <td>Versión: 03</td>       	     		
  </tr>
  <tr>
  	<td colspan="2">Fecha: <?php echo date('M-Y'); ?></td>
  </tr>
  <tr>
  </tr>
  <tr>
    <th colspan="3">Grupo: </th>
    <th colspan="4">Taller: <?php echo $c_amb['Nombre_ambiente'] ?></th>
  </tr>
  <tr>
    <th>Horas</th>
    <th>Lunes</th>
    <th>Martes</th>
    <th>Miercoles</th>
    <th>Jueves</th>
    <th>Viernes</th>
    <th>Sabado</th>
  </tr>
     <?php
     $days = array(0,1,2,3,4,5,6);
     $hours = array(1,0,2,0,3,0,4,0,5,0,6,7,0,8);
     foreach ($hours as $hour) {
       ?>
       <tr>
         <?php
         foreach ($days as $day) {
           ?>
           <td>
             <?php
             $result = mysqli_query($conn,"SELECT * FROM horas WHERE id_h=$hour"); 
              while ($rcon=mysqli_fetch_assoc($result)) {
                if ($day==0) {
                  echo "<strong>".$rcon['hora']."</strong>";}
                }
                $query = mysqli_query($conn,"SELECT * FROM horarios,ficha,dias,ambiente,tb_trimestre, programa 
                WHERE horarios.dia=$day 
                AND horarios.hora=$hour
                AND horarios.ficha=ficha.ID_F
                AND ficha.ID_F = tb_trimestre.id_fch 
                AND horarios.id_trim_fch=tb_trimestre.id_T
                AND horarios.id_ambiente=$id_amb 
                AND ficha.fc_id_programa=programa.id_program");
                $row = mysqli_fetch_assoc($query); 
                if (isset($row)){
                 echo "Ficha: ".$row['Nº ficha']."<br/>".$row['Trimestre']."<br/>"."Prog: ".$row['Nom_program'];
                }
                elseif (!isset($row)) {
                  echo "&nbsp"; }
                ?>
              </td><?php }
                                  echo "</tr>";
                              }
                           ?> 
                             <tr>
    <th colspan="4">COMPETENCIAS A DESARROLLAR</th>
    <th colspan="3">Ambiente: </th>                                    
  </tr> 
  <tr>
    <td colspan="2">NOMBRE DE LA COMPETENCIA</td>
    <td colspan="1">FECHA INICIA</td>
    <td colspan="1">FECHA TERMINA</td> 
    <td colspan="3" rowspan="6">
      <h1><?php echo $c_amb['Nombre_ambiente'] ?></h1>
    </td>
  </tr>  
  <tr>
     <td colspan="2">&nbsp</td>
     <td colspan="1">&nbsp</td>             
  </tr>
   <tr>
     <td colspan="2">&nbsp</td>
     <td colspan="1">&nbsp</td>             
  </tr>
   <tr>
     <td colspan="2">&nbsp</td>
     <td colspan="1">&nbsp</td>             
  </tr>
   <tr>
     <td colspan="2">&nbsp</td>
     <td colspan="1">&nbsp</td>             
  </tr>
   <tr>
     <td colspan="2">&nbsp</td>
     <td colspan="1">&nbsp</td>             
  </tr>

</table>       
</body>
<script type="text/javascript"> 
 window.addEventListener("load", window.print());
</script>
</html>