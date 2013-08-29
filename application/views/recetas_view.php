<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="#">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Nueva receta</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-rec-nueva">
				<?php echo form_open('recetas/crear_receta'); ?>
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Datos del agricultor</h4></legend>
					<br>
						<select name="agricultor" id="agricultor">
							<option value="" disabled selected="selected">Seleccione a un agricultor...</option>
							<?php 
								foreach($agricultores as $agricultor){
									echo "<option value='".$agricultor->id."'>".$agricultor->id." - ".$agricultor->nombre." ".$agricultor->apellidos."</option>";
								}
							?>
						</select>

						<br>
						<select name="finca" id="finca" disabled="disabled">
							<option value="0" selected="selected" readonly="readonly">Seleccione una finca...</option>
						</select>

						<br>
						<select name="invernadero" id="invernadero" disabled="disabled" style="margin-left: -5px;">
							<option value="0" selected="selected" readonly="readonly">Seleccione un invernadero...</option>
						</select>

				</fieldset>
				<br><br>
				<fieldset>
					<legend><h4>Datos de los productos</h4></legend>
					<br>
						<!--<select name="producto">
							<option value="" disable selected="selected">Seleccione un producto...</option>
							<?php 
								foreach($productos as $producto){
									echo "<option value='".$producto->id."'>".$producto->id." - ".$producto->nombre."</option>";
								}
							?>
						</select>
						<input type="text" name="ccdosis" placeholder="cc de dosis">
						<br>-->


				
				<div id="contenedor">
				    <div class="added">
				        <!--<input type="text" name="mitexto[]" id="campo_1" placeholder="Texto 1"/>-->
				        <select name="producto">
							<option value="" disable selected="selected">Seleccione un producto...</option>
							<?php 
								foreach($productos as $producto){
									echo "<option value='".$producto->id."'>".$producto->id." - ".$producto->nombre."</option>";
								}
							?>
						</select>
						<input type="text" name="ccdosis" placeholder="cc de dosis"> <span class="form-remove-item"><i class="icon-remove" style="color:silver;"></i></span>
				    </div>

				</div>
				<a id="agregarCampo" class="btn btn-info" href="#"><i class="icon-plus"></i> Añadir otro producto</a>







				</fieldset>
			</div>
		</div>
	</div>



</div>

<div class="row-fluid">
	<div class="span12">
		<div class="span6 offset3 form-botones">
			<center>
			<a href="#" class="btn btn-success">Enviar</a>
			<a href="<?php echo base_url();?>index.php/tecnico" class="btn btn-danger">Cancelar</a>
		</center>
		</div>
	</div>
</div>
</form>

<script type="text/javascript">

	$(document).ready(function() {

    var MaxInputs       = 8; //Número Maximo de Campos
    var contenedor       = $("#contenedor"); //ID del contenedor
    var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

    //var x = número de campos existentes en el contenedor
    var x = $("#contenedor div").length + 1;
    var FieldCount = x-1; //para el seguimiento de los campos

    $(AddButton).click(function (e) {
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;
            //agregar campo
            $(contenedor).append('<div><select name="producto-'+ FieldCount +'" id="producto-'+ FieldCount +'"><option value="">Seleccione un producto...</option></select> <input type="text" name="ccdosis" placeholder="cc de dosis"> <a href="#" class="eliminar"><span class="form-remove-item"><i class="icon-remove"></i></span></a></div>');
            x++; //text box increment
        }
        var base_url = '<?php echo base_url();?>index.php/recetas/getProductosAjax';
        // Crear funcion de AJAX con los datos de los productos
        getProductos(base_url);



		option.text="Kiwi";
		s.add(option,null);
        return false;
    });

    $("body").on("click",".eliminar", function(e){ //click en eliminar campo
        if( x > 1 ) {
            $(this).parent('div').remove(); //eliminar el campo
            x--;
        }
        return false;
    });

    function getProductos(base_url)
	{
	    $.ajax({
	        url: base_url,
	        type: 'POST',
	        success: muestraProductos,
	        error: muestraError
	    });
	}

	function muestraProductos(productos){
		var num = $("#contenedor div").length + 1;
		var s=document.getElementById("producto-"+ num);
        var option=document.createElement("option");
        // Foreach con todos los option de la base de datos
	}
});

</script>

<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>