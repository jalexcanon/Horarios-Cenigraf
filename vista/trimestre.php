<?php
$pageTitle = 'Registro de trimestres';
include("parte_superior.php");
?>
<div>
  <div class="row">
    <div class="col-sm-10 mx-auto">
      <div class="container border" style="padding:3%; background-color: #a2a1a5a8; ">
        <?php
        $conFT = mysqli_query($conn, "SELECT * FROM ficha,programa where ficha.fc_id_programa=programa.id_program AND ficha.estatus_trim=0");
        ?>
        <form action="../controlador/trimestreControllers/create.php" method="POST" style="padding-left:5%;">
          <div class="form-group">
            <h4>Ficha:</h4>
            <select name="ficha_fecha" class="form-control" required>
              <option value="">Seleccionar</option>
              <?php
              while ($rowFT = mysqli_fetch_assoc($conFT)) { ?>
                <option value="<?php echo $rowFT['ID_F'] ?>"><?php echo $rowFT['Nº ficha'] . " " . $rowFT['nivel_form'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="form-inline">
            <div class="row">
              <div class="col">
                <h5>I trimestre: </h5>
              </div>
              <div class="col">
                <label for="f_i_t_I">Fecha inicio:</label>
                <input type="date" class="form-control" name="date_i_I" id="f_i_t_I" required>
              </div>
              <div class="col">
                <label for="f_f_t_I">Fecha Fin: </label>
                <input type="date" class="form-control" name="date_f_I" id="f_f_t_I" required>
              </div>
              <div class="col">
                <label for="">Instructor: </label>
                <select name="instructor_1" class="form-control" required>
                  <option value="">Seleccionar</option>
                  <?php
                  $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                  while ($ins = mysqli_fetch_array($instructor)) { ?>
                    <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php
                                                                                                                          } ?>
                </select>
              </div>
            </div>

            <div class="form-inline mt-3">
              <div class="row">
                <div class="col">
                  <h5>II trimestre: </h5>
                </div>
                <div class="col">
                  <label for="f_i_t_II">Fecha inicio:</label>
                  <input type="date" class="form-control" name="date_i_II" id="f_i_t_II" required>
                </div>
                <div class="col">
                  <label for="f_f_t_II">Fecha Fin: </label>
                  <input type="date" class="form-control" name="date_f_II" id="f_f_t_II" required>
                </div>
                <div class="col">
                  <label for="">Instructor: </label>
                  <select name="instructor_2" class="form-control" required>
                    <option value="">Selecionar</option>
                    <?php
                    $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                    while ($ins = mysqli_fetch_array($instructor)) { ?>
                      <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php
                                                                                                                            } ?>
                  </select>
                </div>
              </div>



              <div class="form-inline mt-3">
                <div class="row">
                  <div class="col">
                    <h5>III trimestre: </h5>
                  </div>
                  <div class="col">
                    <label for="f_i_t_III">Fecha inicio:</label>
                    <input type="date" class="form-control" name="date_i_III" id="f_i_t_III" required>
                  </div>
                  <div class="col">
                    <label for="f_f_t_III">Fecha Fin: </label>
                    <input type="date" class="form-control" name="date_f_III" id="f_f_t_III" required>
                  </div>
                  <div class="col">
                    <label for="f_f_t_III">Instructor: </label>
                    <select name="instructor_3" class="form-control" required>
                      <option value="">Selecionar</option>
                      <?php
                      $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                      while ($ins = mysqli_fetch_array($instructor)) { ?>
                        <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php
                                                                                                                              } ?>
                    </select>
                  </div>
                </div>


                <div class="form-inline mt-3">
                  <div class="row">
                    <div class="col">
                      <h5>IV trimestre: </h5>
                    </div>
                    <div class="col">
                      <label for="f_i_t_IV">Fecha inicio:</label>
                      <input type="date" class="form-control" name="date_i_IV" id="f_i_t_IV" required>
                    </div>
                    <div class="col">
                      <label for="f_f_t_IV">Fecha Fin: </label>
                      <input type="date" class="form-control" name="date_f_IV" id="f_f_t_IV" required>
                    </div>
                    <div class="col">
                      <label for="f_f_t_II">Instructor: </label>
                      <select name="instructor_4" class="form-control" required>
                        <option value="">Selecionar</option>
                        <?php
                        $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                        while ($ins = mysqli_fetch_array($instructor)) { ?>
                          <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php
                                                                                                                                } ?>
                      </select>
                    </div>
                  </div>


                  <div class="form-inline mt-3">
                    <div class="row">
                      <div class="col">
                        <h5>V trimestre: </h5>
                      </div>
                      <div class="col">
                        <label for="f_i_t_V">Fecha inicio:</label>
                        <input type="date" class="form-control" name="date_i_V" id="f_i_t_V" required>
                      </div>
                      <div class="col">
                        <label for="f_f_t_V">Fecha Fin: </label>
                        <input type="date" class="form-control" name="date_f_V" id="f_f_t_V" required>
                      </div>
                      <div class="col">
                        <label for="f_f_t_V">Instructor: </label>
                        <select name="instructor_5" class="form-control" required>
                          <option value="">Selecionar</option>
                          <?php
                          $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                          while ($ins = mysqli_fetch_array($instructor)) { ?>
                            <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php
                                                                                                                                  } ?>
                        </select>
                      </div>
                    </div>



                    <div class="form-inline mt-3">
                      <div class="row">
                        <div class="col">
                          <h5>VI trimestre: </h5>
                        </div>
                        <div class="col">
                          <label for="f_i_t_VI">Fecha inicio:</label>
                          <input type="date" class="form-control" name="date_i_VI" id="f_i_t_VI" required>
                        </div>
                        <div class="col">
                          <label for="f_f_t_VI">Fecha Fin: </label>
                          <input type="date" class="form-control" name="date_f_VI" id="f_f_t_VI" required>
                        </div>
                        <div class="col">
                          <label for="f_f_t_VI">Instructor: </label>
                          <select name="instructor_6" class="form-control" required>
                            <option value="">Selecionar</option>
                            <?php
                            $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                            while ($ins = mysqli_fetch_array($instructor)) { ?>
                              <option value="<?php echo $ins["ID"] ?>"><?php echo $ins["Nombre"] . " " . $ins['Apellido'] ?></option><?php
                                                                                                                                    } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-dark">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include("parte_inferior.php")
?>