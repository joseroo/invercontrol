<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="#">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Lista de productos</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<fieldset>
					<legend><h4>Listado de productos</h4></legend>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Materia Activa</th>
								<th>Cantidad</th>
								<th>Medida</th>
								<th>Precio</th>
								<th>Plazo de seguridad</th>
								<th>Estado</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($productos as $producto){
								echo "<tr>";
								echo "<td>".$producto->nombre."</td>";
								echo "<td>".$producto->materia_activa."</td>";
								echo "<td style='text-align:center;'>".$producto->cantidad."</td>";
								echo "<td style='text-align:center;'>".$producto->unidad_medida."</td>";
								echo "<td style='text-align:center;'>".$producto->precio."</td>";
								echo "<td>".$producto->plazo_seguridad."</td>";
								if($producto->estado == "1") echo "<td style='text-align:center;'><span class='label label-success'>Activo</span></td>";
								else echo "<td style='text-align:center;'><span class='label label-important'>Inactivo</span></td>";
								echo "<td style='font-size:20px;'><a href='#' class='btn btn-warning' style='margin-right:5px;'><i class='icon-edit'></i></a><a href='#' class='btn btn-danger'><i class='icon-trash'></i></a></td>";
								echo "</tr>";
							}
						?>
						</tbody>
					</table>
				</fieldset>
			</div>
		</div>
	</div>



</div>

<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>