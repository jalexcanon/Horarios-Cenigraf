<?php
include('conexion.php');
$id_ficha=$_POST['lolo'];
$nom="SELECT * FROM ficha WHERE ID_F='$id_ficha'";
$con_fch=mysqli_query($conn,$nom);
$rowfch=mysqli_fetch_array($con_fch);
 ?>
 <div class="container"><!--div1tabla --> 
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">Crear horario </button>
        <!--modal-->
        <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                  <!--Contenido-->
                  <div class="modal-header">
                    <h4 class="modal-title">Crear Horario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  <div class="modal-body">
                    <center><h3>Ficha</h3></center>
                <form class="form-horizontal" method="POST" id="formu">
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="fic">Instructor:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="fic" name="fich">
                            <option value="0">Seleccionar Instructor</option>
                            <?php
                            $inst="SELECT * FROM instructor";
                            $contI=mysqli_query($conn,$inst);
                                         while ($ins=mysqli_fetch_array($contI)) {
                               ?>
                                  <option value="<?php echo $ins["ID"]?>"><?php echo $ins["Nombre"]." ".$ins['Apellido']?></option>

                                <?php
                            }
                                ?>
                          </select>
                        </div>
                        <br>
                        <label class="control-label col-sm-2" for="di">Día:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="di" name="days">
                                <option value="0">Seleccionar dia</option>
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                             </select>
                          </div>

                          <br>
                        <label class="control-label col-sm-2" for="ho">Hora:</label>
                          <div class="col-sm-10">
                             <select class="form-control" id="ho" name="hour">
                                <option value="0">Seleccionar hora</option>
                                <option value="1">6:00 - 7:40</option>
                                <option value="2">8:00 - 9:40</option>
                                <option value="3">10:00 - 11:40</option>
                                <option value="4">12:00 - 13:40</option>
                                <option value="5">14:20 - 16:00</option>
                                <option value="6">16:20 - 18:00</option>
                                <option value="7">18:15 - 19:45</option>
                                <option value="8">20:00 - 21:40</option>
                             </select>
                          </div>
                          <br>
                        <label class="control-label col-sm-2" for="ho">Ambiente:</label>
                        <?php
                    $amb="SELECT * FROM ambiente";
                    $consulA=mysqli_query($conn,$amb);

                        ?>
                          <div class="col-sm-10">
                             <select class="form-control" id="ho" name="idAB">
                                <option value="0">Seleccionar Ambiente</option>
                              <?php
                        while ($ambt=mysqli_fetch_assoc($consulA)) {
                          ?>
                        <option value="<?php echo$ambt['id_A']?>"><?php echo $ambt['Nombre_ambiente'] ?></option>
                          <?php
                        }
                          ?>
                             </select>
                          </div>
                          
                        
                      </div>
                  </div>
                      <div class="form-group">
                        <div class="modal-footer">
                          <div class="btn-group">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning">Crear</button>
                          </div>
                          
                        </div>
                      </div>
                    </form>
                 </div>   
              </div>
           </div>
        </div></center><!--/modal--><br>
 
    <script>
    $('#Enviar').click(function(){
        $.ajax({
          url: 'guardar_f.php',
          type: 'POST',
          data: $('#formu').serialize(),
          success: function(res){
          $('#respuesta').html(res);}
        });
     });
    </script> 



         <h3><?php echo "Ficha ".$rowfch['Nº ficha'] ?></h3>
         <table style="border: 1px solid; ">
                <tr>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50" ><center>Horas</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Lunes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Martes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Miercoles</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Jueves</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Viernes</center></th>
                  <th bgcolor="E69138" WIDTH="100" HEIGHT="50"><center>Sabado</center></th>
                </tr>

                <tr></tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>6:00 - 7:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                  <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 7:40 - 8:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1;border: 1px solid;"><center> DESCANSO </center></th>
                  </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>8:00-9:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100"> <center> 9:40 - 10:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                  </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>10:00-11:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 11:40 - 12:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                   <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>12:00-13:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 13:40 - 14:20 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1;border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>14:20-16:00</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 16:00 - 16:20 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>16:20-18:00</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>18:15-19:45</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
                   <tr>
                    <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center> 19:45 - 20:00 </center></th>
                    <th colspan="12" WIDTH="50" HEIGHT="50" bgcolor="E69138" style = "position: relative; z-index: 1; border: 1px solid;"><center> DESCANSO </center></th>
                   </tr>
                <tr>
                  <th bgcolor="E69138" WIDTH="200" HEIGHT="100" style="border: 1px solid;"> <center>20:00-21:40</center></th>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                  <td WIDTH="200" HEIGHT="100">&nbsp</td>
                </tr>
              </table>
              <script type="text/javascript">
                  function eliminarh(){

                     var res=confirm("Esta seguro de eliminar este horario.")
                     if (res==true) {
                        return true;
                     }
                     else{
                        return false;
                     }
                     
                  }
               </script>  

    <!--div1 -->          
       <div class="container">
                  <div style=" position: relative;
                               bottom: 1402px;
                               margin: 0 0 0 152px;
                               margin-right: -7px;
                               max-WIDTH: 966px; 
                               max-HEIGHT:100px;
                                  "> <!--div2 -->
                          <table class="table table-bordered">
                           <?php
                                
                             $days = array(1,2,3,4,5,6,);
                            $hours = array(1,0,2,0,3,0,4,0,5,0,6,7,0,8);

                              foreach ($hours as $hour) {
                                ?>
                                 <tr>
                                <?php
                                
                                  foreach ($days as $day) {
                                      ?>

                                       <td bgcolor="EFD5BA" width="17%" height="100px" style="border: 1px solid; padding: 0;">

                                      <?php
$querys = "SELECT * FROM horarios,ficha,instructor,dias,horas,ambiente WHERE horarios.dia=$day AND horarios.hora=$hour AND horarios.dia=dias.id AND horarios.ficha=ficha.ID_F AND horarios.instructor = instructor.ID AND horarios.id_ambiente=ambiente.id_A AND horarios.hora = horas.id_h and horarios.ficha=$id_ficha";
                                      $result = mysqli_query($conn, $querys);
                                      $row = mysqli_fetch_assoc($result); 
                                       if (isset($row)) { ?>                                                                              
                    <center>
                                       
                                       <?php  echo $row['Nombre_ambiente'];?><br>
                                       <?php  echo $row['Nombre']." ".$row['Apellido'];?>
  
                        <div class="dropdown dropright" style=" display: inline-block;">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                           Opciones
                          </button>
                          <div class="dropdown-menu" style="background-color: #f1f1f100; border: 1px solid rgb(0 0 0 / 0%); box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 0%);" >
                            
                            <div class="btn-group">
                              <button type="button" data-toggle="modal" class="btn btn-success" onclick="window.open('../../controlador/ubdate.php?ubd=<?php echo $row['id_hora']?>','_Self')">Editar</button>
                             <a href="../../controlador/delete.php?eli=<?php echo $row['id_hora']?>"><button type="button" onclick="return eliminarh()" class="btn btn-danger">Eliminar</button></a> 
                            </div>                                                                                                                     
                          </div>
                        </div>
                     </center>   
 
                                      <?php
                                      }elseif (!isset($row)) {
                                          echo "&nbsp";
                                          
                                      }
                                      ?>
                                      </td>
                                      <?php                                     
                                  }
                                  echo "</tr>";
                              }


                           ?>  
                       </table>      
                   </div><!--/div2 --> 


                </div><!--/div1 -->  

  