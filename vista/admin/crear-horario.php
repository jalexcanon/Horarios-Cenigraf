<div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button></div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" id="formu" action="../../controlador/guardar_ficha.php?f_h=<?php echo $id_ficha; ?>">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="ins">Instructor:</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="ins" name="ins" required>
                        <option value="">Seleccionar Instructor</option>
                        <?php
                        $inst="SELECT * FROM instructor";
                        $contI=mysqli_query($conn,$inst);
                        while ($ins=mysqli_fetch_array($contI)) {?>
                        <option value="<?php echo $ins["ID"]?>"><?php echo $ins["Nombre"]." ".$ins['Apellido']?></option><?php
                                      }?>
                      </select>
                    </div>
                    <br>
                    <label class="control-label col-sm-2" for="days">Día:</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="days" name="days" required>
                           <option value="">Seleccionar dia</option>
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            <option value="3">Miercoles</option>
                            <option value="4">Jueves</option>
                            <option value="5">Viernes</option>
                            <option value="6">Sabado</option>
                       </select>
                  </div>
                <br>
                 <label class="control-label col-sm-2" for="hour">Hora:</label>
                 <div class="col-sm-10">
                  <select class="form-control" id="hour" name="hour" required>
                    <option value="">Seleccionar hora</option>
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
                    <option value="">Seleccionar Ambiente</option>
                    <?php
                     while ($ambt=mysqli_fetch_assoc($consulA)) {
                      ?>
                      <option value="<?php echo$ambt['id_A']?>"><?php echo $ambt['Nombre_ambiente'] ?></option>
                      <?php
                      }
                      ?>
                      </select>
                    </div>
                    <br>
                    <div class="col-sm-10">
                      <label class="control-label" for="descripcion">Descripción: </label>
                      <input type="text" class="form-control" name="descrip">
                    </div> 
                  </div>
                </div>
                <div class="form-group">
                  <div class="modal-footer">
                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi-arrow-left"></i>Cancelar</button>
                      <button type="submit" class="btn btn-success">Crear</button>
                    </div>                 
                  </div>
                </div>
              </form>
          </div>   
        </div>
      </div>