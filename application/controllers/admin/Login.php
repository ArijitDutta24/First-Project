<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller

{

	public function __construct()

	{ 

		parent:: __construct();

		$this->load->model('users_model');

	}

	public function index()

	{

		if($this->checkLogin(false)){

			redirect(base_url().'admin/dashboard');

		}

		$this->load->view('admin/login');

	}

	public function doLogin()

	{

		if($this->input->post())

		{

			if($this->utility->getSecurity()!=$this->input->post('frmSecurity'))

			{

				$this->utility->setMsg('Session expired.. Please try again..','ERROR');

				redirect(base_url().'admin/login/index');

			}

			$this->form_validation->set_rules('email','Email','trim|required|valid_email');

			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run())

			{

				$isExist=$this->users_model->fetchRow(array(

						'email'=>$this->utility->info_cleanQuery($this->input->post('email')),

						'password'=>md5($this->utility->info_cleanQuery($this->input->post('password')))

					));

				if($isExist)

				{

					if(!$isExist['last_login'])

						$isExist['last_login']=$this->currentTime;

					$this->register_veriables($isExist);

					$this->register_current_login($isExist['username']);

					$this->session->set_userdata('usertype',$isExist['user_type_id']);

					$this->session->set_userdata('userimg',$isExist['profile_image']);

					$this->utility->setMsg('Successfully logged in.','SUCCESS');
					//echo "aa";exit;

						redirect(base_url().'admin/dashboard');

				}

				else

				{

					$isExist=$this->users_model->fetchRow(array(

													'email'=>$this->utility->info_cleanQuery($this->input->post('email')),

													'password'=>sha1($this->utility->info_cleanQuery($this->input->post('password')))

												));

					if($isExist)

					{ 

						if(!$isExist['last_login'])

							$isExist['last_login']=$this->currentTime;

						$this->register_veriables($isExist);

						$this->register_current_login($isExist['username']);

						

						$data=array(

							'new_password'=>'',

							'password'=>sha1($this->utility->info_cleanQuery($this->input->post('password')))

						);

						$this->users_model->addEdit($data,array('username'=>$isExist['username']));

						$this->session->set_userdata('usertype',$isExist['user_type_id']);

						$this->session->set_userdata('userimg',$isExist['profile_image']);

						$this->utility->setMsg('Successfully logged in.','SUCCESS');

						redirect(base_url().'admin/dashboard');

					}

					else{

						$this->utility->setMsg('Invalid username and password','ERROR');

						redirect(base_url().'admin/login');

					}

				}

			}

			else{

				$this->utility->setMsg(validation_errors(),'ERROR');

				redirect(base_url().'admin/login');

			}

		}

		else

		{

			redirect(base_url().'admin/login');

		}

	}

	public function logout()

	{

		$data=array(

			'user_id'=>'',

			'username'=>'',

			'last_login'=>''

		);

		$this->unregister_veriables($data);

                $this->utility->setMsg('Successfully Logged out','SUCCESS');

		redirect(base_url().'admin/login');

	}

	private function unregister_veriables($data)

	{

		foreach($data as $key=>$value)

		{

			$this->session->unset_userdata($key);

		}

	}

	private function register_veriables($data)

	{

		foreach($data as $key=>$value)

		{

			$session_key=$key;

			if($key=='id')

				$session_key="user_id";

			if($key=="password")

				continue;

			$this->session->set_userdata($session_key,$value);

		}

	}

	private function register_current_login($username)

	{

		$data=array(

			'last_login'=>$this->currentTime

		);

		$this->users_model->addEdit($data,array('username'=>$username));

	}



	private function checkLogin($redirect=true)

	{

		if($this->session->userdata('user_id'))

			return true;

		else{

			if($redirect)

				redirect(base_url().'admin/login');

			return false;

		}

	}

}

?>