<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
         $this->load->library('cart');
        $this->load->model('cms_model');
        $this->load->model('packages_model');
        $this->load->model('settings_model');
        $this->load->model('Cart_model');
        $this->load->helper('text');
	}

	public function index(){
		$cat_id = base64_decode($this->uri->segment(2));
		$content_data = array();
		$holiday = $this->cms_model->about_fetchRecord();
		$content_data['holiday'] = $holiday;
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category<>'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
    	$content_data['deal'] = $deal;
		$this->load->view('login_default', $content_data);
	}

	public function userLogin()
	{
				if($this->session->userdata('id') == '')
		{
				$userName = $this->input->post('username');
				$passWord = md5($this->input->post('password'));
				$where = ['email' => $userName, 'pass' => $passWord];
				$login = $this->Cart_model->userFetch($where);
				
				
				if($login)
				{
					$wheree = ['account' => $login];
					$accountDetails = $this->Cart_model->accFetch($wheree);
					$where1 = ['id' => $login];
					$accName = $this->Cart_model->accName($where1);
					
					$newdata = array(
						   'id'    => $login,
		                   'name'  => $accountDetails[0]['nm'],
		                   'email' => $accountDetails[0]['em'],
		                   'add1'  => $accountDetails[0]['addr1'],
		                   'add2'  => $accountDetails[0]['addr2'],
		                   'add3'  => $accountDetails[0]['addr3'],
		                   'add4'  => $accountDetails[0]['addr4'],
		                   'add5'  => $accountDetails[0]['addr5'],
		                   'add6'  => $accountDetails[0]['addr6']
		                   
		               );

				$this->session->set_userdata($newdata);
				$this->session->set_userdata('accName', $accName[0]['name']);
				redirect('profile');
					
				}
				else
				{
					// $this->utility->setMsg('Username/Password Not Matched', 'ERROR');
					$this->session->set_flashdata('err_msg1', 'Username/Password Not Matched');
					redirect('login');
				}

			

		}
	}

	

	 public function sendpassword()
		{
			    $querydata=$this->db->query("SELECT *  from tblaccounts where email = '".$_POST['emailVal']."' ");
        		$rowdata=$querydata->result_array(); 
		        if ($querydata->num_rows()>0)
				{
				        $passwordplain = "";
				        $passwordplain  = $this->Cart_model->random_strings(10);
				        $newpass['pass'] = md5($passwordplain);
				        $this->db->where('email', $_POST['emailVal']);
				        $this->db->update('tblaccounts', $newpass); 
				        $from= "arijit.dutta48@gmail.com";
						$to = $_POST['emailVal'];
						$subject = 'Heritage Password Reset'; 
						$message="<p>Hi, <br>" .$rowdata[0]['name']."
						<br> Massege: Thanks for contacting regarding to forgot password, Your
						<br> Username : ".$rowdata[0]['email'].
						";<br>Password : ".$passwordplain.
						"<br><br> Regards,<br> Heritage";
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: '.$from."\r\n".
							'Reply-To: '.$from."\r\n" .
							'X-Mailer: PHP/' . phpversion();
						if (!mail($to, $subject, $message, $headers)) {
							$data = array('message' => "Failed to send password, please try again!", 'success' => 'no');
						} else {
							$data = array('message' => "Password sent to your email!", 'success' => 'yes');
						}        
				}
				else
				{  
					$data = array('message' => "Email not found try again!", 'success' => 'no');
				 
				}
				$output = json_encode($data);
            	echo $output;
		}

	  

}