<?php
$pageTitle = 'Competencias y resultados';
include("parte_superior.php");
?>
<div>
  <div class="row">
    <div class="col-lg-12 mx-auto">
      <div class="container">
        <?php
        $progcon = $_GET['ubP'];
        $query = mysqli_query($conn, "SELECT * FROM programa WHERE id_program=$progcon");
        $row = mysqli_fetch_assoc($query);
        ?>
        <div class="card-body">
          <a href="create-competencias.php?ubP=<?php echo $progcon ?>" class="btn btn-success mb-2"> Crear competencias</a>
          <div class="table-responsive">
            <table class="table table-bordered table-striped mt-4">
              <thead>
                <tr>
                  <th>Competencias</th>
                  <th>Fecha inicial</th>
                  <th>Fecha Final</th>
                  <th>Instructor</th>
                  <th>Resultados</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 $contprog = mysqli_query($conn, "SELECT * FROM competencias, 
                 instructor WHERE competencias.instructor_id = instructor.ID
                 AND programas_id = $progcon");
                  while ($row = mysqli_fetch_assoc($contprog)) {
                ?>
                  <form method="post" action="../controlador/ProgramaControllers/update_competencia.php?ubP=<?php echo $progcon ?>">
                    <tr>
                      <td> <input type="number" name="id_competencias" style="display:none;" value="<?php echo $row['id']; ?>">
                        <input type="text" name="competencias" value="<?php echo $row["competencias"]; ?>">
                      </td>
                      <td><input type="date" name="fecha_inicial" value="<?php echo $row["fecha_ini"]; ?>"></td>
                      <td><input type="date" name="fecha_fin" value="<?php echo $row["fecha_fin"]; ?>"></td>
                      <td>
                        <?php
                        $instructor = mysqli_query($conn, "SELECT * FROM instructor");
                        ?>
                        <select class="form-control" name="instructor" required="">
                          <option value="<?php echo $row['instructor_id'] ?>"><?php echo $row['Nombre'] . " " . $row['Apellido']  ?></option>
                          <?php
                          while ($ins = mysqli_fetch_assoc($instructor)) {
                          ?>
                            <option value="<?php echo $ins['ID'] ?>"><?php echo $ins['Nombre'] . " " . $ins['Apellido']  ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        </select>
                      </td>
                      <td></td>
                      <td>
                        <button type="submit" class="btn btn-success btn-sm"><i class="bi-pencil-square"></i></button>
                        <a  class="btn btn-info btn-sm" href="../controlador/ProgramaControllers/delete_competencia.php?delete=<?php echo $row['id']; ?>"> <i class="bi-trash"></i></a>
                      </td>
                    </tr>
                  </form>
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
<script src="js.js"></script>
<?php
include("parte_inferior.php")
?>