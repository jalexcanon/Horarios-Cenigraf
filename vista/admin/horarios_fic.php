<?php
include('../../controlador/conexion.php');
session_start();
$correo = $_SESSION['ema'];
$inst = $_SESSION['nam'];
if (!isset($correo)) {
    header("location:../../index.php");
}
$rol = $_SESSION['rol'];
if ($rol == 2) {
    header('location:../horarios.php');
}
if (isset($_GET['ficha'])) {

    $id_ficha = $_GET['ficha'];
    $_SESSION['fh'] = $id_ficha; // id ficha para eliminar horario
    $title = mysqli_query($conn, "SELECT * FROM ficha WHERE ID_F ='$id_ficha'");
    $titles = mysqli_fetch_assoc($title);
}
?>
<?php
$pageTitle = 'Horarios ficha';
include("plantilla.php");
?>
<?php
include('crear-horario.php');
?>
<div class="container">
    <div class="table-responsive-sm">
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
                                $querys = "SELECT * FROM horarios,ficha,instructor,dias,horas
                      WHERE horarios.dia=$day  AND horarios.dia = dias.id AND horarios.hora=$hour 
                      AND horarios.instructor = instructor.ID 
                      AND horarios.hora = horas.id_h 
                      AND horarios.ficha=$id_ficha";
                                $result = mysqli_query($conn, $querys);
                                $row = mysqli_fetch_assoc($result);
                                if (isset($row)) { ?>
                                    <?php echo $row['Nombre'] . " " . $row['Apellido'] .
                                        "<br>" . "Descripción: " . $row['descripcion']; ?>
                                    <br>
                                    <a href="#edit_<?php echo $row['id_hora']; ?>" class="btn btn-outline-dark btn-sm" data-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                    <a href="../../controlador/HorariosController/delete.php?eli=<?php echo $row['id_hora'] ?>">
                                        <button type="button" onclick="return eliminarh()" class="btn btn-outline-dark btn-sm"><i class="bi-trash"></i></button></a>
                                <?php
                                } elseif (!isset($row)) {
                                    echo "&nbsp";
                                }
                                ?>
                            </td>
                    <?php
                            include('editar-horario.php');
                        }
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
    <!--/div2Tabla -->
</div>
<!--/div1Tabla -->
</div>
</div>
<script src="js.js"></script>
</body>
<?php
include("pantilla-footer.php");
?>

</html>