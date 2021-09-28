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

}
if (isset($_GET['instructor'])) {
   $ins=$_GET['instructor'];

}




$querys="SELECT * FROM instructor where ID=$ins";
$resultado=mysqli_query($conn,$querys);
$indsF=$resultado->fetch_assoc();



?>


<body class="hold-transition sidebar-mini">

<div class="wrapper">
	
        <center>
             <div class="container">
                    <img class="img" src="../img/cenigraf.png ">
                    <img class="img2" src="../img/logo1.png" >
          </div>
        </center>
         
         
         

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
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
              <img src="../img/logo1.png"
                   alt="logo1"
                   class="brand-image img-circle elevation-1"
                   style="background-color:#ffffff; width: 40px; height:40px; ">
                                 <span class="brand-text font-weight-light">CENIGRAF </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
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
      
    
             <table style="width:92% " border="1px solid black"  bgcolor="white" > <!--86-->
          <tr>    <!--fila 1 titulo-->
            <th colspan="10" WIDTH="150" HEIGHT="100" bgcolor="E69138"> <!--<left><img src="img/logotabla.jpg" width="100" height="100"></left>--> 
              <center><br><h10>SERVICIO NACIONAL DE APRENDIZAJE SENA<h10>
                     <br><h7>Sistema integrado de gestion<h7>
                     <br><h10>HORARIOS ACADEMICOS<h10>
                     <br><h7>Proseso de gestion<h7></center> </th>
            <th colspan="4" bgcolor="E69138"><p>fecha</p> <p><input type="date" bgcolor="E69138"></p></th>
          </tr>
            <tr>  <!--fila 2 informacion general-->
            <th colspan="3" WIDTH="8"HEIGHT="8" bgcolor="CBC3BB"> Trimestre 
                                                 <select style="width:200px" >
                                                      <option value="value1">Trimestre 1</option>
                                                      <option value="value2">Trimestre 2</option>
                                                      <option value="value3">Trimestre 3</option>
                                                      <option value="value3">Trimestre 4</option>
                                                      <option value="value3">Trimestre 5</option>
                                                      <option value="value3">Trimestre 6</option>
                                                 </select>
         <div>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Horario</button>

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
                   <form class="form-horizontal" action="horarios_beta.php?instructor=<?php echo $ins;?>" method="post">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="fich">Ficha:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="fich" name="fichaaa">
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
                                                 
                                                  
            <th colspan="7" WIDTH="8"HEIGHT="8" bgcolor="CBC3BB"> Taller <input type="textarea"></th>
            <th colspan="4" WIDTH="8"HEIGHT="8" bgcolor="CBC3BB"> <p><h8> Fecha inicio <input type="date"  style="width:150px"><h8></p>
                                                 <p><h8> Fecha fin <input type="date" style="width:150px"><h8></p>
            </th>   
          </tr>
          <tr>  <!--fila 3 dias-->
            <td colspan="2" bgcolor="E69138">Horas</td>     
            <td colspan="2" bgcolor="E69138">Lunes</td>
            <td colspan="2" bgcolor="E69138">Martes</td>
            <td colspan="2" bgcolor="E69138">Miercoles</td>
            <td colspan="2" bgcolor="E69138">Jueves</td>
            <td colspan="2" bgcolor="E69138">Viernes</td>
            <td colspan="2" bgcolor="E69138">Sabado</td>
          </tr>
          <!--fila 4-->
          <form action="../controlador/x.php" method="POST">
          <tr>
            <th colspan="2"> <center> 6:00 - 7:40 </center>
              <td>
                 
              </td>
            </th> 
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td>
              
              </td>
            </th> 
            <th>
              <td> 
                   
              </td>
            </th> 
          </tr> 
          <!--fila 5-->
         <tr>
            <th colspan="2" bgcolor="EFD5BA"> <center> 7:40 - 8:00 </center></th>
            <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
         </tr>
          <!--fila 6-->
          <tr>
            <th colspan="2"> <center> 8:00 -9:40 </center>
              <td>
                 
              </td>
            </th> 
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 

              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th> 
          </tr>
          <!--fila 7-->
         <tr>
            <th colspan="2" bgcolor="EFD5BA"> <center> 9:40 - 10:00 </center></th>
            <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
         </tr>
          <!--fila 8-->
         <tr>
            <tr>
            <th colspan="2"> <center> 10:00 - 11:40 </center>
              <td>
                  
              </td>
            </th> 
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th> 
          </tr>
          <!--fila 9-->
         <tr>
            <th colspan="2" bgcolor="EFD5BA"> <center> 11:40 - 12:00 </center></th>
            <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
         </tr>
          <!--fila 10-->
        <tr>
            <th colspan="2"> <center> 12:00 - 13:40 </center>
              <td>
                  
              </td>
            </th> 
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th> 
          </tr>
          <!--fila 11-->
         <tr>
            <th colspan="2" bgcolor="EFD5BA"> <center> 13:40 - 14:20 </center></th>
            <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> ALMUERZO </center></th>
         </tr>
          <!--fila 12-->
        <tr>
            <th colspan="2"> <center> 14:20 - 16:00 </center>
              <td>
                  
              </td>
            </th> 
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th> 
          </tr>
          <!--fila 13-->
         <tr>
            <th colspan="2" bgcolor="EFD5BA"> <center> 16:00 - 16:20 </center></th>
            <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
         </tr>
          <!--fila 14-->
        <tr>
            <th colspan="2"> <center> 16:20 - 18:00 </center>
              <td>
                  
              </td>
            </th> 
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th> 
          </tr>
          <!--fila 15-->
        <tr>
            <th colspan="2"> <center> 18:15 - 19:45 </center>
              <td>
                  
              </td>
            </th> 
            <th>
              <td> 
                   
                    
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                  
              </td>
            </th> 
          </tr>
          <!--fila 16-->
         <tr>
            <th colspan="2" bgcolor="EFD5BA"> <center> 19:45 - 20:00 </center></th>
            <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138"><center> DESCANSO </center></th>
         </tr>
          <!--fila 17-->
        <tr>
            <th colspan="2"> <center> 20:00 - 21:40 </center>
              <td>
                  
              </td>
            </th> 
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                                      
              </td>
            </th>
            <th>
              <td> 
                   
              </td>
            </th>
            <th>
              <td> 
                   <select style="width:100px">
                     <option value="0">Selecionar</option><?php
                     while ($row48=mysqli_fetch_array($result48)) {
           ?>
              <option value="<?php echo $row48["ID_F"]?>"><?php echo $row48["Nº ficha"]?></option>

            <?php
        }
            ?>
                  </select>
                   <br>
                     <select>
                        <option value="value1">instructor1</option>
                        <option value="value2">instructor2</option>
                        <option value="value3">instructor3</option>
                     </select>
                   </br>
              </td>
            </th> 
          </tr>
        </table>
      </div>
  </div>




          <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
              <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
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