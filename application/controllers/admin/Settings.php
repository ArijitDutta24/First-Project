<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('settings_model');
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
	}

	public function index(){
		$content_data = array();
		$content_data['settings']=$this->settings_model->getlist();
		$data['content'] = $this->load->view('admin/settings/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

	public function edit($encoded_slug)
	{
		$content_data = array();
		$slug=base64_decode($encoded_slug);
		

		if($this->input->post()){
			if($this->utility->getSecurity()!=$this->input->post('frmSecurity')){
				$this->utility->setMsg('Session expired.. Please try again..','ERROR');
				redirect(base_url().'admin/login');
			}
			if($this->input->post('is_text') || $this->input->post('is_textarea'))
			{
				$this->form_validation->set_rules('settings_name','Settings Name','required');
				$this->form_validation->set_rules('settings_value','Settings Value','required');
				if($this->form_validation->run()){
				$update_array=array('setting_name'=>$this->input->post('settings_name'),
									'setting_value'=>$this->input->post('settings_value'));

				$update=$this->settings_model->update_settings($update_array,$slug);
				redirect('admin/settings');
			  }
			  else
			  {
			  	$this->utility->setMsg(validation_errors(),'ERROR');
			  }
			}
			if($this->input->post('is_image'))
			{
				$this->form_validation->set_rules('settings_name','Settings Name','required');
				if($this->form_validation->run()){
				$dir="assets/uploads/site_settings/";
				@unlink($dir.$content_data['settings']['setting_value']);
			   $config['upload_path']   = $dir; 
		       $config['allowed_types']="*";
		       $this->load->library('upload', $config);
		    
		       if ( ! $this->upload->do_upload('image')) {
		          $error = array('error' => $this->upload->display_errors()); 
		          print_r($error);exit;
		        }
		    
		       else { 
		          $data = array('upload_data' => $this->upload->data()); 
		          $cv="upload/".$data['upload_data']['file_name'];

		          //print_r($data);exit;
		          	$update_array=array('setting_name'=>$this->input->post('settings_name'),
				 					    'setting_value'=>$data['upload_data']['file_name']);
				 	$update=$this->settings_model->update_settings($update_array,$slug);
					redirect('settings');
        		} 
			}
			else{
				$this->utility->setMsg(validation_errors(),'ERROR');
			}
		 }
		}

		$content_data['settings']=$this->settings_model->getsettings($slug);

		 if(empty($content_data['settings']) || $slug=="")
		{
			$this->utility->setMsg('Some Error Occured.');
			redirect('settings');
		}
		$data['content'] = $this->load->view('admin/settings/edit', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}
}

?>