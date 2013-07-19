<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php $this->load->helper("url"); ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Inver-Control | Panel de administración - Login</title>
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
            <?php echo form_open('inspector/validar_login', array('id'=>'login-form')); ?>
                <center><img src="<?php echo base_url();?>img/candado.png"><h1>Iniciar sesión</h1></center>
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
                <div class="ErrorLogin">
                    <?php
                    if(isset($exito)){
                     ?>
                        <div class="alert alert-success fade in">
                            <a class="close" data-dismiss="alert" href="#">&times;</a>
                            <?php echo $exito?>
                        </div>
                     <?php
                    }
                    ?>
                </div>
                <div class="form-login well well-small">
                <div class="login-fields">
                    
                    <div class="field">  
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-large icon-user"></i></span>                        
                            <input type="text" id="login" name="userlogin" value="<?= set_value('userlogin'); ?>" placeholder="Email.." class="login username-field" autofocus>
                        </div>
                        <div class="ErrorLogin"><?php echo form_error('userlogin');?></div>
                    </div>

                    <div class="field">
                        <div class="input-prepend" id="campo-password-login">
                            <span class="add-on"><i class="icon-large icon-pencil"></i></span>                                                
                            <input type="password" id="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" placeholder="Contraseña.." class="login password-field">
                        </div>
                        <div class="ErrorLogin"><?= form_error('passwordlogin');?></div>
                    </div>
                </div>
                </div>
                <div class="login-actions">
                    <div>
                        <center>
                            <button type="submit" class="btn-login btn btn-warning btn-large btn-entrar"><i class="icon-signin"></i> Entrar</button>
                            <br><br>
                            <a href="<?php echo base_url();?>index.php/inspector/registro">¿Aún no tienes cuenta? Regístrate!</a>
                            <br>
                            <a href="#">¿Olvidaste la contraseña?</a>
                        </center>                 
                    </div>
                </div>	

            </form>

        </div>	
    </div>
        <footer id="pie">
            <p>Inver-Control © Copyright 2013 - Todos los derechos reservados.</p>
        </footer>
    <script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>