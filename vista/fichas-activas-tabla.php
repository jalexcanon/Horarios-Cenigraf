<?php
$pageTitle = 'Fichas activas';
include("parte_superior.php");
?>
<div>
  <div class="row">
    <div class="col-lg-12">
      <div class="container">
        <?php
        $tablaf1 = "SELECT * FROM ficha,programa,tb_trimestre WHERE ficha.fc_id_programa = programa.id_program and ficha.ID_F=tb_trimestre.id_fch and tb_trimestre.estatus_trim_H=0";
        $contf1 = mysqli_query($conn, $tablaf1);
        ?>
        <div class="table-responsive">
          <table class="table .thead-light table-striped mt-4">
            <thead>
              <tr>
                <th>Ficha</th>
                <th>Nombre del programa</th>
                <th>Nivel de formacion</th>
                <th>Jornada </th>
                <th>Trimestre <br>activo</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($fcon1 = mysqli_fetch_assoc($contf1)) {
              ?>
                <tr>

                  <td><?php echo $fcon1['Nº ficha']; ?></td>
                  <td><?php echo $fcon1["Nom_program"]; ?></td>
                  <td><?php echo $fcon1["nivel_form"]; ?></td>
                  <td><?php echo $fcon1["fc_jornada"]; ?></td>
                  <td><?php echo $fcon1["Trimestre"]; ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-secondary btn-sm" onclick="window.open('horarios_ficha.php?ficha=<?php echo $fcon1['ID_F'] ?>','_Self')">Horario</button>
                      <a href="update-ficha.php?ubf=<?php echo $fcon1["ID_F"] ?>"><button type="submit" class="btn btn-success btn-sm"><i class="bi-pencil-square"></i></button></a>
                      <a href="../controlador/deleteF.php?eliF=<?php echo $fcon1['ID_F'] ?>"><button type="submit" class="btn btn-info btn-sm" onclick="return elif()"><i class="bi-trash"></i></button></a>
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