<?php
class Banner_model extends Core {
    
    public function __construct()
    {
        parent::__construct('banners');
    }

    public function fetchRec($where)
		{
			//echo '<pre>';print_r($where);
			$this->db->select('*');
			$this->db->from('banners');
			$this->db->where($where);
			$resu=$this->db->get();
			//echo $this->db->last_query();
			return $resu->result();
		}

	public function banner_fetchRecord()
	{
			$this->db->select('*');
			$this->db->from('banners');
			$this->db->order_by("flow_num", "asc");
			$resu=$this->db->get();
			return $resu->result_array();
	}

		
    
}