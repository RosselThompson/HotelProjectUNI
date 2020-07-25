<?php
include('conexion.php');
$con= conexion();
$consulta= "SELECT * FROM Sucursal";
$res= $con->query($consulta);
while ($row= $res->fetch_assoc()) {
  if ($row['estado']=='activo') {
    echo '
    <div class="modal fade" id="editar'.$row['nombre'].'" tabindex="-1" role="dialog" aria-labelledby="agregarUsuarioLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Agregar Sucursal</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-9">
                <form class="" action="../controller/editarSucursal.php" method="post">;
                  <div class="form-group">
                    <label>Nombre de Sucursal</label>
                    <div>
                      <input name="nombre" type="text" placeholder="Nombre" value="'.$row['nombre'].'" readonly/>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Teléfono</label>
                  <div>
                    <input name="tel" type="text" placeholder="Teléfono" value="'.$row['telefono'].'"/>
                  </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Dirección</label>
                <div>
                  <input name="dir" type="text" placeholder="Dirección" value="'.$row['direccion'].'"/>
                </div>
              </div>
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
    <td>'.$row['nombre'].'</td>
    <td>'.$row['direccion'].'</td>
    <td>'.$row['telefono'].'</td>
    <td class="hidden-480">
      <span class="label label-sm label-success">'.$row['estado'].'</span>
    </td>
    <td>
      <div class="hidden-sm hidden-xs action-buttons">

        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editar'.$row['nombre'].'"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
        <button type="button" class="btn btn-xs btn-danger"> <a href="../controller/eliminarSucursal.php?u='.$row['nombre'].'" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
      </div>

    </td>
    </tr>
    ';
  }
  else {
    echo '
    <div class="modal fade" id="editar'.$row['nombre'].'" tabindex="-1" role="dialog" aria-labelledby="agregarUsuarioLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Agregar Sucursal</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-9">
                <form class="" action="../controller/editarSucursal.php" method="post">;
                  <div class="form-group">
                    <label>Nombre de Sucursal</label>
                    <div>
                      <input name="nombre" type="text" placeholder="Nombre" value="'.$row['nombre'].'" readonly/>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Teléfono</label>
                  <div>
                    <input name="tel" type="text" placeholder="Teléfono" value="'.$row['telefono'].'"/>
                  </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Dirección</label>
                <div>
                  <input name="dir" type="text" placeholder="Dirección" value="'.$row['direccion'].'"/>
                </div>
              </div>
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
    <td>'.$row['nombre'].'</td>
    <td>'.$row['direccion'].'</td>
    <td>'.$row['telefono'].'</td>
    <td class="hidden-480">
      <span class="label label-sm label-danger">'.$row['estado'].'</span>
    </td>
    <td>
      <div class="hidden-sm hidden-xs action-buttons">

        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editar'.$row['nombre'].'"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
        <button type="button" class="btn btn-xs btn-primary"> <a href="../controller/activarSucursal.php?u='.$row['nombre'].'" style="color:#fff"> <i class="ace-icon fa fa-bolt bigger-130"></i></a></button>
      </div>

    </td>
    </tr>
    ';
  }

}
 ?>
