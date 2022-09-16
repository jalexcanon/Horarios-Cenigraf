<?php
$pageTitle = 'Registro de fichas';
include("parte_superior.php");
?>
<div>
  <div class="row" style="display: contents;">
    <div class="col-sm-8 mx-auto">
      <div class="container border" style="padding:5%; background-color: #a2a1a54a; ">
        <form action="../controlador/FichaControllers/create.php" method="POST">
          <div class="form-group">
            <label for="fi">Número de ficha:</label>
            <input type="number" max="9999999" class="mr-sm-2 form-control" placeholder="Ficha (Maximo 7 caracteres)" name="fich" id="fi" required="">
          </div>
          <div class="form-group">
            <label for="nop">Cantidad de aprendices:</label>
            <input type="number" class="form-control" placeholder="Cantidad de aprendices" name="can_apren" id="nop" required="">
          </div>
          <div class="form-group">
            <label for="jor">Jornada:</label>
            <select class="form-control" id="jor" name="jornad" required>
              <option value="">Seleccione</option>
              <option value="Diurna">Diurna </option>
              <option value="Nocturna">Nocturna</option>
              <option value="Mixta">Mixta</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tipf">Tipo de Formacion:</label>
            <select class="form-control" id="tipf" name="tipof" required>
              <option value="">Seleccione</option>
              <option value="Presencial">Presencial </option>
              <option value="Virtual">Virtual</option>
            </select>
          </div>
          <div class="form-group">
          <?php
            $int = mysqli_query($conn, "SELECT * FROM instructor");
            ?>
            <label for="instructor_t">Instructor técnico:</label>
            <select class="form-control" id="instructor_t" name="instructor_tecnico" required>
              <option value="">Seleccione</option>
              <?php
              while ($instructor = mysqli_fetch_assoc($int)) {
              ?>
                <option value="<?php echo $instructor['ID'] ?>"><?php echo $instructor['Nombre'] . " " . $instructor['Apellido']; ?> </option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <?php
            $prog = "SELECT * FROM programa";
            $cons = mysqli_query($conn, $prog);
            ?>
            <label for="progC">Nombre del programa:</label>
            <select class="form-control" id="progC" name="program" required>
              <option value="">Seleccione</option>
              <?php
              while ($cod_p = mysqli_fetch_assoc($cons)) {
              ?>
                <option value="<?php echo $cod_p['id_program'] ?>"><?php echo $cod_p['Nom_program'] . " " . $cod_p['nivel_form']; ?> </option>
              <?php
              }
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-dark">Registrar</button>
        </form>
      </div>
      <?php
      if (isset($_GET['vl'])) {

        if ($_GET['vl'] == 1) {
      ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Ficha registrada</strong>
          </div>
        <?php
        } elseif ($_GET['vl'] == 2) {
        ?>
          <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>La ficha ya esta registrada.</strong>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div>
<?php
include("parte_inferior.php")
?>