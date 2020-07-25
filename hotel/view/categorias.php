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
									Gestion de Categorias
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

                    <div class="row">
    									<div class="col-xs-12">
    										<h3 class="header smaller lighter blue">Categorias de Habitación</h3>

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
        <h2 class="modal-title" id="exampleModalLabel">Agregar Categoria</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="row">
					<div class="col-md-9">
					<div class="form-group">
						<label>Nombre</label>
						<div>
							<input type="text" placeholder="Nombre de categoria"/>
						</div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Cantidad</label>
							<div>
								<input type="number" min="0" max="5" placeholder="Personas"/>
							</div>
						</div>


						<div class="form-group">
							<label>Camas</label>
							<div>
								<input type="number" min="0" max="5" placeholder="camas"/>
							</div>
						</div>

					</div>

				<div class="col-md-6">
				<div class="form-group">
					<label>Precio (U$)</label>
					<div>
						<input type="number" min="0" placeholder="Precio base"/>
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
                                <th>Nombre</th>
    														<th>Capacidad (Personas)</th>
    														<th>Camas</th>
    														<th>Precio base</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                                <th></th>
    													</tr>
    												</thead>

    												<tbody>
    													<tr>
    														<td>Simple</td>
    														<td>1</td>
    														<td>1 full</td>
                                <td>$ 50</td>
                                <td>Habitacion Simple para una persona, baño incluido, 1 cama unipersonal</td>
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
                                <td>Matrimonial</td>
                                <td>2</td>
                                <td>1 king</td>
                                <td>$ 60</td>
                                <td>Habitacion Matrimonial, baño incluido, 1 cama king</td>
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
                                <td>Doble</td>
                                <td>2</td>
                                <td>2 full</td>
                                <td>$ 65</td>
                                <td>Habitacion para dos persona, 2 camas unipersonal</td>
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
                                <td>Triple</td>
                                <td>3</td>
                                <td>3 full</td>
                                <td>$ 75</td>
                                <td>Habitacion triple, baño incluido, 3 camas unipersonal</td>
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
                                <td>Cuatro</td>
                                <td>4</td>
                                <td>4 full</td>
                                <td>$ 80</td>
                                <td>Habitacion para 4 personas, baño incluido, 4 camas unipersonal</td>
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
