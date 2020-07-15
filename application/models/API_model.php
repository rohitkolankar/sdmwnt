<?php

	class API_model extends CI_Model{

		public function get_client_data(){
			$this->load->database();
			$this->db->select("*");
			$this->db->where("id",15);
			$query=  $this->db->get("add_client");
			return $query->result();
		}

		public function add_volunteer($data){
			$this->load->database();
			$this->db->insert("add_volunteer",$data);
		}

		public function get_client_gallery(){
			$this->load->database();
			$this->db->select("*");
			$this->db->where("client_id",11);
			$query=  $this->db->get("client_gallery");
			return $query->result();
		
		}
	}
?>
