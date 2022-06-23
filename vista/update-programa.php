<?php
$pageTitle = 'Editar programa';
include("parte_superior.php");
?>

<div class="content-wrapper">
  <div class="container">
    <br>
    <?php
    $idpg = $_GET['ubP']; //id del Programa------------------------------------------------------

    $query = "SELECT * FROM programa where `id_program`='$idpg'";
    $result = mysqli_query($conn, $query);
    $rows = $result->fetch_array();
    ?>
    <div class="row" style="display: contents;">
      <div class="col-sm-8 mx-auto">
        <div class="container border" style="padding:4%; background-color: #a2a1a5a8; ">
          <form action="../controlador/ProgramaControllers/update.php?ubPO=<?php echo $idpg ?>" method="POST">
            <div class="form-group">
              <label for="nom_prog">Nombre del programa:</label>
              <input type="text" class="form-control" value="<?php echo $rows['Nom_program'] ?>" placeholder="Digite el nombre del programa" name="nomp" id="nom_prog" required="">
            </div>
            <div class="form-group">
              <label for="nivl">Nivel del programa:</label>
              <select class="form-control" id="nivl" name="nivel_prog" required="">
                <option value="<?php echo $rows['nivel_form'] ?>"><?php echo $rows['nivel_form'] ?></option>
                <option value="Técnico">Técnico</option>
                <option value="Tecnólogo">Tecnólogo</option>
                <option value="Especialización">Especialización</option>
              </select>
            </div>
            <div class="form-group">
              <label for="compt">Competencias:</label>
              <textarea class="form-control" name="texto" id="compt" placeholder="Digite las Competencias"><?php echo $rows['competencias'] ?></textarea>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-secondary" onclick="window.open('programa-tabla.php','_Self')"> <i class="bi-arrow-left"></i>Atrás</button>
              <button type="submit" class="btn btn-success" onclick="updateprograma()">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("parte_inferior.php");
?>
<script>
  function updateprograma() {
    alert("El programa se actualizó exitosamente")
  }
</script>
</body>

</html>