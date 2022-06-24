<?php
$pageTitle = 'Programas';
include("parte_superior.php");
?>
<div>
  <div class="row">
    <div class="col-lg-12 mx-auto">
      <div class="container">
        <?php
        $tablaprog = "SELECT * FROM `programa`";
        $contprog = mysqli_query($conn, $tablaprog);

        ?>
        <div class="card-body">
          <div class="table-responsive">
            <table id="table" class="table table-bordered table-striped mt-4">
              <thead>
                <tr>
                  <th>Nombre del Programa</th>
                  <th>Nivel de formacion</th>
                  <th>Competencias</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($progcon = mysqli_fetch_assoc($contprog)) {
                ?>
                  <tr>
                    <td><?php echo $progcon["Nom_program"]; ?></td>
                    <td><?php echo $progcon["nivel_form"]; ?></td>
                    <td><?php echo $progcon["competencias"]; ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="update-programa.php?ubP=<?php echo $progcon["id_program"] ?>">
                          <button type="submit" class="btn btn-success btn-sm"><i class="bi-pencil-square"></i>
                          </button></a>
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
<script src="js.js"></script>
<?php
include("parte_inferior.php")
?>