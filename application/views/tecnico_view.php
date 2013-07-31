<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->





<!-- DIV BUSQUEDA -->
	<center>
		<div class="btn-group">
			<button class="btn"><i class="icon-search"></i> Búsqueda por:</button>
			<button class="btn dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Nombre del agricultor</a></li>
				<li><a href="#">Número de agricultor</a></li>
				<li><a href="#">Nombre de producto</a></li>
				<li><a href="#">Fecha de dósis</a></li>
				<li><a href="#">Nombre de finca</a></li>
				<li><a href="#">Nombre de invernadero</a></li>
			</ul>
		</div>
		<input type="text" name="texto-busqueda" id="texto-busqueda">
	</center><br><br>
	<div class="clearfix"></div>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="panel panel-info span4" id="menu-principal">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="icon-tasks"></i> Menú principal</h3>
				</div>
				<a href="#" class="enlaces-menu">Gestionar Recetas</a>
				<a href="#" class="enlaces-menu">Gestionar Curas</a>
				<a href="#" class="enlaces-menu">Gestionar Productos</a>
				<a href="#" class="enlaces-menu">Dar de baja Agricultores</a>
			</div>
			<div class="panel panel-success span4" id="ultimas-recetas">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="icon-file-text-alt"></i> Últimas recetas</h3>
				</div>
				<a href="#" class="enlaces-ultimas-recetas"><strong>#1</strong> - Receta para Finca 8 / Invernadero 3 - José Rodríguez <i class="icon-remove"></i></a>
				<a href="#" class="enlaces-ultimas-recetas"><strong>#234</strong> - Receta para Finca 1 / Invernadero 7 - Agricultor Apellido <i class="icon-ok"></i></a>
			</div>
			<div class="panel panel-danger span4" id="estadisticas">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="icon-bar-chart"></i> Estadísticas</h3>
				</div>
				<center><img src="<?php echo base_url();?>img/grafica.png"></center>
			</div>
		</div>
	</div>






</div>

    




<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>