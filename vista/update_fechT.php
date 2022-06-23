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
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query2 = mysqli_query($conn, "SELECT * FROM ficha,tb_trimestre WHERE tb_trimestre.id_fch=ficha.ID_F AND tb_trimestre.id_fch=$upfech");
            while ($Fechcon = mysqli_fetch_assoc($query2)) {
            ?><form method="post" action="../controlador/update_fechT.php?id_F=<?php echo $upfech; ?>">
                <tr>
                  <td><?php echo $Fechcon["Nº ficha"]; ?></td>
                  <td><?php echo $Fechcon["Trimestre"]; ?></td>
                  <td><input type="date" name="date_Iup" value="<?php echo $Fechcon["Trim_date_Inc"]; ?>"></td>
                  <td>
                    <input type="date" name="date_Fup" value="<?php echo $Fechcon["Trim_date_fin"]; ?>">
                    <input type="number" name="id_fech" style="display:none;" value="<?php echo $Fechcon['id_T']; ?>">
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="submit" class="btn btn-success">Actualizar</button>
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

</html>