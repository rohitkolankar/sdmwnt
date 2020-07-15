<?php

class API extends CI_Controller{

	public function get_client_data(){

		$this->load->model("API_model");
		$data=$this->API_model->get_client_data();
		print_r($data);
		//return $this->response->setStatusCode(200)->setJSON($data);
		return json_encode($data);
		
	}

	public function add_volunteer(){

		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$this->load->model("API_model");
		$this->API_model->add_volunteer($data);
	}

	public function client_gallery(){
		$this->load->model("API_model");
		$data=$this->API_model->get_client_gallery();
		print_r($data);
		//return $this->response->setStatusCode(200)->setJSON($data);
		return json_encode($data);
	}
}
?>
