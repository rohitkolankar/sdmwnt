<?php

    class client_model extends CI_Model{

        public function add_client($data){
            $this->load->database();
            $this->db->insert("add_client",$data);
        }

        public function signin($data){
            $this->load->database();
            $this->db->insert("client_auth",$data);
        }

        public function fetch_last(){
            $this->load->database();
            $this->db->select("id");
            $this->db->order_by("id","desc");
            $this->db->limit("1");
            $query = $this->db->get("add_client");
            return $query->result();
        }

        public function add_journey($data){
            $this->load->database();
            $this->db->limit(1);
            $this->db->insert("client_journey",$data);


        }

        public function update_journey($data){
            $this->load->database();
            $this->db->set('journey',$data['journey']);
             $this->db->where('client_id', $data['client_id']);
             $this->db->update('client_journey');
             

            //echo $query = $this->db->query("UPDATE client_journey SET journey='$data[journey]' WHERE client_id=$data[client_id]");
            //echo $query->result();

        }

        public function my_journey($id){
            $this->load->database();
            $query = $this->db->query("select * from client_journey where client_id=$id");
            return $query->result();
        }

        public function show_users($id){
            $this->load->database();
            $query = $this->db->query("select * from client_auth join add_client on client_auth.client_id= add_client.id where client_auth.id=$id");
            //echo "select * from client_auth join add_client on client_auth.client_id= add_client.id where client_auth.id=$id";

            return $query->result();
        }

        public function client_about_personal($data){
            $this->load->database();
            $this->db->insert("client_personal_about",$data);
        }

        public function client_about_political($data){
            $this->load->database();
            $this->db->insert("client_political_about",$data);
        }

        public function client_about_social($data){
            $this->load->database();
            $this->db->insert("client_social_about",$data);
        }

        public function my_profile($id){
            $this->load->database();
            $query = $this->db->query("select * from client_auth join add_client on client_auth.client_id= add_client.id where client_auth.id=$id");
            //echo "select * from client_auth join add_client on client_auth.client_id= add_client.id where client_auth.id=$id";

            return $query->result();
        }

        public function update_user($data,$id){
            
            $this->load->database();
            $query = $this->db->query("UPDATE client_auth join add_client on client_auth.client_id=add_client.id SET name = '$data[name]', address = '$data[address]', age = '$data[age]', state = '$data[state]', city = '$data[city]', pincode = '$data[pincode]', gender = '$data[gender]', email = '$data[email]', url='$data[url]', party_name = '$data[party_name]' where client_auth.id=$id");
           //echo "UPDATE client_auth join add_client on client_auth.client_id=add_client.id SET name = '$data[name]', address = '$data[address]', age = '$data[age]', state = '$data[state]', city = '$data[city]', pincode = '$data[pincode]', gender = '$data[gender]', email = '$data[email]', party_name = '$data[party_name]' where client_auth.id=$id";
            
            
        }

        public function add_volunteer($data){
            $this->load->database();
            $this->db->insert("add_volunteer",$data);
        }
        }
    
    
    