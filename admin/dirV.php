<!DOCTYPE html>
<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';
?>
<html lang="es">
<head>
	<title>Instituto CDK | Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar" class="cover" style="background-image: url(./assets/img/sideBarFont.jpg);">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Instituto CDK <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<p><center><i class="text-center zmdi zmdi-account zmdi-hc-5x"> </i> </center></p>
					<figcaption class="text-center text-titles">ADMINISTRADOR</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="index.php">
						<i class="zmdi zmdi-home"></i> Inicio
					</a>
				</li>
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-accounts-alt"></i> Plantel Educativo <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admV.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="dirV.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Directores</a>
						</li>
						<li>
							<a href="profV.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Profesores</a>
						</li>
						<li>
							<a href="estV.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiantes</a>
						</li>						
					</ul>
				</li>	
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">

		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Bienvenido (a) <small>Administrador (a)</small></h1>
			  </div>
				<p class="lead">Se podr añadir, modificar y eliminar a directores</p>
			<div class="card">
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Añadir</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="">
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellidos</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Direccion</label>
											  <textarea class="form-control"></textarea>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Email</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Celular</label>
											  <input class="form-control" type="text">
											</div>							
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Añadir</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellidos</th>
											<th class="text-center">Direccion</th>
											<th class="text-center">Email</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Reporte</th>
											<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Juan</td>
											<td>Calle</td>
											<td>Av. Busch N° 991</td>
											<td>carlos@gmail.com</td>
											<td>77327377</td>
											<td><a href="#!" class="btn btn-info btn-raised btn-xs"><i class="zmdi zmdi-assignment-o"></i></a></td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										
										</tr>
			<!--Para la conexion con las BD-->
									<!--</tbody>
										<div class="card-body p-0">
										    <table class="table table-striped">
										        <thead>
										        	<tr>
										        	<th style="width: 10px">ID</th>
										        	<th>Nombre</th>
										        	<th>Apellidos</th>
										        	<th>Direccion</th>
										        	<th>Correo</th>
										        	<th>Telefeno</th>
										        	</tr>
										        </thead>
										  		<tbody>
										  		<?php 
										  		    $director=  ejecutarSQL::consultar("select * from administrador");
										  		    while($admin=mysqli_fetch_array($director)){
										  		        echo '            
										  		        <tr>
										  		        <td>'.$admin['ID_admin'].'</td>
										  		        <td>'.$admin['nombre'].'</td>
										  		        <td>'.$admin['correo'].'</td>
										  		        </tr>'; }
									            ?>
									            </tbody>
						                    <td><a href="#!" class="btn btn-info btn-raised btn-xs"><i class="zmdi zmdi-assignment-o"></i></a></td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>-->
											</table>
										</div>
								</table>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>		

		</div>		
	</section>

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>