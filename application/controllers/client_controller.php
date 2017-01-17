<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client_controller extends CI_Controller {

		public function index()
	{
	}

	public function crear(){

		$name = $this->input->post("name");
		$address = $this->input->post("address");
		$web = $this->input->post("web");
		$email = $this->input->post("email");
		$phone = $this->input->post("phone");

		// TODO aca hubo una validacion

		$this->load->model('cliente_model');
		$result = $cliente = $this->cliente_model->crear($name,$address,$web,$email,$phone);

		if ($result != null){
			echo json_encode(array('status' => '1', "contenido" => "Creado correctamente."));
			exit;
		}
		else {
			echo json_encode(array('status' => '0', "contenido" => "Error al grabar cliente."));
			exit;
		}
	}




}
?>
