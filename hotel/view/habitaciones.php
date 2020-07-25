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

	<li class="active">
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

	<li class="">
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
								Habitación
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Gestion de Habitaciones
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

                    <div class="row">
    									<div class="col-xs-12">
    										<h3 class="header smaller lighter blue">Habitaciones</h3>

    										<div class="clearfix">
													<div class="pull-left">
														<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarCliente"><i class="ace-icon fa glyphicon-plus"></i>Agregar</button>
													</div>
    											<div class="pull-right tableTools-container"></div>
    										</div>


<!-- Agregar Cliente Modal -->
<div class="modal fade" id="agregarCliente" tabindex="-1" role="dialog" aria-labelledby="agregarClienteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar Habitación</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="row">
					<div class="col-md-9">
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Categoria</label>
              <div>
                <select class="chosen-select" data-placeholder="Seleccione categoria">
                  <option value="SM" selected>Simple</option>
                  <option value="DB">Doble</option>
                  <option value="TR">Triple</option>
                  <option value="CR">Cuatro</option>
                </select>
              </div>
						</div>

					</div>

				<div class="col-md-6">
				<div class="form-group">
					<label>Sucursal</label>
            <div>
              <select class="chosen-select" data-placeholder="Seleccione categoria">
                <option value="SM" selected>Managua</option>
                <option value="DB">Matagalpa</option>
              </select>
          </div>
				</div>
				<div class="form-group">
					<label>Descripción</label>
					<div>
						<input type="text" placeholder="Descripcion"/>
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
                                <th>ID</th>
                                <th>Categoria</th>
    														<th>Sucursal</th>
    														<th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                                <th></th>
    													</tr>
    												</thead>

    												<tbody>
    													<tr>
    														<td>1</td>
                                <td>Simple</td>
    														<td>Managua</td>
                                <td>S1</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>2</td>
                                <td>Simple</td>
    														<td>Managua</td>
                                <td>S2</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>3</td>
                                <td>Simple</td>
    														<td>Managua</td>
                                <td>S3</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>
    														</td>
    													</tr>
                              <tr>
    														<td>4</td>
                                <td>Simple</td>
    														<td>Managua</td>
                                <td>S4</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>5</td>
                                <td>Doble</td>
    														<td>Managua</td>
                                <td>D1</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>6</td>
                                <td>Doble</td>
    														<td>Managua</td>
                                <td>D2</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>7</td>
                                <td>Doble</td>
    														<td>Managua</td>
                                <td>D3</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>8</td>
                                <td>Triple</td>
    														<td>Managua</td>
                                <td>T1</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
    															</div>

    														</td>
    													</tr>
                              <tr>
    														<td>9</td>
                                <td>Cuatro</td>
    														<td>Managua</td>
                                <td>C1</td>
                                <td>Habitación</td>
                                <td class="hidden-480">
      														<span class="label label-sm label-success">Activo</span>
      													</td>
                                <td>
    															<div class="hidden-sm hidden-xs action-buttons">

    																<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editarCliente"><i class="ace-icon fa fa-pencil bigger-130"></i></button>
																		<button type="button" class="btn btn-xs btn-danger"> <a href="clientes.html" style="color:#fff"> <i class="ace-icon fa fa-trash bigger-130"></i></a></button>
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
