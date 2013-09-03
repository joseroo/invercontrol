<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Nueva receta</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-rec-nueva">
				<?php echo form_open('recetas/crear_receta'); ?>
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Datos de la receta</h4></legend>
					<label for="nombre_receta">Nombre de la receta</label><input type="text" name="nombre_receta" id="nombre_receta" placeholder="Nombre de la receta...">
					<br>
					<label for="fecha">Fecha</label><input type="text" name="fecha" id="fecha">

				</fieldset>
				<br><br>
				<fieldset>
					<legend><h4>Datos del agricultor</h4></legend>
						<label for="agricultor">Agricultor</label>
						<select name="agricultor" id="agricultor">
							<option value="" disabled selected="selected">Seleccione a un agricultor...</option>
							<?php 
								foreach($agricultores as $agricultor){
									echo "<option value='".$agricultor->id."'>".$agricultor->id." - ".$agricultor->nombre." ".$agricultor->apellidos."</option>";
								}
							?>
						</select>

						<br>
						<div id="div-finca">
							<label for="finca">Finca</label>
							<select name="finca" id="finca"></select>
						</div>
						<br>
						<div id="div-invernadero">
							<label for="invernadero">Invernadero</label>
							<select name="invernadero" id="invernadero" style="margin-left: -5px;"></select>
						</div>
				</fieldset>
				<br><br>
				<fieldset>
					<legend><h4>Productos para la receta</h4></legend>
				        <select name="producto" id="producto">
							<option value="" disable selected="selected">Seleccione un producto...</option>
							<?php 
								foreach($productos as $producto){
									echo "<option value='".$producto->id."' data-medida='".$producto->unidad_medida."' data-nombre='".$producto->nombre."' data-id='".$producto->id."'>".$producto->id." - ".$producto->nombre." (".$producto->unidad_medida.")</option>";
								}
							?>
						</select>
						<input type="text" name="ccdosisform" placeholder="cantidad. Ej (250.30)" id="ccdosisform"> <a id="agregarCampo" class="btn btn-info agregar-producto" href="javascript:void();"><i class="icon-plus"></i> Añadir</a>
						<br><br>
						Productos:<br><br>
						<div class="span8 offset2 lista-productos"></div>	
				</fieldset>
				<span class="mostrar"></span>
			</div>
		</div>
	</div>



</div>

<div class="row-fluid">
	<div class="span12">
		<div class="span6 offset3 form-botones">
			<center>
			<input type="submit" class="btn btn-success">
			<a href="<?php echo base_url();?>index.php/tecnico" class="btn btn-danger">Cancelar</a>
		</center>
		</div>
	</div>
</div>
</form>

<script>
	$(document).ready(function() {
		var arrayProductos = [];
		var i = 0;
        $('#agregarCampo').click(function(event) {
        	i++;
            $('.lista-productos').append("<span class='producto-"+i+"'><i class='icon-ok-circle'></i> #"+$('#producto option:selected').attr('data-id')+" - "+$('#producto option:selected').attr('data-nombre')+" / "+$('#ccdosisform').val()+" ("+$('#producto option:selected').attr('data-medida')+")"+" <a href='javascript:void()' class='acciones' id='borrar-producto' data-toggle='tooltip' data-placement='top' title='Borrar producto'><i class='icon-remove'></i></a></span><br>");
            $('.lista-productos').append("<input type='hidden' name='idProducto[]' value='"+$('#producto').val()+"'>");
            $('.lista-productos').append("<input type='hidden' name='ccDosis[]' value='"+$('#ccdosisform').val()+"'>");
        });

        $('#agricultor').on("change", function(){
        	var base_url = "<?php echo base_url();?>index.php/agricultores/fincas/";
        	var id = $(this).val();
        	$.ajax({
		        url: base_url + id,
		        type: 'POST',
		        success: muestraFincas,
		        error: muestraError
		    });
        });
    });

	function muestraFincas(fincas) {
	    
	}
</script>

<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>