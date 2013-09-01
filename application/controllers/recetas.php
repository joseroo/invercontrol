<?php
session_start();
class Recetas extends CI_Controller {
	/* =========================================================================
     * INDEX()
     * ========================================================================= */
	public function nueva() {
        $this->load->model('recetas_model');
        $agricultores = $this->recetas_model->getAgricultores();
        $productos = $this->recetas_model->getProductos();

        $data['agricultores'] = $agricultores;
        $data['productos'] = $productos;
        
		$this->load->view('recetas_view', $data);
	}

    /* =========================================================================
     * LSITA()
     * ========================================================================= */
    public function lista() {
        $this->load->model('recetas_model');
        $recetas = $this->recetas_model->getRecetas();
        $data['recetas'] = $recetas;
        $this->load->view('lista_recetas_view', $data);
    }
}
?>