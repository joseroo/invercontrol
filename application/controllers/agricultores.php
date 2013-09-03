<?php
session_start();
class Agricultores extends CI_Controller {
	/* =========================================================================
     * lista()
     * ========================================================================= */
	public function lista() {
        $this->load->model('agricultores_model');
        $data['agricultores'] = $this->agricultores_model->getAgricultores($_SESSION['id']);
		$this->load->view('lista_agricultores_view', $data);
	}

    /* =========================================================================
     * borrar_agricultor($id)
     * ========================================================================= */
    public function borrar_agricultor($id){
        $this->load->model('agricultores_model');
        $res = $this->agricultores_model->borrarAgricultor($id);
        if($res == 0) redirect('/agricultores/lista');
    }

    /* =========================================================================
     * restaurar_agricultor($id)
     * ========================================================================= */
    public function restaurar_agricultor($id){
        $this->load->model('agricultores_model');
        $res = $this->agricultores_model->restaurarAgricultor($id);
        if($res == 0) redirect('/agricultores/lista');
    }

    /* =========================================================================
     * modificar_agricultor($id)
     * ========================================================================= */
    public function modificar_agricultor($id){
        $this->load->model('agricultores_model');
        $agricultor = $this->agricultores_model->getAgricultorPorId($id);
        $data['agricultor'] = $agricultor;
        $this->load->model('registro_model');
        $cooperativas = $this->registro_model->getCooperativas();
        $data['cooperativas'] = $cooperativas;
        $this->load->view('modificar_agricultor_view', $data);
    }
    /* =========================================================================
     * modificar_agricultor($id)
     * ========================================================================= */
    public function modificarAgricultor(){
        $datos_agricultor = array(
            'id' => $_POST['id'],
            'num_agricultor' => $_POST['num_agricultor'],
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['email'],
            'estado' => $_POST['estado'],
            'id_cooperativa' => $_POST['cooperativa'],
            'id_tecnico' => $_POST['id_tecnico']
        );
        $this->load->model('agricultores_model');
        $res = $this->agricultores_model->modAgricultor($datos_agricultor);
        if($res == 0) redirect('/agricultores/lista');
    }

    /* =========================================================================
     * nuevo_agricultor()
     * ========================================================================= */
    public function nuevo_agricultor() {
        $this->load->model('registro_model');
        $cooperativas = $this->registro_model->getCooperativas();
        $data['cooperativas'] = $cooperativas;
        $this->load->view('agricultores_view', $data);
    }

    /* =========================================================================
     * agregarAgricultor()
     * ========================================================================= */
    public function agregarAgricultor() {
        $datos_agricultor = array(
            'num_agricultor' => $_POST['num_agricultor'],
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['email'],
            'id_cooperativa' => $_POST['cooperativa'],
            'id_tecnico' => $_POST['id_tecnico']
        );
        $this->load->model('agricultores_model');
        $res = $this->agricultores_model->crearAgricultor($datos_agricultor);
        if($res == 0) redirect('/agricultores/lista');
    }

    public function fincas($id) {
        $this->load->model('agricultores_model');
        $fincas = $this->agricultores_model->getFincas($id);
        // Manda a la salida el array generado convirtiendolo en un objeto JSON
        $this->output->set_content_type('application/json')->set_output(json_encode($fincas));
    }
}
?>