<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('common_model');
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
	}

	public function index(){
		$content_data = array();

			if($this->input->post()){
				 if($this->utility->getSecurity()!=$this->input->post('frmSecurity')){
				$this->utility->setMsg('Session expired. Please try again..','ERROR');
				redirect(base_url().'login');
			}
			$this->form_validation->set_rules('full_name','Full Name','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email id','required|valid_email');
			$this->form_validation->set_rules('contact_no','Contact number','required');

		

			if($this->form_validation->run()){
				$counter=0;
		        $username_existance = $this->users_model->getemail($this->input->post('email'));
		        if($username_existance>0){
		            $this->utility->setMsg('Email already exists.', "ERROR");
		            $counter = 1;
		            redirect(base_url('admin/dashboard'));
		        }
		        if($counter==0){
				$ins_data = array(
					'full_name' => $this->input->post('full_name'),
					'username'	=> $this->input->post('username'),
					'email'		=> $this->input->post('email'),
					'contact_no'=> $this->input->post('contact_no'),
					'address'	=> $this->input->post('address'));
				
				if($_FILES){
					$dir="assets/uploads/user_images";
					
					$config['upload_path']   = $dir; 
		       		$config['allowed_types']="*";
		       		$this->load->library('upload', $config);
		    
		         if ( ! $this->upload->do_upload('image')) {
		          $error = array('error' => $this->upload->display_errors()); 
		          
		        }
		    
		       else { 
		          $data = array('upload_data' => $this->upload->data()); 
		          $ins_data['profile_image']=$data['upload_data']['file_name'];
		          $this->session->set_userdata('userimg',$data['upload_data']['file_name']);

		         @unlink('assets/uploads/user_images/'.$content_data['user']['profile_image']);
		      }
				}
				if($this->input->post('password')){
					$ins_data['password']	= sha1($this->input->post('password'));
				}
				$this->users_model->addEdit($ins_data, array('user_id'=> $this->session->userdata('user_id')));
				
				
					$this->utility->setMsg('Employee details updated.', "SUCCESS");
					redirect(base_url('admin/dashboard'));
					
			 }			
			}
			else{
				$this->utility->setMsg(validation_errors(),'ERROR');
			}
			
		}

		$content_data['user']=$this->users_model->userDetails($this->session->userdata('user_id'));
		$data['content'] = $this->load->view('admin/profile', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

    function check_edit_email(){
    	$edit_id = $this->session->userdata('user_id');
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('user_id !=',$edit_id);
        $this->db->where('user_status','1');
        $q = $this->db->get('user');
        if($q->num_rows() > 0 ){
            echo 'false';
        } else {
            echo 'true';
        }
    }

}
?>