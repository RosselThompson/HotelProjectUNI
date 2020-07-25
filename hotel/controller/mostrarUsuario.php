<?php
include('conexion.php');
$con = conexion();
$res = $con->query("SELECT users.idUsuario,Empleado.NID, Empleado.nombres,Empleado.apellidos,users.username,users.pass,Permiso.tipo,users.statu from users inner join Empleado on users.idEmpleado= Empleado.idEmpleado inner join Permiso on Permiso.idPermiso= users.idPermiso");
while ($row= $res->fetch_assoc()) {
  if ($row['statu']=='activo') {
    echo '
    <div class="modal fade" id="editar'.$row['username'].'" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Editar Usuario</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    				<div class="row">
    					<div class="col-md-9">
              <form class="" action="../controller/editarUsuario.php" method="post">;
    					<div class="form-group">
    						<label>NID del Empleado</label>
    						<div>
    							<input type="text" name="NID" placeholder="Identificacion" value="'.$row['NID'].'" readonly/>
    						</div>
    					</div>
    					</div>
    					<div class="col-md-6">
    						<div class="form-group">
    							<label>Nombre de Usuario</label>
    							<div>
    								<input type="text" name="nombre" value="'.$row['username'].'" placeholder="Username"/>
    							</div>
    						</div>


    						<div class="form-group">
    							<label>Permiso</label>
    							<div>
    								<select name="permiso" class="chosen-select" data-placeholder="Seleccione el permiso">
    									<option value="1" selected >Admin</option>
    									<option value="2">Recepcion</option>
                      <option value="3">Logistica</option>
    								</select>
    							</div>
    						</div>

    					</div>

    				<div class="col-md-6">
    				<div class="form-group">
    					<label>Contraseña</label>
    					<div>
    						<input type="password" name="pass" value="'.$row['pass'].'" placeholder="contraseña"/>
    					</div>
    				</div>
            <div class="form-group">
    					<label>Confirmar Contraseña</label>
    					<div>
    						<input name="passc" type="password" value="'.$row['pass'].'" placeholder="confirmar ontraseña"/>
    					</div>
    				</div>
            <input type="hidden" name="user" value="'.$row['idUsuario'].'" />
    				</div>
    			</div>
    			</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

      <tr>
      <td>'.$row['nombres'].'</td>
      <td>'.$row['apellidos'].'</td>
      <td>'.$row['username'].'</td>
      <td>
        <input type="password" name="" value="'.$row['pass'].'" disabled>
      </td>
      <td>'.$row['tipo'].'</td>
      <td class="hidden-480">
        <span class="label label-sm label-success">'.$row['statu'].'</span>
      </td>
      <td>
        <div class="hidden-sm hidden-xs action-buttons">

          <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editar'.$row['username'].'"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
          <button type="button" class="btn btn-xs btn-danger"> <a href="../controller/eliminarUsuario.php?u='.$row['username'].'" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
        </div>

      </td>
    </tr>';
  }
  else {
    echo '
    <div class="modal fade" id="editar'.$row['username'].'" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Editar Usuario</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-9">
              <div class="form-group">
              <form class="" action="../controller/editarUsuario.php" method="post">;
                <label>NID del Empleado</label>
                <div>
                  <input name="NID" type="text" placeholder="Identificacion" value="'.$row['NID'].'" readonly/>
                </div>
              </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nombre de Usuario</label>
                  <div>
                    <input name="nombre" type="text" value="'.$row['username'].'" placeholder="Username"/>
                  </div>
                </div>


                <div class="form-group">
                  <label>Permiso</label>
                  <div>
                    <select name="permiso" class="chosen-select" data-placeholder="Seleccione el permiso">
                      <option value="1" selected >Admin</option>
                      <option value="2">Recepcion</option>
                      <option value="3">Logistica</option>

                    </select>
                  </div>
                </div>

              </div>

            <div class="col-md-6">
            <div class="form-group">
              <label>Contraseña</label>
              <div>
                <input type="password" name="pass" value="'.$row['pass'].'" placeholder="contraseña"/>
              </div>
            </div>
            <div class="form-group">
              <label>Confirmar Contraseña</label>
              <div>
                <input name="passc" type="password" value="'.$row['pass'].'" placeholder="confirmar ontraseña"/>
              </div>
            </div>
            <input type="hidden" name="user" value="'.$row['idUsuario'].'" />
            </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

      <tr>
      <td>'.$row['nombres'].'</td>
      <td>'.$row['apellidos'].'</td>
      <td>'.$row['username'].'</td>
      <td>
        <input type="password" name="" value="'.$row['pass'].'" disabled>
      </td>
      <td>'.$row['tipo'].'</td>
      <td class="hidden-480">
        <span class="label label-sm label-danger">'.$row['statu'].'</span>
      </td>
      <td>
        <div class="hidden-sm hidden-xs action-buttons">

    <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editar'.$row['username'].'"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
          <button type="button" class="btn btn-xs btn-primary"> <a href="../controller/activarUsuario.php?u='.$row['username'].'" style="color:#fff"> <i class="ace-icon fa fa-bolt bigger-130"></i></a></button>
        </div>

      </td>
    </tr>';
  }
}

 ?>
