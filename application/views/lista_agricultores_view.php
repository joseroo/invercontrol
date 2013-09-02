<!-- Carga de la cabecera -->
<?php echo $this->load->view('header_view'); ?>
<!-- CONTENIDO -->

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url();?>index.php/tecnico">Inicio</a> <span class="divider">/</span></li>
        <li class="active">Lista de agricultores</li>
    </ul>

<div class="well" style="padding-top: 40px;">
    

    <!-- DIV MENU -->
    <div class="row-fluid">
        <div class="span12">
            <div class="span10 offset1 form-prod-nuevo">
                <fieldset>
                    <legend><h4><a href="<?php echo base_url();?>index.php/tecnico" data-toggle='tooltip' data-placement='top' title='Volver' class="acciones"><i class="icon-mail-reply" ></i></a> Listado de agricultores</h4></legend>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nº Agricultor</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th style="text-align:center;">Estado</th>
                                <th style="text-align:center;">Cooperativa</th>
                                <th style="text-align:center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach($agricultores as $agricultor){
                                echo "<tr class='agitable'>";
                                echo "<td class='id'># ".$agricultor->id."</td>";
                                echo "<td>".$agricultor->num_agricultor."</td>";
                                echo "<td>".$agricultor->nombre."</td>";
                                echo "<td>".$agricultor->apellidos."</td>";
                                echo "<td>".$agricultor->telefono."</td>";
                                echo "<td><a href='mailto:".$agricultor->email."'>".$agricultor->email."</a></td>";
                                if($agricultor->estado == "1") echo "<td style='text-align:center;'><span class='label label-success'>Activo</span></td>";
                                else echo "<td style='text-align:center;'><span class='label label-important'>Inactivo</span></td>";
                                echo "<td style='text-align:center;'>".$agricultor->id_cooperativa."</td>";
                                echo "<td style='font-size:20px; text-align:center;'>";
                                echo "<a href='".base_url()."index.php/agricultores/modificar_agricultor/".$agricultor->id."' class='btn btn-warning acciones' data-toggle='tooltip' data-placement='top' title='Modificar agricultor' style='margin-right:5px;'><i class='icon-edit'></i></a>";
                                if($agricultor->estado == "1") echo "<a href='".base_url()."index.php/agricultores/borrar_agricultor/".$agricultor->id."' class='btn btn-danger acciones' data-toggle='tooltip' data-placement='top' title='Borrar (Se pasará el agricultor a Inactivo)'><i class='icon-trash'></i></a></td>";
                                else echo "<a href='".base_url()."index.php/agricultores/restaurar_agricultor/".$agricultor->id."' class='btn btn-info acciones' data-toggle='tooltip' data-placement='top' title='Activar agricultor'><i class='icon-undo'></i></a></td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>



</div>
<script>
    $('.acciones').tooltip()
</script>
<!-- Carga del pie -->
<?php echo $this->load->view('footer_view'); ?>
</body>
</html>