<?php
class Login_model extends CI_Model{
    public function check_login_entry($data){
        $this->load->database();
        $this->db->select("*");
        $this->db->where("CMSUsername", $data['login_name']);
        $this->db->where("CMSPassword", md5($data['login_password']));
        $query = $this->db->get("cmsusersauthentication");
        if($query->num_rows() > 0)
            return json_decode(json_encode($query->result()) , true);
        else
            return false;   
        // return $query->result();
    }

    public function client_login($data){
        $this->load->database();
        $this->db->select("*");
        
        $this->db->where("username", $data['login_name']);
        $this->db->where("password", $data['login_password']);
        $query = $this->db->get("client_auth");
        if($query->num_rows() > 0)
            return json_decode(json_encode($query->result()) , true);
        else
            return false;
        // return $query->result();
    } 
    }

?>