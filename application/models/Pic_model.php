<?php 

class Pic_model extends CI_Model{
	
	

	//save picture data to db
	function store_pic_data($data){
		$insert_data['pic_title'] = $data['pic_title'];
        $insert_data['pic_desc'] = $data['pic_desc'];
        $insert_data['pic_date'] = $data['pic_date'];
        $insert_data['pic_place'] = $data['pic_place'];
		$insert_data['pic_file'] = $data['pic_file'];
        $insert_data['client_id']=$data['id'];
		$query = $this->db->insert('pictures', $insert_data);
    }
    

	function logo_data($data){

		$insert_data['pic_file'] = $data['pic_file'];
        $insert_data['client_id']=$data['id'];
		$query = $this->db->insert('client_logo', $insert_data);
    }

    public function fetch_logo($id){

        $this->load->database();
            $this->db->select("*");
            $this->db->where("client_id=$id");
            $query=  $this->db->get("client_logo");
            return $query->result();
        
    }

    public function add_events($id){
        $this->load->database();
        
        $query=$this->db->query("select * from pictures where client_id=$id");
        
        return $query->result();
    }

    function gallery($data){

		$insert_data['pic_file'] = $data['pic_file'];
        $insert_data['client_id']=$data['id'];
		$query = $this->db->insert('client_gallery', $insert_data);
    }

    public function fetch_gallery($id){

        $this->load->database();
            $this->db->select("*");
            $this->db->where("client_id=$id");
            $query=  $this->db->get("client_gallery");
            return $query->result();
        
    }

    public function delete_pic($id){
        $this->load->database();
        $this->db->where("id",$id);
        $this->db->delete("client_gallery");
        
    }
    
    
}