<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>beta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
  <!-- Font Awesome -->
 
  <!-- Theme style -->
  <link rel="stylesheet" href="css/css/adminlte.min.css">


</head>
<body>
<center>	
<div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <center>
		<img class="img" src="img/cenigraf.png" >
		<img class="img2" src="img/logo1.png" >
	</center>
  </div>
 </div></center>
 <div>
 	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		  <a class="navbar-brand" href="#">Cenigraf</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		  <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#"></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"></a>
		      </li>    
		    </ul>
     </div>  
	</nav>
 </div>
<br>

<center>
	<div class="row" style="display: contents;">
		<div class="col-sm-4 mx-auto">
			<div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">   		
				  <form action="controlador/val.php" method="POST">
					  <div class="form-group">
					    <label for="email">Email :</label>
					    <input type="email" class="mr-sm-2 form-control " placeholder="Digite su email" name="correo" id="email" required="">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Contraseña:</label>
					    <input type="password" class="form-control" placeholder="Digite su contraseña" name="contra" id="pwd" required="">
					  </div>
					  
					  <button type="submit" class="btn btn-dark">Entrar</button>
					</form>			
        </div>
		</div>
	</div>
	
</center>


         <footer class="main-footer" style="margin-left: 0; margin-top: 148px;">
                <div class="float-right d-none d-sm-block">
                  <b>Version</b> 0.1
                </div>
                <strong>Copyright &copy; 2021 <a href="https://comunicaciongraficasena.blogspot.com">Cenigraf</a>.</strong> Todos los derechos reservados.
         </footer>
	 	

<!-- jQuery-->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -- >
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
 
   

</body>
</html>