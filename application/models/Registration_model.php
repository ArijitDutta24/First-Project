<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {

	public function user_reg($data)
	{
		$insert=$this->db->insert('user',array('email'=>$data['email'],'password'=>$data['password'],'user_status'=>$data['user_status']));
		
		if($insert)
		{
			
			$this->utility->setMsg('Data inserted successfully.','SUCCESS');
			$return=1;
		}
		else
		{
			$this->utility->setMsg('Failed to insert data. Please try again.','ERROR');
			$return=0;
		}
		return $return;
	}


	public function verifyEmailAddress($verificationcode){  
	  $sql = "update user set user_status=1 WHERE email_verification_code=?";
	  $this->db->query($sql, array($verificationcode));
	  return $this->db->affected_rows(); 
	 }
	

}