<?php class Product_model extends CI_Model {

        //public $title;
        //public $content;
        //public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getProducts($table1,$table2,$table3)
        {
                
				/*$this->db->select('u.*, c.cat, r.small_thmb');
    			$this->db->from($table1.' u, '.$table2.' c, '.$table3.' r');
    			$this->db->where('c.id = u.cat_id');
    			$this->db->where('u.id = r.product_id');
				$this->db->order_by('u.id', "desc"); 
				$this->db->limit(1);
    			$query = $this->db->get();*/
				
				$this->db->select('*');
				$this->db->from($table1.' u');
				$this->db->join($table2.' c', 'c.id = u.cat_id');
				//$this->db->join($table3.' r', 'r.product_id = u.id');
				//$this->db->limit(1);
				$this->db->order_by('u.product_id', "desc"); 
				$query = $this->db->get();	
				
				return $query->result();
            
        }
		
		public function catDetails($table,$where=array()){
		
			    $query = $this->db->get_where($table,$where);
				
				return $query->result();
		
		}
		
		public function catUpdate($table,$id,$data=array(),$mode=''){
		
		if($mode=='edit'){
				$this->db->where('id',$id);
				
				$this->db->update($table, $data); 
			}
			else{
			$this->db->insert($table, $data); 
			}
		}
		
		public function catDelete($table,$where,$mode){

			if($mode=='single'){
				$this->db->delete($table, $where); 
			}else{
				 $this->db->where_in('id', $where);
        		$this->db->delete($table);
			
			}
		}

		public function GetProductName($product_id)
		{
			$this->db->select('*');
			$this->db->from('shopper_product');
			$this->db->where('product_id', $product_id);
			$query = $this->db->get();
			$row = $query->row();

			return $row->item_name;
		}

		public function getUserName($userid)
		{
			$this->db->select('*');
			$this->db->from('shopper_users');
			$this->db->where('userid', $userid);
			$query = $this->db->get();
			$row = $query->row();

			return $row->firstname." ".$row->lastname;
		}

		 public function fetchRecord()
		{
			//echo '<pre>';print_r($where);
			$this->db->select('*');
			$this->db->from('product');
			$resu=$this->db->get();
			//echo $this->db->last_query();
			return $resu->result_array();
		}

       
}
?>
