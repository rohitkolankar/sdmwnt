<?php

    class Client_ctrl extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->session->userdata("session_active")==True;
            $this->load->library('form_validation');
            
         
          }
          

        public function adduser(){
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
            $url=$this->input->post("url");
            $vol_image =  $this->input->post("vol_image");
            

            $data = array(
        
                "name"=>"$name",
                "address"=>"$address",
                "age" =>"$age",
                "state"=>"$state",
                "city"=>"$city",
                "pincode"=>"$pincode",
                "gender"=>"$gender",
                "email"=>"$email",
                "vol_image"=>"$vol_image",
                "url"=>"$url"
                


            );

            $this->load->model("client_model");
            $this->client_model->add_client($data);
            header("Location:client_signup?success=1");
            //$this->load->view("client_signup.php",$data);
        }

        public function client_signup(){
            $this->load->model("client_model");
            $data['id']=$this->client_model->fetch_last();
           // print_r($data);
            $this->load->view("client_signup.php",$data);
        }

        public function signin(){
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $client_id = $this->input->post("client_id");
            $data = array(
                "username"=>$username,
                "password"=>$password,
                "client_id" => $client_id,
                "post"=>"client"
            );
            $this->load->model("client_model");
            $this->client_model->signin($data);
            $this->load->view("client_login.php");
        }

        public function client_login(){
            $this->load->view("client_login.php");
        }

        public function cl_login(){
            $login_name = $this->input->post("login_name");
            $login_password = $this->input->post("password");
            $data = array(
                "login_name" => "$login_name",
                "login_password" => "$login_password"
            );

            $this->load->model("Login_model");
            $data = $this->Login_model->client_login($data);
            if($data != false){
                
                $userdata = array(
                    "username" => $login_name,
                    "user_id" => $data[0]["id"],    
                    "session_active" => TRUE
                );
                $this->session->set_userdata($userdata);  
                    header('Location:client_dashboard');  
                }

            else{
                header('Location:client_login');
            }
            
        }

        public function client_dashboard(){
            if($this->session->userdata("session_active")==True){
                $client_id = $this->session->userdata('user_id');
                $this->load->model("client_model");
                $data["rows"]= $this->client_model->show_users($client_id);
                $this->load->view("client_dashboard.php", $data);
               

            }else{
                header("Location:client_login");
            }
           
            $this->load->view("client_dashboard.php",$data);
        }

        public function show_user(){
            $client_id = $this->session->userdata('user_id')  ;
            $this->load->model("client_model");
            $data["rows"]= $this->client_model->show_users($client_id);
            //$this->load->view("client_dashboard.php", $data);


        }

        public function add_journey(){
            $data = array(
                "journey"=>$this->input->post("journey"),
                "client_id"=>$this->session->userdata('user_id')
            );
            
            $this->load->model("client_model");
            $this->client_model->add_journey($data);
            header('Location:client_journey');
        }

        public function update_journey(){
            $data = array(
                "journey"=>$this->input->post("journey_updated"),
                "client_id"=>$this->session->userdata('user_id')
            );
           
            
            
            $this->load->model("client_model");
            $this->client_model->update_journey($data);
            header('location:client_journey');
            
        }

        public function delete_event(){
                $this->load->model("Home_model");
                $this->Home_model->delete_event($this->input->get("id"));
                header("location:form");
                
        }

        public function view_about(){
            $this->load->view("view_about.php");
        }

        public function about_personal(){
             
            $data=array(
                "dob"=>$this->input->post("dob"),
                "birth_location"=>$this->input->post("birth_location"),
                "childhood"=>$this->input->post("childhood"),
                "education"=>$this->input->post("education"),
                "fmly"=>$this->input->post("fmly_members"),
                "client_id"=>$this->session->userdata('user_id')

            );

            $this->load->model("client_model");
            $this->client_model->client_about_personal($data);
            header('location:view_about');
        }

        public function about_political(){
            $data=array(

                 "political_about"=>$this->input->post("political_about"),
                  "client_id"=>$this->session->userdata('user_id')
            );

            $this->load->model("client_model");
            $this->client_model->client_about_political($data);
            header('location:view_about');
        }

        public function about_social(){
            $data=array(

                 "social_about"=>$this->input->post("social_about"),
                  "client_id"=>$this->session->userdata('user_id')
            );

            $this->load->model("client_model");
            $this->client_model->client_about_social($data);
            header('location:view_about');
        }

        public function my_profile(){
           
         $id=$this->session->userdata('user_id');

            $this->load->model("client_model");
            $data['rows']=$this->client_model->my_profile($id);
            $this->load->view("my_profile.php",$data);
            // print_r($data);
        }

        public function update_user(){

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
            $vol_image =  $this->input->post("vol_image");
            $url=$this->input->post("url");
            $id=$this->session->userdata('user_id');
            

            $data = array(
        
                "name"=>"$name",
                "address"=>"$address",
                "age" =>"$age",
                "state"=>"$state",
                "city"=>"$city",
                "pincode"=>"$pincode",
                "gender"=>"$gender",
                "email"=>"$email",
                "vol_image"=>"$vol_image",
                "url"=>"$url"
                


            );
            //echo $id;


            $this->load->model("client_model");
            $this->client_model->update_user($data,$id);
           header('location:my_profile');
        }

        public function become_volunteer(){

            $this->load->view("become_volunteer.php");
        }

        public function add_volunteer(){
            $fname= $this->input->post("fname");
            $mname= $this->input->post("mname");
            $lname= $this->input->post("lname");
            // $name = $fname." ".$mname." ".$lname;
            // $address = $this->input->post("address");
            // $age =  $this->input->post("age");
            // $state =  $this->input->post("state");
            // $city =  $this->input->post("city");
            // $pincode =  $this->input->post("pincode");
            // $gender =  $this->input->post("gender");
            // $email =  $this->input->post("email");
            // $profession=$this->input->post("profession");
            // $vol_image=$this->input->post('vol_image');
            // $id=$this->session->userdata('user_id');
            // $id=$this->session->userdata('user_id');

                        //validate the form data 
            //     $this->form_validation->set_rules('name', 'name', 'required');
            // if ($this->form_validation->run() == FALSE){
            //      $this->load->view('become_volunteer');
            //      echo "if";
            // }else{
            
            //get the form values
            $data['name'] = $fname." ".$mname." ".$lname;
            $data['address'] = $this->input->post('address', TRUE);
            $data['age'] = $this->input->post('age', TRUE);
            $data['state'] = $this->input->post('state', TRUE);
            $data['city']=$this->input->post("city");
            $data['pincode']=$this->input->post("pincode");
            $data['gender']=$this->input->post("gender");
            $data['email']=$this->input->post("email");
            $data['profession']=$this->input->post("profession");
            $data['client_id']=$this->session->userdata('user_id');

            // $data['client_id']=$data['id'];
                //echo $data['id'];
            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/upload/volunteer/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('vol_image')){
                $error = array('error' => $this->upload->display_errors());
                //$this->load->view('become_volunteer', $error);
            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();
                //get the uploaded file name
                $data['image'] = $upload_data['file_name'];
            
                print_r($data);
                //store pic data to the db
                $this->load->model("client_model");
                $this->client_model->add_volunteer($data);
                header('location:become_volunteer');
  }

}
        
        

        

    
    }