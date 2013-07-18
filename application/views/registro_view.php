<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php $this->load->helper("url"); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Inver-Control | Panel de administración - Registro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Cinzel:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" id="header"> 
                <div class="login-header">
                  <span class="logo-titulo"><span class="titulo"><i class="icon-desktop"></i> Inver-Control</span> | Panel de Administración </span>
                </div>
            </div>
        </div>
    </div>
    <div class="account-container">
        <div class="login-panel content clearfix">		
            <?php echo form_open('inspector/validar_registro', array('id'=>'registro-form')); ?>
                <center><img src="<?php echo base_url();?>img/user.png"><h1>Registro</h1></center>
                <br>
                <div class="ErrorLogin">
                    <?php
                    if(isset($error)){
                     ?>
                        <div class="alert alert-error fade in">
                            <a class="close" data-dismiss="alert" href="#">&times;</a>
                            <strong>Error!</strong> <?php echo $error?>
                        </div>
                     <?php
                    }
                    ?>
                </div>
                <div class="form-registro well well-small">
                    
                    <input type="text" id="nombre" name="nombre" placeholder="nombre..." required="required" /><br>
                    <input type="text" id="apellidos" name="apellidos" placeholder="apellidos..." required="required" /><br>
                    <input type="tel" id="telefono" name="telefono" placeholder="teléfono..." required="required" /><br>
                    <input type="email" id="email" name="email" placeholder="email..." required="required" /><br>
                    <input type="password" id="password" name="password" placeholder="contraseña..." required="required" /><br>
                    <select name="cooperativa" id="cooperativa" required="required">
                        <option value="" selected="selected">Selecciona una cooperativa...</option>
                        <?php 
                            foreach($cooperativas as $coop){
                                echo "<option value='".$coop->id."'>".$coop->nombre."</option>";
                            }
                        ?>
                    </select><br>
                    <small>* Todos los campos son obligatorios.</small>

                </div>
                <div class="login-actions">
                    <div>
                        <center>
                            <button type="submit" class="btn btn-warning btn-large btn-registro"><i class="icon-ok"></i> Registrarme</button>
                            <a href="<?php echo base_url();?>index.php/inspector" class="btn btn-danger btn-large btn-registro"><i class="icon-remove"></i> Volver</a>
                        </center>                 
                    </div>
                </div>	

            </form>

        </div>	
    </div>
        <footer class="navbar navbar-inverse navbar-fixed-bottom" id="pie">
            <p>Inver-Control © Copyright 2013 - Todos los derechos reservados.</p>
        </footer>
    <script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>