<?php
$pageTitle = 'Registro de programa';
include("parte_superior.php");
?>
<div>
  <div class="row" style="display: contents;">
    <div class="col-sm-8 mx-auto">
      <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">
        <form action="../controlador/ProgramaControllers/create.php" method="POST">
          <div class="form-group">
            <label for="nom_prog">Nombre del programa:</label>
            <input type="text" class="form-control" placeholder="Digite el nombre del programa" name="nomp" id="nom_prog" required="">
          </div>
          <div class="form-group">
            <label for="nivl">Nivel del programa:</label>
            <select class="form-control" id="nivl" name="nivel_prog" required>
              <option value="">Seleccione</option>
              <option value="Técnico">Técnico</option>
              <option value="Tecnólogo">Tecnólogo</option>
              <option value="Especialización">Especialización</option>
            </select>
          </div>
          <div class="form-group">
            <label for="compt">Competencias:</label>
            <textarea class="form-control" name="texto" id="compt" placeholder="Digite las Competencias"></textarea>
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