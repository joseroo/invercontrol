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
				<li><a href="<?php echo base_url();?>index.php/tecnico/buscar/1">Nombre del agricultor</a></li>
				<li><a href="<?php echo base_url();?>index.php/tecnico/buscar/2">Número de agricultor</a></li>
				<li><a href="<?php echo base_url();?>index.php/tecnico/buscar/3">Nombre de producto</a></li>
				<li><a href="<?php echo base_url();?>index.php/tecnico/buscar/4">Fecha de dósis</a></li>
				<li><a href="<?php echo base_url();?>index.php/tecnico/buscar/5">Nombre de finca</a></li>
				<li><a href="<?php echo base_url();?>index.php/tecnico/buscar/6">Nombre de invernadero</a></li>
			</ul>
		</div>
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
						    <a href="<?php echo base_url();?>index.php/recetas/lista">+ Ver lista de recetas</a><br>
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
						    <a href="<?php echo base_url();?>index.php/productos/nuevo_producto">+ Introducir producto</a><br>
						    <a href="<?php echo base_url();?>index.php/productos/lista">+ Ver lista de productos</a>
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
						  	<a href="<?php echo base_url();?>index.php/agricultores/nuevo_agricultor">+ Agregar un agricultor</a><br>
						    <a href="<?php echo base_url();?>index.php/agricultores/lista">+ Ver lista de agricultores</a>
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