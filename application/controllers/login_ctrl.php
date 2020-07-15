<?php
    
    class login_ctrl extends CI_Controller{
        public function index(){
            $this->load->view("new_login.php");
        }

        public function check_login(){
            $login_name = $this->input->post("login_name");
            $login_password = $this->input->post("password");
            $data = array(
                "login_name" => "$login_name",
                "login_password" => "$login_password"
            );
            $this->load->model("Login_model");
            $data = $this->Login_model->check_login_entry($data);
            if($data != false){
                
            $userdata = array(
                "username" => $login_name,
                "user_id" => $data[0]["id"],
                "session_active" => TRUE
            );
            $this->session->set_userdata($userdata);  
                header('Location:Home');  
            }
                
            else
                header("Location:login_ctrl?success=1");
        }

        public function logout(){
            $this->session->sess_destroy();
            header("Location:login_ctrl");
        }
        public function client_logout(){
            $this->session->sess_destroy();
            header("Location:cl_login");
        }
    }
?>