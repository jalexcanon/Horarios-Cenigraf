<?php
$pageTitle = 'Crear competencias';
include("parte_superior.php");
$crearResultado = $_GET['create'];
?>
<?php
$query = mysqli_query($conn, "SELECT * FROM programa WHERE id_program = $crearResultado");
$row = mysqli_fetch_assoc($query);
?>
<div class="row">
  <div class="container border" style="padding:5%; background-color: #a2a1a5a8; ">
    <form action="../controlador/ProgramaControllers/create_resultados.php?create=<?php echo $crearResultado; ?>" method="POST">
      <div class="form-group">
        <label for="nom_prog">Programa: <?php echo $row['Nom_program'] ?> </label>
      </div>
      <div class="container">
        <div class="row">
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
            <div class="mb-2">
              <div id="newRow-resultados"></div>
              <label for="">Agregar más resultados</label>
              <button id="addRow-resultados" type="button" class="btn btn-success rounded-circle"><i class="fa-solid fa-plus"></i></button>
            </div>
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
  $("#addRow-resultados").click(function() {
    var html = '';
    html += '<div id="inputFormRow-resultados">';
    html += '<div class="form-group">';
    html += '<textarea name="resultados[]" class="form-control" placeholder="Digite el resultado"></textarea>';
    html += '</div>';

    html += '<div class="form-group">';
    html += '<input type="text" name="instructor_resultados[]" placeholder="Instructor encargado del resultado" class="form-control">';
    html += '</div>';
    html += '<div class="input-group-append">';
    html += '<button id="removeRow-resultados" type="button" class="btn btn-danger rounded-circle mb-3"><i class="fa-solid fa-trash"></i></button>';
    html += '</div>';
    html += '</div>';

    $('#newRow-resultados').append(html);
  });

  // borrar registro
  $(document).on('click', '#removeRow-resultados', function() {
    $(this).closest('#inputFormRow-resultados').remove();
  });
</script>
<?php
include("parte_inferior.php")
?>