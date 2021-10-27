<?php 
//--------------------------------------------------------------
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
    $idins=$_GET['ub'];//id del instructor------------------------------------------------------
    $query="SELECT * FROM instructor,roles where ID='$idins' and instructor.ID=roles.id_rol ";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
   ?>
    <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">      
            <form action="../controlador/ubdateins.php?ub=<?php echo $idins?>" method="POST">
              <div class="form-group">
                <label for="nom">Nombre:</label>
                <input type="text" class="mr-sm-2 form-control" value="<?php echo $row["Nombre"];?>" placeholder="Nombre" name="nombre" id="nom" required="">
              </div>
              <div class="form-group">
                <label for="apel">Apellido:</label>
                <input type="text" class="form-control" value="<?php echo $row["Apellido"];?>" placeholder="Digite el Apellido" name="apellido" id="apel" required="">
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="mr-sm-2 form-control " value="<?php echo $row["email"];?>" placeholder="Digite el Email" name="correo" id="email" required="">
              </div>
               <div class="form-group">
                <label for="dni">Documento de identidad :</label>
                <input type="number" class="mr-sm-2 form-control " value="<?php echo $row["Cedula"];?>" placeholder="Digite el DNI" name="dnis" id="dni" required="">
              </div>              
               <div class="form-group">
                <label for="roles">Rol del Instructor:</label>
                <select class="form-control" id="roles" name="rol" required="">
                  <option value="<?php echo $row["id_rol"];?>"><?php echo $row["rol"];?></option>
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