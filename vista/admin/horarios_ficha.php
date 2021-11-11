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
        		        <a class="nav-link" onclick="window.open('../../controlador/exit.php','_Self')">Cerrar sesion</a>
        		      </li> 
                     
        		    </ul>
              </div>
        </nav>
         </div>
         <!-- prue menu-->


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
            <br>
            <center><h2>Intructor <?php  echo $inst; ?></h2><br>  

<div class="container border" style="padding:4%; background-color: #a2a1a5a8;">
  <form method="post" class="form-horizontal">
    <select class="form-control" name="lev">
    <option value="0">Selecione nivel programa </option>
    <option value="Técnico">Técnico</option>
    <option value="Tecnólogo">Tecnólogo</option>
    <option value="Especialización">Especialización</option> 
  </select><br>
  <button type="submit" class="btn btn-dark">Enviar</button>
  </form>
  <?php
  
  if (isset($_POST['lev'])) {
    $nil=$_POST['lev'];
    $query="SELECT * FROM ficha,programa WHERE ficha.fc_id_programa=programa.id_program and programa.nivel_form='$nil'";
    $cont=mysqli_query($conn,$query);
    echo "<h3>".$nil."</h3>";
  ?>

  <form id="Formulario" method="POST" class="form-horizontal">
    <select class="form-control" name="lolo">
      <option value="0">Selecione la ficha </option>
     <?php
      while ($row=mysqli_fetch_assoc($cont)) {
        ?>
         <option value="<?php echo $row['ID_F']?>"><?php echo $row['Nº ficha']?></option>
        <?php
      }
     ?>
    </select>
    <br>
    <button type="button" id="Enviar" class="btn btn-dark ">Enviar</button>
  </form>
<?php
}
?>
</div>          

     <br>
     <div id="respuesta">
       
     </div>
         
<script>
    $('#Enviar').click(function(){
        $.ajax({
          url: '../../controlador/ficha_h.php',
          type: 'POST',
          data: $('#Formulario').serialize(),
          success: function(res){
          $('#respuesta').html(res);}
        });
     });
</script> 
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
          
</body>
</html>