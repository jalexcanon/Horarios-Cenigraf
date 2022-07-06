<?php
$pageTitle = 'Fichas';
include("parte_superior.php");
?>
<div>
  <div class="row">
    <div class="col-lg-12 mx-auto">
      <div class="container">
        <!--Collapse_Ficha_Ficha secl-->
        <div id="accordion">
          <a type="button" class="btn btn-outline-secondary mt-4" href="fichas-activas-tabla.php">Consultar fichas activas</a>
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              <?php
              $tablaf = "SELECT * FROM ficha,programa WHERE ficha.fc_id_programa = programa.id_program";
              $contf = mysqli_query($conn, $tablaf);
              ?>
              <div class="table-responsive">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Ficha</th>
                      <th>Nombre del programa</th>
                      <th>Nivel de formacion</th>
                      <th>Jornada </th>
                      <th>Trimestres</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($fcon = mysqli_fetch_assoc($contf)) {
                    ?>
                      <tr>

                        <td><?php echo $fcon['Nº ficha']; ?></td>
                        <td><?php echo $fcon["Nom_program"]; ?></td>
                        <td><?php echo $fcon["nivel_form"]; ?></td>
                        <td><?php echo $fcon["fc_jornada"]; ?></td>
                        <th class="d-flex justify-content-center"> <a href="update_trimestre.php?upfech=<?php echo $fcon["ID_F"] ?>"><button type="submit" class="btn btn-light btn-sm"><i class="fa-solid fa-calendar-days"></i></button></a></th>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-secondary btn-sm" onclick="window.open('horarios_ficha.php?ficha=<?php echo $fcon['ID_F'] ?>','_Self')">Horario</button>
                            <a href="update-ficha.php?ubf=<?php echo $fcon["ID_F"] ?>"><button type="submit" class="btn btn-success btn-sm"><i class="bi-pencil-square"></i></button></a>
                            <a href="../controlador/FichaControllers/delete.php?eliF=<?php echo $fcon['ID_F'] ?>"><button type="submit" class="btn btn-info btn-sm" onclick="return delete_('¿Está seguro de eliminar esta ficha?', 'Se eliminó la ficha exitosamente.')"><i class="bi-trash"></i></button></a>
                          </div>
                        </td>
                      </tr>
                    <?php
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/container -->
    </div>
  </div>
</div>
</div>
<script src="js.js">
</script>

<?php
include("parte_inferior.php")
?>