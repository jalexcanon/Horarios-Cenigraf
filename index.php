<?php
include("plantilla-a.php")
?>
	<div class="row" style="display: contents;">
		<div class="col-sm-4 mx-auto">
			<div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">   		
				  <form action="controlador/val.php" method="POST">
					  <div class="form-group">
					    <label for="email" class="d-flex justify-content-center field-wrap">Email:</label>
					    <input type="email" class="mr-sm-2 form-control " placeholder="Digite su email" name="correo" id="email" required="">
					  </div>
					  <div class="form-group">
					    <label for="pwd" class="d-flex justify-content-center field-wrap">Contraseña:</label>
					    <input type="password" class="form-control" placeholder="Digite su contraseña" name="contra" id="pwd" required="">
					  </div>
					  <div class="d-flex justify-content-between">
						<button type="submit"  class="btn btn-dark">Entrar</button>
						<br>
						<a href="./restablecer.php" class="link-secondary">¿Olvidó su contraseña?</a> 
					  </div>
					  
					</form>	
						<?php 
						//--------------------------------------------------------------
							if (isset($_GET['x'])) {
							     ?>
							     <br>
							     <div class="alert alert-danger alert-dismissible fade show" >
							        <button type="button" class="close" data-dismiss="alert">&times;</button>
							        <strong>Error de autenticación</strong>
							      </div>
							     <?php
							}
							     ?>		
        </div>
		</div>
	</div>
</body>
<?php
include("plantilla-b.php")
?>
</html>