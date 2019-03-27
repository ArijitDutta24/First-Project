<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

	public function getlist()
	{
		$data=array();
		$this->db->select('*');
		$this->db->from('site_settings');
		$q=$this->db->get();
		//echo $this->db->last_query();exit;
		if($q->num_rows()>0){
			foreach($q->result_array() as $result){
				$data[]=$result;
			}
		}
		
		return $data;
	}

	public function getsettings($slug)
	{
		$data=array();
		$this->db->where('slug',$slug);
		$q=$this->db->get('site_settings');
		//echo $this->db->last_query();exit;
		if($q->num_rows()>0)
		{

			return $q->row_array();
		}
	}

	public function update_settings($update_array,$slug)
	{
		$this->db->where('slug',$slug);
		$update=$this->db->update('site_settings',$update_array);
		
		if($update)
		{
			
			$this->utility->setMsg('Data updated successfully.','SUCCESS');
			$return=1;
		}
		else
		{
			$this->utility->setMsg('Failed to update data. Please try again.','ERROR');
			$return=0;
		}
		return $return;
	}


	public function contact_fetchRecord()
	{
			$this->db->select('*');
			$this->db->from('site_settings');
			$resu=$this->db->get();
			return $resu->result_array();
	}
}
?>