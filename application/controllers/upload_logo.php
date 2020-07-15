<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class upload_logo extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->model('pic_model');
    $this->load->library('form_validation');
    $this->session->userdata("session_active")==True;
    
 
  }
  
  public function form(){
    $data['name']=$this->session->userdata('username');
    $data['id']=$this->session->userdata('user_id');
    
      $this->load->model("pic_model");
      $logo['picture']= $this->pic_model->fetch_logo($data['id']);
      $this->load->view("upload_logo.php",$logo);
      

   

  
  
  
  
  
  }
  
  public function file_data(){
    if($this->session->userdata("session_active")==True){
        $data['username'] = $this->session->userdata('username');
        $data['id']=$this->session->userdata('user_id');
        $this->load->view("upload_logo.php", $data);

    }else{
        header("Location:login_ctrl");
    }
    
      
      //get the form values
      $data['client_id']=$data['id'];
        //echo $data['id'];
      //file upload code 
      //set file upload settings 
      $config['upload_path']          = APPPATH. '../assets/upload/logo';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('pic_file')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('upload_logo', $error);
      }else{
        //file is uploaded successfully
        //now get the file uploaded data 
        $upload_data = $this->upload->data();
        //get the uploaded file name
        $data['pic_file'] = $upload_data['file_name'];
       
       
        //store pic data to the db
        $this->pic_model->logo_data($data);
        redirect('client_dashboard');
      }
    }
    
      
      
   
  }
