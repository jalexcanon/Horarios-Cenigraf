<?php
$pageTitle = 'Crear competencias';
include("parte_superior.php");
$crearCompetencia = $_GET['ubP'];
?>
<?php
$query = mysqli_query($conn, "SELECT * FROM programa WHERE id_program = $crearCompetencia");
$row = mysqli_fetch_assoc($query);
?>
<div class="row">
  <div class="container border" style="padding:5%; background-color: #a2a1a5a8; ">
    <form action="../controlador/ProgramaControllers/create_competencia.php?ubP=<?php echo $crearCompetencia; ?>" method="POST">
      <div class="form-group">
        <label for="nom_prog">Programa: <?php echo $row['Nom_program'] ?> </label>
      </div>
      <div class="container">
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
        <button class="btn btn-secondary" onclick="window.open('competencias-resultados.php','_Self')">Atrás</button>
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
    html += '<input type="text" name="instructor[]" class="form-control" placeholder="Instructor encargado">';;
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