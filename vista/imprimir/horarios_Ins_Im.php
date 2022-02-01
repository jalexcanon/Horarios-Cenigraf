<?php 
include ('../../controlador/conexion.php');
session_start();
$correo=$_SESSION['ema'];
$inst=$_SESSION['nam'];
 if (!isset($correo)) {
    header("location:../../index.php");
 }


 $id_ins=$_GET['ins'];


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Horario Instructor Imprimir </title>
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
   $cins=mysqli_query($conn,"SELECT * FROM instructor where ID= $id_ins");
   $c_ins=mysqli_fetch_assoc($cins);
   ?>
  <tr>
   <td colspan="6" rowspan="3" ><img src="../../img/sena_horarios.png"></td>
   <td  WIDTH="200">Vercion: 03</td>       	     		
  </tr>
  <tr>
  	<td></td>
  </tr>
  <tr>
  	<td>Fecha: <?php echo date('Y'); ?></td>
  </tr>
  <tr>
    <th colspan="2"><?php echo $c_ins['Nombre']." ".$c_ins['Apellido']?></th>
    <th colspan="3">---</th>
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
             
     ?></td>
    <td><?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?></td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=1 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=2 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=3 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
       <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=4 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=5 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=6 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>18:15-19:45</center></th>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=7 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=1 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=2 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=3 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=4 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=5 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
    <td>
      <?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor,programa where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.instructor=$id_ins and horarios.dia=6 and horarios.hora=8 and tb_trimestre.estatus_trim_H=0 and ficha.fc_id_programa=programa.id_program");
              $row=mysqli_fetch_assoc($rows);
              if (isset($row)) {
                echo "<center>";
                echo $row['Nº ficha']."<br>";           
                echo $row['Nom_program']."<br>";
                echo "Ambiente ".$row['Nombre_ambiente'];
                echo "</center>";
              }else{ echo "&nbsp";}
     ?>
    </td>
  </tr>
  <?php 
  $sumas="SELECT SUM(horas_instructor) as total FROM horarios,tb_trimestre WHERE horarios.id_trim_fch=tb_trimestre.id_T AND horarios.instructor=$id_ins AND tb_trimestre.estatus_trim_H=0 ";
  $resulsuma=mysqli_query($conn,$sumas);
  $rowsum=mysqli_fetch_array($resulsuma);
  $sum=$rowsum['total'];
  $res=40-$sum;
  $total=$sum+$res;
   ?>
  <tr class="table-bordered table-dark" style="color: black;">
    <th colspan="4">Observaciones:</th>
    <th colspan="3">Instructor: <?php echo $c_ins['Nombre']." ".$c_ins['Apellido']?></th>                                    
  </tr>
  <tr class="table-bordered table-dark" style="color: black;">
    <td colspan="4" rowspan="3"></td>
    <td colspan="2">Horas Directas Formación</td> 
    <td colspan="1"><?php echo $sum; ?></td>                
  </tr>
  <tr class="table-bordered table-dark" style="color: black;">
    <td colspan="2">Horas pendientes de programar</td>
    <td colspan="1"><?php echo $res; ?></td> 
  </tr>
  <tr class="table-bordered table-dark" style="color: black;">
    <td colspan="2">Total:</td>
    <td colspan="1"><?php echo $total ?></td> 
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