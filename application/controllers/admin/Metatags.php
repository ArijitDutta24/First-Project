<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metatags extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('common_model');
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
	}
	public function index(){
		$content_data = array();
		$content_data['metatags']=$this->common_model->getAll('metatags');
		$data['content'] = $this->load->view('admin/metatags/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}
	public function edit($encoded_id=null)
	{
		$content_data = array();
		$id=base64_decode($encoded_id);
		if($this->input->post()){
			if($this->utility->getSecurity()!=$this->input->post('frmSecurity')){
				$this->utility->setMsg('Session expired.. Please try again..','ERROR');
				redirect(base_url().'admin/login');
			}
			$this->form_validation->set_rules('meta_title','Meta Title','required');
            $this->form_validation->set_rules('meta_desc','Meta Description','required');
            $this->form_validation->set_rules('meta_keywords','Meta Keywords','required');
            if($this->form_validation->run()){
				$update_array=array('meta_title'=>$this->input->post('meta_title'),
				 					'meta_desc'=>$this->input->post('meta_desc'),
				 					'meta_keywords'=>$this->input->post('meta_keywords'),
				 					);

				$update=$this->common_model->UpdateData('metatags',$update_array,array('id'=>$id));
				redirect('admin/metatags');
			}
			else{
				$this->utility->setMsg(validation_errors(),'ERROR');
			}
		}
		$content_data['metainfo']=$this->common_model->getAllRow('metatags',array('id'=>$id));
		$data['content'] = $this->load->view('admin/metatags/edit', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}
}