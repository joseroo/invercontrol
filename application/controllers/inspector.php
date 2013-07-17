<?php
/* =====================================================================================
 * CONTROLADOR PRINCIPAL
 * ===================================================================================== */
session_start();
class Inspector extends CI_Controller {
	/* =================================================================================
	 * Funcion index()
	 * ---------------------------------------------------------------------------------
	 * Funcion que se carga por defecto si no se especifica ninguna en la url
	 * ================================================================================= */
	public function index() {
		if(!isset($_SESSION['login']))
        {   
            // Se muestra el formulario de login
            $this->load->view('login_view');
        }
        else
        {
             $this->load->view('inspector_view');
        }
	}
	/* =========================================================================
     * Funcion cerrar_sesion()
     * -------------------------------------------------------------------------
     * Esta funcion se encarga de cerrar una sesion abierta.
     * Destrute la sesion y nos manda a la pagina de login
     * ========================================================================= */   
    public function cerrar_sesion()
    {
        session_destroy();
        redirect('/inspector');
    }
    /* =========================================================================
     * Funcion validar_login()
     * -------------------------------------------------------------------------
     * Esta funcion valida los campos introducidos en el formulario de login.
     * Envia los datos del formulario al model 'login_model' y dependiendo de 
     * la respuesta obtenida, nos manda de nuevo al login (usuario incorrecto)
     * o al panel de administracion (usuario correcto)
     * ========================================================================= */
    public function validar_login()
    {
            // Se validan que los campos esten introducidos correctamente mediante la libreria form_validation
            $this->form_validation->set_rules('userlogin','usuario','required');     
            $this->form_validation->set_rules('passwordlogin','password','required');
            $this->form_validation->set_message('required', 'El campo %s es obligatorio');
            // Si no pasa la verificación, se vuelve a mostrar el formulario
            if(($this->form_validation->run()==FALSE))
            {
                $this->load->view('login_view');                     
            }
            // Si pasa la verificacion
            else
            {                              
                // Se carga el modelo "login_model"
                $this->load->model('login_model');
                // Se comprueba si el usuario y contraseña existen en la base de datos
                $Existe=$this->login_model->ValidarUsuario($_POST['userlogin'],$_POST['passwordlogin']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
                // Si $Existe recibe TRUE, el usuario y contraseña existen. Si es FALSE, no existe el usuario o contraseña incorrecta
                if($Existe)
                {
                    $userlogin=$_POST['userlogin'];
                    $_SESSION['login'] = $userlogin;
                    $this->load->view('inspector_view');
                }
                else
                {   //   Si no logró validar
                    $data['error']="Email o password incorrectos, por favor vuelva a intentarlo.";
                    // Se vuelve al formulario y le pasa por parametro el error
                    $this->load->view('login_view',$data);
                }
            }
        
    }
}
?>