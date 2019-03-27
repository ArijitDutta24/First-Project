<?php
class Packages_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function getlist()
	{
		
		$this->db->select('*');
		$this->db->from('tblcategories');
		$this->db->where('catname<>', 'Deals');
		$q=$this->db->get();
		return $q->result_array();
	}


	public function getcatlist()
	{
		
		$this->db->select('*');
		$this->db->from('tblcategories');
		$this->db->where('catname', 'Deals');
		$q=$this->db->get();
		return $q->result_array();
	}


	public function accountFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblaccounts');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function addressFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tbladdressbook');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function orderFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblpurchases');
		$this->db->join('tblsales', 'tblsales.id = tblpurchases.saleID');
		$this->db->join('tblproducts', 'tblproducts.id = tblpurchases.productID');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}



	public function profileUpdate($table, $data, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data); 
	}
	

	public function catprodlist($where, $limit, $start)
	{
		$this->db->select('tblprod_category.product, tblprod_category.category, tblproducts.pName, tblpictures.thumb_path, tblproducts.pDescription, tblproducts.pPrice');
		$this->db->from('tblprod_category');
		$this->db->join('tblproducts', 'tblproducts.id = tblprod_category.product');
		$this->db->join('tblpictures', 'tblpictures.product_id = tblprod_category.product');
		$this->db->where($where);
		$this->db->limit($limit, $start);
		$this->db->group_by('tblprod_category.product');
		$this->db->order_by('tblprod_category.id', 'DESC');
		$resu=$this->db->get();
		
		return $resu->result_array();
	}

	public function picFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblpictures');
		$this->db->where($where);
		$this->db->order_by('tblpictures.id', 'RANDOM');
		$this->db->limit(4);
		$resu=$this->db->get();
		
		return $resu->result_array();
	}
	
	public function mostFetch($where)
	{
		$this->db->select('tblprod_category.product, tblprod_category.category, tblproducts.pName, tblpictures.thumb_path, tblproducts.pPrice, tblproducts.pTitle, tblproducts.pDescription, tblproducts.pVisits ');
		$this->db->from('tblprod_category');
		$this->db->join('tblproducts', 'tblproducts.id = tblprod_category.product');
		$this->db->join('tblpictures', 'tblpictures.product_id = tblprod_category.product');
		$this->db->where($where);
		$this->db->limit(1);
		$this->db->group_by('tblprod_category.product');
		$this->db->order_by('tblproducts.pVisits', 'DESC');
		$resu=$this->db->get();
		
		return $resu->result_array();
	}


	public function detailsFetch($where)
	{
		$this->db->select('tblprod_category.product, tblprod_category.category, tblproducts.pName, tblpictures.thumb_path, tblproducts.pPrice, tblproducts.pTitle, tblproducts.pVisits, tblproducts.pDescription, tblproducts.pVideo, tblproducts.pVideo2, tblproducts.pVideo3, tblproducts.pStock, tblproducts.pCode, tblproducts.pPurPrice, tblproducts.pOffer, tblproducts.maxPurchaseQty');
		$this->db->from('tblprod_category');
		$this->db->join('tblproducts', 'tblproducts.id = tblprod_category.product');
		$this->db->join('tblpictures', 'tblpictures.product_id = tblprod_category.product');
		$this->db->where($where);
		// $this->db->limit(1);
		$this->db->group_by('tblprod_category.product');
		// $this->db->order_by('tblproducts.pVisits', 'DESC');
		$resu=$this->db->get();
		
		return $resu->result_array();
	}


    public function record_count1($where) 
	{
		$this->db->select('tblprod_category.product, tblprod_category.category, tblproducts.pName, tblpictures.thumb_path, tblproducts.pDescription, tblproducts.pPrice');
		$this->db->from('tblprod_category');
		$this->db->join('tblproducts', 'tblproducts.id = tblprod_category.product');
		$this->db->join('tblpictures', 'tblpictures.product_id = tblprod_category.product');
		$this->db->where($where);
		// $this->db->limit($limit, $start);
		$this->db->group_by('tblprod_category.product');
		$this->db->order_by('tblprod_category.id', 'DESC');
		$resu=$this->db->get();
		return $resu->result_array();
 
       
 
    }



    public function record_count2($where) 
	{
		$this->db->select('tblprod_category.product, tblprod_category.category, tblproducts.pName, tblpictures.thumb_path, tblproducts.pDescription, tblproducts.pPrice');
		$this->db->from('tblprod_category');
		$this->db->join('tblproducts', 'tblproducts.id = tblprod_category.product');
		$this->db->join('tblpictures', 'tblpictures.product_id = tblprod_category.product');
		$this->db->where($where);
		// $this->db->limit($limit, $start);
		$this->db->group_by('tblprod_category.product');
		$this->db->order_by('tblprod_category.id', 'DESC');
		$resu=$this->db->get();
		return $resu->result_array();
 
       
 
    }


	public function sidebarFetch($where)
	{
		$this->db->select('tblprod_category.product, tblprod_category.category, tblproducts.pName, tblpictures.thumb_path, tblproducts.pPrice, tblproducts.pTitle ');
		$this->db->from('tblprod_category');
		$this->db->join('tblproducts', 'tblproducts.id = tblprod_category.product');
		$this->db->join('tblpictures', 'tblpictures.product_id = tblprod_category.product');
		$this->db->where($where);
		$this->db->limit(3);
		$this->db->group_by('tblprod_category.product');
		$this->db->order_by('tblprod_category.id', 'RANDOM');
		$resu=$this->db->get();
		
		return $resu->result_array();
	}

	public function getPackageList($params = array())
	{
		$this->db->select('tblprod_category.product, tblprod_category.category, tblproducts.pName, tblpictures.thumb_path, tblproducts.pDescription, tblproducts.pPrice ');
		$this->db->from('tblprod_category');
		$this->db->join('tblproducts', 'tblproducts.id = tblprod_category.product');
		$this->db->join('tblpictures', 'tblpictures.product_id = tblprod_category.product');
		$this->db->where($params['where']);
		//set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
		//$this->db->limit($params['limit'], $params['start']);
		$this->db->group_by('tblprod_category.product');
		//packages by category
        if(!empty($params['search']['categoryBy'])){
            $this->db->where_in('tblprod_category.category',$params['search']['categoryBy']);

        }
		//package price low to high 
        if(!empty($params['search']['sortBy'])){
            $this->db->order_by('ABS(tblproducts.pPrice)',$params['search']['sortBy']);
        }else{
            $this->db->order_by('tblprod_category.id','desc');
        }
		//$this->db->order_by('tblprod_category.id', 'DESC');
		$resu=$this->db->get();
		return $resu->result_array();
	}
}