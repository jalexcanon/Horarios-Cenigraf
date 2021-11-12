<?php 
 session_start();
 include('../controlador/conexion.php');
  $correo=$_SESSION['ema'];//email usuario
  $rol=$_SESSION['rol'];//rol usuario
  $inst=$_SESSION['nam'];//nombre instructor (usuario)
  $instru=$_SESSION['IDins'];//id instructor
 if (!isset($correo)) {
    header("location:../index.php");
 }
$querys="SELECT * FROM instructor";
$ins=mysqli_query($conn,$querys);// consulta select crear horario instructor 
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Horarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
            <a class="navbar-brand" onclick="window.open('horarios.php','_Self')" style="cursor: pointer;">Cenigraf</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php if ($rol==1) { ?>
              <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" data-target="#Regusu" style="cursor: pointer;">Registrar Usuario</a>
              </li>          
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#fich" style="cursor: pointer;">Registrar Fichas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#fichT" style="cursor: pointer;">Registrar Trimestre</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#amb" style="cursor: pointer;">Registrar Ambiente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#prog" style="cursor: pointer;">Registrar Programa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#RegSed" style="cursor: pointer;">Registrar SEDE</a>
              </li>
            <?php } ?>  
              <li class="nav-item">
                <a class="nav-link" onclick="window.open('../controlador/exit.php','_Self')" style="cursor: pointer;">Cerrar sesion</a>
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
             <!-- <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../img/h.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                 <a href="" data-toggle="modal" data-target="#myModal">Crear Horario</a>
                </div>
              </div>-->
               <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../img/h.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                 <a href="admin/horarios_ficha.php">Crear Horario Ficha</a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-parent="" data-target="#usu" style="cursor: pointer;">Consulta Instructor</a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-parent="" data-target="#fichas" style="cursor: pointer;">Consulta Fichas</a>
                </div>
              </div>              
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-target="#ambi" style="cursor: pointer;">Consulta ambiente</a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-target="#progtl" style="cursor: pointer;">Consulta Programa</a>
                </div>
              </div>
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">               
                <div class="info">
                 <a data-toggle="collapse" data-target="#sedet"  style="cursor: pointer;" >Consulta Sedes</a>
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
         $tablaf="SELECT * FROM ficha,programa WHERE ficha.fc_id_programa = programa.id_program";
         $contf=mysqli_query($conn,$tablaf);
         
        ?>             
          <table class="table table-bordered table-striped" style="text-align:center;">
            <thead class="thead-dark">
              <tr>
                
                <th>Ficha</th>
                <th>Nombre del programa</th>
                <th>Nivel de formacion</th>
                <th>Jornada </th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
            <?php
              while ($fcon=mysqli_fetch_assoc($contf)) {
            ?>
              <tr>
                
                <td><?php echo $fcon['Nº ficha'];?></td>
                <td><?php echo $fcon["Nom_program"];?></td>
                <td><?php echo $fcon["nivel_form"];?></td>
                <td><?php echo $fcon["fc_jornada"];?></td>              
                <td>
                  <div class="btn-group">
                    <button class="btn btn-dark btn-sm" onclick="window.open('admin/horarios_ficha.php?ficha=<?php echo $fcon['ID_F']?>','_Self')">Horario</button>
                    <a href="ubdateF.php?ubf=<?php echo $fcon["ID_F"]?>"><button type="submit" class="btn btn-success btn-sm">Editar</button></a>
                    <a href="../controlador/deleteF.php?eliF=<?php echo $fcon['ID_F']?>"><button type="submit" class="btn btn-danger btn-sm" onclick="return elif()" >Eliminar</button></a>
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
        <?php
         $tablaS="SELECT * FROM `sede`";
         $contS=mysqli_query($conn,$tablaS);
         
        ?>   
                  
          <table class="table table-bordered table-striped" style="text-align:center;">
            <thead class="thead-dark">
              <tr>                
                <th>Nombre sede</th>
                <th>Direccion Sede</th>
                <th>Telefono Sede</th>                
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
             <?php
              while ($Scon=mysqli_fetch_assoc($contS)) {
            ?>
              <tr>
                
                <td><?php echo $Scon['nombre_sede'];?></td>
                <td><?php echo $Scon["direccion_sede"];?></td>
                <td><?php echo $Scon["telefono_sede"];?></td>             
                <td>
                  <div class="btn-group">
                    <a href="ubdateSD.php?ubS=<?php echo $Scon["id"]?>"><button type="submit" class="btn btn-success btn-sm">Editar</button></a>
                    <a href="../controlador/deleteSD.php?eliS=<?php echo $Scon['id']?>"><button type="submit" class="btn btn-danger btn-sm" onclick="return elis()" >Eliminar</button></a>
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
 <!--/Collapse_Sede_tabla-->

  <!--Collapse_ambiente_tabla-->
 <div> 
  <div id="ambi" class="collapse">
   <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="container"> 
         <script type="text/javascript">
                  function eliminar_ambiente(){

                     var res=confirm("Esta seguro de eliminar el ambiente.")
                     if (res==true) {
                        return true;
                     }
                     else{
                        return false;
                     }
                     
                  }
               </script>  

        <?php
         $tablaA="SELECT * FROM `ambiente`,`sede` WHERE `ambiente`.`id_sede`= `sede`.`id`";
         $contA=mysqli_query($conn,$tablaA);
        
        ?>  

          <table class="table table-bordered table-striped" style="text-align:center;">
            <thead class="thead-dark">
              <tr>              
                <th>Sede</th>
                <th>Nombre ambiente</th>
                <th>Capacidad</th>
                <th>No de equipos</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
           <?php
              while ($Acon=mysqli_fetch_assoc($contA)) {
            ?>
              <tr>              
                <td><?php echo $Acon['nombre_sede'];?></td>
                <td><?php echo $Acon["Nombre_ambiente"];?></td>
                <td><?php echo $Acon["Capacidad_ambiente"];?></td>    
                <td><?php echo $Acon["No_equipos"];?></td>           
                <td>
                  <div class="btn-group">
                    <a href="ubdateA.php?ubA=<?php echo $Acon["id_A"]?>"><button type="submit" class="btn btn-success btn-sm">Editar</button></a>
                    <a href="../controlador/deleteA.php?eliA=<?php echo $Acon['id_A']?>"><button type="submit" class="btn btn-danger btn-sm" onclick="return eliminar_ambiente()" >Eliminar</button></a>
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
 <!--/Collapse_Sede_tabla-->

  <!--Collapse_Programa_tabla-->
 <div> 
  <div id="progtl" class="collapse">
   <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="container"> 
         <script type="text/javascript">
                  function eliminar_programa(){

                     var res=confirm("Esta seguro de eliminar el programa.")
                     if (res==true) {
                        return true;
                     }
                     else{
                        return false;
                     }
                     
                  }
               </script>  

        <?php
         $tablaprog="SELECT * FROM `programa`";
         $contprog=mysqli_query($conn,$tablaprog);
         
        ?>  

          <table class="table table-bordered table-striped" style="text-align:center;">
            <thead class="thead-dark">
              <tr>
                <th>Nombre del Programa</th>
                <th>Nivel de formacion</th>
                <th>Competencias</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
           <?php
              while ($progcon=mysqli_fetch_assoc($contprog)) {
            ?>
              <tr>
                <td><?php echo $progcon["Nom_program"];?></td>
                <td><?php echo $progcon["nivel_form"];?></td>
                <td><?php echo $progcon["competencias"];?></td>              
                <td>
                  <div class="btn-group">
                    <a href="ubdateP.php?ubP=<?php echo $progcon["id_program"]?>"><button type="submit" class="btn btn-success btn-sm">Editar</button></a>                   
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
 <!--/Collapse_Programa_tabla-->

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
                <label for="pwd2">Confirmar Contraseña:</label>
                <input type="password" class="form-control" placeholder="Confirmar contraseña" name="contra2" id="pwd2" required="">
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
                <button type="submit" class="btn btn-dark">Registrar</button>
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
                <label for="fi">Numero de ficha:</label>
                <input type="number" class="mr-sm-2 form-control " placeholder="Ficha" name="fich" id="fi" required="">
              </div>
              <div class="form-group">
                <label for="nop">Cantidad de aprendices:</label>
                <input type="number" class="form-control" placeholder="Cantidad de aprendices" name="can_apren" id="nop" required="">
              </div>
              <div class="form-group">
                <label for="jor">Jornada:</label>
                <select class="form-control" id="jor" name="jornad" required="">
                  <option value="0">Seleccione</option>
                  <option value="Diurna">Diurna </option>                  
                  <option value="Nocturna">Nocturna</option> 
                  <option value="Mixta">Mixta</option>               
                </select>
              </div>
              <div class="form-group">
                <label for="tipf">Tipo de Formacion:</label>
                <select class="form-control" id="tipf" name="tipof" required="">
                  <option value="0">Seleccione</option>
                  <option value="Presencial">Presencial </option>
                  <option value="Virtual">Virtual</option>                             
                </select>
              </div>
              <div class="form-group">
            <?php
   $prog="SELECT * FROM programa";
   $cons=mysqli_query($conn,$prog);
            ?>
                <label for="progC">Nombre del programa:</label>
                <select class="form-control" id="progC" name="program" required="">
                  <option value="0">Seleccione</option>
                 <?php
    while ($cod_p=mysqli_fetch_assoc($cons)) {
              ?>
                  <option value="<?php echo$cod_p['id_program']?>"><?php echo$cod_p['Nom_program']?></option>
              <?php
            }        
                 ?>                             
                </select>
              </div>
              <div class="form-group">
                <label for="f_i">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i" id="f_i" required="">
              </div>
              <div class="form-group">
                <label for="f_f">Fecha Fin:</label>
                <input type="date" class="form-control" name="date_f" id="f_f" required="">
              </div>
                        
              <center>
                <button type="submit" class="btn btn-dark">Registrar</button>
              </center>              
            </form>     
          </div>
      </div>
    </div>
  </div>
</div>    
<!--/Collapse2Ficha-->

    <!--Collapse6Trimestre-->
<div> 
  <div id="fichT" class="collapse">
   <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
          <center>
          <?php 
          $dateFT="SELECT * FROM ficha";
          $conFT=mysqli_query($conn,$dateFT); 
          ?> 
            <form action="../controlador/regTF.php" method="POST" style="padding-left:9%; padding-right:8%;" >
              <div class="form-group">
                <h4>Ficha:</h4> 
                <select name="ficha_fecha" class="form-control" >
                  <option>Selecionar</option>
                  <?php 
                while ($rowFT=mysqli_fetch_assoc($conFT)) {?>
                  <option value="<?php echo$rowFT['ID_F'] ?>"><?php echo$rowFT['Nº ficha'] ?></option>
                  <?php
                }
                  ?>
                </select>
              </div>
                <h4>I Trimestre</h4>      
              <div class="form-inline">
                <label for="f_i_t_I">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i_I" id="f_i_t_I" required="">
                <label for="f_f_t_I">Fecha Fin: </label>
                <input type="date" class="form-control" name="date_f_I" id="f_f_t_I" required="">
              </div><br>
              <h4>II Trimestre</h4>    
              <div class="form-inline">
                <label for="f_i_t_II">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i_II" id="f_i_t_II" required="">
                <label for="f_f_t_II">Fecha Fin: </label>
                <input type="date" class="form-control" name="date_f_II" id="f_f_t_II" required="">
              </div><br>
              <h4>III Trimestre</h4>       
              <div class="form-inline">
                <label for="f_i_t_III">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i_III" id="f_i_t_III" required="">
                <label for="f_f_t_III">Fecha Fin: </label>
                <input type="date" class="form-control" name="date_f_III" id="f_f_t_III" required="">
              </div><br>
              <h4>IV Trimestre</h4>       
              <div class="form-inline">
                <label for="f_i_t_IV">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i_IV" id="f_i_t_IV" required="">
                <label for="f_f_t_IV">Fecha Fin: </label>
                <input type="date" class="form-control" name="date_f_IV" id="f_f_t_IV" required="">
              </div><br>
              <h4>V Trimestre</h4>       
              <div class="form-inline">
                <label for="f_i_t_V">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i_V" id="f_i_t_V" required="">
                <label for="f_f_t_V">Fecha Fin: </label>
                <input type="date" class="form-control" name="date_f_V" id="f_f_t_V" required="">
              </div><br>
              <h4>VI Trimestre</h4>       
              <div class="form-inline">
                <label for="f_i_t_VI">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i_VI" id="f_i_t_VI" required="">
                <label for="f_f_t_VI">Fecha Fin: </label>
                <input type="date" class="form-control" name="date_f_VI" id="f_f_t_VI" required="">
              </div><br>
                                
                <button type="submit" class="btn btn-dark">Registrar</button>                           
            </form>
          </center>    
          </div>
      </div>
    </div>
  </div>
</div>
<!--/Collapse6Trimestre-->
    <!--Collapse4SEDE-->
<div> 
  <div id="RegSed" class="collapse">
   <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="../controlador/regSD.php" method="POST">
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
                <button type="submit" class="btn btn-dark">Registrar</button>
              </center>              
            </form>     
          </div>
      </div>
    </div>
  </div>
</div>
<!--/Collapse4SEDE-->
 <!--Collapse5Ambiente-->
<div> 
  <div id="amb" class="collapse">
   <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="../controlador/regA.php" method="POST">
              <div class="form-group">
            <?php
   $sed="SELECT * FROM sede";
   $conSD=mysqli_query($conn,$sed);
            ?>
                <label for="progC">Nombre de la sede:</label>
                <select class="form-control" id="progC" name="sed" required="">
                  <option value="0">Seleccione</option>
                 <?php
    while ($codSD=mysqli_fetch_assoc($conSD)) {
              ?>
                  <option value="<?php echo$codSD['id']?>"><?php echo$codSD['nombre_sede']?></option>
              <?php
            }        
                 ?>                             
                </select>
              </div>
              <div class="form-group">
                <label for="nomb">Nombre ambiente:</label>
                <input type="text" class="mr-sm-2 form-control " placeholder="Digite el nombre del ambiente" name="nombre_ambiente" id="nomb" required="">
              </div>
              <div class="form-group">
                <label for="cap">Capacidad:</label>
                <input type="text" class="form-control" placeholder="Digite la capacidad" name="capacidad" id="cap" required="">
              </div>
              <div class="form-group">
                <label for="equip">No de equipos :</label>
                <input type="number" class="mr-sm-2 form-control " placeholder="Digite el numero" name="No_de_equipos" id="equip" required="">
              </div>
              <center>
                <button type="submit" class="btn btn-dark">Registrar</button>
              </center>              
            </form>     
          </div>
      </div>
    </div>
  </div>
</div>
<br>
<!--/Collapse5Ambiente-->

<!--Collapse6Programa-->
<div> 
  <div id="prog" class="collapse">
   <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="../controlador/regprog.php" method="POST">             
              <div class="form-group">
                <label for="nom_prog">Nombre del programa:</label>
                <input type="text" class="form-control" placeholder="Digite el nombre del programa" name="nomp" id="nom_prog" required="">
              </div>
              <div class="form-group">
                <label for="nivl">Nivel del programa:</label>
                <select class="form-control" id="nivl" name="nivel_prog" required="">
                  <option value="0">Seleccione</option>
                  <option value="Técnico">Técnico</option>
                  <option value="Tecnólogo">Tecnólogo</option>
                  <option value="Especialización">Especialización</option>                                 
                </select>
              </div>
              <div class="form-group">
                <label for="compt">Competencias:</label>
                <textarea class="form-control" name="texto" id="compt" placeholder="Digite las Competencias"></textarea>
              </div>
                   
              <center>
                <button type="submit" class="btn btn-dark">Registrar</button>
              </center>              
            </form>     
          </div>
      </div>
    </div>
  </div>
</div>
<!--/Collapse6Programa-->

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
                <?php
$nombI="SELECT * FROM instructor where ID ='$instru'";
$re=mysqli_query($conn,$nombI);                
$lol=mysqli_fetch_array($re);// nombre tabla instructor
                ?>
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

<!--alerta usuario-->
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
       }elseif ($_GET['v']==4) {
        ?>
         <div class="alert alert-info alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>El documento de identidad ya esta registrado.</strong>
          </div>
         <?php
       }

     }
     ?>
   </div>
<!--/alerta usuario-->   

<!--alerta ficha--> 
     <div class="container">
     <?php
    if (isset($_GET['vl'])) {
     
     if ($_GET['vl']==1) {            
      ?>
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Ficha registrada</strong>
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
   <!--/alerta ficha-->

   <!--alerta programa--> 
     <div class="container">
     <?php
    if (isset($_GET['vp'])) {
     
     if ($_GET['vp']==1) {            
      ?>
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Programa registrado</strong>
      </div>
      <?php
       }elseif ($_GET['vp']==2) {
         ?>
         <div class="alert alert-warning alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>El programa(Codigo) ya esta registrado.</strong> 
        </div>
         <?php
       }
     }
     ?>
   </div>
   <!--/alerta programa-->

    <!--alerta sede--> 
     <div class="container">
     <?php
    if (isset($_GET['vs'])) {
     
     if ($_GET['vs']==1) {            
      ?>
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Sede registrada</strong>
      </div>
      <?php
       }
     }
     ?>
   </div>
   <!--/alerta sede-->
       <!--alerta Ambiente--> 
     <div class="container">
     <?php
    if (isset($_GET['va'])) {
     
     if ($_GET['va']==1) {            
      ?>
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Ambiente registrado</strong>
      </div>
      <?php
       }
     }
     ?>
   </div>
   <!--/alerta Ambiente-->

<!--alerta Fechas Trimestres ficha--> 
     <div class="container">
     <?php
    if (isset($_GET['vtf'])) {
     
     if ($_GET['vtf']==1) {            
      ?>
       <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Fechas registradas</strong>
      </div>
      <?php
       }
     }
     ?>
   </div>
<!--/alerta Fechas Trimestres ficha-->


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