<?php
session_start();
class Tecnico extends CI_Controller {
	/* =========================================================================
     * INDEX()
     * ========================================================================= */
	public function index() {
		if(!isset($_SESSION['login']))
        {   
            $this->load->view('login_view');
        }
        else
        {
             $this->load->view('tecnico_view');
        }
	}
	/* =========================================================================
     * CERRAR_SESION()
     * ========================================================================= */
    public function cerrar_sesion() {
        session_destroy();
        redirect('/tecnico');
    }
    /* =========================================================================
     * VALIDAR_LOGIN()
     * ========================================================================= */
    public function validar_login() {
        $this->form_validation->set_rules('userlogin','usuario','required');     
        $this->form_validation->set_rules('passwordlogin','password','required');
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        if(($this->form_validation->run()==FALSE))
        {
            $this->load->view('login_view');                     
        }
        else
        {                              
            $this->load->model('login_model');
            $Existe=$this->login_model->ValidarUsuario($_POST['userlogin'],$_POST['passwordlogin']);
            if($Existe)
            {
                $userlogin=$_POST['userlogin'];
                $_SESSION['nombre'] = $Existe->nombre;
                $_SESSION['login'] = $userlogin;
                $_SESSION['id'] = $Existe->id;
                redirect('/tecnico');
            }
            else
            {
                $data['error']="Email o password incorrectos, por favor vuelva a intentarlo.";
                $this->load->view('login_view',$data);
            }
        } 
    }
    /* =========================================================================
     * REGISTRO()
     * ========================================================================= */
    public function registro() {
    	$this->load->model('registro_model');
    	$data['cooperativas'] = $this->registro_model->getCooperativas();
    	$this->load->view('registro_view', $data);
    }
    /* =========================================================================
     * VALIDAR_REGISTRO()
     * ========================================================================= */
    public function validar_registro() {
    	$this->load->model('registro_model');
    	$datos = array(
    		'nombre' => $_POST['nombre'],
    		'apellidos' => $_POST['apellidos'],
    		'telefono' => $_POST['telefono'],
    		'email' => $_POST['email'],
    		'password' => sha1($_POST['password']),
    		'id_cooperativa' => $_POST['cooperativa']
    	);
    	$resultado = $this->registro_model->registro($datos);
    	if($resultado==0){
    		$data['exito'] = "Usuario registrado con éxito. Por favor, logueate.";
    		$this->load->view('login_view', $data);
    	}
    }

    /* =========================================================================
     * BUSCAR($SW)
     * ========================================================================= */
    public function buscar($sw) {
        switch($sw) {
            case 1:
                $data['opcion'] = "Nombre del agricultor";
                $data['opcion_var'] = "1";
                $this->load->view('buscar_view', $data);
                break;
            case 2:
                $data['opcion'] = "Número de agricultor";
                $data['opcion_var'] = "2";
                $this->load->view('buscar_view', $data);
                break;
            case 3:
                $data['opcion'] = "Nombre del producto";
                $data['opcion_var'] = "3";
                $this->load->view('buscar_view', $data);
                break;
            case 4:
                $data['opcion'] = "Fecha de dósis";
                $data['opcion_var'] = "4";
                $this->load->view('buscar_view', $data);
                break;
            case 5:
                $data['opcion'] = "Nombre de la finca";
                $data['opcion_var'] = "5";
                $this->load->view('buscar_view', $data);
                break;
            case 6:
                $data['opcion'] = "Nombre del invernadero";
                $data['opcion_var'] = "6";
                $this->load->view('buscar_view', $data);
                break;

        }
    }

    /* =========================================================================
     * BUSCARDOR()
     * ========================================================================= */
    public function buscador(){
        $sw = $_POST['op'];
        $campo = $_POST['campo'];
        $this->load->model('tecnico_model');
        $res = $this->tecnico_model->buscar($sw, $campo);
        $data['busqueda'] = $res;
        $data['op'] = $sw;
        $this->load->view('buscador_view', $data);
    }
}
?>