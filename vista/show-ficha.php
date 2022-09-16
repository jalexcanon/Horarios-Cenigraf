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
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
          <?php
            if (isset($_GET['v'])) {
              if ($_GET['v'] == 1) {
            ?>
                <div class="alert alert-success alert-dismissible fade show mt-4">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                  <strong>La ficha se actualizó correctamente</strong>
                </div>
            <?php
              } elseif($_GET['v']==2){
                ?>
                <div class="alert alert-danger alert-dismissible fade show mt-4">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                  <strong>Ficha sin horarios registrados</strong>
                </div>
                <?php
              }
            }
            ?>
            <div class="card-body">
              <?php
              $query = mysqli_query($conn, "SELECT * FROM ficha, programa, instructor 
              WHERE ficha.fc_id_programa = programa.id_program AND id_instructor = ID");
              ?>
              <div class="table-responsive">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Ficha</th>
                      <th>Nombre del programa</th>
                      <th>Nivel de formacion</th>
                      <th>Jornada </th>
                      <th>Instructor Técnico</th>
                      <th>Horario</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($fcon = mysqli_fetch_assoc($query)) {
                    ?>
                      <tr>

                        <td><?php echo $fcon['Nº ficha']; ?></td>
                        <td><?php echo $fcon["Nom_program"]; ?></td>
                        <td><?php echo $fcon["nivel_form"]; ?></td>
                        <td><?php echo $fcon["fc_jornada"]; ?></td>
                        <td><?php echo $fcon["Nombre"]." ".$fcon['Apellido']; ?></td>
                        <td>
                          <div class="btn-group">
                          <button class="btn btn-primary btn-sm">
                          <a href="" data-toggle="modal" data-target="#myModal" style="color:white;">Ver</a></button>
                            <button class="btn btn-secondary btn-sm"
                            onclick="window.open('admin/horarios_fic.php?ficha=<?php echo $fcon['ID_F']?>&pro=<?php echo $fcon['id_program']?>','_Self')">
                            Crear</button>
                          </div>
                        </td>
                        <td>
                          <div class="btn-group">
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
    </div>
  </div>
</div>
</div>
<!--
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selecciona el trimestre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <select name="trimestre" id="">
        <option value="1">Trimestre I</option>
        <option value="2">Trimestre II</option>
      </select>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
<?php
    if (isset($_GET['trimestre'])) {
      $nil = $_GET['nivel_F'];
      $trim_ = $_GET['Trimestre'];
      $_SESSION['trim'] = $trim_; //variable de trimreste para consulta y registro del horario
      $query = "SELECT * FROM ficha,programa,tb_trimestre WHERE programa.nivel_form='$nil' 
      and ficha.fc_id_programa=programa.id_program AND tb_trimestre.id_fch=ficha.ID_F AND tb_trimestre.Trimestre='$trim_'";
      $cont = mysqli_query($conn, $query);
      echo "<center><h3>" . $nil . " " . $trim_ . " </h3></center>";
    ?>
    <?php
    }
    ?>
<script src="js.js">
</script>

<?php
include("parte_inferior.php")
?>
  </div>