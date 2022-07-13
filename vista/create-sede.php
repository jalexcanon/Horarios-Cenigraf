<?php
$pageTitle = 'Registro de sedes';
include("parte_superior.php");
?>
<div>
  <div class="row" style="display: contents;">
    <div class="col-sm-8 mx-auto">
      <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">
        <form action="../controlador/SedeControllers/create.php" method="POST">
          <div class="form-group">
            <label for="nomC">Nombre sede:</label>
            <input type="text" class="mr-sm-2 form-control " placeholder="Digite el nombre de la sede" name="nombreC" id="nomC" required="">
          </div>
          <div class="form-group">
            <label for="DS">Direccion sede:</label>
            <input type="text" class="form-control" placeholder="Digite el la direccion de la sede" name="Direc" id="DS" required="">
          </div>
          <div class="form-group">
            <label for="tl">Telefono sede:</label>
            <input type="number" class="mr-sm-2 form-control " placeholder="Digite el telefono" name="phone" id="tl" required="">
          </div>
          <button type="submit" class="btn btn-dark">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include("parte_inferior.php")
?>