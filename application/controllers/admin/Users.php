<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('common_model');
		$this->load->model('modules_model');
		$this->load->model('user_permissions_model');
		if(!$this->session->userdata('user_id'))
		{
			redirect('login');
		}
	}

	public function index(){
		$content_data = array();
        if($this->input->post('user_type')!=''){
            $content_data['user_type'] = $this->input->post('user_type');
            if($this->input->post('user_type')=='emp'){
                $emp_search = "`user_type_id` != '7' AND ".$this->input->post('search_key')." like '".$this->input->post('search_value')."%'";
                $client_search = array(
                    'user_type_id' => '7'
                );
            }if($this->input->post('user_type')=='client'){
                $emp_search = array(
                    'user_type_id !=' => '7'
                );
                $client_search = "`user_type_id` = '7' AND ".$this->input->post('search_key')." like '".$this->input->post('search_value')."%'";
            }
            $content_data['search_key'] = $this->input->post('search_key');
            $content_data['search_value'] = $this->input->post('search_value');
        }else{
            $content_data['user_type'] = 'emp';
            $emp_search = array(
                'user_type_id !=' => '7'
            );
            $client_search = array(
                'user_type_id' => '7'
            );
            $content_data['search_key'] = '';
            $content_data['search_value'] = '';
        }
        
        $content_data['users']=$this->users_model->fetchRecord($emp_search);
        $content_data['client']=$this->users_model->fetchRecord($client_search);
		$data['content'] = $this->load->view('admin/users/list', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

	public function delete(){
		if($this->input->post()){
			$user_id = $this->input->post('edit_id');
			if($user_id > 0){
				$this->users_model->delete(array('user_id' => $user_id));
				$this->utility->setMsg('Record successfully deleted!', 'SUCCESS');
			}
		}else{
			$this->utility->setMsg('Deletion failed!', 'ERROR');
		}
		redirect(base_url('admin/users'));
	}
    public function multiple_select()
    {
         $arr_course = $this->input->post('skills[]');
         if(empty($arr_course)):
            $this->form_validation->set_message('multiple_select','The Skill field is required.');
            return false;
         endif;
    }
	public function add($user_type){
        if($user_type==''){
            redirect('admin/users');
        }else{
    		$content_data = array();
    		$this->load->model('common_model');
    		$content_data['user_types'] = $this->common_model->getAll('tbl_user_type');
    		$content_data['skills'] = $this->common_model->getAll('tbl_skill');
    		if($this->input->post()){
    			if($this->utility->getSecurity()!=$this->input->post('frmSecurity')){
    				$this->utility->setMsg('Session expired.. Please try again..','ERROR');
    				redirect(base_url().'login');
    			}
                $this->form_validation->set_rules('full_name','Full name','required');
    			$this->form_validation->set_rules('username','Username','required');
    			$this->form_validation->set_rules('password','Password','required');
    			$this->form_validation->set_rules('email','Email id','required|valid_email');
    			$this->form_validation->set_rules('contact_no','Contact number','required');
                if($this->input->post('user_type_id')!='client'){
                    $this->form_validation->set_rules('skills[]', 'Skill','required');
                    $this->form_validation->set_rules('doj','Joining date','required');
                }
                /*$this->form_validation->set_rules('skills','Skill','required|callback_multiple_select');
                $this->form_validation->set_message('multiple_select', 'Select at least one skill');*/
                //$this->form_validation->set_rules('contact_no','Contact number','required');
    			if($this->form_validation->run()){
                    //echo '<pre>';print_r($_POST);die;
                    $counter=0;
                    $this->db->where('username',$this->input->post('username'));
                    $this->db->where('user_status','1');
                    $username_existance = $this->db->get('tbl_user');
                    if($username_existance->num_rows()>0){
                        $this->utility->setMsg('Username already exists.', "ERROR");
                        $counter = 1;
                        redirect(base_url('admin/users'));
                    }

                    $this->db->where('email',$this->input->post('email'));
                    $this->db->where('user_status','1');
                    $username_existance = $this->db->get('tbl_user');
                    if($username_existance->num_rows()>0){
                        $this->utility->setMsg('Email already exists.', "ERROR");
                        $counter = 1;
                        redirect(base_url('admin/users'));
                    }
                    //echo '<pre>';print_r($_POST);die;
                    if($counter==0){
        				$ins_data = array(
                            'full_name' => $this->input->post('full_name'),
        					'username'	=> $this->input->post('username'),
        					'password'	=> sha1($this->input->post('password')),
        					'email'	=> $this->input->post('email'),
        					'contact_no'	=> $this->input->post('contact_no'),
        					'address'	=> $this->input->post('address'),
        					'user_status'	=> $this->input->post('status')
        					);
        				if($img = $this->upload_image()){
        					$ins_data['profile_image'] = $img;
        				}
                        if($this->input->post('user_type_id')=='client'){
                            $ins_data['user_type_id'] = 7;
                            $ins_data['add_date'] = date('Y-m-d');
                        }else{
                            $ins_data['user_type_id'] = $this->input->post('user_type_id');
                            $ins_data['add_date'] = $this->input->post('doj');
                        }
        				$user_id = $this->users_model->addEdit($ins_data);
        				if($user_id){
                            if($this->input->post('user_type_id')!='client'){
            					foreach ($this->input->post('skills') as $value) {
            						$this->common_model->insertData('user_to_skill', array('user_id' =>$user_id, 'skill_id' =>$value));
            					}
                            }
                            if($this->input->post('user_type_id')=='client'){
                                $this->utility->setMsg('New client added.', "SUCCESS");
                            }else{
                                $this->utility->setMsg('New employee added.', "SUCCESS");
                            }
        					
        					redirect(base_url('admin/users'));
        				}
                    }				
    			}else{
    				$this->utility->setMsg(validation_errors(),'ERROR');
    			}
    		}

    		$data['content'] = $this->load->view('admin/users/add', $content_data, TRUE);
    		$this->load->view('admin/layout', $data);
        }
	}

	public function edit(){
		if(!$this->input->post()){
			redirect(base_url('users'));
		}
		$content_data = array();
		$this->load->model('common_model');
		$content_data['user_types'] = $this->common_model->getAll('tbl_user_type');
		$content_data['skills'] = $this->common_model->getAll('tbl_skill');
		$user_id = $this->input->post('edit_id');
		$user_skills = $this->common_model->getAll('user_to_skill',  array('user_id' => $user_id), null, null, 'skill_id');
		$u_skl = array();
		$content_data['user_skills'] = array();
		if($user_skills){
			foreach ($user_skills as $value) {
				array_push($u_skl, $value['skill_id']);
			}
		}
		$content_data['user_skills'] = $u_skl;
		$content_data['user'] = $this->users_model->fetchRow(array('user_id'=>$user_id));

		if($this->input->post('username')){
			if($this->utility->getSecurity()!=$this->input->post('frmSecurity')){
				$this->utility->setMsg('Session expired. Please try again..','ERROR');
				redirect(base_url().'login');
			}
            $this->form_validation->set_rules('full_name','Full name','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email id','required|valid_email');
			$this->form_validation->set_rules('contact_no','Contact number','required');
            if($this->input->post('user_type_id')!=7){
                $this->form_validation->set_rules('skills[]', 'Skill','required');
                $this->form_validation->set_rules('doj','Joining date','required');
            }
			if($this->form_validation->run()){

                $counter=0;
                $this->db->where('username',$this->input->post('username'));
                $this->db->where('user_status','1');
                $this->db->where('user_id !=',$user_id);
                $username_existance = $this->db->get('tbl_user');
                if($username_existance->num_rows()>0){
                    $this->utility->setMsg('Username already exists.', "ERROR");
                    $counter = 1;
                    redirect(base_url('users'));
                }

                $this->db->where('email',$this->input->post('email'));
                $this->db->where('user_status','1');
                $this->db->where('user_id !=',$user_id);
                $username_existance = $this->db->get('tbl_user');
                if($username_existance->num_rows()>0){
                    $this->utility->setMsg('Email already exists.', "ERROR");
                    $counter = 1;
                    redirect(base_url('users'));
                }
                if($counter==0){
    				$ins_data = array(
                        'full_name' => $this->input->post('full_name'),
    					'username'	=> $this->input->post('username'),
    					'email'	=> $this->input->post('email'),
    					'contact_no'	=> $this->input->post('contact_no'),
    					'address'	=> $this->input->post('address'),
    					'user_status'	=> $this->input->post('status')
    				);
                    if($this->input->post('user_type_id')!=7){
                        $ins_data['user_type_id'] = $this->input->post('user_type_id');
                        $ins_data['add_date'] = $this->input->post('doj');
                        if($this->input->post('status')==0){
                            $ins_data['end_date'] = date('Y-m-d');
                        }
                    }
    				if($_FILES){
    					if($img = $this->upload_image()){
    						$ins_data['profile_image'] = $img;
    						@unlink('assets/uploads/user_images/'.$content_data['user']['profile_image']);
    					}
    				}
    				if($this->input->post('password')){
    					$ins_data['password']	= sha1($this->input->post('password'));
    				}
    				$this->users_model->addEdit($ins_data, array('user_id'=> $user_id));
    				if($user_id){
                        if($this->input->post('user_type_id')!=7){
        					$this->common_model->deleteData('user_to_skill', array('user_id'=>$user_id));
        					foreach ($this->input->post('skills') as $value) {
        						$this->common_model->insertData('user_to_skill', array('user_id' =>$user_id, 'skill_id' =>$value));
        					}
                            $this->utility->setMsg('Employee details updated.', "SUCCESS");
                        }else{
                            $this->utility->setMsg('Client details updated.', "SUCCESS");
                        }
    					//$this->utility->setMsg('Employee detaile updated.', "SUCCESS");
    					redirect(base_url('users'));
    				}
                }				
			}else{
				$this->utility->setMsg(validation_errors(),'ERROR');
			}
		}

		$data['content'] = $this->load->view('users/edit', $content_data, TRUE);
		$this->load->view('layout', $data);
	}

	public function upload_image(){
        $config['upload_path']          = './assets/uploads/user_images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->utility->setMsg($error, 'ERROR');
			return false;
        } else {
            $data = array('upload_data' => $this->upload->data());
			return($data["upload_data"]["file_name"]);
        }
	}
	public function permission($id="")
    {
        $userModules=array();
        $id=base64_decode($id);
        if(!$id || !is_numeric($id))
        {
            $this->utility->setMsg('Invalid user selected','ERROR');
            redirect(base_url().'users');
        }
        $user=$this->users_model->fetchRow(array('user_id'=>$id));
        if(!$user)
        {
            $this->utility->setMsg('Selected user not found','ERROR');
            redirect(base_url().'users');
        }
        $modules=$this->modules_model->fetchRecord();
        if($this->input->post())
        {
            $this->allotModule($id);
        }
        $userModulesData=$this->common_model->getAll('user_permissions',array('user_id'=>$id),array('modules','on user_permissions.module_id=modules.id'),'','*,user_permissions.id as id');
        //echo $this->db->last_query();
        
        if(!empty($userModulesData))
        {
            foreach($userModulesData as $value)
            {
                array_push($userModules,$value['module_id']);
            }
        }
        else
        {
            $userModulesData=array();
        }
        //$data=$this->header_footer($user['username'].'\'s Permissions ',array(
                                    //'sub_heading'=>'user permission list'
        //));
        //print_r($userModulesData); //die;
        $content_data['user']=$user;
        $content_data['user_modules']=$userModulesData;
        $content_data['user_module_ids']=$userModules;
        $content_data['id']=base64_encode($id);
        $content_data['modules']=$modules;
        //print_r($content_data); die;
        //$this->load->view('admin/user/permission',$data);
        $data['content'] = $this->load->view('users/permission', $content_data, TRUE);
		$this->load->view('layout', $data);
    }
    public function change_permission()
    { 
        $id=base64_decode($this->input->post('id'));
        if(empty($id))
            $this->output('Invalid User Module Selected','ERROR');
        if(!is_numeric($id))
            $this->output('Invalid User Module Selected','ERROR');
        /*$isExist=$this->user_permissions_model->fetchRow(array('id'=>$id));
        if(!$isExist)
            $this->output('Selected module not found','ERROR');
        if($this->input->post('frmSecurity')!=$this->utility->getSecurity())
        {
            $this->output('Invalid Security Token','ERROR');
        }*/
        $data=array();
        if($this->input->post('read_access'))
        {
            if($this->input->post('read_access')==1)
                $data['read_access']=1;
            else
                $data['read_access']=0;
        }

        if($this->input->post('write_access'))
        {
            if($this->input->post('write_access')==1)
            {
                $data['read_access']=1;
                $data['write_access']=1;
            }
            else
                $data['write_access']=0;
        }
        //print_r($data); die;
        $this->user_permissions_model->addEdit($data,array('id'=>$id));
        //echo $this->db->last_query(); die;
        $this->output('Success','SUCCESS');
    }
    private function allotModule($id)
    {
        $time=(int)time();
        $insertBatch=array();
        if($this->input->post('frmSecurity')!=$this->utility->getSecurity())
        {
            $this->utility->setMsg('Security Token Expired','ERROR');
            redirect(base_url().'users/permission/'.  base64_encode($id));
        }
        if($this->input->post('selected_modules'))
        {//print_r($this->input->post()); die;
            foreach($this->input->post('selected_modules') as $value)
            {
                //$chk=$this->model_video->getAllRow('user_permissions',array('user_id'=>$id,'module_id'=>base64_decode($value)));
                $chk=$this->common_model->getAllRow('user_permissions',array('user_id'=>$id,'module_id'=>base64_decode($value)),array('modules','on user_permissions.module_id=modules.id'));
                //$chk=$this->user_permissions_model->find(array('where'=>'user_id = '.$id.' and module_id = '.base64_decode($value)));
                //print_r($chk); die;
                if(empty($chk))
                {
                    $data=array(
                    'user_id'=>$id,
                    'module_id'=>base64_decode($value),
                    'read_access'=>0,
                    'write_access'=>0,
                    'date_of_creation'=>$time
                    );
                    array_push($insertBatch,$data);
                }
                else
                {
                    $data=array(
                    'user_id'=>$chk['user_id'],
                    'module_id'=>$chk['module_id'],
                    'read_access'=>$chk['read_access'],
                    'write_access'=>$chk['write_access'],
                    'date_of_creation'=>$chk['date_of_creation'],
                    );
                    array_push($insertBatch,$data);
                }
            }
            //print_r($insertBatch); die;
            if($insertBatch)
            {
                $this->user_permissions_model->delete(array('user_id'=>$id));
                $this->user_permissions_model->insert_batch($insertBatch);
                //$this->model_video->insertData('user_permissions',$insertBatch);
                $this->utility->setMsg(count($insertBatch).' Module(s) has been updated');
                //redirect(base_url().'admin/user/permission/'.  base64_encode($id));
            }
        }
        else
        {
            $this->utility->setMsg('Please enter some module','ERROR');
            redirect(base_url().'users/permission/'.  base64_encode($id));
        }
    }
//--------------------------- Start function to check username existance in add -----------------------------//
    function check_add_username(){
        $this->db->where('username',$this->input->post('username'));
        $this->db->where('user_status','1');
        $q = $this->db->get('tbl_user');
        if($q->num_rows() > 0 ){
            echo 'false';
        } else {
            echo 'true';
        }
    }
//----------------------------- End function to check username existance in add -----------------------------//
//--------------------------- Start function to check email existance in add -----------------------------//
    function check_add_email(){
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('user_status','1');
        $q = $this->db->get('tbl_user');
        if($q->num_rows() > 0 ){
            echo 'false';
        } else {
            echo 'true';
        }
    }
//----------------------------- End function to check email existance in add -----------------------------//

    //--------------------------- Start function to check username existance in edit -----------------------------//
    function check_edit_username(){
        $this->db->where('username',$this->input->post('username'));
        $this->db->where('user_id !=',$this->input->post('edit_id'));
        $this->db->where('user_status','1');
        $q = $this->db->get('tbl_user');
        if($q->num_rows() > 0 ){
            echo 'false';
        } else {
            echo 'true';
        }
    }
//----------------------------- End function to check username existance in edit -----------------------------//
//--------------------------- Start function to check email existance in edit -----------------------------//
    function check_edit_email(){
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('user_id !=',$this->input->post('edit_id'));
        $this->db->where('user_status','1');
        $q = $this->db->get('tbl_user');
        if($q->num_rows() > 0 ){
            echo 'false';
        } else {
            echo 'true';
        }
    }
//----------------------------- End function to check email existance in edit -----------------------------//
}

?>