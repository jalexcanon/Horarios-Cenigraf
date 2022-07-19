<?php
$pageTitle = 'Registro de programa';
include("parte_superior.php");
?>
<div class="row">
  <div class="container border" style="padding:5%; background-color: #a2a1a5a8;">
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
        <div class="container">
          <div class="row">
            <div class="col">
              <div id="inputFormRow">
                <div class="form-group">
                  <label for="">Competencias</label>
                  <textarea name="competencias[]" class="form-control"></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="">Fecha de inicio</label>
                    <input type="date" name="fecha_inicio[]" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Fecha de fin</label>
                    <input type="date" name="fecha_fin[]" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Instructor</label>
                    <input type="text" name="instructor[]" class="form-control">
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <div id="newRow"></div>
                <label for="">Agregar más competencias</label>
                <button id="addRow" type="button" class="btn btn-success rounded-circle"><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>
            <div class="col">
              <div id="inputFormRow-resultados">
                <div class="form-group">
                  <label for="">Resultados</label>
                  <textarea name="resultados[]" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="">Instructor encargado del resultado</label>
                  <input type="text" name="instructor_resultados[]" class="form-control">
                </div>
              </div>
                <div id="newRow-resultados"></div>
                <label for="">Agregar más resultados</label>
                <button id="addRow-resultados" type="button" class="btn btn-success rounded-circle"><i class="fa-solid fa-plus"></i></button>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Registrar</button>
    </form>
  </div>
</div>
<?php
if (isset($_GET['vp'])) {

  if ($_GET['vp'] == 1) {
?>
    <div class="alert alert-success alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Programa registrado</strong>
    </div>
  <?php
  } elseif ($_GET['vp'] == 2) {
  ?>
    <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>El Programa ya se encuentra registrado</strong>
    </div>
<?php
  }
}
?>
</div>
</div>
<script src="js.js"></script>
<script>
  // agregar registro
  $("#addRow-resultados").click(function() {
    var html = '';
    html += '<div id="inputFormRow-resultados">';
    html += '<div class="form-group mt-2">';
    html += '<textarea name="resultados[]" class="form-control" placeholder="Digite el resultado"></textarea>';
    html += '</div>';

    html += '<div class="form-group">';
    html += '<input type="text" name="instructor-resultados[]" placeholder="Instructor encargado del resultado" class="form-control">';
    html += '</div>';
    html += '<div class="input-group-append">';
    html += '<button id="removeRow-resultados" type="button" class="btn btn-danger rounded-circle"><i class="fa-solid fa-trash"></i></button>';
    html += '</div>';
    html += '</div>';

    $('#newRow-resultados').append(html);
  });

  // borrar registro
  $(document).on('click', '#removeRow-resultados', function() {
    $(this).closest('#inputFormRow-resultados').remove();
  });


    // agregar registro
    $("#addRow").click(function() {
    var html = '';
    html += '<div id="inputFormRow">';
    html += '<div class="form-group mb-3">';
    html += '<textarea name="competencias[]" class="form-control" placeholder="Digite la competencia"></textarea>';
    html += '</div>';

    html += '<div class="form-row mb-3">';
    html += '<div class="form-group col-md-4">';
    html += '<input type="date" name="fecha_inicio[]" class="form-control">';
    html += '</div>';

    html += '<div class="form-group col-md-4">';
    html += '<input type="date" name="fecha_fin[]" class="form-control">';
    html += '</div>';

    html += '<div class="form-group col-md-4">';
    html += '<input type="text" name="instructor[]" class="form-control">';
    html += '</div>';
    html += '<div class="input-group-append">';
    html += '<button id="removeRow" type="button" class="btn btn-danger rounded-circle"><i class="fa-solid fa-trash"></i></button>';
    html += '</div>';
    html += '</div>';

    $('#newRow').append(html);
  });

  // borrar registro
  $(document).on('click', '#removeRow', function() {
    $(this).closest('#inputFormRow').remove();
  });
</script>
<?php
include("parte_inferior.php")
?>