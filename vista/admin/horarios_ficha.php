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
 if (isset($_GET['ficha'])) {
      
$id_ficha=$_GET['ficha'];
 $_SESSION['fh']=$id_ficha;//sesseion id ficha prar eliminar horario
 $title=mysqli_query($conn,"SELECT * FROM ficha WHERE ID_F ='$id_ficha'");
 $titles=mysqli_fetch_assoc($title);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Horarios ficha <?php if (isset($id_ficha)) {
    echo $titles['Nº ficha'];
  }  ?></title>
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
                    <a class="nav-link" data-toggle="collapse" data-target="#col" style="cursor: pointer;">Nivel programa | Trimestres </a>
                  </li> 
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
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                  <a href="../horarios_imprimir.php"  target="_blank" >Imprimir</a>
                </div>
              </div>   
                <?php
                }
                ?>    
                        
        </div>            
      </aside>
  <!--div1content-wrapper-->         
  <div class="content-wrapper">
      <div class="container">

            <center><?php echo "<br><h3>Bienvenido ADMIN ".$inst."</h3>";?></center>            
            <div class="collapse" id="col">
              <div class="container border" style="padding:4%; background-color: #a2a1a5a8;" >

                <form method="GET" class="form-horizontal">
                  <div class="form-group">
                    <select class="form-control" name="nivel_F">
                      <option value="0">Selecione nivel programa </option>
                      <option value="Técnico">Técnico</option>
                      <option value="Tecnólogo">Tecnólogo</option>
                      <option value="Especialización">Especialización</option>                
                    </select><br>
                <select class="form-control" name="Trimestre">
                        <option value="0">Seleccione el trimestre </option>
                        <option value="I Trimestre">I Trimestre</option>
                        <option value="II Trimestre">II Trimestre</option>
                        <option value="III Trimestre">III Trimestre</option> 
                        <option value="IV Trimestre">IV Trimestre</option>
                        <option value="V Trimestre">V Trimestre</option>
                        <option value="VI Trimestre">VI Trimestre</option>                    
                </select>
                  </div>
               
                  <button type="submit" class="btn btn-dark">Enviar</button>
                </form>
              </div>
            </div>
                <?php           
                if (isset($_GET['nivel_F'])) {
                  $nil=$_GET['nivel_F'];
                  $trim_=$_GET['Trimestre'];
                  
                  $_SESSION['trim']=$trim_;//varibale de triemstre para consulta y registro del horario

                  $query="SELECT * FROM ficha,programa,tb_trimestre WHERE programa.nivel_form='$nil' and ficha.fc_id_programa=programa.id_program AND tb_trimestre.id_fch=ficha.ID_F AND tb_trimestre.Trimestre='$trim_'";
                  $cont=mysqli_query($conn,$query);
                  echo "<center><h3>".$nil." ".$trim_." </h3></center>";
                  ?>            
                  <div class="container border" style="padding:4%; background-color: #a2a1a5a8;">
                     <form id="Formulario" method="GET"  class="form-horizontal">
                      <select class="form-control" name="ficha">
                        <option value="0">Seleccione la ficha </option>
                       <?php
                        while ($row=mysqli_fetch_assoc($cont)) {
                          ?>
                           <option value="<?php echo $row['ID_F']?>"><?php echo $row['Nº ficha']?></option>
                          <?php
                        }
                       ?>
                      </select>
                      <br>
                        <button type="submit" id="Enviar" class="btn btn-dark ">Enviar</button>
                    </form>
                  </div>
                <?php
                } 
                ?>

      </div>
   
    <?php

    if (isset($_GET['ficha'])) {
    
    $trim_f=$_SESSION['trim'];//variable del trimestre para consulta 
      

    $con_fch=mysqli_query($conn,"SELECT * FROM ficha,programa,tb_trimestre WHERE ID_F='$id_ficha' and ficha.fc_id_programa=programa.id_program AND tb_trimestre.id_fch=ficha.ID_F AND tb_trimestre.Trimestre='$trim_f'");
    $rowfch=mysqli_fetch_array($con_fch);//Consulta y ver informacion ficha parte superior del horario 
    
    $_SESSION['id_trim']= $rowfch['id_T'];
    $trimestre_id=$rowfch['id_T'];
     ?>
   
      <!--modal-->
      <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
                <!-- Modal content-->
          <div class="modal-content">
                  <!--Contenido-->
                    <div class="modal-header">
                        <h4 class="modal-title">Crear Horario</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>                  
                    </div>
                    <div class="modal-body"><center>
                        <center><h3>Ficha</h3></center>
                        <form class="form-horizontal" method="POST" id="formu" action="../../controlador/guardar_ficha.php?f_h=<?php echo $id_ficha; ?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fic">Instructor:</label>
                                <div class="col-sm-10">
                                  <select class="form-control" id="fic" name="ins">
                                    <option value="0">Seleccionar Instructor</option>
                                    <?php
                                    $inst="SELECT * FROM instructor";
                                    $contI=mysqli_query($conn,$inst);
                                                 while ($ins=mysqli_fetch_array($contI)) {
                                       ?>
                                    <option value="<?php echo $ins["ID"]?>"><?php echo $ins["Nombre"]." ".$ins['Apellido']?></option>

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
                    </div></center>
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
      <!--/modal-->
        
        <br>
      <!--div TABLAS-->
      <div class="container">
        <center><h3><?php echo "Ficha ".$rowfch['Nº ficha']." ".$rowfch['nivel_form']; ?></h3>
            <h4><?php echo "Programa ".$rowfch['Nom_program']?></h4>
            
          </center>

              <!--Table 1-->
              <table style="border: 1px solid;">
                <tr class="table-bordered table" style="">
                  <td colspan="2" bgcolor="5B6269" style="border: 1px solid; color: white; border-color: black;">
                    <?php echo "Grupo: ".$rowfch['Nº ficha']." ".$rowfch['Trimestre'];?> </td>
                  <td colspan="3" bgcolor="5B6269" style="border: 1px solid; color: white; border-color: black;">
                  Taller</td>
                  <td colspan="2" bgcolor="5B6269" style="border: 1px solid; color: white; border-color: black;">
                    <?php echo "Fecha: ".$rowfch['Trim_date_Inc']." a ".$rowfch['Trim_date_fin'] ?></td>
                </tr>
                <tr style="border:solid 1px;">
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50" ><center>Horas</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Lunes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Martes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Miercoles</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Jueves</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Viernes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Sabado</center></th>
                </tr>

                <tr>
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
              <!--/Table 1-->
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
        
                <!--div1Tabla -->          
              <div class="container">
                  <!--div2Tabla -->
                  <div style=" position: relative;
                               bottom: 1401px;
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
                        $querys = "SELECT * FROM horarios,ficha,instructor,dias,horas,ambiente,tb_trimestre WHERE horarios.dia=$day AND horarios.hora=$hour AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.id_ambiente=ambiente.id_A AND ficha.ID_F = tb_trimestre.id_fch and horarios.id_trim_fch='$trimestre_id' and horarios.hora = horas.id_h and horarios.ficha=$id_ficha";
                                                $result = mysqli_query($conn, $querys);
                                                $row = mysqli_fetch_assoc($result); 
                                                 if (isset($row)) { ?>                                                                              
                              <center>                                      
                                                 <?php  echo $row['Nombre_ambiente'];?><br>
                                                 <?php  echo $row['Nombre']." ".$row['Apellido'];?><br>
            
                                  <!--<div class="dropdown dropright" style=" display: inline-block;">
                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                                     Opciones
                                    </button>
                                    <div class="dropdown-menu" style="background-color: #f1f1f100; border: 1px solid rgb(0 0 0 / 0%); box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 0%);" >
                                      
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-success" onclick="window.open('../../controlador/update_FH.php?ubd=<?php echo $row['id_hora']?>','_Self')">Editar</button>-->
                                       <a href="../../controlador/delete_FH.php?eli=<?php echo $row['id_hora']?>"><button type="button" onclick="return eliminarh()" class="btn btn-danger btn-sm">Eliminar</button></a> 
                                   <!--   </div>                                                                                                                     
                                    </div>-->
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
                  </div><!--/div2Tabla --> 
              </div><!--/div1Tabla --> 
              <?php
              }
              ?>              
         <!--<div id="respuesta">           
         </div>-->             
        <script>
        /*  $('#Enviar').click(function(){
              $.ajax({
                url: '../../controlador/ficha_h.php',
                type: 'POST',
                data: $('#Formulario').serialize(),
                success: function(res){
                $('#respuesta').html(res);}
              });
           });*/
        </script>
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