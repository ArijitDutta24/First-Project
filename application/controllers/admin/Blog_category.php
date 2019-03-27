<?php


class Blog_category extends CI_Controller
{

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('common_model');
		$this->load->model('blog_category_model');
		// if(!$this->session->userdata('admin_id'))
		//  {
		//  	redirect('admin/login');
		//  }
	}




	public function index()
	{
		

		$content_data = array();
		$category = $this->blog_category_model->fetchRecord(array('status <>'=> '2'),array('add_date','desc'));
		$content_data['blog_category'] = $category;
		//echo '<pre>';print_r($content_data);
		$data['content'] = $this->load->view('admin/blog_category/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
		

	}



	public function add()
	{
		if($this->input->post())
		{
			$cat_name1 = strtolower(preg_replace('/[^A-Za-z0-9\. -]/', '', str_replace(' ', '-', $this->input->post('cat_name'))));
            $cat_name = preg_replace('/-{2,}/', '-', $cat_name1);
            $catDetails_con=array(
				'cat_name'=>$this->input->post('cat_name'),
				'cat_slug'=>$cat_name,
				'status'=>1,
				'add_date'=>date('Y-m-d H:i:s'),
				'lang_id'=>2,
			);//print_r($catDetails_con); die;
				$this->blog_category_model->addEdit($catDetails_con);
				
			
			$this->utility->setMsg('Category details added','SUCCESS');	
			redirect(base_url().'admin/blog_category');
		}


		$content_data['category'] = $this->blog_category_model->fetchRecord();
		$data['content'] = $this->load->view('admin/blog_category/add', $content_data, TRUE);
		$this->load->view('admin/layout', $data);


	}



	public function delete($cat_id=null)
	{	
		$cat_id=base64_decode($cat_id);
		$datarow = $this->blog_category_model->fetchRow(array('cat_id'=> $cat_id));
		//pr($allbanners);
		
		$deleteid = $this->blog_category_model->delete(array('cat_id'=>$cat_id));
		
		redirect('admin/blog_category');
	}
	




	public function edit($edit_id='')
	{
			$cat_id = base64_decode($edit_id);
			$content_data = array();
			$content_data['category'] = $this->blog_category_model->fetchRow(array('cat_id'=>$cat_id));
			if($this->input->post())
			{

				$cat_name1 = strtolower(preg_replace('/[^A-Za-z0-9\. -]/', '', str_replace(' ', '-', $this->input->post('cat_name'))));
				$cat_name = preg_replace('/-{2,}/', '-', $cat_name1);

				$catDetails=array(
					'cat_name' => $this->input->post('cat_name'),
					'cat_slug'=>$cat_name,
					'lang_id'=>2,
				);
					
				$this->db->where('cat_id',$cat_id);
                $this->db->update('b_category',$catDetails);
				$this->utility->setMsg('Category details update','SUCCESS');	
				redirect(base_url().'admin/blog_category');
			}
			
		$data['content'] = $this->load->view('admin/blog_category/edit', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
		}
		
	
	
		public function category_status($cat_id,$updated_status)
	{
		$cat_id = base64_decode($cat_id);
		$existance = $this->common_model->getAll('b_article',array('cat_id'=>$cat_id)) ;
		if(count($existance)>0)
		{
			$this->utility->setMsg('First you have to delete all the articles under this category.','ERROR');	
			redirect(base_url().'admin/blog_category/list');
		}
		else
		{
			$update_status = array(
				'status' => $updated_status
			);
			$this->common_model->UpdateData('b_category',$update_status,array('cat_id'=>$cat_id));
			$this->utility->setMsg('Status updated','SUCCESS');	
			redirect(base_url().'admin/blog_category');
		}
		
	}
	
	

}





?>