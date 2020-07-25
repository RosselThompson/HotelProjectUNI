<?php
include('conexion.php');
$con = conexion();
$res = $con->query("SELECT * from Empleado");
while ($row= $res->fetch_assoc()) {
  if($row['estado']== 'activo'){
    echo '
    <div class="modal fade" id="editar'.$row['NID'].'" tabindex="-1" role="dialog" aria-labelledby="editarEmpleadoLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Editar Empleado</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    				<div class="row">
              <div class="col-md-9">
              </div>
    					<div class="col-md-6">
    						<form action="../controller/editarEmpleado.php" method="post">
    					<div class="form-group">
    						<label>NID</label>
    						<div>
    							<input name="nid" type="text" placeholder="Identificacion" value="'.$row['NID'].'" readonly/>
    						</div>
    					</div>

    						<div class="form-group">
    							<label>Nombres</label>
    							<div>
    								<input name="nombres" type="text" placeholder="Nombre completo"value="'.$row['nombres'].'"/>
    							</div>
    						</div>

    						<div class="form-group">
    							<label>Sexo</label>
    							<div>
    								<select name="sexo" class="chosen-select" data-placeholder="Género">
    									<option value="Masculino" selected>Masculino</option>
    									<option value="Femenino">Femenino</option>
    								</select>
    							</div>
    						</div>
                <label>Fecha de Ingreso</label>
                <div class="input-group">
                  <input name="fechai" class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value="'.$row['fechaingreso'].'"/>
                  <span class="input-group-addon">
                    <i class="fa fa-calendar bigger-110"></i>
                  </span>
                </div>


              <div class="form-group">
                <label>Teléfono</label>
                <div>
                  <input name="telefono" type="text" placeholder="Número de teléfono" value="'.$row['telefono'].'"/>
                </div>
              </div>
              <div class="form-group">
                <label>Direccion</label>
                <div>
                  <input name="direccion" type="text" class="form-control" id="form-field-8" placeholder="Direccion de residencia" value="'.$row['direccion'].'"/>
                </div>
              </div>
              </div>
    				<div class="col-md-6">

    				<div class="form-group">
    					<label>Apellidos</label>
    					<div>
    						<input name="apellidos"type="text" placeholder="Apellidos" value="'.$row['apellidos'].'"/>
    					</div>
    				</div>
            <div class="form-group">
              <label>Estado Civil</label>
              <div>
                <select name="estc" class="chosen-select" data-placeholder="Seleccione la opcion">
                  <option value="Soltero(a)" selected>Soltero(a)</option>
                  <option value="Casado(a)">Casado(a)</option>
                  <option value="Divorciado(a)">Divorciado(a)</option>
                  <option value="Acompañado(a)">Acompañado(a)</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <div>
                <input name="correo" type="email" placeholder="correo electrónico" value="'.$row['email'].'"/>
              </div>
            </div>
    				</div>
    			</div>
    			</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
    		</form>
        </div>
      </div>
    </div>

    <tr>
      <td>'.$row['NID'].'</td>
      <td>'.$row['sexo'].'</td>
      <td>'.$row['nombres'].'</td>
      <td>'.$row['apellidos'].'</td>
      <td>'.$row['fechaingreso'].'</td>
      <td class="hidden-480">
        <span class="label label-sm label-success">Activo</span>
      </td>
      <td>
        <div class="hidden-sm hidden-xs action-buttons">

          <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editar'.$row['NID'].'"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
          <button type="button" class="btn btn-xs btn-danger"> <a href="../controller/eliminarEmpleado.php?u='.$row['NID'].'" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
        </div>

      </td>
    </tr>
    ';
  }
    else {
      echo '
      <div class="modal fade" id="editar'.$row['NID'].'" tabindex="-1" role="dialog" aria-labelledby="editarEmpleadoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="exampleModalLabel">Editar Empleado</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-9">
                </div>
                <div class="col-md-6">
                  <form action="../controller/editarEmpleado.php" method="post">
                <div class="form-group">
                  <label>NID</label>
                  <div>
                    <input name="nid" type="text" placeholder="Identificacion" value="'.$row['NID'].'" readonly/>
                  </div>
                </div>

                  <div class="form-group">
                    <label>Nombres</label>
                    <div>
                      <input name="nombres" type="text" placeholder="Nombre completo"value="'.$row['nombres'].'"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Sexo</label>
                    <div>
                      <select name="sexo" class="chosen-select" data-placeholder="Género">
                        <option value="Masculino" selected>Masculino</option>
                        <option value="Femenino">Femenino</option>
                      </select>
                    </div>
                  </div>
                  <label>Fecha de Ingreso</label>
                  <div class="input-group">
                    <input name="fechai" class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value="'.$row['fechaingreso'].'"/>
                    <span class="input-group-addon">
                      <i class="fa fa-calendar bigger-110"></i>
                    </span>
                  </div>


                <div class="form-group">
                  <label>Teléfono</label>
                  <div>
                    <input name="telefono" type="text" placeholder="Número de teléfono" value="'.$row['telefono'].'"/>
                  </div>
                </div>
                <div class="form-group">
                  <label>Direccion</label>
                  <div>
                    <input name="direccion" type="text" class="form-control" id="form-field-8" placeholder="Direccion de residencia" value="'.$row['direccion'].'"/>
                  </div>
                </div>
                </div>
              <div class="col-md-6">

              <div class="form-group">
                <label>Apellidos</label>
                <div>
                  <input name="apellidos"type="text" placeholder="Apellidos" value="'.$row['apellidos'].'"/>
                </div>
              </div>
              <div class="form-group">
                <label>Estado Civil</label>
                <div>
                  <select name="estc" class="chosen-select" data-placeholder="Seleccione la opcion">
                    <option value="Soltero(a)" selected>Soltero(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Acompañado(a)">Acompañado(a)</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Email</label>
                <div>
                  <input name="correo" type="email" placeholder="correo electrónico" value="'.$row['email'].'"/>
                </div>
              </div>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
          </div>
        </div>
      </div>

      <tr>
        <td>'.$row['NID'].'</td>
        <td>'.$row['sexo'].'</td>
        <td>'.$row['nombres'].'</td>
        <td>'.$row['apellidos'].'</td>
        <td>'.$row['fechaingreso'].'</td>
        <td class="hidden-480">
          <span class="label label-sm label-danger">Inactivo</span>
        </td>
        <td>
          <div class="hidden-sm hidden-xs action-buttons">

            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editar'.$row['NID'].'"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
            <button type="button" class="btn btn-xs btn-primary"> <a href="../controller/activarEmpleado.php?u='.$row['NID'].'" style="color:#fff"> <i class="ace-icon fa fa-bolt bigger-130"></i></a></button>
          </div>

        </td>
      </tr>
      ';
    }

}

 ?>
