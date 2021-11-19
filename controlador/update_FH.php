<?php 
session_start();

include "conexion.php";

$actu=$_GET['ubd'];
$correo=$_SESSION['ema'];

if (!isset($correo)) {
    header("location:../index.php");
}
$rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
}
//$fch=$_SESSION['fh'];

 $querys="SELECT * FROM horarios,ficha,instructor,dias,horas,ambiente WHERE horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.hora = horas.id_h AND horarios.id_ambiente=ambiente.id_A AND horarios.id_hora='$actu'";
$consulta=mysqli_query($conn,$querys);
$row=mysqli_fetch_array($consulta);
$fch=$row['ID_F'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Ficha <?php echo $row['Nº ficha'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body style="background-color:#f4f6f9;" >
    <div class="wrapper">
        
            <div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
                <div class="container">
                  <center>
                    <img class="img" src="../img/cenigraf.png" >
                    <img class="img2" src="../img/logo1.png" >
                  </center>
                </div>
            </div>
            <nav class="navbar navbar-expand navbar-dark navbar-light" style="padding-top: 35px;"></nav><br>
            <center>
            <div class="container-sm border p-3 my-3" style="background-color:#ffffff;">
                <center><h3>Ficha <?php  echo $row["Nº ficha"]; ?></h3></center>
               <form method="post" >
                   <div class="form-group">
                  
                        <label class="control-label col-sm-2" for="fic">Instrucor:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="fic" name="ubdins">
                            <option value="<?php echo $row["ID"]?>"> <?php echo $row["Nombre"]." ".$row['Apellido'];?></option>
                            <?php
                            $instructor="SELECT * FROM instructor";
                            $fich=mysqli_query($conn,$instructor);
                                         while ($instr=mysqli_fetch_array($fich)) {
                               ?>
                                  <option value="<?php echo $instr["ID"];?>"><?php echo $instr["Nombre"]." ".$instr['Apellido'];?></option>

                                <?php
                            }
                                ?>
                          </select>
                        </div>
                        <br>
                        <label class="control-label col-sm-2" for="di">Día:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="di" name="days">
                                <option value="<?php  echo $row['id'];?>"><?php  echo $row['dia_s'];?></option>
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                             </select>
                          </div>
                          <br>
                        <label class="control-label col-sm-2" for="ho">Hora:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="ho" name="hours">
                                <option value="<?php  echo $row['id_h'];?>"><?php  echo $row['hora'];?></option>
                                <option value="1">6:00 - 7:40</option>
                                <option value="2">8:00 - 9:40</option>
                                <option value="3">10:00 - 11:40</option>
                                <option value="4">12:00 - 13:40</option>
                                <option value="5">14:20 - 16:00</option>
                                <option value="6">16:20 - 18:00</option>
                                <option value="7">18:15 - 19:45</option>
                                <option value="8">20:00 - 21:40</option>
                             </select>
                          </div><br>

                        <label class="control-label col-sm-2" for="ho">Ambiente:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="ho" name="amb">
                                <?php
                                  $ambd=mysqli_query($conn,"SELECT * FROM ambiente");
                                ?>
                                <option value="<?php  echo $row['id_A'];?>"><?php  echo $row['Nombre_ambiente'];?></option>
                                <?php
                                    while ($am=mysqli_fetch_array($ambd)) {
                                ?>
                                   <option value="<?php  echo $am['id_A'];?>"><?php  echo $am['Nombre_ambiente'];?></option> 
                                <?php
                                     } 
                                ?>
                             </select>
                          </div><br>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger" onclick="window.open('../vista/admin/horarios_ficha.php?ficha=<?php echo $fch ?>','_Self')" >Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </div>
                   </div>    
               </form>            
            </center>
             <footer class="main-footer" style="margin-left: 0;">
                <div class="float-right d-none d-sm-block">
                  <b>Version</b> 0.1
                </div>
                <strong>Copyright &copy; 2021 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
             </footer>
            
    </div>
     



<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../css/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../css/js/demo.js"></script>

<?php


if (isset($_POST['ubdins'])) {
    $ubdi=$_POST['ubdins'];
    $dias=$_POST['days'];
    $hors=$_POST['hours'];
    $ambi=$_POST['amb'];

    //echo $actu.$ubdi.$dias.$hors;

$verificar_dia_hora_ficha_all=mysqli_query($conn,"SELECT * FROM `horarios` where `dia`='$dias' and `ficha`='$fch' AND `hora`='$hors' and `instructor`='$ubdi' ");

   
   /* if (mysqli_num_rows($verificar_dia_hora_ficha_all)>0) {

    echo "<script>
                  alert('El dia, hora, instructor de la ficha ya estan registrados.');
                  window.location= '../vista/admin/horarios_ficha.php?ficha=$fch'
              </script>";*/
  //  }else{
      
    
  /*  $query="UPDATE horarios SET dia = '$dias', instructor = '$ubdi', hora = '$hors', id_ambiente='$ambi' WHERE horarios.id_hora = '$actu'";
    mysqli_query($conn,$query);
*/
  /*
    echo "<script>
                 alert('Actualizacion exitosa.'); 
                 window.location='../vista/admin/horarios_ficha.php?ficha=$fch'
              </script>";*/
   
   // }

    $prueba=mysqli_query($conn,"SELECT * FROM horarios where id_hora='$actu'");
    $row=mysqli_fetch_array($prueba);

   


    if ( $row['instructor'] !=  $ubdi) {
     $verificar_dia_hora_ins=mysqli_query($conn,"SELECT * FROM `horarios` where `dia`='$dias' and `hora`='$hors' and `instructor`='$ubdi' ");   
      if (mysqli_num_rows($verificar_dia_hora_ins)>0) {
          echo "<script>
                 alert('El dia y hora del instructor ya estan asignados.'); 
                 window.location='../vista/admin/horarios_ficha.php?ficha=$fch'
              </script>";
      }else{
        $query="UPDATE horarios SET  instructor = '$ubdi' WHERE horarios.id_hora = '$actu'";
        mysqli_query($conn,$query);       
      }      
    }

    if ( $row['id_ambiente'] !=  $ambi) {
     $verificar_dia_hora_ambiente=mysqli_query($conn,"SELECT * FROM `horarios` where `dia`='$dias' and `hora`='$hors' and `id_ambiente`='$ambi' ");   
      if (mysqli_num_rows($verificar_dia_hora_ambiente)>0) {
          echo "<script>
                 alert('El dia y hora del ambeinte ya estan asignados.'); 
                 window.location='../vista/admin/horarios_ficha.php?ficha=$fch'
              </script>";
      }else{
        $query="UPDATE horarios SET  id_ambiente = '$ambi' WHERE horarios.id_hora = '$actu'";
        mysqli_query($conn,$query);         
      }      
    }

    if ( ($row['dia'] !=  $dias)||($row['hora'] !=  $hors)) {
     $verificar_dia_hora=mysqli_query($conn,"SELECT * FROM `horarios` where `dia`='$dias' and `hora`='$hors' and `ficha`='$fch' ");   
      if (mysqli_num_rows($verificar_dia_hora)>0) {
          echo "<script>
                 alert('El dia y hora de la ficha ya estan asignados'); 
                 window.location='../vista/admin/horarios_ficha.php?ficha=$fch'
              </script>";
      }else{
        $query="UPDATE horarios SET  dia = '$dias',hora = '$hors' WHERE horarios.id_hora = '$actu'";
        mysqli_query($conn,$query);
          /* echo "<script>
                 alert('diferente actuañizado.'); 
                 window.location='../vista/admin/horarios_ficha.php?ficha=$fch'
              </script>";  */
      }      
    }
     echo "<script>
                 alert('Actualizacion exitosa'); 
                 window.location='../vista/admin/horarios_ficha.php?ficha=$fch'
              </script>";        
   
    


//header("location:../vista/horarios_beta.php?instructor=$ins");
?>
<!--
<script type="text/javascript">
   alert('Actualizacion exitosa.'); 
   window.location='../vista/admin/horarios_ficha.php?ficha=<?php echo $fch;?>';
</script>-->
<?php
}
 ?>
</body>
</html>
