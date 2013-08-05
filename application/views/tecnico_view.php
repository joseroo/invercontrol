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

				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						    Gestionar Recetas
						  </a>
						</div>
						<div id="collapseOne" class="accordion-body collapse">
						  <div class="accordion-inner">
						    <a href="<?php echo base_url();?>index.php/recetas/nueva">+ Crear receta</a><br>
						    <a href="#">+ Modificar receta</a><br>
						    <a href="#">+ Borrar receta</a>
						  </div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						    Gestionar Curas
						  </a>
						</div>
						<div id="collapseTwo" class="accordion-body collapse">
						  <div class="accordion-inner">
						    <a href="#">+ Crear cura</a><br>
						    <a href="#">+ Modificar cura</a><br>
						    <a href="#">+ Borrar cura</a>
						  </div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						    Gestionar Productos
						  </a>
						</div>
						<div id="collapseThree" class="accordion-body collapse">
						  <div class="accordion-inner">
						    <a href="#">+ Introducir producto</a><br>
						    <a href="#">+ Modificar producto</a><br>
						    <a href="#">+ Borrar producto</a>
						  </div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
						    Gestionar Agricultores
						  </a>
						</div>
						<div id="collapseFour" class="accordion-body collapse">
						  <div class="accordion-inner">
						    <a href="#">+ Dar de baja a un agricultor</a><br>
						  </div>
						</div>
					</div>
				</div>


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