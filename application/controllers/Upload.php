<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
  
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
    $data['pictures']=$this->pic_model->add_events($data['id']);
    $this->load->view('upload_form.php',$data);
      
  
  }
  
  public function file_data(){
    if($this->session->userdata("session_active")==True){
        $data['username'] = $this->session->userdata('username');
        $data['id']=$this->session->userdata('user_id');
        $this->load->view("upload_form.php", $data);
        

    }else{
        header("Location:login_ctrl");
    }
    //validate the form data 
    $this->form_validation->set_rules('pic_title', 'Picture Title', 'required');
        if ($this->form_validation->run() == FALSE){
      $this->load->view('upload_form');
    }else{
      
      //get the form values
      $data['pic_title'] = $this->input->post('pic_title', TRUE);
      $data['pic_desc'] = $this->input->post('pic_desc', TRUE);
      $data['pic_date'] = $this->input->post('pic_date', TRUE);
      $data['pic_place'] = $this->input->post('pic_place', TRUE);
      $data['client_id']=$data['id'];
        //echo $data['id'];
      //file upload code 
      //set file upload settings 
      $config['upload_path']          = APPPATH. '../assets/upload';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('pic_file')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('upload_form', $error);
      }else{
        //file is uploaded successfully
        //now get the file uploaded data 
        $upload_data = $this->upload->data();
        //get the uploaded file name
        $data['pic_file'] = $upload_data['file_name'];
       
       
        //store pic data to the db
        $this->pic_model->store_pic_data($data);
        redirect('client_dashboard');
      }
      
    }
  }
}