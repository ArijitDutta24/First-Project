<?php

defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set("display_errors", 1);

 class Holiday_package_activity extends CI_Controller
 {

     public function __construct()
     {
         parent::__construct();
         $this->load->library('form_validation');
         // $this->load->model('user/user_model');
         // $this->load->model('user/user_type_model');
         // $this->load->model('module/module_model');
         // $this->load->model('module/sub_module_model');
         // $this->load->model('user/user_access_model');
         // $this->load->model('user/user_module_association_model');
         // $this->load->model('holiday_store_model');
         $this->load->model('holiday_package_activity_model');
         // $this->load->model('holiday_package/holiday_hotel_model'); 
         // $this->load->model('holiday_package/holiday_destination_model');
         $this->load->model('holiday_package_themes');
         $this->load->model('activity_gallery_model');

         if (!$this->session->userdata('user_id'))
         {
             redirect('admin/login');
         }
     }

     
     public function index()
     {


        $content_data = array();
        $data = array();

        $content_data['activity_details'] = $this->holiday_package_activity_model->fetchRecord();
        
        $data['content'] = $this->load->view('admin/holiday_package/holiday_package_activity_list', $content_data, TRUE);
        $this->load->view('admin/layout', $data);
     }




     public function activity_add_edit($activity_id='')
     {

         $content_data = array();

         $content_data['theme_details'] = $this->holiday_package_themes->fetchRecord();


         if ($this->input->post())
         {

            if ($this->utility->getSecurity() != $this->input->post('frmSecurity'))
            {
                $this->utility->setMsg('Session expired. Please try again..', 'ERROR');
                redirect(base_url() . 'login');
            }

            $this->form_validation->set_rules('activity_name', 'Activity Name', 'required');
           
            $this->form_validation->set_rules('activity_price', 'Activity Price', 'required');

            $this->form_validation->set_rules('activity_duration', 'Activity Duration', 'required');
            
            $this->form_validation->set_rules('activity_description', 'Activity Description', 'required');

            //$this->form_validation->set_rules('activity_inclusions', 'Activity Inclusions', 'required');

            $this->form_validation->set_rules('activity_terms_conditions', 'activity Exclusions', 'required');

             

            if ($activity_id != '')
            {

                $activity_existance = $this->holiday_package_activity_model->fetchRecord(array('activity_name' => trim($this->input->post('activity_name')),'activity_id!='=>base64_decode($activity_id)));

                if (!empty($activity_existance))
                {
                   
                   $this->utility->setMsg("Activity already exists", 'ERROR');

                   redirect(base_url("admin/holiday_package_activity"));

                }
            }
            else
            {
                $activity_existance = $this->holiday_package_activity_model->fetchRecord(array('activity_name' => trim($this->input->post('activity_name'))));

                if (!empty($activity_existance))
                {
                  
                    $this->utility->setMsg("Activity already exists", 'ERROR');
                    redirect(base_url("admin/holiday_package_activity"));
                }
            }

            if ($this->form_validation->run() == FALSE)
             {

                $this->utility->setMsg(validation_errors(), 'ERROR');
             }
             else
             {

             $ins_array = array(
                 'activity_name'             => trim($this->input->post('activity_name')),
             	 
                 'activity_slug'             =>url_title(strtolower($this->input->post('activity_name'))),        
                 
                 'activity_price'            => $this->input->post('activity_price'),
                 
                 'activity_duration'         => $this->input->post('activity_duration'),
                 
                 'activity_description'      => $this->input->post('activity_description'),
                 
                 'activity_inclusions'       => !empty($this->input->post('activity_inclusions'))?($this->input->post('activity_inclusions')):'',
                 
                 'activity_terms_conditions' => !empty($this->input->post('activity_terms_conditions'))?($this->input->post('activity_terms_conditions')):'',
                 
                 'theme_id'                  => !empty($this->input->post('theme_id'))?($this->input->post('theme_id')):0,
                 
                 'activity_status'           =>$this->input->post('activity_status')
                
             );


             if ($activity_id != '')
             {
                $update_item = $this->holiday_package_activity_model->addEdit($ins_array, array('activity_id' => base64_decode($activity_id)));
                if ($update_item)
                {
                    $this->utility->setMsg('Activity Updated Successfully', 'Success');
                    redirect(base_url("admin/holiday_package_activity"));
                }
             }
             else
             {
                $associateId = $this->holiday_package_activity_model->addEdit($ins_array);

                if ($associateId)
                {
                    $this->utility->setMsg('Activity Inserted Successfully', 'Success');
                    redirect(base_url("admin/holiday_package_activity"));
                }

                 //redirect(base_url('admin/gift_store'));
             }

            }
            

         }

         if ($activity_id != '')
         {
             $content_data['activity_details'] = $this->holiday_package_activity_model->fetchRow(array('activity_id'=> base64_decode($activity_id))); 

         }
         else
         {
            $content_data['activity_details'] = array();
         }

       
       
        if ($activity_id != '')
        {
            $data['content'] = $this->load->view('admin/holiday_package/holiday_package_activity_edit', $content_data, TRUE);
        }
        else
        {
            $data['content'] = $this->load->view('admin/holiday_package/holiday_package_activity_add', $content_data, TRUE);
        }

        $this->load->view('admin/layout', $data);
     }




     public function update_status()
     {

        if ($this->input->post('status') == '1')
        {
            $insert_array = array('activity_status' => '0');
        }
        else
        {
            $insert_array = array('activity_status' => '1');
        }
        $id = $this->input->post('edit_id');
        $store_id = base64_encode($this->input->post('store_id'));
        $result = $this->holiday_package_activity_model->addEdit($insert_array, array('activity_id' => $id));
        $this->utility->setMsg('Staus Changed Successfully', 'Success');
        redirect(base_url("admin/holiday_package_activity"));
     }

     public function gallery($activity_id = '')
     {
         $content_data = array();
         $data = array();
         $activity_id = base64_decode($activity_id);


         $content_data['activity_details'] = $this->holiday_package_activity_model->fetchRow(array('activity_id' => $activity_id));
         

         if ($this->input->post())
         {
            // pr($_FILES);
             if (!empty($_FILES))
             {
                 $filesCount = count($_FILES['activity_image']['name']);

                 for ($i = 0; $i < $filesCount; $i++)
                 {
                     $_FILES['userFile']['name'] = time() . '_' . $_FILES['activity_image']['name'][$i];
                     $_FILES['userFile']['type'] = $_FILES['activity_image']['type'][$i];
                     $_FILES['userFile']['tmp_name'] = $_FILES['activity_image']['tmp_name'][$i];
                     $_FILES['userFile']['error'] = $_FILES['activity_image']['error'][$i];
                     $_FILES['userFile']['size'] = $_FILES['activity_image']['size'][$i];
                     $dir = "assets/uploads/activity_images/";
                     $config['upload_path'] = $dir;
                     $config['allowed_types'] = "*";
                     $this->load->library('upload', $config);
                     $this->upload->initialize($config);
                     if ($this->upload->do_upload('userFile'))
                     {
                         $fileData = $this->upload->data();
                         $uploadData[$i]['file_name'] = $fileData['file_name'];
                     }
                     else
                     {
                         $error = array('error' => $this->upload->display_errors());
                         print_r($error);
                         exit;
                     }
                 }
             }
             if (!empty($uploadData))
             {
                
                 foreach ($uploadData as $value)
                 {
                     $insert = $this->activity_gallery_model->addEdit(array('activity_id' => $activity_id, 'activity_image' => $value['file_name']));

                     $this->load->library('image_lib');
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = 'assets/uploads/activity_images/' . $value['file_name'];
                     $config['maintain_ratio'] = TRUE;
                     $config['width'] = 1024;
                     $config['height'] = 800;
                     $this->image_lib->clear();
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();
                     //resize:
                     $this->image_lib->clear();
                     $config['image_library'] = 'gd2';
                     $config['source_image'] = 'assets/uploads/activity_images/' . $value['file_name'];
                     $config['new_image'] = 'assets/uploads/activity_images/thumb/' . $value['file_name'];
                     $config['create_thumb'] = TRUE;
                     $config['maintain_ratio'] = TRUE;
                     $config['width'] = 150;
                     $config['height'] = 100;
                     $config['thumb_marker'] = '';
                     $this->image_lib->clear();
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();
                 }
             }

             $this->utility->setMsg('Gallery Updated', 'SUCCESS');
             redirect(base_url('admin/holiday_package_activity/gallery/' . base64_encode($activity_id)));
         }

         $content_data['activity_id'] = $activity_id;
         $content_data['activity_gallery'] = $this->activity_gallery_model->fetchRecord(array('activity_id' => $activity_id));
         // pr($content_data['activity_gallery']);
         $data['content'] = $this->load->view('admin/holiday_package/activity_gallery', $content_data, TRUE);
         $this->load->view('admin/layout', $data);
     }

      public function delImage($id = '', $activity_id = '')
     {
         if (!empty($id))
         {
             $id = base64_decode($id);
             // echo $id;
             // echo $activity_id;
             // exit;
             $isDeleted = $this->activity_gallery_model->deleteActivityImage($id);
             if (!empty($isDeleted))
             {
                redirect(base_url('admin/holiday_package_activity/gallery/' . $activity_id));
             }
         }
     }

 }
 