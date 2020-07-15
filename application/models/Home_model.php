<?php
    class Home_model extends CI_Model{
    
        public function fetch_dept(){
            $this->load->database();
            $this->db->select("*");
            $query=  $this->db->get("masterdepartments");
            return $query->result();
        }
        
        public function delete_dept($dept){
            $this->load->database();
            $this->db->where("DepartmentID",$dept);
            $this->db->delete("Masterdepartments");
            
        }

        public function delete_event($id){
            $this->load->database();
            $this->db->where("id",$id);
            $this->db->delete("pictures");
        }

        public function manage_users(){

            $this->load->database();
            $this->db->select("*");
            $query=  $this->db->get("add_client");
            return $query->result();
        }

        public function edit_user($id){

            $this->load->database();
            $this->db->select("*");
            $this->db->where("id",$id);
            $query=  $this->db->get("add_client");
            return $query->result();
        }

        public function edit_update_user($data,$id){
            $this->load->database();
            $query = $this->db->query("UPDATE add_client SET name = '$data[name]', address = '$data[address]', age = '$data[age]', state = '$data[state]', city = '$data[city]', pincode = '$data[pincode]', gender = '$data[gender]', email = '$data[email]', url='$data[url]', party_name = '$data[party_name]' where id=$id");

        }


        }
        

    
?>