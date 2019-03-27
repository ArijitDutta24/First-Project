<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('blogs_model');
	    $this->load->model('blog_pictures_model');
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
	}

	public function index(){
		$content_data = array();

		$content_data['blog']=$this->blogs_model->fetchRecord(array('blog_status <>'=> '2'),array('blog_id','desc'));
		$data['content'] = $this->load->view('admin/blog/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

	public function add()
	{

		$content_data = array();
		if($this->input->post()){
			if($this->utility->getSecurity()!=$this->input->post('frmSecurity')){
			
				$this->utility->setMsg('Session expired.. Please try again..','ERROR');
				redirect(base_url().'admin/login');
			}
			$this->form_validation->set_rules('blog_title','Blog Title','required');
            $this->form_validation->set_rules('blog_desc','Blog Description','required');
            $this->form_validation->set_rules('blogshort_description','Blog Short Description','required');
            //$this->form_validation->set_rules('blog_image','Blog Image','required');
            $this->form_validation->set_rules('blog_status','Blog Status','required');

			if($this->form_validation->run()){
			    $insert_array=array('blog_title'=>$this->input->post('blog_title'),
				 					 'blog_description'=>$this->input->post('blog_desc'),
				 					 'blog_short_description'=>$this->input->post('blogshort_description'),
				 					 'blog_add_date'=>date("Y-m-d H:i:s"),
									 'blog_status'=>$this->input->post('blog_status'));

				$insert=$this->blogs_model->addEdit($insert_array);

				if($_FILES)
				{
					$dir="assets/uploads/blog_images";
					
					$config['upload_path']   = $dir; 
		       		$config['allowed_types']="*";
		       		$this->load->library('upload', $config);
		    
		         if( ! $this->upload->do_upload('blog_image'))
		          {
		          $error = array('error' => $this->upload->display_errors()); 
		          //print_r($error);exit;
		          }
		    	  else 
		       	  { 
		          $data = array('upload_data' => $this->upload->data()); 
		          $insert_array=array('blog_id'=>$insert,
				 					 'path'=>$data['upload_data']['file_name']);
		          $insertpicture=$this->blog_pictures_model->addEdit($insert_array);     
		      	  }
			    }

				redirect('admin/blog');
			 //}
			}
			else{
				$this->utility->setMsg(validation_errors(),'ERROR');
			}
		}
		$data['content'] = $this->load->view('admin/blog/add', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

	public function edit($encoded_id=null)
	{
		$content_data = array();
		$id=base64_decode($encoded_id);
	

		if($this->input->post())
		{
			if($this->utility->getSecurity()!=$this->input->post('frmSecurity')){
				$this->utility->setMsg('Session expired.. Please try again..','ERROR');
				redirect(base_url().'admin/login');
			}
			$this->form_validation->set_rules('blog_title','Blog Title','required');
            $this->form_validation->set_rules('blog_desc','Blog Description','required');
            $this->form_validation->set_rules('blogshort_description','Blog Short Description','required');
            //$this->form_validation->set_rules('blog_image','Blog Image','required');
            $this->form_validation->set_rules('blog_status','Blog Status','required');
			if($this->form_validation->run())
			{
				
				 $update_array=array('blog_title'=>$this->input->post('blog_title'),
				 					 'blog_description'=>$this->input->post('blog_desc'),
				 					 'blog_short_description'=>$this->input->post('blogshort_description'),
									 'blog_status'=>$this->input->post('blog_status'));

				$update=$this->blogs_model->addEdit($update_array,array('blog_id'=>$id));

				if($_FILES)
				{
					$dir="assets/uploads/blog_images";
					
					$config['upload_path']   = $dir; 
		       		$config['allowed_types']="*";
		       		$this->load->library('upload', $config);
		    
		         if( ! $this->upload->do_upload('blog_image'))
		          {
		          $error = array('error' => $this->upload->display_errors()); 
		          //print_r($error);exit;
		          }
		    	  else 
		       	  { 
		          $data = array('upload_data' => $this->upload->data()); 
		          $findpicture = $this->blog_pictures_model->fetchRow(array('blog_id'=>$id));
		          unlink("assets/uploads/blog_images/".$findpicture['path']);
		          $insert_array=array('path'=>$data['upload_data']['file_name']);
		          $insertpicture=$this->blog_pictures_model->addEdit($insert_array,array('blog_id'=> $id));     
		      	  }
			    }


				redirect('admin/blog');
			  
			}
			else{
				$this->utility->setMsg(validation_errors(),'ERROR');
			}
		}

        $content_data['blog_info']=$this->blogs_model->getproductinfo($id);
        //pr($content_data['blog_info']);
        if(empty($content_data['blog_info']) || !is_numeric($id))
        {
            $this->utility->setMsg('Some Error Occured.');
            redirect('admin/blog');
        }

       
		$data['content'] = $this->load->view('admin/blog/edit', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

	public function delete($encoded_id=null)
	{	
		$id=base64_decode($encoded_id);
		$deleteid = $this->blogs_model->delete(array('blog_id'=>$id));
		$findpicture = $this->blog_pictures_model->fetchRow(array('blog_id'=>$id));
		unlink("assets/uploads/blog_images/".$findpicture['path']);
		$deletepicid = $this->blog_pictures_model->delete(array('blog_id'=>$id));
		redirect('admin/blog');
	}

	public function update_status()
	{
		if($this->input->post('status')=='1')
		{
			$insert_array=array('blog_status'=>'0');
		}
		else
		{
            $insert_array=array('blog_status'=>'1');
		}
		$id=$this->input->post('edit_id');
		$result=$this->blogs_model->addEdit($insert_array,array('blog_id'=> $id));
		redirect('admin/blog');
	}
	public function setinhomepage($encoded_id=null)
	{
		$id=base64_decode($encoded_id);
		$insert_array=array('homepage_status'=>'1');
		$result=$this->blogs_model->addEdit($insert_array,array('blog_id'=> $id));
		redirect('admin/blog');
	}
	public function unsetfromhomepage($encoded_id=null)
	{
		$id=base64_decode($encoded_id);
		$insert_array=array('homepage_status'=>'2');
		$result=$this->blogs_model->addEdit($insert_array,array('blog_id'=> $id));
		redirect('admin/blog');
	}
}