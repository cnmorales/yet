<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	public function index()
	{
		//  Carga vista del head html
		$vistas["head"] = $this->load->view('layout/head',array(),true);
		$vistas["header"] = "";
		$vistas["left_menu"] = "";
		$vistas["contenido"] = $this->load->view('login',array(),true);
		$vistas["footer"] = $this->load->view('layout/footer',array(),true);
		//Llama a la plantilla (layout) y le pasa como parametro el head, menu, listado de prodictos y footer
		$this->load->view('layout/layout',$vistas);
	}

	public function load_home()
	{
		//  Carga vista del head html
		$vistas["head"] = $this->load->view('layout/head',array(),true);
		$vistas["header"] = $this->load->view('layout/header',array(),true);
		$vistas["left_menu"] =  $this->load->view('layout/left_menu', array(), true);
		$vistas["contenido"] = $this->load->view('home',array(),true);
		$vistas["footer"] = $this->load->view('layout/footer',array(),true);
		//Llama a la plantilla (layout) y le pasa como parametro el head, menu, listado de prodictos y footer
		$this->load->view('layout/layout',$vistas);
	}

	public function usuario_agregar(){
		//Obtiene el id de producto para agregar
		$nombre = $this->input->post("Nombre");
		$apellido = $this->input->post("Apellido");
		$email = $this->input->post("Email");
		$email2 = $this->input->post("Email2");
		$clave = $this->input->post("Clave");
		$clave2 = $this->input->post("Clave2");

		// TODO aca hubo una validacion

		$this->load->model('usuario_model');
		$usuario = $this->usuario_model->agregar_usuario($nombre,$apellido,$email,$clave);

		//$this->load->view('enviodemail');

		//Generar codigo random
		//rand(0,200);
		echo "grabado con exito(?)";
		$this->load->view('welcome_message');
		//Armar url
		//Enviar url

	}

	public function usuario_loguear(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$this->load->model('usuario_model');
		$result = $this->usuario_model->usuario_loguear($username,$password);
		if ($result != null){
			$this->load_home();
		}
		else {
			//mostrar pantalla de error
			echo "NO SOY EL SEÑOR HOME :(";
		}
	}


}
?>
