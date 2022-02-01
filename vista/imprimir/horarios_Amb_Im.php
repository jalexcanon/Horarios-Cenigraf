<?php 
include ('../../controlador/conexion.php');
session_start();
$correo=$_SESSION['ema'];
$inst=$_SESSION['nam'];
 if (!isset($correo)) {
    header("location:../../index.php");
 }
 
 //$trim_f=$_SESSION['trim'];
 $id_amb=$_GET['amb'];

 //echo $trim_f,$id_f;
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Horario Ambiente Imprimir </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
</head>
<body>
<style type="text/css">
	table, tr, th, td {
	  border: 2px solid black;
	  border-collapse: collapse;
	}
</style>

<table width="100%" style="margin: 10px 10px 10px 10px;">
  <?php 
   $camb=mysqli_query($conn,"SELECT * FROM ambiente WHERE id_A=$id_amb");
   $c_amb=mysqli_fetch_assoc($camb);
   ?>
  <tr>
   <td colspan="6" rowspan="3" ><img src="../../img/sena_horarios.png"></td>
   <td  WIDTH="200">Vercion: 03</td>       	     		
  </tr>
  <tr>
  	<td>Fecha: <?php echo date('Y'); ?></td>
  </tr>
  <tr>
  	<td>---</td>
  </tr>
  <tr>
    <th colspan="2">Grupo: </th>
    <th colspan="3">TALLER <?php echo $c_amb['Nombre_ambiente'] ?></th>
    <th colspan="2">Fecha: </th>
  </tr>
  <tr>
    <th WIDTH="200"><center>Horas</center></th>
    <th WIDTH="200"><center>Lunes</center></th>
    <th WIDTH="200"><center>Martes</center></th>
    <th WIDTH="200"><center>Miercoles</center></th>
    <th WIDTH="200"><center>Jueves</center></th>
    <th WIDTH="200"><center>Viernes</center></th>
    <th WIDTH="200"><center>Sabado</center></th>
  </tr>
  <tr>
    <th HEIGHT="100"> <center>6:00 - 7:40</center></th>
    <td><?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
             
     ?></td>
    <td><?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?></td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
    <tr>
      <th><center> 7:40 - 8:00 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1;"><center> DESCANSO </center></th>
    </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>8:00-9:40</center></th>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
     <tr>
      <th><center> 9:40 - 10:00 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
    </tr>
  <tr>
    <th  HEIGHT="100" style="border: 1px solid;"> <center>10:00-11:40</center></th>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
  <tr>
    <th style="border: 1px solid;"> <center> 11:40 - 12:00 </center></th>
    <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
  </tr>
    <th HEIGHT="100" style="border: 1px solid;"><center>12:00-13:40</center></th>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
     <tr>
      <th style="border: 1px solid;"> <center>13:40 - 14:20</center></th>
      <th colspan="6" style = "position: relative; z-index: 1;border: 1px solid;"><center>Almuerzo</center></th>
     </tr>
  <tr>
    <th  HEIGHT="100" style="border: 1px solid;"> <center>14:20-16:00</center></th>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
     <tr>
      <th style="border: 1px solid;"> <center> 16:00 - 16:20 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
     </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>16:20-18:00</center></th>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>18:15-19:45</center></th>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
     <tr>
      <th style="border: 1px solid;"> <center> 19:45 - 20:00 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
     </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>20:00-21:40</center></th>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=1 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=2 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=3 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=4 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=5 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.id_ambiente=$id_amb and horarios.dia=6 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Instructor ".$row['Nombre']." ".$row['Apellido']."</br>";
                echo $row['Trimestre'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
  <tr style="color: black;">
    <th colspan="4">COMPETENCIAS A DESARROLLAR</th>
    <th colspan="3">Ambiente: </th>                                    
  </tr> 
  <tr>
    <td colspan="2" style="text-align: center;">NOMBRE DE LA COMPETENCIA</td>
    <td colspan="1" style="text-align: center;">FECHA INICIA</td>
    <td colspan="1" style="text-align: center;">FECHA TERMINA</td> 
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
     
 
<script type="text/javascript"> 
 window.addEventListener("load", window.print());
</script> 
<!-- jQuery-->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -- >
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
 AdminLTE App --> 
<script src="../../css/js/adminlte.min.js"></script>


</body>
</html>