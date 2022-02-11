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

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Actualizar Contraseña Usuario</title>
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
            <a class="navbar-brand" onclick="window.open('horarios.php','_Self')" style="cursor: pointer;">Cenigraf</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">                        
              <li class="nav-item">
                <a class="nav-link" onclick="window.open('../controlador/exit.php','_Self')" style="cursor: pointer;">Cerrar sesion</a>
              </li>                     
            </ul>
          </div>
        </nav>
 </div><!--/divnav-->
 <!--lateral-->
 <div>
    <aside id="lt_aside" class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">         
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
        </div>                                
    </aside>
 </div>
 <!--/lateral-->

  <div class="content-wrapper">
    <div class="container"> <!--container_1-->
      <br>
       <div class="container border" style="padding:4%; background-color: #a2a1a5a8;" >
            <form method="post" action="../controlador/val_contra.php" class="form-horizontal">
                <div class="form-group">
                  <div class="form-group">
                    <label for="d_pwd">Digite su Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Digite la contraseña" name="D_pwd" id="d_pwd" required="">
                  </div>
                </div>                  
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
      <?php 
      if (isset($_GET['pwd'])) {
         $v_pwd=$_GET['pwd'];
         $cons_pwd=mysqli_query($conn,"SELECT * FROM instructor where ID = '$instru'");
         $row=mysqli_fetch_assoc($cons_pwd);
      

        if ($row['contrasena']==$v_pwd) {
          ?>
            <br>
            <div class="container border" style="padding:4%; background-color: #a2a1a5a8;" >
              <form method="post" action="../controlador/update_cont.php" class="form-horizontal">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="pwd">Contraseña:</label>
                      <input type="password" class="form-control" placeholder="Digite la contraseña" name="contra" id="pwd" required="">
                    </div>             
                    <div class="form-group">
                      <label for="pwd2">Confirmar Contraseña:</label>
                      <input type="password" class="form-control" placeholder="Confirmar contraseña" name="contra2" id="pwd2" required="">
                    </div>
                  </div>     
                  <button type="submit" class="btn btn-dark">Enviar</button>
                </form>
            </div>
          
          <?php
        } 
      }
       ?>
    <!--alerta pwd--> 
     
       <?php
      if (isset($_GET['pwd_x'])) {
       
       if ($_GET['pwd_x']=='20123554_d') {            
        ?><br>
        <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>La contraseña es incorrecta </strong>
        </div>
        <?php
         }elseif ($_GET['pwd_x']=='cons_not') {
           ?>
          <br>
        <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Las contraseñas no coinciden</strong>
        </div> 
           <?php
         }
       }
       ?>
     
     <!--/alerta pwd-->
       
    </div><!--/container_1-->
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
!-- AdminLTE App --> 
<script src="../css/js/adminlte.min.js"></script>


</body>
</html>