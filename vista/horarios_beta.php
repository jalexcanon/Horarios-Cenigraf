<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>beta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Tell the browser to be responsive to screen width -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<?php 
   include ("../controlador/conexion.php");
   
 
$query="SELECT * FROM ficha";
$resul=mysqli_query($conn,$query);

if (isset($_POST['inst'])) {
  $ins=$_POST['inst'];
  $_SESSION['inst']=$ins;
}
if (isset($_GET['instructor'])) {
   $ins=$_GET['instructor'];
   $_SESSION['inst']=$ins;

}
$querys="SELECT * FROM instructor where ID=$ins";
$resultado=mysqli_query($conn,$querys);
$indsF=$resultado->fetch_assoc();


?>


<body class="hold-transition sidebar-mini" style="">

<div class="wrapper">
	
        <div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
            <div class="container">
              <center>
                <img class="img" src="../img/cenigraf.png" >
                <img class="img2" src="../img/logo1.png" >
              </center>
            </div>
        </div>
         
         
         

         <div>
         	<nav class="main-header navbar navbar-expand navbar-dark navbar-light">

        		    <ul class="navbar-nav">
                         <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                      </li>   
                        <a class="navbar-brand" onclick="window.open('../index.php','_Self')">Cenigraf</a>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        		      <li class="nav-item">
        		        <a class="nav-link">Consultar</a>
        		      </li>
        		      <li class="nav-item">
        		        <a class="nav-link" href="prue.php">Actualizar</a>
        		      </li>
        		      <li class="nav-item">
        		        <a class="nav-link" href="#">Eliminar </a>
        		      </li> 
                     
        		    </ul>
          </div>  
        </nav>
         </div>
         <!-- prue menu-->


       <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
            
            <a href="../index.php" class="brand-link">
              <img src="../img/logo1.png"
                   alt="logo1"
                   class="brand-image img-circle elevation-1"
                   style="background-color:#ffffff; width: 40px; height:40px; ">
                                 <span class="brand-text font-weight-light">CENIGRAF </span>
            </a>

           
            <div class="sidebar">
              
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../img/perfil.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">ADMIN</a>
                </div>
              </div>
        </div>

                  
        </aside>
          
  <div class="content-wrapper">
    <div class="container">
      
      
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Horario</button>
            <center><h3>Intructor <?php  echo $indsF["Nombre"]; ?></h3></center>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <!--Contenido-->
                  <div class="modal-header">
                    <h4 class="modal-title">Crear Horario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  <div class="modal-body">
                    <center><h3>Intructor <?php  echo $indsF["Nombre"]; ?></h3></center>
                   <form class="form-horizontal" action="../controlador/guardar.php?instructor=<?php echo $ins;?>" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="fic">Ficha:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="fic" name="fich">
                            <option value="0">Seleccionar Ficha</option>
                            <?php
                                         while ($row=mysqli_fetch_array($resul)) {
                               ?>
                                  <option value="<?php echo $row["ID_F"]?>"><?php echo $row["Nº ficha"]?></option>

                                <?php
                            }
                                ?>
                          </select>
                        </div>
                        <br>
                        <label class="control-label col-sm-2" for="di">Día:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="di" name="days">
                                <option value="0">Seleccionar dia</option>
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
                             <select class="form-control" id="ho" name="hour">
                                <option value="0">Seleccionar hora</option>
                                <option value="1">6:00 - 7:40</option>
                                <option value="2">8:00 - 9:40</option>
                                <option value="3">10:00 - 11:40</option>
                                <option value="4">12:00 - 13:40</option>
                                <option value="5">14:20 - 16:00</option>
                                <option value="6">16:20 - 18:00</option>
                                <option value="7">18:15 - 19:45</option>
                                <option value="8">20:00 - 21:40</option>
                             </select>
                          </div>
                          
                        
                      </div>
                  </div>
                      <div class="form-group">
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning">Crear</button>
                        </div>
                      </div>
                    </form>
                 </div>   
              </div>
           </div>
        </div>
          


            <!--TABLA-------------------------->
            <div class="container">
              <table class="table table-bordered">
                <tr>
                  <th bgcolor="E69138"><center> Horas</center></th>
                  <th bgcolor="E69138"><center> Lunes</center></th>
                  <th bgcolor="E69138"><center> Martes</center></th>
                  <th bgcolor="E69138"><center> Miercoles</center></th>
                  <th bgcolor="E69138"><center> Jueves</center></th>
                  <th bgcolor="E69138"><center> Viernes</center></th>
                  <th bgcolor="E69138"><center> Sabados</center></th>
                  <th colspan= "2" bgcolor="E69138"><center> Opciones</center></th>
                    </tr>
                    <tr>
                      <td bgcolor="EFD5BA"> <center>6:00 - 7:40</center></td>
                       <?php
                        for ($i=1; $i <=6 ; $i++) { 
                        $horarios="SELECT * FROM instructor,`6:00-7:40`,dias,ficha WHERE instructor.ID=$ins AND `6:00-7:40`.`dia`=$i AND instructor.ID = `6:00-7:40`.`instructor` AND dias.id = `6:00-7:40`.`dia` AND ficha.ID_F= `6:00-7:40`.`ficha`";
                        $resul1=mysqli_query($conn,$horarios);
                        $db1=$resul1->fetch_assoc();
                         
                                          if (isset($db1)) {
                                            if ($db1["dia"]==1) {
                                            ?>
                                               <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db1['Nombre']."<br>";
                                              echo $db1["Nº ficha"]."<br>";
                                              echo $db1["dia"];
                                            ?></center></td><?php
                                            }else{?> <td bgcolor="EFD5BA"> <center>datos</center></td><?php}
                                          }else{?> <td bgcolor="EFD5BA"> <center>datos</center></td><?php}
                                          if (isset($db1)) {
                                            if ($db1["dia"]==2) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db1['Nombre']."<br>";
                                              echo $db1["Nº ficha"]."<br>";
                                              echo $db1["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          if (isset($db1)) {
                                            if ($db1["dia"]==3) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db1['Nombre']."<br>";
                                              echo $db1["Nº ficha"]."<br>";
                                              echo $db1["dia"];
                                              ?></center></td><?php
                                            } 
                                          }                             
                                          if (isset($db1)) {
                                            if ($db1["dia"]==4) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db1['Nombre']."<br>";
                                              echo $db1["Nº ficha"]."<br>";
                                              echo $db1["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          if (isset($db1)) {
                                            if ($db1["dia"]==5) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db1['Nombre']."<br>";
                                              echo $db1["Nº ficha"]."<br>";
                                              echo $db1["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          if (isset($db1)) {
                                            if ($db1["dia"]==6) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db1['Nombre']."<br>";
                                              echo $db1["Nº ficha"]."<br>";
                                              echo $db1["dia"];
                                              ?></center></td><?php
                                            } 
                                          }                       
                        }?>
                     
                      <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion1">Editar</button>
                    <!-- Modal -->
                    <div id="opcion1" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 0</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 0</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion2">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion2" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 1</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 1</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                    </tr>
                    <th bgcolor="E69138"> <center> 7:40 - 8:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
                    <tr>
                      <td bgcolor="EFD5BA"> <center>8:00 -9:40</center></td>

                      <?php
                       for ($i=1; $i <=6 ; $i++) { 
                        $horarios="SELECT * FROM instructor,`8:00-9:40`,dias,ficha WHERE instructor.ID=$ins AND `8:00-9:40`.`dia`=$i AND instructor.ID = `8:00-9:40`.`instructor` AND dias.id = `8:00-9:40`.`dia` AND ficha.ID_F= `8:00-9:40`.`ficha`";
                        $resul1=mysqli_query($conn,$horarios);
                        $db2=$resul1->fetch_assoc();
                         
                                          if (isset($db2)) {
                                            if ($db2["dia"]==1) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db2['Nombre']."<br>";
                                              echo $db2["Nº ficha"]."<br>";
                                              echo $db2["dia"];
                                            ?></center></td><?php
                                            }else{?> <td bgcolor="EFD5BA"> <center>datos</center></td><?php}
                                          }else{?> <td bgcolor="EFD5BA"> <center>datos</center></td><?php}
                                          if (isset($db2)) {
                                            if ($db2["dia"]==2) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db2['Nombre']."<br>";
                                              echo $db2["Nº ficha"]."<br>";
                                              echo $db2["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          if (isset($db2)) {
                                            if ($db2["dia"]==3) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db2['Nombre']."<br>";
                                              echo $db2["Nº ficha"]."<br>";
                                              echo $db2["dia"];
                                              ?></center></td><?php
                                            } 
                                          }                                        
                                          if (isset($db2)) {
                                            if ($db2["dia"]==4) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db2['Nombre']."<br>";
                                              echo $db2["Nº ficha"]."<br>";
                                              echo $db2["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          if (isset($db2)) {
                                            if ($db2["dia"]==5) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db2['Nombre']."<br>";
                                              echo $db2["Nº ficha"]."<br>";
                                              echo $db2["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          if (isset($db2)) {
                                            if ($db2["dia"]==6) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $db2['Nombre']."<br>";
                                              echo $db2["Nº ficha"]."<br>";
                                              echo $db2["dia"];
                                              ?></center></td><?php
                                            } 
                                          }                       
                       } ?>
                     
                      <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion3">Editar</button>
                    <!-- Modal -->
                    <div id="opcion3" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 2</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 2</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion4">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion4" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 3</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 3</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                    </tr>
                    <th bgcolor="E69138"> <center> 9:40 - 10:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
                    <tr>
                      <td bgcolor="EFD5BA"> <center>10:00 - 11:40</center></td>
                      
                      <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion5">Editar</button>
                    <!-- Modal -->
                    <div id="opcion5" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 4</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 4</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion6">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion5" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 5</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 5</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                    </tr>
                    <th bgcolor="E69138"> <center> 11:40 - 12:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
                    <tr>
                      <td bgcolor="EFD5BA"> <center>12:00 - 13:40</center></td>
                      
                      <?php 
                        $lol = array(1,2,3,4,5,6);


                        foreach ($lol as $jg) {

                      $hora="SELECT * FROM instructor,`8:00-9:40`,dias,ficha WHERE instructor.ID=$ins AND `8:00-9:40`.`dia`=$jg AND instructor.ID = `8:00-9:40`.`instructor` AND dias.id = `8:00-9:40`.`dia` AND ficha.ID_F= `8:00-9:40`.`ficha`";
                        $resu=mysqli_query($conn,$hora);
                        $dbs=$resu->fetch_assoc();
                         
                                         
                                           if (isset($dbs)) {
                                            if ($dbs["dia"]==1) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $dbs['Nombre']."<br>";
                                              echo $dbs["Nº ficha"]."<br>";
                                              echo $dbs["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                           if (isset($dbs)) {
                                            if ($dbs["dia"]==5) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $dbs['Nombre']."<br>";
                                              echo $dbs["Nº ficha"]."<br>";
                                              echo $dbs["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          if (isset($dbs)) {
                                            if ($dbs["dia"]==6) {
                                            ?>
                                                 <td bgcolor="EFD5BA"> <center>
                                            <?php 
                                              echo $dbs['Nombre']."<br>";
                                              echo $dbs["Nº ficha"]."<br>";
                                              echo $dbs["dia"];
                                              ?></center></td><?php
                                            } 
                                          }
                                          
                                          
                                            
                        }
                      ?>
                      <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion6">Editar</button>
                    <!-- Modal -->
                    <div id="opcion6" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 6</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 6</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion7">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion7" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 7</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 7</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                    </tr>
                    <th bgcolor="E69138"> <center> 13:40 - 14:20 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> ALMUERZO </center></th>
                    <tr>
                      <td bgcolor="EFD5BA"> <center>14:20 - 16:00 <center></td>
                        
                        <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion8">Editar</button>
                    <!-- Modal -->
                    <div id="opcion8" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 8</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 8</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion9">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion9" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 9</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 9</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                      </tr>
                      <th bgcolor="E69138"> <center> 16:00 - 16:20 </center></th>
                      <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
                      <tr>
                        <td bgcolor="EFD5BA"><center>16:20 - 18:00</center></td>
                        <td bgcolor="EFD5BA"><center>Datos</center></td>
                        <td bgcolor="EFD5BA"><center>Datos</center></td>
                        <td bgcolor="EFD5BA"><center>Datos</center></td>
                        <td bgcolor="EFD5BA"><center>Datos</center></td>
                        <td bgcolor="EFD5BA"><center>Datos</center></td>
                        <td bgcolor="EFD5BA"><center>Datos</center></td>
                        <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion10">Editar</button>
                    <!-- Modal -->
                    <div id="opcion10" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 10</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 10</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion11">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion11" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 11</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 11</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                      </tr>
                      <tr>
                        <td bgcolor="EFD5BA"><center>18:15 - 19:45</center></td>
                        <td bgcolor="EFD5BA"><center> Datos </center></td>
                        <td bgcolor="EFD5BA"><center> Datos </center></td>
                        <td bgcolor="EFD5BA"><center> Datos </center></td>
                        <td bgcolor="EFD5BA"><center> Datos </center></td>
                        <td bgcolor="EFD5BA"><center> Datos </center></td>
                        <td bgcolor="EFD5BA"><center> Datos </center></td>
                        <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion12">Editar</button>
                    <!-- Modal -->
                    <div id="opcion12" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 12</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 12</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion13">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion13" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 13</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 13</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                      </tr>
                      <th bgcolor="E69138"> <center> 19:45 - 20:00 </center></th>
                      <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
                      <tr>
                        <td bgcolor="EFD5BA"> <center>20:00 - 21:40</center></td>
                        <td bgcolor="EFD5BA"> <center> Datos </center></td>
                        <td bgcolor="EFD5BA"> <center> Datos </center></td>
                        <td bgcolor="EFD5BA"> <center> Datos </center></td>
                        <td bgcolor="EFD5BA"> <center> Datos </center></td>
                        <td bgcolor="EFD5BA"> <center> Datos </center></td>
                        <td bgcolor="EFD5BA"> <center> Datos </center></td>
                        <th bgcolor="EFD5BA"><!-- botom modal ... opciones -->
                    <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#opcion14">Editar</button>
                    <!-- Modal -->
                    <div id="opcion14" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">opcion 14</h4>
                          </div>
                          <div class="modal-body">
                            <p>opcion 14</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                          </div>
                        </div>
                      </div>
                    </div></th>
                    <th bgcolor="EFD5BA"> <!-- botom modal ... opciones -->
                      <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#opcion15">Eliminar</button>
                      <!-- Modal -->
                      <div id="opcion15" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">opcion 15</h4>
                            </div>
                            <div class="modal-body">
                              <p>opcion 15</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                      </div></th>
                      </tr>
                    </table>
                  </div>

   
          
       <div class="container">
         <table style="border: 1px solid;">
                <tr>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50" ><center>Horas</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Lunes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Martes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Miercoles</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Jueves</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Viernes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Sabado</center></th>
                </tr>

                <tr></tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>6:00 - 7:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                  <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 7:40 - 8:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1;border: 1px solid;"><center> DESCANSO </center></th>
                  </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>8:00-9:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100"> <center> 9:40 - 10:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                  </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>10:00-11:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 11:40 - 12:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                   <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>12:00-13:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 13:40 - 14:20 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1;border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>14:20-16:00</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 16:00 - 16:20 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>16:20-18:00</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>

                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>18:15-19:45</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 19:45 - 20:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>20:00-21:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
              </table>
        
       </div>
              

            
                <div class="container">
                  <div style="position: relative;
                              bottom: 1401px;
                              margin: 0 0 0 159px;
                              margin-right: -7px;
                              max-WIDTH: 966px; 
                              max-HEIGHT:100px;
                                  "> 
                          <table class="table table-bordered">
                           <?php
                                
                             $days = array(1,2,3,4,5,6,);
                            $hours = array(1,0,2,0,3,0,4,0,5,0,6,7,0,8);

                              foreach ($hours as $hour) {
                                ?>
                                 <tr>
                                <?php
                                
                                  foreach ($days as $day) {
                                      ?>

                                       <td bgcolor="EFD5BA" width="500" height="100" style="border: 1px solid; padding: 0;">

                                      <?php
                          $query = "SELECT * FROM horarios,ficha,instructor,dias,horas WHERE horarios.dia=$day AND horarios.hora=$hour AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.hora = horas.id_h and horarios.instructor=$ins";
                                      $result = mysqli_query($conn, $query);
                                      $row = mysqli_fetch_assoc($result); 
                                       if (isset($row)) { ?>                                                                              
                 <div>
                    <center>
                                       <?php  echo $row['dia_s'];?><br>
                                       <?php  echo $row['Nombre'];?><br>
  
                        <div class="dropdown dropright" style=" display: inline-block;">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                           Opciones
                          </button>
                          <div class="dropdown-menu" style="background-color: #f1f1f100; border: 1px solid rgb(0 0 0 / 0%); box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 0%);" >
                            
                              <div class="btn-group">
                              <button type="button" onclick="window.open('../controlador/ubdate.php','_Self')" class="btn btn-info">Editar</button>
                              <button type="button" onclick="window.open('../controlador/delete.php?eli=<?php echo $row['id_hora']?>','_Self')" class="btn btn-danger">Eliminar</button> 
                            </div>                                                                                                                     
                          </div>
                        </div>
                     </center>   
                  </div>        


                                         <?php
                                      }elseif (!isset($row)) {
                                          echo "&nbsp";
                                          
                                      }
                                      ?>
                                      </td>
                                      <?php                                     
                                  }
                                  echo "</tr>";
                              }

//Modal fichas

$fih="SELECT * FROM ficha";
$ll=mysqli_query($conn,$fih);
$f="SELECT * FROM ficha";
$fl=mysqli_query($conn,$f);

                           ?>  
                       </table>      
                   </div>
                </div> 
                 <!-- prueba-->
                <div>
                  <div class="dropdown dropright">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                           Opciones
                          </button>
                          <div class="dropdown-menu">
                            <div class="btn-group">
                              <button type="button" class="btn btn-info">Editar</button>
                              <button type="button" class="btn btn-danger">Eliminar</button> 
                            </div>                                                             
                          </div>
                        </div>
                </div>
              <!-- prueba-->
                   <!-- DIV ---Modal ..... Editar y eliminar-->
                 <div class="container">
                   <!-- Modal ..... Editar-->
                   <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#edi">Editar</button>
                    
                    <div id="edi" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal contenedor-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Editar </h4>                          
                            <button type="button" class="close" data-dismiss="modal">&times;</button>                           
                          </div> 
                          <center><h3>Intructor <?php  echo $indsF["Nombre"]; ?></h3></center>
                  <div class="modal-body">
                            <form class="form-horizontal" action="../controlador/ubdate.php?instructor=<?php echo $ins;?>" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="fic">Ficha:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="fic" name="fich">
                            <option value="0">Seleccionar Ficha</option>
                            <?php
                                         while ($fics=mysqli_fetch_array($ll)) {
                               ?>
                                  <option value="<?php echo $fics["ID_F"]?>"><?php echo $fics["Nº ficha"]?></option>

                                <?php
                            }
                                ?>
                          </select>
                        </div>
                        <br>
                        <label class="control-label col-sm-2" for="di">Día:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="di" name="days">
                                <option value="0">Seleccionar dia</option>
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
                             <select class="form-control" id="ho" name="hour">
                                <option value="0">Seleccionar hora</option>
                                <option value="1">6:00 - 7:40</option>
                                <option value="2">8:00 - 9:40</option>
                                <option value="3">10:00 - 11:40</option>
                                <option value="4">12:00 - 13:40</option>
                                <option value="5">14:20 - 16:00</option>
                                <option value="6">16:20 - 18:00</option>
                                <option value="7">18:15 - 19:45</option>
                                <option value="8">20:00 - 21:40</option>
                             </select>
                          </div>
                          
                        
                      </div>
                  </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>




                     <!-- botom modal ... Eliminar-->
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eli">Eliminar</button>
                      <!-- Modal -->
                      <div id="eli" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal contenedor-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Eliminar</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>                             
                            </div>
                            <center><h3>Intructor <?php  echo $indsF["Nombre"]; ?></h3></center>
                            <div class="modal-body">

                  <form class="form-horizontal" action="../controlador/delete.php?instructor=<?php echo $ins;?>" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="fic">Ficha:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="fic" name="fich">
                            <option value="0">Seleccionar Ficha</option>
                            <?php
                                         while ($ficd=mysqli_fetch_array($fl)) {
                               ?>
                                  <option value="<?php echo $ficd["ID_F"]?>"><?php echo $ficd["Nº ficha"]?></option>

                                <?php
                            }
                                ?>
                          </select>
                        </div>
                        <br>
                        <label class="control-label col-sm-2" for="dih">Día:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="dih" name="days">
                                <option value="0">Seleccionar dia</option>
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
                             <select class="form-control" id="ho" name="hour">
                                <option value="0">Seleccionar hora</option>
                                <option value="1">6:00 - 7:40</option>
                                <option value="2">8:00 - 9:40</option>
                                <option value="3">10:00 - 11:40</option>
                                <option value="4">12:00 - 13:40</option>
                                <option value="5">14:20 - 16:00</option>
                                <option value="6">16:20 - 18:00</option>
                                <option value="7">18:15 - 19:45</option>
                                <option value="8">20:00 - 21:40</option>
                             </select>
                          </div>
                          
                        
                      </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
                              <button type="submit" class="btn btn-warning">Eliminar</button>
                            </div>
                          </div>
                         </form> 
                        </div>
                      </div></center>
                 </div> 

          
                 
        <?php 

          $eliup="SELECT * FROM horarios,instructor,ficha,dias,horas WHERE instructor = $ins AND horarios.instructor = instructor.ID AND horarios.dia= dias.id AND horarios.hora = horas.id_h";
          $crud=mysqli_query($conn,$eliup);

        ?>
   
         <div class="container">
           <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th>Instructor</th>
                    <th>Día</th>
                    <th>Ficha</th>
                    <th>Hora</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php 
                     while ($krud=mysqli_fetch_array($crud)) {
                    ?>
                  <tr>
                    <td><?php echo $krud['Nombre'].$krud['id_hora'];?></td>
                    <td><?php echo $krud['dia_s'];?></td>
                    <td><?php echo $krud['Nº ficha'];?></td>
                    <td><?php echo $krud['hora'];?></td>
                    <td><?php echo $krud['instructor'];?></td>
                  </tr>
                    <?php
                     }
                    ?>                  
                </tbody>
            </table>

         </div>

       </div>
    </div>
 <!--footing ... pie de pagina-->

          <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
              <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2021 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
          </footer>

</div>
          


  <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../css/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../css/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.min.js"></script>
<script src="../plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="../plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="../plugins/fullcalendar-interaction/main.min.js"></script>
<script src="../plugins/fullcalendar-bootstrap/main.min.js"></script>



</body>
</html>