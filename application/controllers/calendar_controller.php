<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_controller extends CI_Controller {

		public function index()
	{
	}

	public function crear(){

		$nombre = $this->input->post("nombre");
		$cliente_id = $this->input->post("cliente");
		$enabled = 1;
		$usuario_id = 1; //CAMBIAR!!!

		// TODO aca hubo una validacion

		$this->load->model('calendario_model');
		$result = $cliente = $this->calendario_model->crear($nombre,$cliente_id,$enabled,$usuario_id);

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
