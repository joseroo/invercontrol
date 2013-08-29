<?php
session_start();
class Productos extends CI_Controller {
	/* =========================================================================
     * nuevo_producto()
     * ========================================================================= */
	public function nuevo_producto() {
		$this->load->view('productos_view');
	}

    /* =========================================================================
     * nuevo_producto()
     * ========================================================================= */
    public function crear_producto(){
        $sw = 0;
        if($_POST['nombre']==""){
            $sw = 1;
            $data['error'] = "nombre del producto";
            $this->load->view('productos_view', $data);
        }
        if($_POST['materia_activa']==""){
            $sw = 1;
            $data['error'] = "materia activa";
            $this->load->view('productos_view', $data);
        }
        if($_POST['unidad_medida']==""){
            $sw = 1;
            $data['error'] = "unidad de medida";
            $this->load->view('productos_view', $data);
        }
        if($_POST['cantidad']==""){
            $sw = 1;
            $data['error'] = "cantidad";
            $this->load->view('productos_view', $data);
        }
        if($_POST['precio']==""){
            $sw = 1;
            $data['error'] = "precio";
            $this->load->view('productos_view', $data);
        }
        if($_POST['plazo_seguridad']==""){
            $sw = 1;
            $data['error'] = "plazo de seguridad";
            $this->load->view('productos_view', $data);
        }
        if($sw==0){
            $datos_producto = array(
                'id_tecnico' => $_POST['idTecnico'],
                'nombre' => $_POST['nombre'],
                'materia_activa' => $_POST['materia_activa'],
                'unidad_medida' => $_POST['unidad_medida'],
                'cantidad' => $_POST['cantidad'],
                'precio' => $_POST['precio'],
                'plazo_seguridad' => $_POST['plazo_seguridad']
            );
            $this->load->model('productos_model');
            $res = $this->productos_model->crearProducto($datos_producto);
            if($res == 0) $this->load->view('tecnico_view');
        }
    }

    /* =========================================================================
     * ver_productos() VISTA
     * ========================================================================= */
    public function ver_productos(){
        $this->load->model('productos_model');
        $productos = $this->productos_model->getProductos();
        $data['productos'] = $productos;
        $this->load->view('lista_productos_view', $data);
    }

    /* =========================================================================
     * modificar_producto($id) VISTA
     * ========================================================================= */
    public function modificar_producto($id){
        $this->load->model('productos_model');
        $producto = $this->productos_model->getProductoPorId($id);
        $data['producto'] = $producto;
        $this->load->view('modificar_producto_view', $data);
    }

    /* =========================================================================
     * modificarProducto() BASE DATOS
     * ========================================================================= */
    public function modificarProducto(){
        $datos_producto = array(
            'id_tecnico' => $_POST['idTecnico'],
            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'materia_activa' => $_POST['materia_activa'],
            'unidad_medida' => $_POST['unidad_medida'],
            'cantidad' => $_POST['cantidad'],
            'precio' => $_POST['precio'],
            'plazo_seguridad' => $_POST['plazo_seguridad'],
            'estado' => $_POST['estado']
        );
        $this->load->model('productos_model');
        $res = $this->productos_model->modProducto($datos_producto);
        if($res == 0) redirect('/productos/ver_productos');
    }

    /* =========================================================================
     * borrar_producto($id)
     * ========================================================================= */
    public function borrar_producto($id){
        $this->load->model('productos_model');
        $res = $this->productos_model->borrarProducto($id);
        if($res == 0) redirect('/productos/ver_productos');
    }

    /* =========================================================================
     * restaurar_producto($id)
     * ========================================================================= */
    public function restaurar_producto($id){
        $this->load->model('productos_model');
        $res = $this->productos_model->restaurarProducto($id);
        if($res == 0) redirect('/productos/ver_productos');
    }
}
?>