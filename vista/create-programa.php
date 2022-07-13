<?php
$pageTitle = 'Registro de programa';
include("parte_superior.php");
?>
<div class="row" style="display: contents;">
  <div class="col-sm-10 mx-auto">
    <div class="container border" style="padding:10%; background-color: #a2a1a5a8; ">
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
        <div>
          <div id="inputFormRow">
          <div class="form-group">
            <label for="">Competencias</label>
            <input type="text" name="competencias[]" class="form-control" autocomplete="off">
          </div>
          <div class="form-row mb-3">
            <div class="form-group col-md-4">
              <label for="">Fecha de inicio</label>
              <input type="date" name="fecha_inicio[]" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="">Fecha de fin</label>
              <input type="date" name="fecha_fin[]" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="">Instructor encargado</label>
              <select name="instructor[]" class="form-control">
                <option value="">Seleccionar</option>
                <?php
                $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                while ($ins = mysqli_fetch_array($instructor)) { ?>
                  <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php
                                                                                                                        } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="mb-2">
          <div id="newRow"></div>
          <label for="">Agregar más competencias</label>
          <button id="addRow" type="button" class="btn btn-success rounded-circle"><i class="fa-solid fa-plus"></i></button>
        </div>
        <button type="submit" class="btn btn-dark">Registrar</button>
      </form>
    </div>
  </div>
</div>
</div>
<script src="js.js"></script>
<script>
  // agregar registro
  $("#addRow").click(function() {
    var html = '';
    html += '<div id="inputFormRow">';
    html += '<div class="form-group mb-3">';
    html += '<input type="text" name="competencias[]" placeholder="Digite la competencia" class="form-control m-input" autocomplete="off">';
    html += '</div>';

    html += '<div class="form-row mb-3">';
    html += '<div class="form-group col-md-4">';
    html += '<input type="date" name="fecha_inicio[]" class="form-control">';
    html += '</div>';

    html += '<div class="form-group col-md-4">';
    html += '<input type="date" name="fecha_fin[]" class="form-control">';
    html += '</div>';

    html += '<div class="form-group col-md-4">';
    html += '<select name="instructor[]" id="" class="form-control">';
    html += '<option value="">Seleccionar</option>';
    html += ' <?php
                $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                while ($ins = mysqli_fetch_array($instructor)) { ?>
                  <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php } ?>';

    html += '</select>';
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