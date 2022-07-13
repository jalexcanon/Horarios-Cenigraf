<?php
$pageTitle = 'Registro de fichas';
include("parte_superior.php");
?>
<div>
  <div class="row" style="display: contents;">
    <div class="col-sm-8 mx-auto">
      <div class="container border" style="padding:5%; background-color: #a2a1a5a8; ">
        <form action="../controlador/FichaControllers/create.php" method="POST">
          <div class="form-group">
            <label for="fi">Numero de ficha:</label>
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
          <div class="form-group">
            <label for="f_i">Fecha inicio:</label>
            <input type="date" class="form-control" name="date_i" id="f_i" required="">
          </div>
          <div class="form-group">
            <label for="f_f">Fecha Fin:</label>
            <input type="date" class="form-control" name="date_f" id="f_f" required="">
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