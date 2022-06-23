<?php
include("plantilla-a.php")
?>
<?php
session_start();
?>
	<div class="row" style="display: contents;">
		<div class="col-sm-4 mx-auto">
			<div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">   		
				  <form action="recuperar.php" method="POST">
					  <div class="form-group">
					    <label for="email" class="d-flex justify-content-center">Email:</label>
					    <input type="email" class="mr-sm-2 form-control " placeholder="Digite su email" name="correo" required="">
					  </div>
					  <div class="d-flex justify-content-between">
						<button type="submit" name="pass-reset" class="btn btn-dark">Enviar</button>
						<br>
						<a href="index.php" class="link-secondary">Iniciar sesión</a> 
					  </div>
					</form>	
        </div>
		<?php
     if(isset($_SESSION['status'])){
		?>
				 <div class="alert alert-success alert-dismissible fade show" >
						 <button type="button" class="close" data-dismiss="alert">&times;</button>
						 <strong><?=$_SESSION['status'];?></strong>
					   </div>
		</div>
		<?php
		unset($_SESSION['status']);
	} ?>
		</div>
	</div>
</body>
<?php
include("plantilla-b.php")
?>