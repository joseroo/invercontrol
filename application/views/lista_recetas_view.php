<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Lista de recetas</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Listado de recetas</h4></legend>
					
					<?php 
						foreach($recetas->result() as $receta){
							echo $receta->id;
							echo "-";
							echo $receta->id_tecnico;
							echo "-";
							echo $receta->id_agricultor;
							echo "-";
							echo $receta->id_finca;
							echo "-";
							echo $receta->id_invernadero;
							echo "-";
							echo $receta->nombre;
							echo "-";
							echo $receta->fecha;
							echo "-";
							echo $receta->realizada;
							echo "<br><br>";
							foreach($receta->lista_productos as $producto){
								echo $producto['id_producto'];
								echo "-";
								echo $producto['cc_dosis'];
								echo "<br>";
							}
							echo "<br><br><br>";
						}

					?>



					<!--<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Materia Activa</th>
								<th>Cantidad</th>
								<th>Medida</th>
								<th>Precio</th>
								<th>Plazo de seguridad</th>
								<th style="text-align:center;">Estado</th>
								<th style="text-align:center;">Acciones</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							/*foreach($productos as $producto){
								echo "<tr class='agitable'>";
								echo "<td class='id'># ".$producto->id."</td>";
								echo "<td>".$producto->nombre."</td>";
								echo "<td>".$producto->materia_activa."</td>";
								echo "<td style='text-align:center;'>".$producto->cantidad."</td>";
								echo "<td style='text-align:center;'>".$producto->unidad_medida."</td>";
								echo "<td style='text-align:center;'>".$producto->precio."</td>";
								echo "<td>".$producto->plazo_seguridad."</td>";
								if($producto->estado == "1") echo "<td style='text-align:center;'><span class='label label-success'>Activo</span></td>";
								else echo "<td style='text-align:center;'><span class='label label-important'>Inactivo</span></td>";
								echo "<td style='font-size:20px; text-align:center;'>";
								echo "<a href='".base_url()."index.php/productos/modificar_producto/".$producto->id."' class='btn btn-warning acciones' style='margin-right:5px;' data-toggle='tooltip' data-placement='top' title='Modificar producto'><i class='icon-edit'></i></a>";
								if($producto->estado == "1") echo "<a href='".base_url()."index.php/productos/borrar_producto/".$producto->id."' class='btn btn-danger acciones' data-toggle='tooltip' data-placement='top' title='Borrar (Se pasará el producto a Inactivo)'><i class='icon-trash'></i></a></td>";
								else echo "<a href='".base_url()."index.php/productos/restaurar_producto/".$producto->id."' class='btn btn-info acciones' data-toggle='tooltip' data-placement='top' title='Activar producto'><i class='icon-undo'></i></a></td>";
								echo "</tr>";
							}
						*/ ?>
						</tbody>
					</table>-->
				</fieldset>
			</div>
		</div>
	</div>



</div>
<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>