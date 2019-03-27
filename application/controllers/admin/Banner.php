<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('common_helper');
		$this->load->model('banner_model');
		if(!$this->session->userdata('user_id'))
		{
			redirect('admin/login');
		}
	}

	public function index()
	{

		$content_data = array();
		$banner = $this->banner_model->fetchRecord(array('status <>'=> '2'),array('add_date','desc'));
		$content_data['banner'] = $banner;
		//echo '<pre>';print_r($content_data);
		$data['content'] = $this->load->view('admin/banner/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
		
	}

	public function add()
	{
		$content_data = array();
		
		
		if ($this->input->post()) 
		{
			// $this->load->library('excel.php');
			if ($this->utility->getSecurity() != $this->input->post('frmSecurity')) 
			{

				$this->utility->setMsg('Session expired.. Please try again..', 'ERROR');
				redirect(base_url() . 'admin/login');
			}
			$this->form_validation->set_rules('flow','Banner Flow Number','required');
			$this->form_validation->set_rules('banner_status','Banner Status','required');
			
			if ($this->form_validation->run()) 
			{
				$counter = 0;
				$insert_array = array(
					'flow_num' => $this->input->post('flow'),
					'add_date'=>date("Y-m-d H:i:s"),
					'status'=>$this->input->post('banner_status')
		          );
				if(!empty($_FILES)) 
				{
                    $dir = "assets/uploads/banner_image/";
                    $config['upload_path'] = $dir;
                    $config['allowed_types'] = "*";
                    $this->load->library('upload', $config);
                    $imageName = $_FILES['banner_image']['name'];
                    if(move_uploaded_file($_FILES['banner_image']['tmp_name'], $dir.$imageName))
                    {                    		 
                            resizeimage($dir.$imageName,$dir.$imageName,1600,750);
                        	$insert_array['banner_image']=$imageName;
                    }else 
                    {
                        $error = array('error' => $this->upload->display_errors());
                        //pr($error);
                        //die;
                    }
                }
                // echo $imageName;
                // exit;
                $where = array('flow_num'=>$this->input->post('flow'));
                $content_data['banner1'] = $this->banner_model->fetchRec($where);
                
                $where1 = array('banner_image'=>$imageName);
                $content_data['banner2'] = $this->banner_model->fetchRec($where1);

                if(!empty($content_data['banner1']))
                {
	                
	                $this->utility->setMsg('Banner Flow Number Already Exist!', 'ERROR');
	                
            	}
            	elseif (!empty($content_data['banner2'])) 
            	{
            		$this->utility->setMsg('Banner Image Already Exist!', 'ERROR');
            	}
            	else
            	{
            		$this->banner_model->addEdit($insert_array);
	                $this->utility->setMsg('Banner Image added successfully!', 'SUCCESS');
	                redirect('admin/banner');
            	}
			} else 
			{
				$this->utility->setMsg(validation_errors(), 'ERROR');
			}
		}
		$content_data['banner'] = $this->banner_model->fetchRecord();
		$data['content'] = $this->load->view('admin/banner/add', $content_data, TRUE);
		$this->load->view('admin/layout', $data);

			
	}




	public function edit($product_id='') 
	{
		$product_id = base64_decode($product_id);
		$content_data = array();
		$content_data['banner'] = $this->banner_model->fetchRow(array('banner_id'=>$product_id));
		if ($this->input->post()) 
		{
			if ($this->utility->getSecurity() != $this->input->post('frmSecurity')) 
			{

				$this->utility->setMsg('Session expired.. Please try again..', 'ERROR');
				redirect(base_url() . 'admin/login');
			}
			// $this->form_validation->set_rules('flow','Name','trim');
			$this->form_validation->set_rules('flow','Banner Flow Number','required');
			
			

			if ($this->form_validation->run()) 
			{
				$counter = 0;
				$update_array = array(
									  'flow_num' => $this->input->post('flow'),
		          					  'add_date'=>date("Y-m-d H:i:s"),
									  'status'=>1
				);
				//echo '<pre>';print_r($_FILES);
				if($_FILES['banner_image']['name']!='') 
				{
					//echo "TEST";die;
                    $dir = "assets/uploads/banner_image/";
                    $config['upload_path'] = $dir;
                    $config['allowed_types'] = "*";
                    $this->load->library('upload', $config);
                    $imageName = $_FILES['banner_image']['name'];
                    if(move_uploaded_file($_FILES['banner_image']['tmp_name'], $dir.$imageName))
                    {
                    		
                    		resizeimage($dir.$imageName,$dir.$imageName,1600,750);
                             

                        	$update_array['banner_image']=$imageName;


                        	if($this->input->post('existing_image')!='')
                        	{
                        		$path = 'assets/uploads/banner_image/'.$this->input->post('existing_image');
                        		unlink($path);
                        	}
                    }
                    else 
                    {
                        $error = array('error' => $this->upload->display_errors());
                        }
                }
                
                $this->db->where('banner_id',$product_id);
                $this->db->update('banners',$update_array);
                //$this->sell_product_model->addEdit($insert_array);
                $this->utility->setMsg('Banner updated successfully!', 'SUCCESS');
                redirect('admin/banner');
			} 
			else
			{
				$this->utility->setMsg(validation_errors(), 'ERROR');
				redirect('admin/banner/edit/'.base64_encode($product_id));
			}
		}


		$data['content'] = $this->load->view('admin/banner/edit', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}



	public function update_status()
	{
		if($this->input->post('status')==1)
		{
			$insert_array=array('status'=>0);
		}
		else
		{
            $insert_array=array('status'=>1);
		}
		
		$id=$this->input->post('edit_id');
		$result=$this->banner_model->addEdit($insert_array,array('banner_id'=> $id));
		redirect('admin/banner');
	}


	
	public function delete($banner_id=null)
	{	
		$id=base64_decode($banner_id);
		$datarow = $this->banner_model->fetchRow(array('banner_id'=> $id));
		//pr($allbanners);
		
		$deleteid = $this->banner_model->delete(array('banner_id'=>$id));
		unlink("assets/uploads/banner_image/".$datarow['banner_image']);
		redirect('admin/banner');
	}

	


	
}
