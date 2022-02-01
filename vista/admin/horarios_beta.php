<?php 

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
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>beta</title>
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

</head>

<?php 
   include ("../../controlador/conexion.php");
   
 
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


<body class="hold-transition sidebar-mini" >

<div class="wrapper">
	      
        <div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <center>
                <img class="img" src="../../img/cenigraf.png" >
                <img class="img2" src="../../img/logo1.png" >
              </center>
            </div>
        </div>
         
         
         

         <div>
         	<nav id="lt_nav" class="main-header navbar navbar-expand-md navbar-dark navbar-light sticky-top">
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
        		        <a class="nav-link" onclick="window.open('../../controlador/exit.php','_Self')">Cerrar sesion</a>
        		      </li> 
                     
        		    </ul>
              </div>
        </nav>
         </div>
         <!-- prue menu-->


       <aside id="lt_aside" class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
            
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
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../../img/h.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                 <a href="" data-toggle="modal" data-target="#myModal">Crear Horario</a>
                </div>
              </div>
              
        </div>
            
                  
        </aside>
          
  <div class="content-wrapper">
    <div class="container">
      
      
            <!-- Trigger the modal with a button -->
            <br>
            <center><h2>Intructor <?php  echo $indsF["Nombre"]; ?></h2><br>
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
                   <form class="form-horizontal" action="../../controlador/guardar.php?instructor=<?php echo $ins;?>" method="POST">
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
                          <br>
                        <label class="control-label col-sm-2" for="ho">Ambiente:</label>
                        <?php
                    $amb="SELECT * FROM ambiente";
                    $consulA=mysqli_query($conn,$amb);

                        ?>
                          <div class="col-sm-10">
                             <select class="form-control" id="ho" name="idAB">
                                <option value="0">Seleccionar Ambiente</option>
                              <?php
                        while ($ambt=mysqli_fetch_assoc($consulA)) {
                          ?>
                        <option value="<?php echo$ambt['id_A']?>"><?php echo $ambt['Nombre_ambiente'] ?></option>
                          <?php
                        }
                          ?>
                             </select>
                          </div>
                          
                        
                      </div>
                  </div>
                      <div class="form-group">
                        <div class="modal-footer">
                          <div class="btn-group">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning">Crear</button>
                          </div>
                          
                        </div>
                      </div>
                    </form>
                 </div>   
              </div>
           </div>
        </div></center>
<?php
                   
  $sumas="SELECT SUM(horas_instructor) as total FROM horarios WHERE horarios.instructor=$ins";
  $resulsuma=mysqli_query($conn,$sumas);
  $rowsum=mysqli_fetch_array($resulsuma);
  $sum=$rowsum['total'];
  $res=40-$sum;
  
?>            
          
       <div class="container"><!--div1tabla --> 
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
                <tr class="table-bordered table-dark" style="color: black;">
                  <th colspan="4">Observaciones:</th>
                  <th colspan="3">Instructor: <?php  echo $indsF["Nombre"]." ".$indsF["Apellido"];?></th>                                    
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
        
       </div><!--/div1tabla --> 
               <script type="text/javascript">
                  function eliminarh(){

                     var res=confirm("Esta seguro de eliminar este horario.")
                     if (res==true) {
                        return true;
                     }
                     else{
                        return false;
                     }
                     
                  }
               </script>  

    <!--div1 -->          
       <div class="container">
                  <div style="position: relative;
                              bottom: 1480px;
                              margin: 0 0 0 159px;
                              margin-right: -7px;
                              max-WIDTH: 966px; 
                              max-HEIGHT:100px;
                                  "> <!--div2 -->
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
$query = "SELECT * FROM horarios,ficha,instructor,dias,horas,ambiente WHERE horarios.dia=$day AND horarios.hora=$hour AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.id_ambiente=ambiente.id_A AND horarios.hora = horas.id_h and horarios.instructor=$ins";
                                      $result = mysqli_query($conn, $query);
                                      $row = mysqli_fetch_assoc($result); 
                                       if (isset($row)) { ?>                                                                              
                    <center>
                                       <?php  echo $row['Nº ficha'];?><br>
                                       <?php  echo $row['Nombre_ambiente'];?><br>
  
                        <div class="dropdown dropright" style=" display: inline-block;">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                           Opciones
                          </button>
                          <div class="dropdown-menu" style="background-color: #f1f1f100; border: 1px solid rgb(0 0 0 / 0%); box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 0%);" >
                            
                            <div class="btn-group">
                              <button type="button" data-toggle="modal" class="btn btn-success" onclick="window.open('../../controlador/ubdate.php?ubd=<?php echo $row['id_hora']?>','_Self')">Editar</button>
                             <a href="../../controlador/delete.php?eli=<?php echo $row['id_hora']?>"><button type="button" onclick="return eliminarh()" class="btn btn-danger">Eliminar</button></a> 
                            </div>                                                                                                                     
                          </div>
                        </div>
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
                   </div><!--/div2 --> 


                </div><!--/div1 -->  



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
          


<!-- jQuery-->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -- >
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App --> 
<script src="../../css/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes 
<script src="../css/js/demo.js"></script-->



</body>
</html>