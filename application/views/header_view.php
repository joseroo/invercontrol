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
    <script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" id="header"> 
                <div class="login-header pull-left">
                  <span class="logo-titulo"><span class="titulo"><i class="icon-desktop"></i> Inver-Control</span> | Panel de Administración </span>
                </div>
                <!-- Panel lateral del técnico -->
                <div class="panel-tecnico pull-right">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo "Bienvenido <strong>".$_SESSION['nombre']."</strong>"; ?>
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><?php echo "<a href='".base_url()."index.php/tecnico/cerrar_sesion'>Cerrar sesion</a>"; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <br><br>
