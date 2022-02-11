<?php 
 session_start();
 include('../controlador/conexion.php');
  $correo=$_SESSION['ema'];
  $rol=$_SESSION['rol'];
  $inst=$_SESSION['nam'];
  $instru=$_SESSION['IDins'];

 if (!isset($correo)) {
    header("location:../index.php");
 }
  if ($rol==2) {
   header('location:horarios.php');
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Actualizar Fechas Trimestres</title>
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
    <nav id="lt_nav" class="main-header navbar navbar-expand-md navbar-orange navbar-light sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li> 
        </ul>                  
            <a class="navbar-brand" onclick="window.open('horarios.php','_Self')" style="cursor:pointer; font-weight:bold;">Cenigraf</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">         
              <li class="nav-item">
                <a class="nav-link" onclick="window.open('../controlador/exit.php','_Self')">Cerrar sesion</a>
              </li>                    
            </ul>
          </div>
        </nav>
 </div><!--/divnav-->
 <!--lateral-->
 <div>
    <aside id="lt_aside" class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
            
            <a href="horarios.php" class="brand-link" style="color:white;">
              <img src="../img/logo1.png"
                   alt="logo1"
                   class="brand-image img-circle elevation-1"
                   style="background-color:#ffffff; width: 40px; height:40px; ">
              <span class="brand-text font-weight-bold">CENIGRAF </span>
            </a>

           
        <div class="sidebar">
              
              <div class="user-panel mt-4 pb-4 mb-4 d-flex">
                <div class="image">
                  <img src="../img/perfil.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block" style="color:white;"><?php 
                  
                   echo "ADMIN-".$inst;
                 
                 ?></a>
                </div>
              </div>             
        </div>
            
                  
        </aside>
 </div>
 <!--/lateral-->
<div class="content-wrapper">
  <div class="container">
   <br>
   <?php 
    $upfech=$_GET['upfech'];//id de la ficha------------------------------------------------------

    $query=mysqli_query($conn,"SELECT * FROM ficha WHERE ID_F=$upfech");
    $row=mysqli_fetch_assoc($query);
   ?>
    <div class="container"> 
       <center><h3>Ficha: <?php echo $row['Nº ficha'] ?></h3></center><br>     
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <div class="container">  
              <div class="table-responsive">
                <table class="table table-bordered table-striped" style="text-align:center;">
                  <thead class="thead-dark">
                    <tr>
                      <th>N° Ficha</th>
                      <th>Trimestre</th>
                      <th>Fecha de inicio</th>
                      <th>Fecha Fin</th>               
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php
                    $query2=mysqli_query($conn,"SELECT * FROM ficha,tb_trimestre WHERE tb_trimestre.id_fch=ficha.ID_F AND tb_trimestre.id_fch=$upfech");
                    while ($Fechcon=mysqli_fetch_assoc($query2)) {
                  ?><form method="post" action="../controlador/update_fechT.php?id_F=<?php echo $upfech;?>">
                    <tr>
                      <td><?php echo $Fechcon["Nº ficha"] ;?></td>
                      <td><?php echo $Fechcon["Trimestre"];?></td>
                      <td><input type="date" name="date_Iup" value="<?php echo $Fechcon["Trim_date_Inc"];?>"></td>
                      <td>
                        <input type="date" name="date_Fup" value="<?php echo $Fechcon["Trim_date_fin"];?>">
                        <input type="number" name="id_fech" style="display:none;" value="<?php echo $Fechcon['id_T'];?>"> 
                      </td>              
                      <td>
                        <div class="btn-group">
                          <button type="submit" class="btn btn-success btn-sm">Actualizar</button>                  
                        </div>
                      </td>
                    </tr></form>      
                  <?php
                    }
                    
                  ?> 
                  </tbody>  
                </table>
                </div><center><button type="button" class="btn btn-warning" onclick="window.open('horarios.php','_Self')">Atras</button></center>
              </div>
            </div>

          </div>   
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
AdminLTE App --> 
<script src="../css/js/adminlte.min.js"></script>


</body>
</html>