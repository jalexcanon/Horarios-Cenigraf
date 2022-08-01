<?php
include('../../controlador/conexion.php');
session_start();
$correo = $_SESSION['ema'];
$inst = $_SESSION['nam'];
if (!isset($correo)) {
  header("location:../../index.php");
}

$trim_f = $_SESSION['trim'];
$id_f = $_GET['fich'];
$programa = $_GET['pro'];

//echo $trim_f,$id_f;
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Horario Ficha Imprimir </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <table>
    <?php
    $fcht = mysqli_query($conn, "SELECT * FROM ficha,programa,tb_trimestre 
   WHERE ficha.fc_id_programa=programa.id_program and tb_trimestre.id_fch=ficha.ID_F AND ficha.ID_F=$id_f 
   and tb_trimestre.Trimestre='$trim_f'");
    $fchT = mysqli_fetch_assoc($fcht);
    ?>
    <tr>
      <td colspan="6" rowspan="3"><img src="../../img/sena_horarios_1.png"></td>
      <td>Versión: 03</td>
    </tr>
    <tr>
      <td>Fecha: <?php echo date('M-Y'); ?></td>
    </tr>
    <tr>
      <td><?php echo $fchT['Trimestre'] ?></td>
    </tr>
    <tr>
      <th colspan="2">Grupo: <?php echo $fchT['Nº ficha'] . " " . $fchT['Nom_program'] ?></th>
      <th colspan="3">Taller</th>
      <th colspan="2">Periodo: <?php echo $fchT['Trim_date_Inc'] . " - " . $fchT['Trim_date_fin'] ?></th>
    </tr>
    <tr>
      <th>Horas</th>
      <th>Lunes</th>
      <th>Martes</th>
      <th>Miercoles</th>
      <th>Jueves</th>
      <th>Viernes</th>
      <th>Sabado</th>
    </tr>
    <?php
    $days = array(0, 1, 2, 3, 4, 5, 6,);
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
            $query = "SELECT * FROM horarios,ficha,dias,horas,ambiente,tb_trimestre, programa, instructor 
                WHERE horarios.dia=$day AND horarios.hora=$hour
                AND horarios.id_ambiente=ambiente.id_A 
                AND horarios.instructor = instructor.ID
                and horarios.ficha=$id_f
                AND ficha.ID_F = tb_trimestre.id_fch 
                AND horarios.id_trim_fch=tb_trimestre.id_T
                AND horarios.hora = horas.id_h 
                AND ficha.fc_id_programa=programa.id_program";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            if (isset($row)) { ?>
              <ul>
                <li><?php echo $row['Nombre'] . " " . $row['Apellido']; ?></li>
                <li><?php echo $row['Trimestre']; ?></li>
                <li><?php echo "Amb: " . $row['Nombre_ambiente']; ?></li>
                <li><?php echo "Descripción: " . $row['descripcion']; ?></li>
              </ul>
            <?php
            } elseif (!isset($row)) {
              echo "&nbsp";
            } ?>
          </td><?php
              }
              echo "</tr>";
            }
                ?>
      <tr>
        <th colspan="4">COMPETENCIAS A DESARROLLAR</th>
        <?php
        $instructor = mysqli_query($conn, "SELECT * FROM instructor,tb_trimestre, ficha
      WHERE tb_trimestre.instructor_id = instructor.ID and tb_trimestre.Trimestre='$trim_f' 
      AND tb_trimestre.id_fch=ficha.ID_F AND ficha.ID_F=$id_f 
      AND tb_trimestre.Trimestre='$trim_f'");
        $ins = mysqli_fetch_assoc($instructor);
        ?>
        <th colspan="3">Instructor: <?php echo $ins['Nombre'] . " " . $ins['Apellido'] ?>
        </th>
      </tr>
      <tr>
        <th colspan="2" style="text-align: center;">Competencia</th>
        <th colspan="1" style="text-align: center;">Fecha de inicio y fin</th>
        <th colspan="1" style="text-align: center;">Instructor a cargo de la competencia</th>
        <td colspan="3" rowspan="3">
          Observaciones:
        </td>
      </tr>
        <?php
        $competencias = mysqli_query($conn, "SELECT * FROM competencias, programa,
        ficha WHERE ficha.fc_id_programa=programa.id_program
        AND competencias.programas_id = programa.id_program
        AND competencias.programas_id = $programa
        AND ficha.ID_F=$id_f ");
        while ($row = mysqli_fetch_assoc($competencias)) {
        ?>
          <tr>
            <td colspan="2"><?php echo $row['competencias']; ?></td>
            <td><?php echo $row["fecha_ini"]." - ".$row["fecha_fin"]; ?></td>
            <td><?php echo $row["instructor"]; ?></td>
          </tr>
        <?php
        }
        ?>
        <tr>
        <th colspan="3" style="text-align: center;">Resultados</th>
        <th colspan="1" style="text-align: center;">Instructor asignado</th>
        </tr>

        <?php
        $resultados = mysqli_query($conn, "SELECT * FROM resultados, programa,
        ficha WHERE ficha.fc_id_programa=programa.id_program
        AND resultados.programas_id = programa.id_program
        AND resultados.programas_id = $programa
        AND ficha.ID_F=$id_f ");
        while ($row = mysqli_fetch_assoc($resultados)) {
        ?>
          <tr>
            <td colspan="3"><?php echo $row['resultados']; ?></td>
            <td><?php echo $row["instructor_resultados"]; ?></td>
          </tr>
        <?php
        }
        ?>

  </table>
  <script>
    window.addEventListener("load", window.print());
  </script>
</body>

</html>