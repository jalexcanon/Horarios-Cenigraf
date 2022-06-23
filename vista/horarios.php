<?php
$pageTitle = 'Horario';
include("parte_superior.php")
?>
<div class="content-wrapper">
  <div class="container">
    <div class="container">
      <?php
      if ($rol == 1) {
        echo "<br><h3>Bienvenido " . $inst . "</h3>";
      } elseif ($rol == 2) {
        echo "<br><h3>Bienvenido Instructor " . $inst . "</h3>";
      }

      ?>

    </div>
    <br>
    <div class="container">
      <?php
      if ($rol == 2) {
        $sumas = "SELECT SUM(horas_instructor) as total FROM horarios,tb_trimestre WHERE horarios.id_trim_fch=tb_trimestre.id_T AND horarios.instructor=$instru AND tb_trimestre.estatus_trim_H=0";
        $resulsuma = mysqli_query($conn, $sumas);
        $rowsum = mysqli_fetch_array($resulsuma);
        $sum = $rowsum['total'];
        $res = 40 - $sum;

      ?>
        <div class="container">
          <!--div1tabla -->
          <div class="table-responsive-sm">
            <!--div1tabla -->
            <table class="table table-hover table-sm">
              <thead class="bg-orange">
                <tr class="text-white">
                  <th>Horas</th>
                  <th>Lunes</th>
                  <th>Martes</th>
                  <th>Miercoles</th>
                  <th>Jueves</th>
                  <th>Viernes</th>
                  <th>Sabado</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $days = array(0, 1, 2, 3, 4, 5, 6);
                $hours = array(1, 0, 2, 0, 3, 0, 4, 0, 5, 0, 6, 7, 0, 8);
                foreach ($hours as $hour) {
                ?>
                  <tr>
                    <?php
                    foreach ($days as $day) {
                    ?>
                      <td>
                        <?php
                        $querys_horas = "SELECT * FROM horas WHERE id_h=$hour";
                        $result_horas = mysqli_query($conn, $querys_horas);
                        while ($rcon = mysqli_fetch_assoc($result_horas)) {
                          if ($day == 0) { ?> <strong><?php echo $rcon['hora']; ?></strong>
                          <?php } ?>
                        <?php } ?>
                        <?php
                        $querys_horas = "SELECT * FROM horas";
                        $result_horas = mysqli_query($conn, $querys_horas);
                        $row_horas = mysqli_fetch_assoc($result_horas);
                        $query = "SELECT * FROM horarios,ficha,instructor,dias,horas,tb_trimestre,programa WHERE horarios.dia=$day AND horarios.hora=$hour 
                          AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID 
                          AND horarios.hora = horas.id_h AND horarios.id_trim_fch=tb_trimestre.id_T and ficha.fc_id_programa=programa.id_program and horarios.instructor=$instru";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        if (isset($row)) { ?>
                          <ul class="list-unstyled">
                            <li><?php echo "Ficha: " . $row['Nº ficha']; ?></li>
                            <li><?php echo $row['Trimestre']; ?></li>
                            <li><?php echo "Prog: " . $row['Nom_program']; ?></li>
                            <li><?php echo $row['descripcion']; ?></li>
                          </ul>
                        <?php
                        } elseif (!isset($row)) {
                          echo "&nbsp";
                        }
                        ?>
                      </td>
                  <?php
                    }
                    echo "</tr>";
                  }
                  ?>
                  <?php
                  $nombI = "SELECT * FROM instructor where ID ='$instru'";
                  $re = mysqli_query($conn, $nombI);
                  $lol = mysqli_fetch_array($re); // nombre tabla instructor
                  ?>
                  <tr class="table-bordered table-dark" style="color: black;">
                    <th colspan="4">Observaciones:</th>
                    <th colspan="3">Instructor: <?php echo $lol["Nombre"] . " " . $lol["Apellido"]; ?></th>
                  </tr>
                  <tr class="table-bordered table-dark" style="color: black;">
                    <td colspan="4" rowspan="2"></td>
                    <td colspan="2">Horas Directas Formación</td>
                    <td colspan="1"><?php echo $sum; ?></td>
                  </tr>
                  <tr class="table-bordered table-dark" style="color: black;">
                    <td colspan="2">Horas pendientes de programar</td>
                    <td colspan="1"><?php echo $res; ?></td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      <?php

      }
      ?>
    </div>
    <div class="container">
      <?php
      if (isset($_GET['v'])) {

        if ($_GET['v'] == 1) {
      ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
            <strong>Usuario registrado</strong>
          </div>
        <?php
        } elseif ($_GET['v'] == 2) {
        ?>
          <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>El correo ya está registrado, intente con otro correo.</strong>
          </div>
        <?php
        } elseif ($_GET['v'] == 3) {
        ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>La contraseña no coincide</strong>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <!--/alerta usuario-->

    <!--alerta ficha-->
    <div class="container">
      <?php
      if (isset($_GET['vl'])) {

        if ($_GET['vl'] == 1) {
      ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Ficha registrada</strong>
          </div>
        <?php
        } elseif ($_GET['vl'] == 2) {
        ?>
          <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>La ficha ya esta registrada.</strong>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <!--/alerta ficha-->

    <!--alerta programa-->
    <div class="container">
      <?php
      if (isset($_GET['vp'])) {

        if ($_GET['vp'] == 1) {
      ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Programa registrado</strong>
          </div>
        <?php
        } elseif ($_GET['vp'] == 2) {
        ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>El Programa ya se encuentra registrado</strong>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <!--/alerta programa-->

    <!--alerta sede-->
    <div class="container">
      <?php
      if (isset($_GET['vs'])) {

        if ($_GET['vs'] == 1) {
      ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Sede registrada</strong>
          </div>
        <?php
        } elseif ($_GET['vs'] == 2) {
        ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>La direccion y sede ya se encuentran registradas</strong>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <!--/alerta sede-->
    <!--alerta Ambiente-->
    <div class="container">
      <?php
      if (isset($_GET['va'])) {

        if ($_GET['va'] == 1) {
      ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Ambiente registrado</strong>
          </div>
        <?php
        } elseif ($_GET['va'] == 2) {
        ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>El ambiente de la sede ya se encuentran registrados.</strong>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <!--/alerta Ambiente-->

    <!--alerta Fechas Trimestres ficha-->
    <div class="container">
      <?php
      if (isset($_GET['vtf'])) {

        if ($_GET['vtf'] == 1) {
      ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Fechas registradas</strong>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <!--/alerta Fechas Trimestres ficha-->


  </div>
</div>
<?php
include("parte_inferior.php")
?>