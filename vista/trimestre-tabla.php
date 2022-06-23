<?php
$pageTitle = 'Trimestres';
include("parte_superior.php");
?>
<div>
  <div class="row">
    <div class="col-lg-12 mx-auto">
      <div class="container">
        <?php
        $contFech = mysqli_query($conn, "SELECT * FROM ficha");
        ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped mt-4" style="text-align:center;">
            <thead>
              <tr>
                <th>N° Ficha</th>
                <th>Fecha de inicio etapa electiva</th>
                <th>Fecha fin etapa electiva</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($Fechcon = mysqli_fetch_array($contFech)) {
              ?>
                <tr>
                  <td><?php echo $Fechcon["Nº ficha"]; ?></td>
                  <td><?php echo $Fechcon["fic_date_I"]; ?></td>
                  <td><?php echo $Fechcon["fic_date_F"]; ?></td>
                  <td>
                    <div class="btn-group">
                      <a href="update_fechT.php?upfech=<?php echo $Fechcon["ID_F"] ?>"><button type="submit" class="btn btn-success btn-sm"><i class="bi-pencil-square"></i></button></a>
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
<?php
include("parte_inferior.php")
?>