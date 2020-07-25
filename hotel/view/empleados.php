<?php include('header.php'); ?>
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

	<li class="">
			<a href="eventos.php">
			<i class="menu-icon fa fa-calendar"></i>

			<span class="menu-text">
				Eventos
			</span>
		</a>

		<b class="arrow"></b>
	</li>


	<li class="active">
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
<!--menu -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">


					<div class="page-content">
						<div class="page-header">
							<h1>
								Empleados
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Gestion de Personal
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

                    <div class="row">
    									<div class="col-xs-12">
    										<h3 class="header smaller lighter blue">Listado de Empleados</h3>

    										<div class="clearfix">
													<div class="pull-left">
														<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarEmpleado"><i class="ace-icon fa glyphicon-plus"></i>Agregar</button>
													</div>
    											<div class="pull-right tableTools-container"></div>
    										</div>

												<div class="modal fade" id="agregarEmpleado" tabindex="-1" role="dialog" aria-labelledby="editarEmpleadoLabel" aria-hidden="true">
										      <div class="modal-dialog" role="document">
										        <div class="modal-content">
										          <div class="modal-header">
										            <h2 class="modal-title" id="exampleModalLabel">Agregar Empleado</h2>
										            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										              <span aria-hidden="true">&times;</span>
										            </button>
										          </div>
										          <div class="modal-body">
										    				<div class="row">
										              <div class="col-md-9">
										              </div>
										    					<div class="col-md-6">
										    						<form action="../controller/agregarEmpleado.php" method="post">
										    					<div class="form-group">
										    						<label>NID</label>
										    						<div>
										    							<input name="nid" type="text" placeholder="Identificacion" value="" />
										    						</div>
										    					</div>

										    						<div class="form-group">
										    							<label>Nombres</label>
										    							<div>
										    								<input name="nombres" type="text" placeholder="Nombre completo"value=""/>
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
										                  <input name="fechai" class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" value=""/>
										                  <span class="input-group-addon">
										                    <i class="fa fa-calendar bigger-110"></i>
										                  </span>
										                </div>


										              <div class="form-group">
										                <label>Teléfono</label>
										                <div>
										                  <input name="telefono" type="text" placeholder="Número de teléfono" value=""/>
										                </div>
										              </div>
										              <div class="form-group">
										                <label>Direccion</label>
										                <div>
										                  <input name="direccion" type="text" class="form-control" id="form-field-8" placeholder="Direccion de residencia" value=""/>
										                </div>
										              </div>
										              </div>
										    				<div class="col-md-6">

										    				<div class="form-group">
										    					<label>Apellidos</label>
										    					<div>
										    						<input name="apellidos"type="text" placeholder="Apellidos" value=""/>
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
										                <input name="correo" type="email" placeholder="correo electrónico" value=""/>
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
    										<!-- div.dataTables_borderWrap -->
    										<div>
    											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    												<thead>
    													<tr>
                                <th>NID</th>
                                <th>Sexo</th>
    														<th>Nombre</th>
    														<th>Apellido</th>
    														<th>Fecha de ingreso</th>
                                <th>Estado</th>
                                <th></th>
    													</tr>
    												</thead>

    												<tbody>
    												<?php include('../controller/mostrarEmpleados.php'); ?>
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

		<?php include('footer.php'); ?>
