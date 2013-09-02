<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

	<ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
		<li class="active">Buscar</li>
	</ul>

<div class="well" style="padding-top: 40px;">
	

	<!-- DIV MENU -->
	<div class="row-fluid">
		<div class="span12">
			<div class="span6 offset3 form-prod-nuevo">
				<fieldset>
					<legend><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> <?php echo $opcion; ?></h4></legend>
					
					<?php 
						$attributes = array('id' => 'formBuscador');
						echo form_open('tecnico/buscador', $attributes); 
					?>
					<input type="hidden" name="op" value="<?php echo $opcion_var;?>">
					<input type="text" name="campo" class="buscador"><br>
					<a href="javascript:void();" class="btn btn-info enviar"><i class="icon-search"></i> Buscar</a>
				</fieldset>
			</div>
		</div>
	</div>



</div>
<script>
	$('.acciones').tooltip()

	$(document).ready(function() {
	    $('.enviar').click(function(event) {
	        document.getElementById("formBuscador").submit();
	    });
    });
</script>
<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>