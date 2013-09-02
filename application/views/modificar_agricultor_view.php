<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li><a href="<?php echo base_url();?>index.php/agricultores/lista">Lista de agricultores</a> <span class="divider">/</span></li>
		<li class="active">Modificar agricultor</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<?php echo form_open('agricultores/modificarAgricultor'); ?>
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/agricultores/lista" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Datos del agricultor</h4></legend>
						<input type="hidden" name="id" value="<?php echo $agricultor[0]->id;?>">
						<input type="hidden" name="id_tecnico" value="<?php echo $agricultor[0]->id_tecnico;?>" required="required">

						<label for="num_agricultor">Nª Agricultor</label><input type="text" name="num_agricultor" id="num_agricultor" value="<?php echo $agricultor[0]->num_agricultor;?>" required="required"><br>
						<label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre" value="<?php echo $agricultor[0]->nombre;?>" required="required"><br>
						<label for="apellidos">Apellidos</label><input type="text" name="apellidos" id="apellidos" value="<?php echo $agricultor[0]->apellidos;?>" required="required"><br>
						<label for="telefono">Teléfono</label><input type="text" name="telefono" id="telefono" value="<?php echo $agricultor[0]->telefono;?>" required="required"><br>
						<label for="email">Email</label><input type="text" name="email" id="email" value="<?php echo $agricultor[0]->email;?>" required="required"><br>
						<label for="estado">Estado</label><select name="estado" id="estado" required="required">
						<?php 
							if($agricultor[0]->estado == '1') echo "<option value='1' selected>Estado: Activo</option>";
							else echo "<option value='1'>Estado: Activo</option>";
							if($agricultor[0]->estado == '0') echo "<option value='0' selected>Estado: Inactivo</option>";
							else echo "<option value='0'>Estado: Inactivo</option>";
						?>
						</select><br>
						<label for="cooperativa">Cooperativa</label><select name="cooperativa" id="cooperativa" required="required">
							<?php 
								foreach($cooperativas as $cooperativa){
									if($cooperativa->id == $agricultor[0]->id_cooperativa)
										echo "<option value='".$agricultor[0]->id_cooperativa."' selected>".$cooperativa->id." - ".$cooperativa->nombre."</option>";
									else
										echo "<option value='".$agricultor[0]->id_cooperativa."'>".$cooperativa->id." - ".$cooperativa->nombre."</option>";
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
			<a href="<?php echo base_url();?>index.php/agricultores/lista" class="btn btn-danger">Cancelar</a>
		</center>
		</div>
	</div>
</div>
</form>

<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>