<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Modificar producto</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<?php echo form_open('productos/modificarProducto'); ?>
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/productos/ver_productos" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Datos del producto</h4></legend>

						<input type="hidden" name="idTecnico" value="<?php echo $_SESSION['id'];?>" />
						<input type="hidden" name="id" value="<?php echo $producto[0]->id;?>">

						<input type="text" name="nombre" placeholder="nombre del producto..." required="required" value="<?php echo $producto[0]->nombre;?>" /><br>
						<textarea name="materia_activa" placeholder="materia activa..." required="required"><?php echo $producto[0]->materia_activa;?></textarea><br>
						<select name="unidad_medida" required="required">
							<?php 
								if($producto[0]->unidad_medida == 'ml') echo "<option value='ml' selected>Mili-litros (ml)</option>";
								else echo "<option value='ml'>Mili-litros (ml)</option>";
								if($producto[0]->unidad_medida == 'g') echo "<option value='g' selected>Gramos (g)</option>";
								else echo "<option value='g'>Gramos (g)</option>";
							?>
						</select><br>
						<input type="text" name="cantidad" placeholder="cantidad..." required="required" value="<?php echo $producto[0]->cantidad;?>" /><br>
						<input type="text" name="precio" placeholder="precio..." required="required" value="<?php echo $producto[0]->precio;?>" /><br>
						<textarea name="plazo_seguridad" placeholder="plazo de seguridad..." required="required"><?php echo $producto[0]->plazo_seguridad;?></textarea><br>
						<select name="estado" required="required">
							<?php 
								if($producto[0]->estado == '1') echo "<option value='1' selected>Estado: Activo</option>";
								else echo "<option value='1'>Estado: Activo</option>";
								if($producto[0]->estado == '0') echo "<option value='0' selected>Estado: Inactivo</option>";
								else echo "<option value='0'>Estado: Inactivo</option>";
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
			<a href="<?php echo base_url();?>index.php/productos/ver_productos" class="btn btn-danger">Cancelar</a>
		</center>
		</div>
	</div>
</div>
</form>

<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>