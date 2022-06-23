<?php
$pageTitle = 'Registro de usuarios';
include("parte_superior.php");
?>
<div>
  <div class="row">
    <div class="col-sm-8 mx-auto">
      <div class="container border" style="padding:2%; background-color: #a2a1a5a8; ">
        <form action="../controlador/InstructorControllers/create.php" method="POST">
          <div class="form-group">
            <label for="nom">Nombre:</label>
            <input type="text" class="mr-sm-2 form-control " placeholder="Digite el nombre" name="nombre" id="nom" required="">
          </div>
          <div class="form-group">
            <label for="apel">Apellido:</label>
            <input type="text" class="form-control" placeholder="Digite el Apellido" name="apellido" id="apel" required="">
          </div>
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="mr-sm-2 form-control " placeholder="Digite el Email" name="correo" id="email" required="">
          </div>
          <div class="form-group">
            <label for="horasi">Horas instructor:</label>
            <input type="number" class="mr-sm-2 form-control " placeholder="Número de horas que el instrutor trabaja a la semana" name="horas_inst" id="nsemana">
          </div>
          <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Digite la contraseña" name="contra" id="pwd" required="">
          </div>
          <div class="form-group">
            <label for="pwd2">Confirmar Contraseña:</label>
            <input type="password" class="form-control" placeholder="Confirmar contraseña" name="contra2" id="pwd2" required="">
          </div>
          <div class="form-group">
            <label for="roles">Rol del Instructor:</label>
            <select class="form-control" id="roles" name="rol" required>
              <option value="">Seleccione el Rol</option>
              <option value="2">Instructor</option>
              <option value="1">ADMIN</option>
            </select>
          </div>
          <button type="submit" class="btn btn-dark">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include("parte_inferior.php")
?>