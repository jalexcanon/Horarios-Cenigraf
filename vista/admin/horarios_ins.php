<?php 
include ('../../controlador/conexion.php');
session_start();
$correo=$_SESSION['ema'];
$inst=$_SESSION['nam'];
 if (!isset($correo)) {
    header("location:../../index.php");
 }
 $rol=$_SESSION['rol'];
 if ($rol==2) {
   header('location:../horarios.php');
 }
 
      
$id_ins=$_GET['instructor'];
 

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Horarios ficha</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Font Awesome ---->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="../../css/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
  <!-- jQuery-->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App --> 
  <script src="../../css/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes 
  <script src="../css/js/demo.js"></script-->
</head>
<body class="hold-transition sidebar-mini" >
<!--div1wrapper-->
<div class="wrapper">
        <!--div1-->
        <div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <center>
                <img class="img" src="../../img/cenigraf.png" >
                <img class="img2" src="../../img/logo1.png" >
              </center>
            </div>
        </div>
        <!--/div1-->
        <!--div2-->
        <div>
          <nav class="main-header navbar navbar-expand-md navbar-dark navbar-light sticky-top">
                <ul class="navbar-nav">
                   <li class="nav-item">
                   <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </li> 
                </ul>                  
                 <a class="navbar-brand" onclick="window.open('../horarios.php','_Self')" style="cursor:pointer;">Cenigraf</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                 <span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
                  <li class="nav-item">
                    <a class="nav-link" onclick="window.open('../../controlador/exit.php','_Self')" style="cursor: pointer;">Cerrar sesion</a>
                  </li> 
                     
                </ul>
              </div>
          </nav>
        </div>
        <!--/div2-->

      <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
            
            <a href="../horarios.php" class="brand-link">
              <img src="../../img/logo1.png"
                   alt="logo1"
                   class="brand-image img-circle elevation-1"
                   style="background-color:#ffffff; width: 40px; height:40px; ">
              <span class="brand-text font-weight-light" >CENIGRAF </span>
            </a>   
        <div class="sidebar">              
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../../img/perfil.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">ADMIN-<?php  echo $inst; ?></a>
                </div>
              </div>
              <?php if (isset($_GET['ficha'])) {
                ?>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../../img/h.png" class="img-circle elevation-2" alt="User Image">
                </div>
                
                <div class="info">
                  <a href="" data-toggle="modal" data-target="#myModal" >Crear Horario</a>
                </div>
                <?php
                }
                ?>    
              </div>            
        </div>            
      </aside>
  <!--div1content-wrapper-->         
  <div class="content-wrapper">
    <?php

    $con_ins=mysqli_query($conn,"SELECT * FROM instructor WHERE ID='$id_ins'");
    $rowins=mysqli_fetch_array($con_ins);
     ?>
   
          
        <br>
      <!--div TABLAS-->
      <div class="container">
        <center><h2><?php echo "Instructor ".$rowins['Nombre']." ".$rowins['Apellido']?></h2></center>
        <br>
              <!--Table 1-->
              <table style="border: 1px solid; ">
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
                <?php
                   
                  $sumas="SELECT SUM(horas_instructor) as total FROM horarios WHERE horarios.instructor=$id_ins";
                  $resulsuma=mysqli_query($conn,$sumas);
                  $rowsum=mysqli_fetch_array($resulsuma);
                  $sum=$rowsum['total'];
                  $res=40-$sum;
                  
                ?> 
                <tr class="table-bordered table-dark" style="color: black;">
                  <th colspan="4">Observaciones:</th>
                  <th colspan="3">Instructor: <?php  echo $rowins["Nombre"]." ".$rowins["Apellido"];?></th>                                    
                </tr>
                <tr class="table-bordered table-dark" style="color: black;">
                  <td colspan="4" rowspan="2"></td>
                  <td colspan="2">Horas Directas Formación</td> 
                  <td colspan="1"><?php echo $sum; ?></td>                
                </tr>
                <tr class="table-bordered table-dark" style="color: black;">
                  <td colspan="2">Horas pendientes de programar</td>
                  <td colspan="1"><?php echo $res; ?></td> 
                </tr>   
              </table>
              <!--/Table 1-->
            
        
                <!--div1Tabla -->          
              <div class="container">
                  <!--div2Tabla -->
                  <div style=" position: relative;
                               bottom: 1480px;
                               margin: 0 0 0 152px;
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

                                                 <td bgcolor="EFD5BA" width="17%" height="100px" style="border: 1px solid; padding: 0;">

                                                <?php
                        $querys = "SELECT * FROM horarios,ficha,instructor,dias,horas,ambiente WHERE horarios.dia=$day AND horarios.hora=$hour AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.id_ambiente=ambiente.id_A AND horarios.hora = horas.id_h and horarios.instructor=$id_ins";
                                                $result = mysqli_query($conn, $querys);
                                                $row = mysqli_fetch_assoc($result); 
                                                 if (isset($row)) { ?>                                                                              
                                                <center>                                      
                                                 <?php  echo $row['Nombre_ambiente'];?><br>
                                                 <?php  echo $row['Nº ficha'];?><br><?php  echo $row['Nombre'];?>   
                                                </center>
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
                                     ?>  
                    </table>      
                  </div><!--/div2Tabla --> 
              </div><!--/div1Tabla -->                                            
      </div>
      <!--/div TABLAS-->          
  </div>
  <!--/div1content-wrapper-->

 <!--footing ... pie de pagina-->

          <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
              <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2021 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
          </footer>
</div>
<!--/div1wrapper-->
          
</body>
</html>