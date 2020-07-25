<?php  include('header.php');?>
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
        Sucursales
        <small>
          <i class="ace-icon fa fa-angle-double-right"></i>
          Gestion de Sucursales
        </small>
      </h1>
    </div><!-- /.page-header -->
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

            <div class="row">
              <div class="col-xs-12">
                <h3 class="header smaller lighter blue">Gestión de sucursales</h3>

                <div class="clearfix">
                  <div class="pull-left">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarSucursal"><i class="ace-icon fa glyphicon-plus"></i>Agregar</button>
                  </div>
                  <div class="pull-right tableTools-container"></div>
                </div>
                <div >

									<div class="modal fade" id="agregarSucursal" tabindex="-1" role="dialog" aria-labelledby="agregarUsuarioLabel" aria-hidden="true">
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

															<form class="" action="../controller/agregarSucursal.php" method="post">
																<div class="form-group">
																	<label>Nombre de Sucursal</label>
																	<div>
																		<input name="nombre" type="text" placeholder="Nombre"/>
																	</div>
																</div>

														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label>Teléfono</label>
																<div>
																	<input name="tel" type="text" placeholder="Teléfono"/>
																</div>
															</div>

														</div>

													<div class="col-md-6">
														<div class="form-group">
															<label>Dirección</label>
															<div>
																<input name="dir" type="text" placeholder="Dirección"/>
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


                  <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php include('../controller/mostrarSucursales.php'); ?>
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
<?php  include('footer.php');?>
