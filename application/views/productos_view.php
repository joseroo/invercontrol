<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Nuevo producto</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<?php echo form_open('productos/crear_producto'); ?>
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Datos del producto</h4></legend>

						<?php
							if(isset($error)){
								echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button>Por favor, rellena el campo <strong>".$error."</strong>.</div>";
							}
						?>
						<input type="hidden" name="idTecnico" value="<?php echo $_SESSION['id'];?>" />
						<label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre" placeholder="nombre del producto..." required="required"/><br>
						<label for="materia_activa">Materia Activa</label><textarea name="materia_activa" id="materia_activa" placeholder="materia activa..." required="required"></textarea><br>
						<label for="unidad_medida">Unidad de medida</label><select name="unidad_medida" id="unidad_medida" required="required">
							<option value="" selected="selected">Unidad de medida...</option>
							<option value="ml">Mili-litros (ml)</option>
							<option value="g">Gramos (g)</option>
						</select><br>
						<label for="cantidad">Cantidad</label><input type="text" name="cantidad" id="cantidad" placeholder="cantidad..." required="required" /><br>
						<label for="precio">Precio</label><input type="text" name="precio" id="precio" placeholder="precio..." required="required" /><br>
						<label for="plazo_seguridad">Plazo de Seguridad</label><textarea name="plazo_seguridad" id="plazo_seguridad" placeholder="plazo de seguridad..." required="required"></textarea>
				</fieldset>
			</div>
		</div>
	</div>



</div>

<div class="row-fluid">
	<div class="span12">
		<div class="span6 offset3">
			<center>
			<input type="submit" class="btn btn-success" value="Enviar" />
			<a href="<?php echo base_url();?>index.php/tecnico" class="btn btn-danger">Cancelar</a>
		</center>
		</div>
	</div>
</div>
</form>

<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>