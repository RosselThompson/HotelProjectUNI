
<?php include("header.php");
 ?>
<!---menu -->
<ul class="nav nav-list">

	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-list"></i>
			<span class="menu-text"> Recepción </span>

			<b class="arrow fa fa-angle-down"></b>
		</a>

		<b class="arrow"></b>

		<ul class="submenu">
			<li class="">
				<a href="reservacion.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestionar Reservaciones
				</a>

				<b class="arrow"></b>
			</li>

			<li class="">
			<a href="facturar.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Facturar
				</a>

				<b class="arrow"></b>
			</li>
		</ul>
	</li>

	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-key"></i>
			<span class="menu-text"> Habitaciones </span>

			<b class="arrow fa fa-angle-down"></b>
		</a>

		<b class="arrow"></b>

		<ul class="submenu">
			<li class="">
				<a href="habitaciones.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestionar Habitaciones
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="salones.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestionar Salones
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="categorias.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestionar Categorias
				</a>

				<b class="arrow"></b>
			</li>

		</ul>
	</li>

	<li class="">
		<a href="clientes.php">
			<i class="menu-icon fa fa-users"></i>
			<span class="menu-text"> Clientes </span>
		</a>

		<b class="arrow"></b>
	</li>

	<li class="active">
			<a href="eventos.php">
			<i class="menu-icon fa fa-calendar"></i>

			<span class="menu-text">
				Eventos
			</span>
		</a>

		<b class="arrow"></b>
	</li>


	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-desktop"></i>
			<span class="menu-text">
			Administración
			</span>

			<b class="arrow fa fa-angle-down"></b>
		</a>

		<b class="arrow"></b>

		<ul class="submenu">

			<li class="">
				<a href="empleados.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestion de Empleados
				</a>

				<b class="arrow"></b>
			</li>

			<li class="">
				<a href="usuarios.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestion de Usuarios
				</a>

				<b class="arrow"></b>
			</li>

			<li class="">
				<a href="sucursales.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestion de Sucursales
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="cargos.php">
					<i class="menu-icon fa fa-caret-right"></i>
					Gestionar Cargos
				</a>

				<b class="arrow"></b>
			</li>
		</ul>
	</li>

	<li class="">
		<a href="home.php">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Panel </span>
		</a>

		<b class="arrow"></b>
	</li>
</ul>
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">


					<div class="page-content">
						<div class="page-header">
							<h1>
								Eventos
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Gestión de eventos
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

                    <div class="row">
    									<div class="col-xs-12">
    										<h3 class="header smaller lighter blue">Listado de eventos</h3>

    										<div class="clearfix">
													<div class="pull-left">
														<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarEvento"><i class="ace-icon fa glyphicon-plus"></i>Agregar</button>
													</div>
    											<div class="pull-right tableTools-container"></div>
    										</div>


<!-- Agregar Evento Modal -->
<div class="modal fade" id="agregarEvento" tabindex="-1" role="dialog" aria-labelledby="agregarEventoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar Evento</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="row">
					<div class="col-md-9">
					<div class="form-group">
						<label>NID del cliente</label>
						<div>
							<input type="text" placeholder="Identificacion"/>
						</div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Seleccione el dia y hora</label>
              <div class="input-group">
                <input id="date-timepicker1" type="text" class="form-control" />
                <span class="input-group-addon">
                  <i class="fa fa-clock-o bigger-110"></i>
                </span>
              </div>
						</div>

					</div>

				<div class="col-md-6">

          <div class="form-group">
            <label>Seleccione el Salón</label>
            <div>
              <select class="chosen-select" data-placeholder="Seleccione el pais">
                <option>--Seleccione el salón--</option>
                <option value="EU">EE.UU</option>
                <option value="BE">Belice</option>
                <option value="CR">Costa Rica</option>
                <option value="CU">Cuba</option>
                <option value="SA">El Salvador</option>
                <option value="GU">Guatemala</option>
                <option value="HO">Honduras</option>
                <option value="ME">Mexico</option>
                <option value="NI">Nicaragua</option>
                <option value="PA">Panama</option>
              </select>
            </div>
          </div>

				</div>
			</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Editar Evento Modal -->
<!-- Agregar Evento Modal -->
<div class="modal fade" id="editarEvento" tabindex="-1" role="dialog" aria-labelledby="editarEventoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="editarEventoLabel">Editar Evento</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="row">
					<div class="col-md-9">
					<div class="form-group">
						<label>NID del cliente</label>
						<div>
							<input type="text" placeholder="Identificacion" value="001-250896-0011P"/>
						</div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Seleccione el dia y hora</label>
              <div class="input-group">
                <input id="date-timepicker1" type="text" class="form-control" value="11/02/17 10:00 AM"/>
                <span class="input-group-addon">
                  <i class="fa fa-clock-o bigger-110"></i>
                </span>
              </div>
						</div>

					</div>

				<div class="col-md-6">

          <div class="form-group">
            <label>Seleccione el Salón</label>
            <div>
              <select class="chosen-select" data-placeholder="Seleccione el pais">
                <option>--Seleccione el salón--</option>
                <option value="EU" selected>Madroño</option>
                <option value="BE">Belice</option>
                <option value="CR">Costa Rica</option>
                <option value="CU">Cuba</option>
                <option value="SA">El Salvador</option>
                <option value="GU">Guatemala</option>
                <option value="HO">Honduras</option>
                <option value="ME">Mexico</option>
                <option value="NI">Nicaragua</option>
                <option value="PA">Panama</option>
              </select>
            </div>
          </div>

				</div>
			</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

    										<!-- div.dataTables_borderWrap -->
    										<div>
    											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    												<thead>
    													<tr>
    														<th>Cliente</th>
                                <th>Salon</th>
    														<th>Fecha</th>
    														<th>Hora</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                                <th></th>
    													</tr>
    												</thead>

    												<tbody>
    													<tr>
    														<td>Rossel Alexander Thompson Morales</td>
                                <td>Salon Madroño</td>
                                <td>29/08/17</td>
    														<td>7:00 pm</td>
                                <td>Boda Mendoza y Aguilar</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-warning">Pendiente</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarEvento"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="eventos.php" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>Rossel Alexander Thompson Morales</td>
                                <td>Salon Madroño</td>
                                <td>29/08/17</td>
    														<td>7:00 pm</td>
                                <td>Boda Mendoza y Aguilar</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Realizado</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarEvento"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="eventos.php" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>Rossel Alexander Thompson Morales</td>
                                <td>Salon Madroño</td>
                                <td>29/08/17</td>
    														<td>7:00 pm</td>
                                <td>Boda Mendoza y Aguilar</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-warning">Pendiente</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarEvento"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="eventos.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>Rossel Alexander Thompson Morales</td>
                                <td>Salon Madroño</td>
                                <td>29/08/17</td>
    														<td>7:00 pm</td>
                                <td>Boda Mendoza y Aguilar</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-danger">Cancelado</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarEvento"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="eventos.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>Rossel Alexander Thompson Morales</td>
                                <td>Salon Madroño</td>
                                <td>29/08/17</td>
    														<td>7:00 pm</td>
                                <td>Boda Mendoza y Aguilar</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Realizado</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarEvento"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="eventos.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
    												</tbody>
    											</table>
    										</div>
    									</div>
    								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php include('footer.php') ?>
