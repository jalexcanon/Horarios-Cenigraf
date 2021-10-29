<?php 
//--------------------------------------------------------------
//----------------------------------------------
//----------------------------------------------
session_start();

include "conexion.php";

$actu=$_GET['ubd'];
$ins=$_SESSION['inst'];

 $querys="SELECT * FROM horarios,ficha,instructor,dias,horas WHERE horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.hora = horas.id_h and horarios.instructor='$ins' AND horarios.id_hora='$actu'";
$consulta=mysqli_query($conn,$querys);
$row=mysqli_fetch_array($consulta);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar</title>
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
                <center><h3>Intructor <?php  echo $row["Nombre"]; ?></h3></center>
               <form method="post" >
                   <div class="form-group">
                  
                        <label class="control-label col-sm-2" for="fic">Ficha:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="fic" name="fichas">
                            <option value="<?php echo $row["ID_F"]?>"> <?php echo $row["Nº ficha"]?></option>
                            <?php
                            $ficha="SELECT * FROM ficha";
                            $fich=mysqli_query($conn,$ficha);
                                         while ($fic=mysqli_fetch_array($fich)) {
                               ?>
                                  <option value="<?php echo $fic["ID_F"];?>"><?php echo $fic["Nº ficha"];?></option>

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
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger" onclick="window.open('../vista/admin/horarios_beta.php?instructor=<?php echo$ins?>','_Self')" >Cancelar</button>
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


if (isset($_POST['fichas'])) {
    $fic=$_POST['fichas'];
    $dias=$_POST['days'];
    $hors=$_POST['hours'];

    //echo $actu.$ins.$fic.$dias.$hors;

$query="UPDATE horarios SET dia = '$dias', ficha = '$fic', hora = '$hors' WHERE horarios.id_hora = '$actu' and horarios.instructor='$ins'";
mysqli_query($conn,$query);

//header("location:../vista/horarios_beta.php?instructor=$ins");
?>
<script type="text/javascript">
    window.location='../vista/admin/horarios_beta.php?instructor=<?php echo $ins;?>';
</script>
<?php
}


 ?>
</body>
</html>
