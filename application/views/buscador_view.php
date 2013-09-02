<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li><a href="<?php echo base_url();?>index.php/tecnico/buscar/<?php echo $op;?>">Buscar</a> <span class="divider">/</span></li>
		<li class="active">Resultado de la búsqueda</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/tecnico/buscar/<?php echo $op;?>" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Resultado de la búsqueda</h4></legend>
					<?php 

						if($op=='1'){
							if($busqueda->num_rows() > 0){
								echo "<table class='table'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>ID</th>";
											echo "<th style='text-align:center;'>Nº Agricultor</th>";
											echo "<th>Nombre</th>";
											echo "<th>Apellidos</th>";
											echo "<th>Teléfono</th>";
											echo "<th>Email</th>";
											echo "<th style='text-align:center;'>Estado</th>";
											echo "<th style='text-align:center;'>Cooperativa</th>";
											echo "<th style='text-align:center;'>Técnico</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									foreach($busqueda->result() as $datos){
										echo "<tr>";
											echo "<td class='id'># ".$datos->id."</td>";
											echo "<td style='text-align:center;'>".$datos->num_agricultor."</td>";
											echo "<td>".$datos->nombre."</td>";
											echo "<td>".$datos->apellidos."</td>";
											echo "<td>".$datos->telefono."</td>";
											echo "<td><a href='mailto:".$datos->email."'>".$datos->email."</a></td>";
											if($datos->estado == "1") echo "<td style='text-align:center;'><span class='label label-success'>Activo</span></td>";
											else echo "<td style='text-align:center;'><span class='label label-important'>Inactivo</span></td>";
											echo "<td style='text-align:center;'>".$datos->id_cooperativa."</td>";
											echo "<td style='text-align:center;'>".$datos->id_tecnico."</td>";
										echo "</tr>";
									}
									echo "</tbody>";
								echo "</table>";
							} else echo "No se han encontrado resultados. Inténtelo de nuevo.";
						}
						if($op=='2'){
							if($busqueda->num_rows() > 0){
								echo "<table class='table'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>ID</th>";
											echo "<th style='text-align:center;'>Nº Agricultor</th>";
											echo "<th>Nombre</th>";
											echo "<th>Apellidos</th>";
											echo "<th>Teléfono</th>";
											echo "<th>Email</th>";
											echo "<th style='text-align:center;'>Estado</th>";
											echo "<th style='text-align:center;'>Cooperativa</th>";
											echo "<th style='text-align:center;'>Técnico</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									foreach($busqueda->result() as $datos){
										echo "<tr>";
											echo "<td class='id'># ".$datos->id."</td>";
											echo "<td style='text-align:center;'>".$datos->num_agricultor."</td>";
											echo "<td>".$datos->nombre."</td>";
											echo "<td>".$datos->apellidos."</td>";
											echo "<td>".$datos->telefono."</td>";
											echo "<td><a href='mailto:".$datos->email."'>".$datos->email."</a></td>";
											if($datos->estado == "1") echo "<td style='text-align:center;'><span class='label label-success'>Activo</span></td>";
											else echo "<td style='text-align:center;'><span class='label label-important'>Inactivo</span></td>";
											echo "<td style='text-align:center;'>".$datos->id_cooperativa."</td>";
											echo "<td style='text-align:center;'>".$datos->id_tecnico."</td>";
										echo "</tr>";
									}
									echo "</tbody>";
								echo "</table>";
							} else echo "No se han encontrado resultados. Inténtelo de nuevo.";
						}

						if($op=='3'){
							if($busqueda->num_rows() > 0){
								echo "<table class='table'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>ID</th>";
											echo "<th>Nombre</th>";
											echo "<th>Materia Activa</th>";
											echo "<th>Plazo de seguridad</th>";
											echo "<th style='text-align:center;'>Cantidad</th>";
											echo "<th style='text-align:center;'>Medida</th>";
											echo "<th style='text-align:center;'>Precio</th>";
											echo "<th style='text-align:center;'>Estado</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									foreach($busqueda->result() as $datos){
										echo "<tr>";
											echo "<td class='id'>".$datos->id."</td>";
											echo "<td>".$datos->nombre."</td>";
											echo "<td>".$datos->materia_activa."</td>";
											echo "<td>".$datos->plazo_seguridad."</td>";
											echo "<td style='text-align:center;'>".$datos->cantidad."</td>";
											echo "<td style='text-align:center;'>".$datos->unidad_medida."</td>";
											echo "<td style='text-align:center;'>".$datos->precio."</td>";
											if($datos->estado == "1") echo "<td style='text-align:center;'><span class='label label-success'>Activo</span></td>";
											else echo "<td style='text-align:center;'><span class='label label-important'>Inactivo</span></td>";
										echo "</tr>";
									}
									echo "</tbody>";
								echo "</table>";
							} else echo "No se han encontrado resultados. Inténtelo de nuevo.";
						}
					?>
				</fieldset>
			</div>
		</div>
	</div>



</div>
<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>