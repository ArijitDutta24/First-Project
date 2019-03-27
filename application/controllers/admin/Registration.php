<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller

{

	public function __construct()
	{ 

		parent:: __construct();

		$this->load->model('registration_model');
		$this->load->model('email_model');

	}

	public function index()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('email','Email id','required|valid_email');
			$this->form_validation->set_rules('password','Password','required');
			if($this->form_validation->run()){
				$random_hash = substr(md5(uniqid(rand(), true)), 16, 16);
				$ins_data = array(
					'email'	=> $this->input->post('email'),
					'password'=>sha1($this->input->post('password')),
					'user_status'=>0,
					'email_verification_code'=>$random_hash);
				$user_registration=$this->registration_model->user_reg($ins_data);
				if($user_registration)
				{
					$email_verify=$this->sendVerificationEmail($ins_data['email'],$ins_data['email_verification_code']);
				}
				// redirect(base_url('login'));

			}
			else{
				$this->utility->setMsg(validation_errors(),'ERROR');
			}
		}
		$this->load->view('admin/registration');
	}

    public function verify($verificationText=NULL){  
	  $noRecords = $this->registration_model->verifyEmailAddress($verificationText);  
	  if ($noRecords > 0){
	   	$this->utility->setMsg('Email Verified Successfully!','SUCCESS');
	  }else{
	     $this->utility->setMsg('Sorry Unable to Verify Your Email!. Please try again.','ERROR');
	  }
	  
	 redirect(base_url('admin/login'));  
 	}


	public function sendVerificationEmail($email,$code){  
	  $this->email_model->sendVerificatinEmail($email,$code);
	  //$this->load->view('index.php', $data);   
    }
}