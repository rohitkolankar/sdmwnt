<?php

class API extends CI_Controller{

	public function get_client_data(){

		$this->load->model("API_model");
		$data=$this->API_model->get_client_data();
		$arr=json_encode($data);
		print($arr);
		return $arr;
		
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
		//return $this->response->setStatusCode(200)->setJSON($data);
		$new=json_encode($data);
		return $new;
	}
}
?>
