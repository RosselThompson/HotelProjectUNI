
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
								Usuarios
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Usuarios del sistema
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

                    <div class="row">
    									<div class="col-xs-12">
    										<h3 class="header smaller lighter blue">Gestión de usuarios</h3>

    										<div class="clearfix">
													<div class="pull-left">
														<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarUsuario"><i class="ace-icon fa glyphicon-plus"></i>Agregar</button>
													</div>
    											<div class="pull-right tableTools-container"></div>
    										</div>


<!-- Agregar Cliente Modal -->
<div class="modal fade" id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="agregarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Agregar Usuario</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="row">
					<div class="col-md-9">

						<form class="" action="../controller/agregarUsuario.php" method="post">;

					<div class="form-group">
						<label>NID del Empleado</label>
						<div>
							<input name="NID" type="text" placeholder="Identificacion"/>
						</div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Nombre de Usuario</label>
							<div>
								<input name="nombre" type="text" placeholder="Nombre completo"/>
							</div>
						</div>


						<div class="form-group">
							<label>Permiso</label>
							<div>
								<select name="permiso" class="chosen-select" data-placeholder="Seleccione el permiso">
									<option value="1" selected>Admin</option>
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
						<input name="pass" type="password" placeholder="contraseña"/>
					</div>
				</div>
        <div class="form-group">
					<label>Confirmar Contraseña</label>
					<div>
						<input name="passc" type="password" placeholder="confirmar ontraseña"/>
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


    										<!-- div.dataTables_borderWrap -->
                        <div ng-app="usuarioApp"ng-controller="controlador_usuario">
                          <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>User</th>
                                <th>Password</th>
                                <th>Permiso</th>
                                <th>Estado</th>
                                <th></th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php include('../controller/mostrarUsuario.php'); ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
    									</div>
    								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php  include('footer.php') ?>
