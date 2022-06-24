<?php
$pageTitle = 'Editar trimestres';
include("parte_superior.php");
?>
<div class="content-wrapper">
  <div class="container">
    <br>
    <?php
    $upfech = $_GET['upfech']; //id de la ficha------------------------------------------------------
    $query = mysqli_query($conn, "SELECT * FROM ficha WHERE ID_F=$upfech");
    $row = mysqli_fetch_assoc($query);
    ?>
    <div class="container">
      <h3>Ficha: <?php echo $row['Nº ficha'] ?></h3>
      <div class="table-responsive">
        <table class="table table-bordered table-striped mt-4" style="text-align:center;">
          <thead>
            <tr>
              <th>N° Ficha</th>
              <th>Trimestre</th>
              <th>Fecha de inicio</th>
              <th>Fecha Fin</th>
              <th>Instructor</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query2 = mysqli_query($conn, "SELECT * FROM ficha,tb_trimestre,instructor
             WHERE tb_trimestre.id_fch=ficha.ID_F AND instructor.id= tb_trimestre.instructor_id 
             AND tb_trimestre.id_fch=$upfech");
            while ($Fechcon = mysqli_fetch_assoc($query2)) {
            ?><form method="post" action="../controlador/trimestreControllers/update.php?id_F=<?php echo $upfech; ?>">
                <tr>
                  <td><?php echo $Fechcon["Nº ficha"]; ?></td>
                  <td><?php echo $Fechcon["Trimestre"]; ?></td>
                  <td><input type="date" name="date_Iup" value="<?php echo $Fechcon["Trim_date_Inc"]; ?>"></td>
                  <td>
                    <input type="date" name="date_Fup" value="<?php echo $Fechcon["Trim_date_fin"]; ?>">
                    <input type="number" name="id_fech" style="display:none;" value="<?php echo $Fechcon['id_T']; ?>">
                  </td>
                  <td>
                    <select name="instructor_update" id="">
                      <div class="form-group">
                        <option value="">Selecciona el instructor</option>
                        <?php
                        $instructor= mysqli_query($conn, "SELECT * FROM instructor");
                        while ($ins = mysqli_fetch_array($instructor)) { ?>
                          <option value="<?php echo $ins["ID"]; ?>"><?php echo $ins['Nombre'] . " " . $ins['Apellido'] ?></option>
                        <?php } ?>
                    </select>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="submit" class="btn btn-success"
                      onclick="updatetrimestre()">Actualizar</button>
                    </div>
                  </td>
                </tr>
              </form>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div><button type="button" class="btn btn-secondary" onclick="window.open('trimestre-tabla.php','_Self')"><i class="bi-arrow-left"></i>Atrás</button>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?php
include("parte_inferior.php");
?>
</body>
<script>
  function updatetrimestre() {
    alert("Se actualizó el trimestre satisfactoriamente")
  }
</script>
</html>