<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>beta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	
<div style="margin: 0 0 0 0;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <center>
		<img class="img" src="img/cenigraf.png" >
		<img class="img2" src="img/logo1.png" >
	</center>
  </div>
 </div>
 <div>
 	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		  <a class="navbar-brand" href="#">Cenigraf</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" onclick="window.open('vista/horarios.php','_Self')">Horarios</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Actas de comite</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Etapa productiva </a>
		      </li>    
		    </ul>
  </div>  
</nav>
 </div>
    <div class="container">
		<div class="table-responsive">
			<table class="table grid">
			<tr>
			  <td>span 1</td>
			  <td>span 1</td>  
			  <td>span 1</td>
			  <td>span 1</td>
			  <td>span 1</td>  
			  <td>span 1</td>
			  <td>span 1</td>
			  <td>span 1</td>  
			  <td>span 1</td>
			  <td>span 1</td>
			  <td>span 1</td>  
			  <td>span 1</td>
			</tr>
			<tr>
			  <td colspan="4">&nbsp;span 4</td>
			  <td colspan="4">&nbsp;span 4</td>  
			  <td colspan="4">&nbsp;span 4</td>
			</tr>
			<tr>
			  <td colspan="4"><div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form action="../controlador/reg.php" method="post">
							<h2 id="lol">Digite: </h2>
							<label class="lab" for="pnom">Primer Nombre</label>
							<br>
							<input class="inp" type="text" name="pnombre" id="pnom" placeholder="Primer Nombre" required="">
							<br>
							<label class="lab" for="snom">Segundo Nombre</label>
							<br>
							<input class="inp" type="text" name="snombre" id="snom" placeholder="Segundo Nombre opcional">
							<br>
							<label class="lab" for="pape">Primer Apellido</label>
							<br>
							<input class="inp" type="text" name="papellidos" id="pape" placeholder="Primer Aprellido" required="">
							<br>
							<label class="lab" for="sape">Segundo Apellido</label>
							<br>
							<input class="inp" type="text" name="sapellidos" id="sape" placeholder="Segundo Aprellido opcional">
							<br>
							<label class="lab" for="corr">Correo Electrónico</label>
							<br>
							<input class="inp" type="email" name="correo" id="corr" placeholder="Correo Electrónico" required="">
							<br>
							<label class="lab" for="con1">Contraseña</label>
							<br>
							<input class="inp" type="password" name="contrasena1" id="con1" placeholder="Contraseña" required="">
							<br>
							<input type="checkbox" onclick="muestra_oculta()">Ver contraseña
							<br>
							<label class="lab" for="con2">Repetir contraseña</label>
							<br>
							<input class="inp" type="password" name="contrasena2" id="con2" placeholder="Repetir contraseña" required="">
							<br>
							<input class="inp" type="checkbox" onclick="muestra_oculta2()">Ver contraseña
							<br>
							<label class="lab" for="cp">Crear Pregunta y Respuesta<br>(Recuperacion de contraseña)</label>
							<br> 
					          <input class="inp" id="cp" type="text" name="prg" placeholder="¿Pregunta?" required=""><br><br>
							<textarea class="inp" type="text" required="" name="repus" placeholder="Respuesta" required=""></textarea>
							<br>
							<button class="btn" id="re" type="button" onclick="window.open('../index.php','_Self')">Cancelar</button>
							<button class="btn" id="ene" type="submit">Registrar</button>
	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</td>
			  <td colspan="8">span 8</td>  
			</tr>
			<tr>
			  <td colspan="6">span 6</td>
			  <td colspan="6">span 6</td>  
			</tr>
			<tr>
			  <td colspan="12">span 12</td>
			</tr>
			</table>
		</div>
	</div>

</body>
</html>