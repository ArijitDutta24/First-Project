<?php
class Cart_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function getlist($where)
	{
		
		$this->db->select('*');
		$this->db->from('tblcountries');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function prevQty($where)
	{
		
		$this->db->select('*');
		$this->db->from('tblproducts');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}





	public function prodUpdate($data, $where)
	{
		$this->db->where($where);
		return $this->db->update('tblproducts', $data); 
	}


	public function getzonelist($where)
	{
		
		$this->db->select('*');
		$this->db->from('tblzones');
		$this->db->where($where);
		$q=$this->db->get();
		
		return $q->result_array();
	}


	public function usageFetch($where)
	{
		
		$this->db->select('*');
		$this->db->from('tblcoupons');
		$this->db->join('tblsales', 'tblsales.id = tblcoupons.saleID');
		$this->db->where($where);
		$q=$this->db->get();
		
		return $q->result_array();
	}

	public function getsubzonelist($where)
	{
		
		$this->db->select('*');
		$this->db->from('tblzone_areas');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function prozoneFetch($value)
	{
		$this->db->select('countryRestrictions');
		$this->db->from('tblproducts');
		$this->db->where($value);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function fetch()
	{
		$this->db->select('*');
		$this->db->from('tblsales');
		$this->db->order_by("id", "DESC");
		$q=$this->db->get();
		return $q->result_array();
	}


	public function conFetch($where)
	{
		$this->db->select('countryRestrictions');
		$this->db->from('tblproducts');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}



	public function couponCheck($where)
	{
		$this->db->select('*');
		$this->db->from('tblcampaigns');
		$this->db->where($where);
		$q=$this->db->get();
		if ($q->num_rows() > 0){
        return true;
	    }
	    else
	    {
	    return false;
	    }
	}


	public function couponCheck1($where)
	{
		$this->db->select('*');
		$this->db->from('tblcampaigns');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function getCartlist($where)
	{
		$this->db->select('*');
		$this->db->from('tblcart');
		$this->db->where('user_id', $where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function saleInsert($value)
	{
		$this->db->insert('tblsales', $value);
		return $this->db->insert_id();
	}


	public function statusInsert($value)
	{
		return $this->db->insert('tblstatuses', $value);
		 
	}


	public function discountInsert($value)
	{
		return $this->db->insert('tblcoupons', $value);
		 
	}


	public function cartInsert($value)
	{
		return $this->db->insert('tblcart', $value);
		 
	}


	public function purchaseInsert($value)
	{
		return $this->db->insert('tblpurchases', $value);
		 
	}



	public function registerInsert($value)
	{
		$this->db->insert('tblaccounts', $value);
		return $this->db->insert_id();
		 
	}



	public function addressBookInsert($value)
	{
		return $this->db->insert('tbladdressbook', $value);
		 
	}


	public function addressBookUpdate($value, $where)
	{
		$this->db->where($where);
		return $this->db->update('tbladdressbook', $value);
		 
	}



	public function emailFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblaccounts');
		$this->db->where($where);
		$q=$this->db->get();
		if ($q->num_rows() > 0){
        return true;
	    }
	    else
	    {
	    return false;
	    }
	}

	public function userFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblaccounts');
		$this->db->where($where);
		$q=$this->db->get();
		if($q->num_rows())
		{
			return $q->row()->id;
		}
		else
		{
			return false;
		}
	}


	public function accFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tbladdressbook');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
		
	}



	public function accName($where)
	{
		$this->db->select('*');
		$this->db->from('tblaccounts');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
		
	}


	public function userCartFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblcart');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function userCartFetch1($where)
	{
		$this->db->select('*');
		$this->db->from('tblcart');
		$this->db->where($where);
		$q=$this->db->get();
		if ($q->num_rows() > 0){
        return true;
	    }
	    else
	    {
	    return false;
	    }
	}


	public function userCartUpdate($data, $where)
	{
		$this->db->where($where);
		return $this->db->update('tblcart', $data);
		
	}


	public function userCartInsert($data)
	{
		return $this->db->insert('tblcart', $data);
	}


	public function cartDelete($value)
	{
		return $this->db->delete('tblcart', $value);
		 
	}

	public function random_strings($length_of_string) 
	{ 
	  
	    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&'; 
	    return substr(str_shuffle($str_result),  
	                       0, $length_of_string); 
	} 
	
}