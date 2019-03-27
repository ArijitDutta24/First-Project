<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('cms_model');
		$this->load->library('form_validation');
	
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
	}

	



	public function index(){
		$content_data = array();

		$content_data['cms']=$this->cms_model->getlist();
		$data['content'] = $this->load->view('admin/cms/list', $content_data, TRUE);

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

			// $this->form_validation->set_rules('cms_title','CMS Title','required');
			// $this->form_validation->set_rules('cms_heading','CMS Description Title','required');
   //          $this->form_validation->set_rules('cms_desc','CMS Description','required');
   //          $this->form_validation->set_rules('meta_title','Meta Title','required');
   //          $this->form_validation->set_rules('meta_keyword','Meta keyword','required');
   //          $this->form_validation->set_rules('meta_description','Meta Description','required');
   //          $this->form_validation->set_rules('cms_status','CMS Status','required');
			// if($this->form_validation->run()){
			// 	echo 123;
			// exit;
				$counter=0;
		        $cmsname_existance = $this->cms_model->getcmsname($this->input->post('cms_title'),$id);
		        if($cmsname_existance>0){
		            $this->utility->setMsg('CMS title already exists.', "ERROR");
		            $counter = 1;
		            redirect(base_url('admin/cms'));
		        }
		        if($counter==0){
				 $update_array=array('cms_title'=>$this->input->post('cms_title'),
				 					'cms_heading'=>$this->input->post('cms_heading'),
				 					'cms_slug'=>str_replace(' ','-',strtolower( strip_tags($this->input->post('cms_title')))),
				 					 'cms_description'=>$this->input->post('cms_desc'),
				 					 'meta_title'=>$this->input->post('meta_title'),
				 					 'meta_keyword'=>$this->input->post('meta_keyword'),
				 					 'meta_description'=>$this->input->post('meta_description'),
									 'cms_status'=>$this->input->post('cms_status'));

				 if (!empty($_FILES)) {
                    $dir = "assets/uploads/background_images/";
                    $config['upload_path'] = $dir;
                    $config['allowed_types'] = "*";
                    $this->load->library('upload', $config);

                    if(move_uploaded_file($_FILES['bn_image']['tmp_name'], $dir . time('HIS').$_FILES['bn_image']['name']))
                    {		
                    	$this->load->library('image_lib');
                            $config['image_library'] = 'gd2';
                            $config['source_image'] = 'assets/uploads/background_images/' . time('HIS').$_FILES['bn_image']['name'];
                            $config['maintain_ratio'] = False;
                            $config['width'] = 213;
                            $config['height'] = 89;
                            $this->image_lib->clear();
                            $this->image_lib->initialize($config);

                            // $this->image_lib->resize();
                            $update_array['cms_image']=time('HIS').$_FILES['bn_image']['name'];
                        

                    }



                    
                }


                
                if (!empty($_FILES)) {
                	$_FILES['userFile']['name'] = $_FILES['pdf']['name'];
                     $_FILES['userFile']['type'] = $_FILES['pdf']['type'];
                     $_FILES['userFile']['tmp_name'] = $_FILES['pdf']['tmp_name'];
                     $_FILES['userFile']['error'] = $_FILES['pdf']['error'];
                     $_FILES['userFile']['size'] = $_FILES['pdf']['size'];
                    $dir1 = "assets/uploads/download/";
                    $config1['upload_path'] = $dir1;
                    $config1['allowed_types'] = "pdf";
                    $this->load->library('upload', $config1);
                    $this->upload->initialize($config1);
                    // if(move_uploaded_file($_FILES['pdf']['tmp_name'], $dir1.$_FILES['pdf']['name']))
                    if ($this->upload->do_upload('userFile'))
                    {		
                    	   // $this->image_lib->resize();
                            $update_array['cms_file']=$_FILES['pdf']['name'];
                        

                    }


                    
                    
                }
                

				$update=$this->cms_model->update_cms($update_array,$id);


				redirect('admin/cms');
			  }
			// }
			// else{
			// 	echo 'abs';
			// exit;
			// 	$this->utility->setMsg(validation_errors(),'ERROR');
			// }
		}

        $content_data['cms_info']=$this->cms_model->getcms($id);
		
        if(empty($content_data['cms_info']) || !is_numeric($id))
        {
            $this->utility->setMsg('Some Error Occured.');
            redirect('usertype');
        }

     //  var_dump($content_data);
		$data['content'] = $this->load->view('admin/cms/edit', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

	





	/*public function delete($encoded_id=null)
	{	
		$id=base64_decode($encoded_id);
		$delete=$this->cms_model->delete_cms($id);
		redirect('admin/cms');
	}*/

	





	public function update_status()
	{
		$result=$this->cms_model->update_status();
		redirect('admin/cms');
	}
}