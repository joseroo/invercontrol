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
			<div class="span8 offset2">
				<fieldset>
					<legend><center><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Listado de recetas</h4></center></legend>
					<?php 
						foreach($recetas->result() as $receta){
							echo "<div class='receta'><span class='id'># ".$receta->id."</span> - <strong>".$receta->nombre."</strong><span class='badge badge-success pull-right'>".$receta->fecha."</span><hr class='divider-receta'><br>";
							echo "<strong>Técnico</strong>: ".$receta->id_tecnico."<br>";
							echo "<strong>Agricultor</strong>: ".$receta->id_agricultor."<br>";
							echo "<strong>Finca</strong>: ".$receta->id_finca." - <strong>Invernadero</strong>: ".$receta->id_invernadero;
							echo $receta->realizada;
							echo "<br><br>";
							?>
							<div class="accordion" id="accordion-<?php echo $receta->id;?>">
								<div class="accordion-group">
									<div class="accordion-heading">
									  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-<?php echo $receta->id;?>" href="#collapse-<?php echo $receta->id;?>">
									    Productos
									  </a>
									</div>
									<div id="collapse-<?php echo $receta->id;?>" class="accordion-body collapse">
									  <div class="accordion-inner">
									    <?php 
									    	echo "<table class='table'>";
											echo "<tr><th>Producto</th><th>Dósis (cc)</th></tr>";
									    	foreach($receta->lista_productos as $producto){
									    		
												echo "<tr>";
												echo "<td>".$producto['id_producto']."</td>";
												echo "<td>".$producto['cc_dosis']."</td>";
												echo "</tr>";
											}
											echo "</table><br>";
									    ?>
									  </div>
									</div>
								</div>
							</div>
							<?php
							echo "</div><br><br><br>";
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