<?php
    class Home extends CI_Controller{

        public function index(){
            if($this->session->userdata("session_active")==True){
                $data['username'] = $this->session->userdata('username');
                $this->load->view("home.php", $data);

            }else{
                header("Location:login_ctrl");
            }
            
        }
            public function departments(){
                $this->load->model("Home_model");
                $data["rows"]= $this->Home_model->fetch_dept();
                $this->load->view("departments.php",$data);

            }

            public function general(){
                $this->load->view("pages/UI/general.html");
            }

            public function delete_dept(){
                $this->load->model("Home_model");
                $this->Home_model->delete_dept($this->input->get("id"));
                header("location:delete_dept");
                

            } 
            
            public function add_client(){
                $this->load->view("add_client.php");
            }


             
            public function client_journey(){
                $this->load->model("client_model");
                $data['id']=$this->session->userdata('user_id');
                $data['rows']=$this->client_model->my_journey($data['id']);
                
                $this->load->view("client_journey.php",$data);
                // $this->load->view("navbar.php");
                
            }

            public function manage_users(){
                $this->load->model("Home_model");
                $data['rows']=$this->Home_model->manage_users("manage_users");
                $this->load->view("super_manage_users.php",$data);
            }

            public function edit_user(){
                $id= $this->input->get("id");
                $this->load->model("Home_model");
               $data['rows'] = $this->Home_model->edit_user($id);
                $this->load->view("edit_user.php",$data);
            }

            public function edit_update_user(){

                $fname= $this->input->post("fname");
                $mname= $this->input->post("mname");
                $lname= $this->input->post("lname");
                $name = $fname." ".$mname." ".$lname;
                $address = $this->input->post("address");
                $age =  $this->input->post("age");
                $state =  $this->input->post("state");
                $city =  $this->input->post("city");
                $pincode =  $this->input->post("pincode");
                $gender =  $this->input->post("gender");
                $email =  $this->input->post("email");
                $party_name =  $this->input->post("party_name");
                $url=$this->input->post("url");
                $id = $this->input->post("id");
                
    
                $data = array(
            
                    "name"=>"$name",
                    "address"=>"$address",
                    "age" =>"$age",
                    "state"=>"$state",
                    "city"=>"$city",
                    "pincode"=>"$pincode",
                    "gender"=>"$gender",
                    "email"=>"$email",
                    "party_name"=>"$party_name",
                    "url"=>"$url"
                    
    
    
                );
    
    
                $this->load->model("Home_model");
                $this->Home_model->edit_update_user($data,$id);
               //header('location:edit_user');
            }
        
    }