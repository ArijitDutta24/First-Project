<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_article extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('common_model');
		$this->load->model('blog_article_model');
		// if(!$this->session->userdata('admin_id'))
		// {
		// 	redirect('admin/login');
		// }
	}

	

	public function index()
	{
		$content_data = array();
		$category = $this->blog_article_model->fetchRecord();
		$content_data['blog_article'] = $category;
		//echo '<pre>';print_r($content_data);
		//exit;
		$data['content'] = $this->load->view('admin/blog_article/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}
	




	public function add()

	
	{
		$content_data = array();
		if ($this->input->post()) 
		{
			$total_article = $this->common_model->getAll('b_article');
		$title_slug1 = strtolower(preg_replace('/[^A-Za-z0-9\. -]/', '', str_replace(' ', '-', $this->input->post('blog_title'))));
            $title_slug = preg_replace('/-{2,}/', '-', $title_slug1);
				
				$blogDetails = array(
				'meta_tag' 			=> $this->input->post('meta_title'),
            	'meta_description'  => $this->input->post('meta_description'),
            	'cat_id' 			=> $this->input->post('cat_id'),
            	'blog_title' 		=> $this->input->post('blog_title'),
            	'blog_desc' 		=> $this->input->post('blog_desc'),
            	'blog_slug' 		=> $title_slug,
            	'staus' 			=> 1,
            	'create_date' 		=> date('Y-m-d H:i:s'),
				'intro_text' 		=> $this->input->post('intro_text'),
				'display_order' 	=> count($total_article)+1,
				'lang_id'			=>2,
		          );
				if(!empty($_FILES)) 
				{
                    $dir = "assets/uploads/blog_images/";
                    $config['upload_path'] = $dir;
                    $config['allowed_types'] = "*";
                    $this->load->library('upload', $config);
                    $imageName = time('HIS').$_FILES['logo_path']['name'];
                    if(move_uploaded_file($_FILES['logo_path']['tmp_name'], $dir.$imageName))
                    {
        							
                            resizeimage($dir.$imageName,$dir.$imageName,800,300);
                            resizeimage($dir.$imageName,'assets/uploads/blog_images/thumb/'. $imageName,400,150);

                        	$blogDetails['logo_path']=$imageName;
                    }
                    else 
                    {
                        $error = array('error' => $this->upload->display_errors());
                        //pr($error);
                        //die;
                    }
                }
                $this->blog_article_model->addEdit($blogDetails);
                $this->utility->setMsg('Data added successfully!', 'SUCCESS');
                redirect('admin/blog_article');
			}
		$content_data['category_list'] = $this->common_model->getAll('b_category',array('status'=>1,'lang_id'=>2));
		$content_data['total_article'] = $this->common_model->getAll('b_article');
		$content_data['article'] = $this->blog_article_model->fetchRecord();
		$data['content'] = $this->load->view('admin/blog_article/add', $content_data, TRUE);
		$this->load->view('admin/layout', $data);

			
	}
	


		public function edit($edit_id='')
		{
			if($edit_id!='')
			{
				$blog_id = base64_decode($edit_id);
				if($this->input->post())
				{
				$title_slug1 = strtolower(preg_replace('/[^A-Za-z0-9\. -]/', '', str_replace(' ', '-', $this->input->post('blog_title'))));
				$title_slug = preg_replace('/-{2,}/', '-', $title_slug1);
				
				$blogDetails = array(
	            	'meta_tag' => $this->input->post('meta_title'),
	            	'meta_description' => $this->input->post('meta_description'),
	            	'cat_id' => $this->input->post('cat_id'),
	            	'blog_title' => $this->input->post('blog_title'),
					'blog_slug'=>$title_slug,
	            	'blog_desc' => $this->input->post('blog_desc'),
					'intro_text' => $this->input->post('intro_text'),
					'lang_id'=>2,
					//'display_order' => $this->input->post('display_order')
	            );
	            
				if($_FILES['logo_path']['name']!='')
				{
					$dir = "assets/uploads/blog_images/";
                    $config['upload_path'] = $dir;
                    $config['allowed_types'] = "*";
                    $this->load->library('upload', $config);
                    $imageName = time('HIS').$_FILES['logo_path']['name'];
                   if(move_uploaded_file($_FILES['logo_path']['tmp_name'], $dir.$imageName))
                    {
                    		
                    		resizeimage($dir.$imageName,$dir.$imageName,800,300);
							 resizeimage($dir.$imageName,'assets/uploads/blog_images/thumb/'. $imageName,400,150);
                    	            

                        	$blogDetails['logo_path']=$imageName;


                        	if($this->input->post('existing_image')!='')
                        	{
                        		$path = 'assets/uploads/blog_images/'.$this->input->post('existing_image');
                        		@unlink($path);
								$path1 = 'assets/uploads/blog_images/thumb/'.$this->input->post('existing_image');
                        		@unlink($path1);
                        	}
                    }
                    else 
                    {
                        $error = array('error' => $this->upload->display_errors());
                        //pr($error);
                        //die;
                    }
                }

                
                $this->db->where('blog_id',$blog_id);
                $this->db->update('b_article',$blogDetails);
                //$this->sell_product_model->addEdit($insert_array);
                $this->utility->setMsg('Article updated successfully!', 'SUCCESS');
                redirect('admin/blog_article');
			} 
			
			$content_data = array();
			$content_data['category_list'] = $this->common_model->getAll('b_category',array('status'=>1,'lang_id'=>2));
			$content_data['article'] = $this->common_model->getAll('b_article');
			$content_data['blogDetails'] = $this->common_model->getAllRow('b_article',array('blog_id'=>$blog_id)) ;
			$data['content'] = $this->load->view('admin/blog_article/edit', $content_data, TRUE);
			$this->load->view('admin/layout', $data);
		}
		else
		{
			//echo "Edit Failed";die;
			$this->utility->setMsg('Invalid id','ERROR');	
			redirect(base_url().'admin/blog_category/list');
		}
	}
	




	public function article_status($blog_id,$updated_status)
	{
		$blog_id = base64_decode($blog_id);
		$update_status = array(
			'staus' => $updated_status
		);
		$this->common_model->UpdateData('b_article',$update_status,array('blog_id'=>$blog_id));
		$this->utility->setMsg('Status updated','SUCCESS');	
		redirect(base_url().'admin/blog_article');
	}
	



	public function visibility($blog_id,$updated_status)
	{
		$blog_id = base64_decode($blog_id);
		$update_status = array(
			'is_home' => $updated_status
		);
		$this->common_model->UpdateData('b_article',$update_status,array('blog_id'=>$blog_id));
		$this->utility->setMsg('Home page show status updated','SUCCESS');	
		redirect(base_url().'admin/blog_article');
	}
	





	public function delete($blog_id=null)
	{	
		$blog_id=base64_decode($blog_id);
		$datarow = $this->blog_article_model->fetchRow(array('blog_id'=> $blog_id));
		//pr($allbanners);
		
		$deleteid = $this->blog_article_model->delete(array('blog_id'=>$blog_id));
		
		redirect('admin/blog_article');
	}
	





	public function display_order($display_order,$type,$blog_id)
	{
		if($type == 1)
		{
			$new = $display_order-1;
		}
		else
		{
			$new = $display_order+1;
		}
		$update_status = array(
				'display_order' => $new,
			);
		$get = $this->common_model->getAllRow('b_article',array('display_order'=>$new));
		$this->common_model->UpdateData('b_article',array('display_order'=>$display_order),array('blog_id'=>$get['blog_id']));
		$this->common_model->UpdateData('b_article',$update_status,array('blog_id'=>$blog_id));
		$this->utility->setMsg('Display order updated','SUCCESS');	
		redirect(base_url().'admin/blog_article');
	}






	/*public function add_text($edit_id='',$uri)
	{
		if($edit_id!='')
		{
			$cat_id = base64_decode($edit_id);
			if($this->input->post())
			{
				$catDetails_con=array(
					'text' => $this->input->post('text'),
				);
				$this->common_model->UpdateData('b_gallery',$catDetails_con,array('gallery_id'=>$cat_id));
				$this->utility->setMsg('Gallery text update','SUCCESS');	
				redirect(base_url().str_replace('-', '/', $uri));
			}
			$content_data = array();
			$content_data['galleryDetails'] = $this->common_model->getAllRow('b_gallery',array('gallery_id'=>$cat_id)) ;
			$data['content'] = $this->load->view('admin/blog_article/add_text', $content_data, TRUE);
			$this->load->view('admin/layout', $data);
		}
		else
		{
			//echo "Edit Failed";die;
			$this->utility->setMsg('Invalid id','ERROR');	
			redirect(base_url().str_replace('-', '/', $uri));
		}
		
	}



		public function article_gallery($blog_id='')
	{
		$blog_id = base64_decode($blog_id);
		$content_data['gallery_list'] = $this->common_model->getAll('b_gallery',array('status'=>1,'b_article_id'=>$blog_id));
		if($this->input->post())
		{
			$uploaded_pictures = array();
			//echo '<pre>';print_r($_FILES);die;

			if ($_FILES['article_image']['name'][0]!='') 
			{
                $filesCount = count($_FILES['article_image']['name']);
                for ($i = 0; $i < $filesCount; $i++) 
                {
                    $_FILES['userFile']['name'] = time() . '_' . $_FILES['article_image']['name'][$i];
                    $_FILES['userFile']['type'] = $_FILES['article_image']['type'][$i];
                    $_FILES['userFile']['tmp_name'] = $_FILES['article_image']['tmp_name'][$i];
                    $_FILES['userFile']['error'] = $_FILES['article_image']['error'][$i];
                    $_FILES['userFile']['size'] = $_FILES['article_image']['size'][$i];
                    $dir = "assets/uploads/blog_images";
                    $config['upload_path'] = $dir;
                    $config['allowed_types'] = "*";
                    $config['encrypt_name'] = true;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('userFile')) 
                    {
                        $fileData = $this->upload->data();
                        $picture_name = $fileData['file_name'];
                        $uploaded_pictures[] = array(
                        	'type' => 1,
                        	'path' => $picture_name,
                        	'status' => 1,
                        	'b_article_id' => $blog_id
                        );

                        $this->load->library('image_lib');
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = 'assets/uploads/blog_images' . $picture_name;
                        $config['new_image'] = 'assets/uploads/blog_images/350_thumb/' . $picture_name;
                        $config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = 350;
                        $config['height'] = 350;
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();
                        $this->image_lib->clear();

                        $this->load->library('image_lib');
                        $config1['image_library'] = 'gd2';
                        $config1['source_image'] = 'assets/uploads/blog_images/' . $picture_name;
                        $config1['new_image'] = 'assets/uploads/blog_images/900_thumb/' . $picture_name;
                        $config1['create_thumb'] = TRUE;
                        $config1['maintain_ratio'] = TRUE;
                        $config1['width'] = 900;
                        $config1['height'] = 600;
                        $config1['thumb_marker'] = '';
                        $this->image_lib->initialize($config1);
                        $this->image_lib->resize();
                        $this->image_lib->clear();
                        
                    } 
                    else 
                    {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                        exit;
                    }
                }
            }
            if($this->input->post('video_url')!='')
            {
            	$url = $this->input->post('video_url');
            	if(strpos($url, 'youtube') > 0){
            		parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
					$uploaded_pictures[] = array(
	                	'type' => 2,
	                	'path' => $my_array_of_vars['v'],
	                	'status' => 1,
	                	'b_article_id' => $blog_id
	                );
            	}if(strpos($url, 'vimeo') > 0){
            		$vimeo_code = (int) substr(parse_url($url, PHP_URL_PATH), 1);
            		$uploaded_pictures[] = array(
	                	'type' => 3,
	                	'path' => $vimeo_code,
	                	'status' => 1,
	                	'b_article_id' => $blog_id
	                );
            	}
            	$uploaded_pictures[] = array(
	                	'type' => 3,
	                	'path' => $url,
	                	'status' => 1,
	                	'b_article_id' => $blog_id
	                );
				  

            }
            //echo "TEST";die;
            if(count($uploaded_pictures)==0)
            {
            	$this->utility->setMsg('Please upload some images or add video url','ERROR');	
				redirect(base_url().'admin/blog_article/article_gallery/'.base64_encode($blog_id));
            }
            else
            {
            	//echo '<pre>';print_r($uploaded_pictures);die;
            	foreach($uploaded_pictures as $insert_value)
            	{
            		$this->common_model->insertData('b_gallery',$insert_value);
					
            	}
            	$this->utility->setMsg('Gallery updated successfully','SUCCESS');	
				redirect(base_url().'admin/blog_article/article_gallery/'.base64_encode($blog_id));
            }
		}
		//echo '<pre>';print_r($content_data);die;
		$data['content'] = $this->load->view('admin/blog_article/gallery', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}
	





	public function delete_gallery($gallery_id,$blog_id)
	{
		$gallery_id = base64_decode($gallery_id);
		//$blog_id = base64_decode($blog_id);
		$gallery_details = $this->common_model->getAllRow('b_gallery',array('gallery_id'=>$gallery_id)) ;
		if($gallery_details['type']==1)
		{
			$explode_image = explode('.',$gallery_details['path']);
			$imageName = $explode_image[0].'_thumb.'.$explode_image[1];
			$main_image_path = 'assets/userfiles/blog_articles/'.$gallery_details['path'];
			$middle_thumb = 'assets/userfiles/blog_articles/350_thumb/'.$imageName;
			$big_thumb = 'assets/userfiles/blog_articles/900_thumb/'.$gallery_details['path'];
			if(file_exists($main_image_path))
			{
				unlink($main_image_path);
			}
			if(file_exists($middle_thumb))
			{
				unlink($middle_thumb);
			}
			if(file_exists($big_thumb))
			{
				unlink($big_thumb);
			}
		}
		$this->common_model->deleteData('b_gallery',array('gallery_id'=>$gallery_id));
		$this->utility->setMsg('Gallery deleted','SUCCESS');	
		redirect(base_url().'admin/blog_article/article_gallery/'.$blog_id);
	}*/

}




