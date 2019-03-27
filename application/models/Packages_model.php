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


	public function currFetch()
	{
		
		$this->db->select('*');
		$this->db->from('currencies');
		$q=$this->db->get();
		return $q->result_array();
	}


	public function currRow($where)
	{
		
		$this->db->select('*');
		$this->db->from('currencies');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function currUpdate($data, $where)
	{
		$this->db->where($where);
		return $this->db->update('currencies', $data);
		
	}


	public function getlist_activities($where)
	{
		
		$this->db->select('*');
		$this->db->from('holiday_package_themes');
		$this->db->where($where);
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

	public function saleRecord()
	{
		$this->db->select('*');
		$this->db->from('holiday_transaction');
		$this->db->join('tblsales', 'tblsales.id = holiday_transaction.sale_id');
		$this->db->order_by('holiday_transaction.holiday_transaction_id', 'DESC');
		$q=$this->db->get();
		return $q->result_array();
	}

	public function orderFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblpurchases');
		$this->db->join('tblsales', 'tblsales.id = tblpurchases.saleID');
		$this->db->join('tblproducts', 'tblproducts.id = tblpurchases.productID');
		$this->db->join('holiday_transaction', 'holiday_transaction.sale_id = tblpurchases.saleID');
		$this->db->where($where);
		$this->db->order_by('tblpurchases.saleID', 'DESC');
		$q=$this->db->get();
		return $q->result_array();
	}


	public function orderFetch1($where)
	{
		
			$this->db->select('tblpurchases.type, tblpurchases.productQty, tblpurchases.purchaseTime, tblpurchases.purchaseDate, tblpurchases.buyCode, tblproducts.pName, tblproducts.pPrice, tblcategories.catname, tblpurchases.booking_date, holiday_transaction.transaction_id');
			$this->db->from('tblpurchases');
			$this->db->join('holiday_transaction', 'holiday_transaction.sale_id = tblpurchases.saleID');
			$this->db->join('tblsales', 'tblsales.id = tblpurchases.saleID');
			$this->db->join('tblproducts', 'tblproducts.id = tblpurchases.productID');
			$this->db->join('tblcategories', 'tblcategories.id = tblpurchases.categoryID');
			$this->db->where($where);
			$q=$this->db->get();
			return $q->result_array();
		
	}


	public function orderFetch2($where)
	{
		$this->db->select('tblpurchases.type,tblpurchases.booking_date, tblpurchases.productQty, tblpurchases.purchaseTime, tblpurchases.purchaseDate, tblpurchases.buyCode, holiday_package_activity.activity_name, holiday_package_activity.activity_price, holiday_package_themes.theme_name, holiday_transaction.transaction_id');
		$this->db->from('tblpurchases');
		$this->db->join('holiday_transaction', 'holiday_transaction.sale_id = tblpurchases.saleID');
		$this->db->join('tblsales', 'tblsales.id = tblpurchases.saleID');
		$this->db->join('holiday_package_activity', 'holiday_package_activity.activity_id = tblpurchases.productID');
		$this->db->join('holiday_package_themes', 'holiday_package_themes.theme_id = tblpurchases.categoryID');
		$this->db->where($where);
		$q=$this->db->get();
		return $q->result_array();
	}


	public function orderFetch3($where)
	{
		$this->db->select('tblpurchases.type');
		$this->db->from('tblpurchases');
		$this->db->where($where);
		$this->db->group_by('tblpurchases.type');
		$q=$this->db->get();
		return $q->result_array();
	}



	public function orderFetch4($where)
	{
		$this->db->select('*');
		$this->db->from('tblpurchases');
		$this->db->join('tblsales', 'tblsales.id = tblpurchases.saleID');
		$this->db->join('tblproducts', 'tblproducts.id = tblpurchases.productID');
		$this->db->join('holiday_transaction', 'holiday_transaction.sale_id = tblpurchases.saleID');
		$this->db->where($where);
		$this->db->group_by('tblpurchases.saleID');
		$q=$this->db->get();
		return $q->result_array();
	}


	public function transInsert($value)
	{
		return $this->db->insert('holiday_transaction', $value);
	}


	public function trnasUpdate($data, $where)
	{
		$this->db->where($where);
		return $this->db->update('holiday_transaction', $data);
		
	}


	public function countryFetch($where)
	{
		$this->db->select('*');
		$this->db->from('tblcountries');
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



	public function activityDetailsFetch($where)
	{
		$this->db->select('holiday_package_activity.activity_id, holiday_package_activity.activity_name, holiday_package_activity.activity_price, holiday_package_activity.activity_description, holiday_activity_gallery.activity_image, holiday_package_activity.activity_duration, holiday_package_activity.activity_inclusions,
			holiday_package_activity.activity_terms_conditions,holiday_package_activity.theme_id, holiday_package_activity.activity_stock, holiday_package_activity.activity_max_purchase' );
		$this->db->from('holiday_package_activity');
		// $this->db->join('holiday_package_themes', 'holiday_package_themes.theme_id = holiday_package_activity.theme_id');
		$this->db->join('holiday_activity_gallery', 'holiday_activity_gallery.activity_id = holiday_package_activity.activity_id');
		$this->db->where($where);
		// $this->db->limit(1);
		$this->db->order_by('holiday_package_activity.activity_id', 'DESC');
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



    public function record_count3($where) 
	{
		$this->db->select('holiday_package_activity.activity_id, holiday_package_activity.activity_name, holiday_package_activity.activity_price, holiday_package_activity.activity_description, holiday_activity_gallery.activity_image');
		$this->db->from('holiday_package_activity');
		$this->db->join('holiday_package_themes', 'holiday_package_themes.theme_id = holiday_package_activity.theme_id');
		$this->db->join('holiday_activity_gallery', 'holiday_activity_gallery.activity_id = holiday_package_activity.activity_id');
		$this->db->where($where);
		// $this->db->limit($limit, $start);
		$this->db->group_by('holiday_package_activity.activity_name');
		$this->db->order_by('holiday_package_activity.activity_id', 'DESC');
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


	public function getActivityList($params = array())
	{
		
		$this->db->select('holiday_package_activity.activity_id, holiday_package_activity.activity_name, holiday_package_activity.activity_price, holiday_package_activity.activity_description, holiday_activity_gallery.activity_image');
		$this->db->from('holiday_package_activity');
		$this->db->join('holiday_package_themes', 'holiday_package_themes.theme_id = holiday_package_activity.theme_id');
		$this->db->join('holiday_activity_gallery', 'holiday_activity_gallery.activity_id = holiday_package_activity.activity_id');
		$this->db->where($params['where']);
		//set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
		//$this->db->limit($params['limit'], $params['start']);
		$this->db->group_by('holiday_package_activity.activity_name');
		//packages by category
        if(!empty($params['search']['categoryBy'])){
            $this->db->where_in('holiday_package_themes.theme_id',$params['search']['categoryBy']);

        }
		//package price low to high 
        if(!empty($params['search']['sortBy'])){
            $this->db->order_by('ABS(holiday_package_activity.activity_price)',$params['search']['sortBy']);
        }else{
            $this->db->order_by('holiday_package_activity.activity_id','desc');
        }
		//$this->db->order_by('tblprod_category.id', 'DESC');
		$resu=$this->db->get();
		return $resu->result_array();
	}


	
}