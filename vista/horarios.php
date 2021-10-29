<?php 
//--------------------------------------------------------------
//----------------------------------------------
//----------------------------------------------
 session_start();
 include('../controlador/conexion.php');
  $correo=$_SESSION['ema'];
  $rol=$_SESSION['rol'];
  $inst=$_SESSION['nam'];
  $instru=$_SESSION['IDins'];
 if (!isset($correo)) {
    header("location:../index.php");
 }
$querys="SELECT * FROM instructor";
$ins=mysqli_query($conn,$querys);
$lol=mysqli_fetch_array($ins);
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
     <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" href="../css/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <center>
      <img class="img" src="../img/cenigraf.png" >
      <img class="img2" src="../img/logo1.png" >
  </center>
  </div>
 </div>
  <!--divnav-->
 <div>
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-light sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li> 
        </ul>                  
            <a class="navbar-brand" onclick="window.open('horarios.php','_Self')">Cenigraf</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php if ($rol==1) { ?>
              <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" data-target="#Regusu">Registrar Usuario</a>
              </li>          
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#fich">Registrar Fichas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#RegSed">Registrar SEDE</a>
              </li>
            <?php } ?>  
              <li class="nav-item">
                <a class="nav-link" onclick="window.open('../controlador/exit.php','_Self')">Cerrar sesion</a>
              </li> 
                     
            </ul>
          </div>
        </nav>
 </div><!--/divnav-->
 <!--lateral-->
 <div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
            
            <a href="horarios.php" class="brand-link">
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
                  <a href="#" class="d-block"><?php 
                  if ($rol==1) {
                   echo "ADMIN-".$inst;
                 }elseif ($rol==2) {
                  echo "Instructor-".$inst;;
                 }
                 ?></a>
                </div>
              </div>
              <?php if ($rol==1) {?>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../img/h.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                 <a href="" data-toggle="modal" data-target="#myModal">Crear Horario Instructor</a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-target="#usu">Consula Instructor</a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-target="#fichas">Consula Fichas</a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-target="#sedet">Consula Sedes</a>
                </div>
              </div>

              <?php
            }
              ?>
        </div>
            
                  
        </aside>
 </div>
 <!--/lateral-->

