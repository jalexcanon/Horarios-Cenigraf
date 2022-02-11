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
 
      
$id_amb=$_GET['amb'];
 

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Horarios Ambientes</title>
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
          <nav id="lt_nav" class="main-header navbar navbar-expand-md navbar-orange navbar-light sticky-top">
                <ul class="navbar-nav">
                   <li class="nav-item">
                   <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                  </li> 
                </ul>                  
                 <a class="navbar-brand" onclick="window.open('../horarios.php','_Self')" style="cursor:pointer; font-weight: bold;">Cenigraf</a>
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

      <aside id="lt_aside" class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
            
            <a href="../horarios.php" class="brand-link" style="color:white;">
              <img src="../../img/logo1.png"
                   alt="logo1"
                   class="brand-image img-circle elevation-1"
                   style="background-color:#ffffff; width: 40px; height:40px; ">
              <span class="brand-text font-weight-bold" >CENIGRAF </span>
            </a>   
        <div class="sidebar">              
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../../img/perfil.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block" style="color:white;">ADMIN-<?php  echo $inst; ?></a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                  <a href="../imprimir/horarios_Amb_Im.php?amb=<?php echo $id_amb; ?>" target="_blank" >  <div class="far fa-file" style="color: white;"> Imprimir | Descargar</div></a>
                </div>
              </div> 
             <!--   <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class=" far fa-calendar-alt fa-lg"></i>
                      <p>
                        Trimestres del Año
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="horarios_ambiente.php?amb=<?php echo $id_amb;?>&ambT=I Trimestre" class="nav-link">
                          <i class="fas fa-file-export"></i>
                          <p>I Trimestre del año</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="horarios_ambiente.php?amb=<?php echo $id_amb;?>&ambT=II Trimestre" class="nav-link">
                          <i class="fas fa-file-export"></i>
                          <p>II Trimestre del año</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="horarios_ambiente.php?amb=<?php echo $id_amb;?>&ambT=III Trimestre" class="nav-link">
                          <i class="fas fa-file-export"></i>
                          <p>III Trimestre del año</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="horarios_ambiente.php?amb=<?php echo $id_amb;?>&ambT=IV Trimestre" class="nav-link">
                          <i class="fas fa-file-export"></i>
                          <p>IV Trimestre del año</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="horarios_ambiente.php?amb=<?php echo $id_amb;?>&ambT=V Trimestre" class="nav-link">
                          <i class="fas fa-file-export"></i>
                          <p>V Trimestre del año</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="horarios_ambiente.php?amb=<?php echo $id_amb;?>&ambT=VI Trimestre" class="nav-link">
                          <i class="fas fa-file-export"></i>
                          <p>VI Trimestre del año</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>               
              </nav> -->           
        </div>            
      </aside>
  <!--div1content-wrapper-->         
  <div class="content-wrapper">
    <?php

    /*if (isset($_GET['ambT'])) {
      
    $ambTr=$_GET['ambT'];*/

    $con_amb=mysqli_query($conn,"SELECT * FROM ambiente WHERE id_A='$id_amb'");
    $rowamb=mysqli_fetch_array($con_amb);
     ?>
   
          
        <br>
      <!--div TABLAS-->
      <div class="container">
        <center><h2><?php echo "Ambiente ".$rowamb['Nombre_ambiente']?></h2></center>
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
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1;border: 1px solid;"><center> ALMUERZO </center></th>
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
              </table>
              <!--/Table 1-->
            
        
                <!--div1Tabla -->          
              <div class="container">
                  <!--div2Tabla -->
                  <div style=" position: relative;
                               bottom: 1402px;
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
                        $querys = "SELECT * FROM horarios,ficha,instructor,dias,horas,ambiente,tb_trimestre,programa WHERE horarios.dia=$day AND horarios.hora=$hour AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.id_ambiente=ambiente.id_A AND horarios.hora = horas.id_h and horarios.id_trim_fch=tb_trimestre.id_T and ficha.fc_id_programa=programa.id_program and horarios.id_ambiente=$id_amb and tb_trimestre.estatus_trim_H=0";
                        
                                                $result = mysqli_query($conn, $querys);
                                                $row = mysqli_fetch_assoc($result); 
                                                 if (isset($row)) { ?>                                                                              
                                                <center style="font-size: small;">                                      
                                                 
                                                 <?php  echo $row['Nº ficha'];?><br><?php  echo $row['Nom_program'];?><br>
                                                 <?php  echo $row['Nombre']." ".$row['Apellido'];?><br>
                                                 <?php  echo $row['Trimestre'];?>   
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
<?php //} ?>
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