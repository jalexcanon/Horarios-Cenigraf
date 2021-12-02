<?php 
include ('../controlador/conexion.php');
session_start();
$correo=$_SESSION['ema'];
$inst=$_SESSION['nam'];
 if (!isset($correo)) {
    header("location:../index.php");
 }
 $rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:horarios.php');
 }
 $trim_f=$_SESSION['trim'];
 $id_f=$_GET['fich'];

 echo $trim_f,$id_f;
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Horario_Ficha </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
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
   $fcht=mysqli_query($conn,"SELECT * FROM ficha,programa,tb_trimestre WHERE ficha.fc_id_programa=programa.id_program and tb_trimestre.id_fch=ficha.ID_F AND ficha.ID_F=$id_f and tb_trimestre.Trimestre='$trim_f'");
   $fchT=mysqli_fetch_assoc($fcht);
   ?>
  <tr>
   <td colspan="6" rowspan="3" ><img src="../img/sena_horarios.png"></td>
   <td>Vercion: 03</td>       	     		
  </tr>
  <tr>
  	<td>Fecha: 2021</td>
  </tr>
  <tr>
  	<td><?php echo $fchT['Trimestre'] ?></td>
  </tr>
  <tr>
    <th colspan="2">Grupo: <?php echo $fchT['Nº ficha']." ".$fchT['Nom_program']?></th>
    <th colspan="3">TALLER</th>
    <th colspan="2">Fecha: <?php echo $fchT['Trim_date_Inc']." - ".$fchT['Trim_date_fin']?></th>
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
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.ficha=$id_f and horarios.dia=1 and horarios.hora=1 and tb_trimestre.Trimestre='$trim_f'");
              $row=mysqli_fetch_assoc($rows);
              echo "<center>";
              echo $row['Nº ficha']."<br>";           
              echo $row['Nombre']."<br>";
              echo $row['Nombre_ambiente'];
              echo "</center>";
     ?></td>
    <td><?php
    $rows=mysqli_query($conn,"SELECT * FROM horarios,tb_trimestre,ficha,ambiente,instructor where horarios.instructor=instructor.ID and horarios.id_ambiente=ambiente.id_A and horarios.ficha=ficha.ID_F and horarios.id_trim_fch=tb_trimestre.id_T and horarios.ficha=$id_f and horarios.dia=2 and horarios.hora=1 and tb_trimestre.Trimestre='$trim_f'");
              $row=mysqli_fetch_assoc($rows);
              echo "<center>";
              echo $row['Nº ficha']."<br>";           
              echo $row['Nombre']."<br>";
              echo $row['Nombre_ambiente'];
              echo "</center>";
     ?></td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
    <tr>
      <th><center> 7:40 - 8:00 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1;"><center> DESCANSO </center></th>
    </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>8:00-9:40</center></th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
     <tr>
      <th><center> 9:40 - 10:00 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
    </tr>
  <tr>
    <th  HEIGHT="100" style="border: 1px solid;"> <center>10:00-11:40</center></th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
  <tr>
    <th style="border: 1px solid;"> <center> 11:40 - 12:00 </center></th>
    <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
  </tr>
    <th HEIGHT="100" style="border: 1px solid;"><center>12:00-13:40</center></th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
     <tr>
      <th style="border: 1px solid;"> <center>13:40 - 14:20</center></th>
      <th colspan="6" style = "position: relative; z-index: 1;border: 1px solid;"><center>Almuerzo</center></th>
     </tr>
  <tr>
    <th  HEIGHT="100" style="border: 1px solid;"> <center>14:20-16:00</center></th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
     <tr>
      <th style="border: 1px solid;"> <center> 16:00 - 16:20 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
     </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>16:20-18:00</center></th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>18:15-19:45</center></th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
     <tr>
      <th style="border: 1px solid;"> <center> 19:45 - 20:00 </center></th>
      <th colspan="6" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
     </tr>
  <tr>
    <th HEIGHT="100" style="border: 1px solid;"> <center>20:00-21:40</center></th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp</td>
  </tr>
  <tr style="color: black;">
    <th colspan="4">COMPETENCIAS A DESARROLLAR</th>
    <th colspan="3">INSTRUCTOR: </th>                                    
  </tr> 
  <tr>
    <td colspan="2" style="text-align: center;">NOMBRE DE LA COMPETENCIA</td>
    <td colspan="1" style="text-align: center;">FECHA INICIA</td>
    <td colspan="1" style="text-align: center;">FECHA TERMINA</td> 
    <td colspan="3" rowspan="6">
      Observaciones:<br>
      Competencia:
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
 //window.addEventListener("load", window.print());
</script> 
<!-- jQuery-->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -- >
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
 AdminLTE App --> 
<script src="../css/js/adminlte.min.js"></script>


</body>
</html>