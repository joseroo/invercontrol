<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Agregar agricultor</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<?php echo form_open('agricultores/agregarAgricultor'); ?>
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Datos del agricultor</h4></legend>
						<input type="hidden" name="id_tecnico" value="<?php echo $_SESSION['id'];?>" required="required">

						<label for="num_agricultor">Nª Agricultor</label><input type="text" name="num_agricultor" id="num_agricultor" placeholder="número de agricultor..." required="required"><br>
						<label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre" placeholder="nombre..." required="required"><br>
						<label for="apellidos">Apellidos</label><input type="text" name="apellidos" id="apellidos" placeholder="apellidos..." required="required"><br>
						<label for="telefono">Teléfono</label><input type="text" name="telefono" id="telefono" placeholder="teléfono..." required="required"><br>
						<label for="email">Email</label><input type="text" name="email" id="email" placeholder="email" required="required"><br>
						<label for="cooperativa">Cooperativa</label><select name="cooperativa" id="cooperativa" required="required">
							<option value="">Seleccione una cooperativa...</option>
							<?php 
								foreach($cooperativas as $cooperativa){
									echo "<option value='".$cooperativa->id."'>".$cooperativa->id." - ".$cooperativa->nombre."</option>";
								}
							?>
						</select>
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