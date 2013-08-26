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
					<legend><h4>Datos del producto</h4></legend>

						<?php
							if(isset($error)){
								echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button>Por favor, rellena el campo <strong>".$error."</strong>.</div>";
							}
						?>
						<input type="hidden" name="idTecnico" value="<?php echo $_SESSION['id'];?>" /><br>
						<input type="text" name="nombre" placeholder="nombre del producto..." required="required"/><br>
						<textarea name="materia_activa" placeholder="materia activa..." required="required"></textarea><br>
						<select name="unidad_medida" required="required">
							<option value="" selected="selected">Unidad de medida...</option>
							<option value="ml">Mili-litros (ml)</option>
							<option value="g">Gramos (g)</option>
						</select><br>
						<input type="text" name="cantidad" placeholder="cantidad..." required="required" /><br>
						<input type="text" name="precio" placeholder="precio..." required="required" /><br>
						<textarea name="plazo_seguridad" placeholder="plazo de seguridad..." required="required"></textarea>
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