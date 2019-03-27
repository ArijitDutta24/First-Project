<?php
class Common_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function insertData($table=null,$arr=null)
	{
		$this->db->insert($table,$arr);
		return $this->db->insert_id();
	}
	
	function getAllMultipleJoin($table=null,$where=null,$join=null,$order=null,$select='*',$group=null,$page='',$limit='',$like='',$not_like='')
	{
		$this->db->select($select);
		$this->db->from($table);
		if(!empty($join))
		{
			foreach($join as $row) // $join=array('user_profile','type','.inner..outer');
			{
				$this->db->join($row[0],$row[1],'left');
			}
		}
		if($where)
		{
			$this->db->where($where);
		}
		if($like)
		{
			$this->db->like($like);
		}
		if($not_like)
		{
			$this->db->not_like($not_like);
		}
		if($group)
		{
			$this->db->group_by($group);
		}
		if($order)
		{
			$this->db->order_by($order);
		}
		if(!empty($limit))
	    {
	      $this->db->limit($limit,$page);
	    }
		$res=$this->db->get();
		//echo $this->db->last_query();
		return $res->result_array();
	}
	
	
	function getAll($table=null,$where=null,$join=null,$order=null,$select='*')
	{
		$this->db->select($select);
		$this->db->from($table);
		if($join)
		{
			$this->db->join($join[0],$join[1]);
		}
		
		if($where)
		{
			$this->db->where($where);
		}
		if($order)
		{
			$this->db->order_by($order);
		}
		$res=$this->db->get();
		//echo $this->db->last_query();
		return $res->result_array();
	}
	function getAllRow($table=null,$where=null,$join=null,$order=null,$select='*',$like='')
	{
		$this->db->select($select);
		$this->db->from($table);
		if($join)
		{
			$this->db->join($join[0],$join[1]);
		}
		
		if($where)
		{
			$this->db->where($where);
		}
		if($like)
		{
			$this->db->like($like);
		}
		if($order)
		{
			$this->db->order_by($order);
		}
		$res=$this->db->get();
		return $res->row_array();
	}


	function getAllRowMultipleJoin($table=null,$where=null,$join=null,$order=null,$select='*',$group=null,$page='',$limit='',$like='')
	{
		$this->db->select($select);
		$this->db->from($table);
		if(!empty($join))
		{
			foreach($join as $row) // $join=array('user_profile','type','.inner..outer');
			{
				$this->db->join($row[0],$row[1],'left');
			}
		}
		if($where)
		{
			$this->db->where($where);
		}
		if($like)
		{
			$this->db->like($like);
		}
		if($group)
		{
			$this->db->group_by($group);
		}
		if($order)
		{
			$this->db->order_by($order);
		}
		if(!empty($limit))
	    {
	      $this->db->limit($limit,$page);
	    }
		$res=$this->db->get();
		//echo $this->db->last_query();
		return $res->row_array();
	}
	
	function UpdateData($table=null,$inst_arr=null,$where=null)
	{
		$this->db->where($where);
		$update=$this->db->update($table,$inst_arr);
		
		if($update)
		{
			
			$this->session->set_userdata('success_msg','Data updated successfully.');
			$return=1;
		}
		else
		{
			$this->session->set_userdata('error_msg','Failed to update data. Please try again.');
			$return=0;
		}
		return $return;
	}
	
	function deleteData($table=null,$where=null)
	{
		$this->db->where($where);
		$delete=$this->db->delete($table);
	}

	public function generateHash($password)
	{
	    return hash('sha256', '5326d68cec044' . $password);
	}


	public function getTodaysRecord($table = '')
	{
		$qry = "select * from ".$table." where DATE(`created`) = CURDATE()";
		$res= $this->db->query($qry);
		return $res->result_array();
	}


	public function insert_images($data,$id)
	{
		if($data)
		{
			foreach ($data as $key => $value) 
			{
				$data = array('project_id'=>$id,'file_name'=>$value['image'],'date_upload'=>date('Y-m-d h:i:s',time()),'project_to_files_status'=>1);
        		$this->db->insert('tbl_project_to_files', $data);
        		//echo $this->db->last_query(); die;
			}
    	}	 
	}

	public function GetColumnData($table_name,$column_name,$search_array){
		$data = '';
		$this->db->where($search_array);
		$get = $this->db->get($table_name);
		if($get->num_rows()>0){
			foreach($get->result() as $result){
				$data = $result->$column_name;
			}
		}
		return $data;
	}
}
