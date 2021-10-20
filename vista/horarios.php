<?php 
 session_start();
 include('../controlador/conexion.php');
  $correo=$_SESSION['ema'];
  $rol=$_SESSION['rol'];
  $inst=$_SESSION['nam'];
 if (!isset($correo)) {
    header("location:../index.php");
 }
$querys="SELECT * FROM instructor";
$ins=mysqli_query($conn,$querys)

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>beta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

	
 <div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <center>
			<img class="img" src="../img/cenigraf.png" >
			<img class="img2" src="../img/logo1.png" >
	</center>
  </div>
 </div>
 <div>
   	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  		  <a class="navbar-brand" onclick="window.open('horarios.php','_Self')">Cenigraf</a>
  		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  		    <span class="navbar-toggler-icon"></span>
  		  </button>
  		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  		    <ul class="navbar-nav">
  		      <li class="nav-item">
  		        <a class="nav-link" data-toggle="modal" data-target="#myModal">Crear Horaio</a>
  		      </li>
  		      <li class="nav-item">
  		        <a class="nav-link" href="#">--------</a>
  		      </li>
  		      <li class="nav-item">
  		        <a class="nav-link" onclick="window.open('../controlador/exit.php','_Self')">Cerrar sesion</a>
  		      </li>    
  		    </ul>
        </div>  
   </nav>
 </div>

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
<div class="container">
  <?php
   if ($rol==1) {
     echo "<br><h3>Bienvenido ".$inst." ADMIN</h3>";
   }elseif ($rol==2) {
    echo "<br><h3>Bienvenido ".$inst." Instructor</h3>";
   }

  ?>
</div>


</body>
</html>