<?php
session_start();
class Agricultores extends CI_Controller {
	/* =========================================================================
     * lista()
     * ========================================================================= */
	public function lista() {
        $this->load->model('agricultores_model');
        $data['agricultores'] = $this->agricultores_model->getAgricultores($_SESSION['id']);
		$this->load->view('agricultores_view', $data);
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
}
?>