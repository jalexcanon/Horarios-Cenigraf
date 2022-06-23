<?php
include("plantilla-a.php")
?>
<?php
session_start();
?>
	<div class="row" style="display: contents;">
		<div class="col-sm-4 mx-auto">
			<div class="container border" style="padding:4%; background-color: #a2a1a5a8; "> 
                       <form method="POST" action="recuperar.php">
                       <input type="hidden" name="token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];}?>">
                           <div class="form-group mb-3">
                               <label for="">Email</label>
                               <input type="text" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>"class="form-control">
                           </div>
                           <div class="form-group mb-3">
                               <label for="">Nueva contraseña</label>
                               <input type="password" name="new_password" class="form-control">
                           </div>
                           <div class="form-group mb-3">
                               <label for="">Confirme la nueva contraseña</label>
                               <input type="password" name="confirm_password" class="form-control">
                           </div>
                           <div class="form-group mb-3">
                               <button type="submit" name="password_update" class="btn btn-dark">Cambiar contraseña</button>
                           </div>
                       </form>
                   </div>
                   <?php
               if(isset($_SESSION['status'])){
                   ?>
                   	     <div class="alert alert-success alert-dismissible fade show" >
							        <button type="button" class="close" data-dismiss="alert">&times;</button>
							        <strong><?=$_SESSION['status'];?></strong>
                                    <br>
                                    <a href="index.php">Regrese al login dando click aquí</a>
							      </div>
                   </div>
                   <?php
                   unset($_SESSION['status']);
               } ?>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include("plantilla-b.php")
?>