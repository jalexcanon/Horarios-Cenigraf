<?php
$pageTitle = 'Registro de trimestres';
include("parte_superior.php");
?>
<div>
  <div class="row" style="display: contents;">
    <div class="col-sm-8 mx-auto">
      <div class="container border" style="padding:2%; background-color: #a2a1a5a8; ">
        <?php
        $dateFT = "SELECT * FROM ficha,programa where ficha.fc_id_programa=programa.id_program AND ficha.estatus_trim=0";
        $conFT = mysqli_query($conn, $dateFT);
        ?>
        <form action="../controlador/regTF.php" method="POST" style="padding-left:9%; padding-right:8%; heigh:100%">
          <div class="form-group">
            <h4>Ficha:</h4>
            <select name="ficha_fecha" class="form-control" required>
              <option value="">Selecionar</option>
              <?php
              while ($rowFT = mysqli_fetch_assoc($conFT)) { ?>
                <option value="<?php echo $rowFT['ID_F'] ?>"><?php echo $rowFT['Nº ficha'] . " " . $rowFT['nivel_form'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="form-inline">
            <h4 style="margin-right: 10px">I Trimestre:</h4>
            <label for="f_i_t_I">Fecha inicio:</label>
            <input type="date" class="form-control" name="date_i_I" id="f_i_t_I" required="">
            <label for="f_f_t_I">Fecha Fin: </label>
            <input type="date" class="form-control" name="date_f_I" id="f_f_t_I" required="">
          </div><br>
          <div class="form-inline">
            <h4 style="margin-right: 10px">II Trimestre:</h4>
            <label for="f_i_t_II">Fecha inicio:</label>
            <input type="date" class="form-control" name="date_i_II" id="f_i_t_II" required="">
            <label for="f_f_t_II">Fecha Fin: </label>
            <input type="date" class="form-control" name="date_f_II" id="f_f_t_II" required="">
          </div><br>
          <div class="form-inline">
            <h4 style="margin-right: 10px">III Trimestre:</h4>
            <label for="f_i_t_III">Fecha inicio:</label>
            <input type="date" class="form-control" name="date_i_III" id="f_i_t_III" required="">
            <label for="f_f_t_III">Fecha Fin: </label>
            <input type="date" class="form-control" name="date_f_III" id="f_f_t_III" required="">
          </div><br>
          <div class="form-inline">
            <h4 style="margin-right: 10px">IV Trimestre:</h4>
            <label for="f_i_t_IV">Fecha inicio:</label>
            <input type="date" class="form-control" name="date_i_IV" id="f_i_t_IV" required="">
            <label for="f_f_t_IV">Fecha Fin: </label>
            <input type="date" class="form-control" name="date_f_IV" id="f_f_t_IV" required="">
          </div><br>
          <div class="form-inline">
            <h4 style="margin-right: 10px">V Trimestre:</h4>
            <label for="f_i_t_V">Fecha inicio:</label>
            <input type="date" class="form-control" name="date_i_V" id="f_i_t_V" required="">
            <label for="f_f_t_V">Fecha Fin: </label>
            <input type="date" class="form-control" name="date_f_V" id="f_f_t_V" required="">
          </div><br>
          <div class="form-inline">
            <h4 style="margin-right: 10px">VI Trimestre:</h4>
            <label for="f_i_t_VI">Fecha inicio:</label>
            <input type="date" class="form-control" name="date_i_VI" id="f_i_t_VI" required="">
            <label for="f_f_t_VI">Fecha Fin: </label>
            <input type="date" class="form-control" name="date_f_VI" id="f_f_t_VI" required="">
          </div><br>
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