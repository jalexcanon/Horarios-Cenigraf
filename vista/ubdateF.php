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
  if ($rol==2) {
   header('location:horarios.php');
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>beta</title>
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
            <a class="navbar-brand" onclick="window.open('horarios.php','_Self')">Cenigraf</a>
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
    $idins=$_GET['ubf'];//id del instructor------------------------------------------------------

    $queryf="SELECT * FROM ficha where `ID_F`='$idins'";
    $result=mysqli_query($conn,$queryf);
    $rows=$result->fetch_array();
   ?>
    <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="" method="POST">
              <div class="form-group">
                <label for="fi">Codigo de ficha:</label>
                <input type="number" class="mr-sm-2 form-control" value="<?php echo $rows["Nº ficha"]?>" placeholder="Ficha" name="fich" id="fi" required="">
              </div>
              <div class="form-group">
                <label for="nop">Nombre del programa:</label>
                <input type="text" class="form-control" value="<?php echo $rows["Nombre_programa"]?>" placeholder="Nombre del programa" name="nomp" id="nop" required="">
              </div>
              <div class="form-group">
                <label for="nf">Nivel de Formacion:</label>
                <select class="form-control" id="nf" name="nivel" required="">
                  <option value="<?php echo $rows["nivel_formacion"]?>"><?php echo $rows["nivel_formacion"]?></option>
                  <option value="1">Técnico </option>                  
                  <option value="2">Tecnólogo</option> 
                  <option value="3">Especializado</option>               
                </select>
              </div>   
              <div class="form-group">
                <label for="trim">Trimestre actual:</label>
                <select class="form-control" id="trim" name="trime" required="">
                  <option value="<?php echo $rows["trimestre_actual"]?>"><?php echo $rows["trimestre_actual"]?></option>
                  <option value="1">I Trimestre</option>
                  <option value="2">II Trimestre</option>
                  <option value="3">III Trimestre</option>
                  <option value="4">IV Trimestre</option>
                  <option value="5">V Trimestre</option>
                  <option value="6">VI Trimestre</option>
                      
                </select>
              </div>   
              <center>
                <div class="btn-group">
                  <button type="submit" class="btn btn-warning" onclick="window.open('horarios.php','_Self')">Atras</button>
                  <button type="submit" class="btn btn-dark">Entrar</button>
                </div>               
              </center>              
            </form>     
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