<div class="content-wrapper">
  <div class="container">
 <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <!--Contenido-->
                  <div class="modal-header">
                    <h4 class="modal-title">Crear Horario Instructor</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  <div class="modal-body">
                   <form class="form-horizontal" action="admin/horarios_beta.php" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="ins">Instructor:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="ins" name="inst">
                            <option value="0" >Seleccionar Instructor</option>
                            <?php
                                         while ($w=mysqli_fetch_array($ins)) {
                               ?>
                                   <option value="<?php echo $w["ID"]?>"><?php echo $w["Nombre"];?></option>

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
    <!--/modal-->
    <center>
      <div class="container">
        <?php
         if ($rol==1) {
           echo "<br><h3>Bienvenido ADMIN ".$inst."</h3>";
         }elseif ($rol==2) {
          echo "<br><h3>Bienvenido Instructor ".$inst."</h3>";
         }

        ?>
      </div>
    </center>

 <br>
 <!--Collapse_istructor_Tabla-->
 <div> 
  <div id="usu" class="collapse">
   <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="container"> 
         <script type="text/javascript">
                  function eli(){

                     var res=confirm("Esta seguro de eliminar este instructor.")
                     if (res==true) {
                        return true;
                     }
                     else{
                        return false;
                     }
                     
                  }
               </script>  

        <?php
         $tablai="SELECT * FROM `instructor`,`roles` WHERE instructor.rol = roles.id_rol";
         $cont=mysqli_query($conn,$tablai);
         
        ?>             
          <table class="table table-bordered table-striped" style="text-align:center;">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
            <?php
              while ($icon=mysqli_fetch_assoc($cont)) {
            ?>
              <tr>
                <td><?php echo $icon["ID"];?></td>
                <td><?php echo $icon["Nombre"];?></td>
                <td><?php echo $icon["Apellido"];?></td>
                <td><?php echo $icon["email"];?></td>
                <td><?php echo $icon["rol"];?></td>              
                <td>
                  <div class="btn-group">
                    <a href="admin/horarios_beta.php?instructor=<?php echo $icon["ID"];?>"><button type="submit" class="btn btn-dark btn-sm">Horario</button></a>
                    <a href="ubdate.php?ubds=<?php echo $icon["ID"];?>"><button type="submit" class="btn btn-success btn-sm">Editar</button></a>
                    <a href="../controlador/deleteI.php?eli=<?php echo $icon["ID"];?>"><button type="submit" class="btn btn-danger btn-sm" onclick="return eli()" >Eliminar</button></a>
                  </div>
                </td>
              </tr>      
            <?php
              }
              
            ?>      
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 <!--/Collapse_Instrucor_Tabla-->

 <!--Collapse_Ficha_Ficha-->
 <div> 
  <div id="fichas" class="collapse">
   <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="container"> 
         <script type="text/javascript">
                  function elif(){

                     var res=confirm("Esta seguro de eliminar esta ficha.")
                     if (res==true) {
                        return true;
                     }
                     else{
                        return false;
                     }
                     
                  }
               </script>  

        <?php
         $tablaf="SELECT * FROM ficha";
         $contf=mysqli_query($conn,$tablaf);
         
        ?>             
          <table class="table table-bordered table-striped" style="text-align:center;">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Ficha</th>
                <th>Nombre del programa</th>
                <th>Nivel de formacion</th>
                <th>Trimestre actual</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
            <?php
              while ($fcon=mysqli_fetch_assoc($contf)) {
            ?>
              <tr>
                <td><?php echo $fcon["ID_F"];?></td>
                <td><?php echo $fcon['Nº ficha'];?></td>
                <td><?php echo $fcon["Nombre_programa"];?></td>
                <td><?php echo $fcon["nivel_formacion"];?></td>
                <td><?php echo $fcon["trimestre_actual"];?></td>              
                <td>
                  <div class="btn-group">
                    <a href="ubdateF.php?ubf=<?php echo $fcon["ID_F"]?>"><button type="submit" class="btn btn-success btn-sm">Editar</button></a>
                    <a href=""><button type="submit" class="btn btn-danger btn-sm" onclick="return elif()" >Eliminar</button></a>
                  </div>
                </td>
              </tr>      
            <?php
              }
              
            ?>      
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 <!--/Collapse_Ficha_Tabla-->

 <!--Collapse_Sede_tabla-->
 <div> 
  <div id="sedet" class="collapse">
   <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="container"> 
         <script type="text/javascript">
                  function elis(){

                     var res=confirm("Esta seguro de eliminar esta SEDE.")
                     if (res==true) {
                        return true;
                     }
                     else{
                        return false;
                     }
                     
                  }
               </script>  

                  
          <table class="table table-bordered table-striped" style="text-align:center;">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Nombre sede</th>
                <th>Dirreccion Sede</th>
                <th>Telefono Sede</th>                
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>                              
                <td>
                  <div class="btn-group">
                    <a href=""><button type="submit" class="btn btn-success btn-sm">Editar</button></a>
                    <a href=""><button type="submit" class="btn btn-danger btn-sm" onclick="return elis()" >Eliminar</button></a>
                  </div>
                </td>
              </tr>           
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 <!--/Collapse_Sede_tabla-->

 <!--Collapse1Instructor-->
<div> 
  <div id="Regusu" class="collapse">
   <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="../controlador/regins.php" method="POST">
              <div class="form-group">
                <label for="nom">Nombre:</label>
                <input type="text" class="mr-sm-2 form-control " placeholder="Digite el nombre" name="nombre" id="nom" required="">
              </div>
              <div class="form-group">
                <label for="apel">Apellido:</label>
                <input type="text" class="form-control" placeholder="Digite el Apellido" name="apellido" id="apel" required="">
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="mr-sm-2 form-control " placeholder="Digite el Email" name="correo" id="email" required="">
              </div>
               <div class="form-group">
                <label for="dni">Documento de identidad :</label>
                <input type="number" class="mr-sm-2 form-control " placeholder="Digite el DNI" name="dnis" id="dni" required="">
              </div>
              <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" placeholder="Digite la contraseña" name="contra" id="pwd" required="">
              </div>             
              <div class="form-group">
                <label for="pwd2">Repetir Contraseña:</label>
                <input type="password" class="form-control" placeholder="Repita la contraseña" name="contra2" id="pwd2" required="">
              </div>
               <div class="form-group">
                <label for="roles">Rol del Instructor:</label>
                <select class="form-control" id="roles" name="rol" required="">
                  <option value="0">Seleccione el Rol</option>
                  <option value="2">Instructor</option>
                  <option value="1">ADMIN</option>                  
                </select>
              </div>             
              <center>
                <button type="submit" class="btn btn-dark">Entrar</button>
              </center>              
            </form>     
          </div>
      </div>
    </div>
  </div>
</div>
<!--/Collapse1Instructor-->
    <!--Collapse2Ficha-->
<div> 
  <div id="fich" class="collapse">
   <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="../controlador/regfich.php" method="POST">
              <div class="form-group">
                <label for="fi">Codigo de ficha:</label>
                <input type="number" class="mr-sm-2 form-control " placeholder="Ficha" name="fich" id="fi" required="">
              </div>
              <div class="form-group">
                <label for="nop">Nombre del programa:</label>
                <input type="text" class="form-control" placeholder="Nombre del programa" name="nomp" id="nop" required="">
              </div>
              <div class="form-group">
                <label for="nf">Nivel de Formacion:</label>
                <select class="form-control" id="nf" name="nivel" required="">
                  <option value="0">Seleccione</option>
                  <option value="1">Técnico </option>                  
                  <option value="2">Tecnólogo</option> 
                  <option value="3">Especializado</option>               
                </select>
              </div>   
              <div class="form-group">
                <label for="trim">Trimestre actual:</label>
                <select class="form-control" id="trim" name="trime" required="">
                  <option value="0">Seleccione</option>
                  <option value="1">I Trimestre</option>
                  <option value="2">II Trimestre</option>
                  <option value="3">III Trimestre</option>
                  <option value="4">IV Trimestre</option>
                  <option value="5">V Trimestre</option>
                  <option value="6">VI Trimestre</option>
                      
                </select>
              </div>   
              <center>
                <button type="submit" class="btn btn-dark">Entrar</button>
              </center>              
            </form>     
          </div>
      </div>
    </div>
  </div>
</div>    
<!--/Collapse2Ficha-->

    <!--Collapse4SEDE-->
<div> 
  <div id="RegSed" class="collapse">
   <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="../controlador/regins.php" method="POST">
              <div class="form-group">
                <label for="nomC">Nombre sede:</label>
                <input type="text" class="mr-sm-2 form-control " placeholder="Digite el nombre de la sede" name="nombreC" id="nomC" required="">
              </div>
              <div class="form-group">
                <label for="DS">Direccion sede:</label>
                <input type="text" class="form-control" placeholder="Digite el la direccion de la sede" name="Direc" id="DS" required="">
              </div>
              <div class="form-group">
                <label for="tl">Telefono sede:</label>
                <input type="number" class="mr-sm-2 form-control " placeholder="Digite el telefono" name="phone" id="tl" required="">
              </div>             
              <center>
                <button type="submit" class="btn btn-dark">Entrar</button>
              </center>              
            </form>     
          </div>
      </div>
    </div>
  </div>
</div>
<!--/Collapse4SEDE-->

<!--/tabla_ins_rol-->
<div class="container">
  <?php
 if ($rol==2) {
                   
  $sumas="SELECT SUM(horas_instructor) as total FROM horarios WHERE horarios.instructor=$instru";
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
                  <th colspan="3">Instructor: <?php  echo $lol["Nombre"]." ".$lol["Apellido"];?></th>                                    
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
       <!--div1 -->          
       <div class="container">
          <div style="position: relative;
                              bottom: 1480px;
                              margin: 0 0 0 154px;
                              margin-right: 0px;
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
                          $query = "SELECT * FROM horarios,ficha,instructor,dias,horas WHERE horarios.dia=$day AND horarios.hora=$hour AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.hora = horas.id_h and horarios.instructor=$instru";
                                      $result = mysqli_query($conn, $query);
                                      $row = mysqli_fetch_assoc($result); 
                                       if (isset($row)) { ?>                                                                              
                    <center>
                                       <?php  echo $row['Nº ficha'];?><br>
                                       <?php  echo $row['Nombre'];?><br>                     
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

<?php 
}
?>
</div><!--/tabla_ins_rol-->

   <div class="container">
     <?php
    if (isset($_GET['v'])) {
     
     if ($_GET['v']==1) {            
      ?>
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Usuario registrado</strong>
      </div>
      <?php
       }elseif ($_GET['v']==2) {
         ?>
         <div class="alert alert-warning alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>El correo ya está registrado, intente con otro correo.</strong> 
        </div>
         <?php
       }elseif ($_GET['v']==3) {
        ?>
         <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>La contraseña no coincide</strong>
          </div>
         <?php
       }
     }
     ?>
   </div>
     <div class="container">
     <?php
    if (isset($_GET['vl'])) {
     
     if ($_GET['vl']==1) {            
      ?>
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Ficha registrado</strong>
      </div>
      <?php
       }elseif ($_GET['vl']==2) {
         ?>
         <div class="alert alert-warning alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>La ficha ya esta registrada.</strong> 
        </div>
         <?php
       }
     }
     ?>
   </div>


  </div>
</div>
   <footer class="main-footer">
              <div class="float-right d-none d-sm-block">
                <b>Version</b> 0.1
              </div>
              <strong>Copyright &copy; 2021 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
   </footer>
   
</div>
	
 
<!-- jQuery-->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -- >
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App --> 
<script src="../css/js/adminlte.min.js"></script>


</body>
</html>