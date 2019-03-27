<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('common_helper');
		$this->load->model('banner_model');
		$this->load->model('cms_model');
		$this->load->model('packages_model');
		$this->load->model('settings_model');
		$this->load->model('Cart_model');
		$this->load->helper('download');
		$this->load->library('cart');
		
		// load Pagination library
        $this->load->library('Ajax_pagination');
        $this->load->library('pagination');
         
        // load URL helper
        $this->load->helper('url');
        $this->load->helper('text');
        $this->perPage = 6;
		
	}


	public function index()
	{
		$content_data = array();
		$banner = $this->banner_model->banner_fetchRecord();
		$content_data['banner'] = $banner;
		$home = $this->cms_model->about_fetchRecord();
		$content_data['home'] = $home;
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
		$content_data['deal'] = $deal;
		$this->load->view('index', $content_data);
	}

	public function about_us()
	{	
		$content_data = array();
		$about = $this->cms_model->about_fetchRecord();
		$content_data['about'] = $about;
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
    	$content_data['deal'] = $deal;
		$this->load->view('about', $content_data);
	}
	

	public function tours()
	{	
		$content_data = array();
		$tour = $this->cms_model->about_fetchRecord();
		$content_data['tour'] = $tour;
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
		$content_data['deal'] = $deal;
		$this->load->view('tours', $content_data);
	}

	

	public function holiday()
    {   
        $content_data = array();
        $holiday = $this->cms_model->about_fetchRecord();
        $content_data['holiday'] = $holiday;
        $contact = $this->settings_model->contact_fetchRecord();
        $content_data['contact'] = $contact;
        $cat = $this->packages_model->getcatlist();
        $catId = $cat[0]['id'];
        $where1 = ['category'=> $catId];
        $deal = $this->packages_model->sidebarFetch($where1);
        $content_data['deal'] = $deal;
		$where = ['category<>'=> $catId];
        $pkg = $this->packages_model->getlist(); 
        $content_data['packages'] = $pkg; //[All Category List]
        $totalRec = count($this->packages_model->record_count1($where));
        $config = array();
        $config['target']      = '#postList';
        $config["base_url"] = base_url() . "/ajaxPaginationData";
        $config["total_rows"] = $totalRec;
        $config["per_page"] = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $config["uri_segment"] = 2;
        $this->ajax_pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $prod = $this->packages_model->getPackageList(array('where'=>$where, 'limit'=>$this->perPage, 'start'=> $page));
        
        $content_data['products'] = $prod;

        $curr = $this->packages_model->currFetch();
		$content_data['curr'] = $curr;

        $this->load->view('holiday', $content_data);
    }


    
    function ajaxPaginationData(){
        $conditions = array();
        
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }

        $cat = $this->packages_model->getcatlist();
        $catId = $cat[0]['id'];
        $conditions['where'] = ['category<>'=> $catId];

        if(!strrchr($this->input->post('categoryBy'),','))
        {
        	$categoryBy = $this->input->post('categoryBy');
        }
        else
        {
        	$categoryBy = explode(',' , $this->input->post('categoryBy'));

        }
        
       
        if(!empty($categoryBy)){
        	
        	$conditions['search']['categoryBy'] = $categoryBy;
        	$totalRec = count($this->packages_model->getPackageList($conditions));
        }

        if(!empty($categoryBy)){
        	
        	$conditions['search']['categoryBy'] = $categoryBy;
        	
        }

        //set conditions for search
        $sortBy = $this->input->post('sortBy');
       
        if(!empty($sortBy)){
            $conditions['search']['sortBy'] = $sortBy;
            
        }

        //total rows count
        	$totalRec = count($this->packages_model->getPackageList($conditions));
        
        
        
        //pagination configuration
        $config['target']      = '#packageList';
        $config['base_url']    = base_url().'/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        // pr($conditions);
        //get posts data
        
        $data['products'] = $this->packages_model->getPackageList($conditions);

        $curr = $this->packages_model->currFetch();
		$data['curr'] = $curr;

        
        //load the view
        $this->load->view('ajax-pagination-data', $data, false);
    }
	

	

	public function holiday_package()
	{	
		
		$prod_id = base64_decode($this->uri->segment(2));
		$this->session->set_userdata('pid', $prod_id);

		$content_data = array();
		$holiday = $this->cms_model->about_fetchRecord();
		$content_data['holiday'] = $holiday;

		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;

		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
		$content_data['deal'] = $deal;

		$where = ['product_id'=> $prod_id];
		$pic = $this->packages_model->picFetch($where);
		$content_data['picture'] = $pic;

		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wheree = ['category<>'=> $catId];
		$pop = $this->packages_model->mostFetch($wheree);
		$content_data['popular'] = $pop;

		$data = $this->packages_model->detailsFetch($where);
		$content_data['details'] = $data;
		
		$prodWhere = ['id'=> $prod_id];
		$prodDetails = $this->Cart_model->prevQty($prodWhere);
		$totalView = $prodDetails[0]['pVisits']+1;
		$viewArray = ['pVisits' => $totalView];
		$this->Cart_model->prodUpdate($viewArray, $prodWhere);
		
        $curr = $this->packages_model->currFetch();
		$content_data['curr'] = $curr;
		
		$this->load->view('package_details', $content_data);
	}


	public function holiday_activites()
	    {   
	        $content_data = array();
	        $holiday = $this->cms_model->about_fetchRecord();
	        $content_data['holiday'] = $holiday;

	        $contact = $this->settings_model->contact_fetchRecord();
	        $content_data['contact'] = $contact;

	        $cat = $this->packages_model->getcatlist();
	        $catId = $cat[0]['id'];
	        $where1 = ['category'=> $catId];
	        $deal = $this->packages_model->sidebarFetch($where1);
	        $content_data['deal'] = $deal;

			$where = ['status'=> 1];
	        $pkg = $this->packages_model->getlist_activities($where); 
	        $content_data['activities'] = $pkg; //[All Activities List]

	        $totalRec = count($this->packages_model->record_count3($where));
	        
	        $config = array();
	        $config['target']      = '#postList';
	        $config["base_url"] = base_url() . "/ajaxPaginationDataSecond";
	        $config["total_rows"] = $totalRec;
	        $config["per_page"] = $this->perPage;
	        $config['link_func']   = 'searchFilter';
	        $config["uri_segment"] = 2;
	        $this->ajax_pagination->initialize($config);
	        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
	        $prod = $this->packages_model->getActivityList(array('where'=>$where, 'limit'=>$this->perPage, 'start'=> $page));
	        
	        $content_data['products'] = $prod;

	        $curr = $this->packages_model->currFetch();
			$content_data['curr'] = $curr;

	        $this->load->view('holiday_activites', $content_data);
	    }



	function ajaxPaginationDataSecond()
	{
	    $conditions = array();
	    
	    //calc offset number
	    $page = $this->input->post('page');
	    if(!$page){
	        $offset = 0;
	    }else{
	        $offset = $page;
	    }

	    $conditions['where'] = ['status'=> 1];

	    if(!strrchr($this->input->post('categoryBy'),','))
	    {
	    	$categoryBy = $this->input->post('categoryBy');
	    }
	    else
	    {
	    	$categoryBy = explode(',' , $this->input->post('categoryBy'));

	    }
	    
	   
	    if(!empty($categoryBy)){
	    	
	    	$conditions['search']['categoryBy'] = $categoryBy;
	    	$totalRec = count($this->packages_model->getActivityList($conditions));
	    }

	    if(!empty($categoryBy)){
	    	
	    	$conditions['search']['categoryBy'] = $categoryBy;
	    	
	    }

	    //set conditions for search
	    $sortBy = $this->input->post('sortBy');
	   
	    if(!empty($sortBy)){
	        $conditions['search']['sortBy'] = $sortBy;
	        
	    }

	    //total rows count
	    $totalRec = count($this->packages_model->getActivityList($conditions));
	    
	    
	    
	    //pagination configuration
	    $config['target']      = '#packageList1';
	    $config['base_url']    = base_url().'/ajaxPaginationDataSecond';
	    $config['total_rows']  = $totalRec;
	    $config['per_page']    = $this->perPage;
	    $config['link_func']   = 'searchFilter';
	    $this->ajax_pagination->initialize($config);
	    
	    //set start and limit
	    $conditions['start'] = $offset;
	    $conditions['limit'] = $this->perPage;
	    
	    //get posts data
	    $data['products'] = $this->packages_model->getActivityList($conditions);

	    $curr = $this->packages_model->currFetch();
		$data['curr'] = $curr;
	    
	    //load the view
	    $this->load->view('ajax-pagination-activity-data', $data, false);
    }



    public function holiday_activity_package()
    {
    	$act_id = base64_decode($this->uri->segment(2));
    	// echo $act_id;
    	// exit;
		
		$content_data = array();
		$activity = $this->cms_model->about_fetchRecord();
		$content_data['holiday'] = $activity;

		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;

		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
		$content_data['deal'] = $deal;

		$where = ['holiday_package_activity.activity_id'=> $act_id];
		$data = $this->packages_model->activityDetailsFetch($where);
		$content_data['details'] = $data;

		$curr = $this->packages_model->currFetch();
		$content_data['curr'] = $curr;
		
		
		$this->load->view('activity_details', $content_data);
    }

	

	public function groups()
	{	
		$content_data = array();
		$group = $this->cms_model->about_fetchRecord();
		$content_data['group'] = $group;
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
		$content_data['deal'] = $deal;
		$this->load->view('groups', $content_data);
	}

	public function deals()
	{	
		$content_data = array();
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$where = ['category'=>$catId];
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$totalRec = count($this->packages_model->record_count2($where));
		

		$config = array();
        $config['target']      = '#postList';
        $config["base_url"] = base_url() . "/ajaxPaginationDataDeals";
        $config["total_rows"] = $totalRec;
        $config["per_page"] = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $config["uri_segment"] = 2;
        $this->ajax_pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        
        $deal = $this->cms_model->dealFetch(array('where'=>$where, 'limit'=>$this->perPage, 'start'=> $page));
		$content_data['deal'] = $deal;

		$curr = $this->packages_model->currFetch();
		$content_data['curr'] = $curr;

	    $this->load->view('deals', $content_data);
	}


	function ajaxPaginationDataDeals(){
        $conditions = array();
        
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }

        
        //total rows count
        $cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$conditions['where'] = ['category'=>$catId];
		$totalRec = count($this->packages_model->record_count2($conditions));
        	
        
        
        
        //pagination configuration
        $config['target']      = '#packageList2';
        $config['base_url']    = base_url().'/ajaxPaginationDataDeals';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        // pr($conditions);
        //get posts data
        
        $data['products'] = $this->cms_model->dealFetch($conditions);

        $curr = $this->packages_model->currFetch();
		$data['curr'] = $curr;
        
        //load the view
        $this->load->view('ajax-pagination-deals-data', $data, false);
    }



	public function contact_us()
	{
		$content_data = array();
		$contact = $this->settings_model->contact_fetchRecord();
		$content_data['contact'] = $contact;
		$about = $this->cms_model->about_fetchRecord();
		$content_data['about'] = $about;
		$cat = $this->packages_model->getcatlist();
		$catId = $cat[0]['id'];
		$wher = ['category'=> $catId];
		$deal = $this->packages_model->sidebarFetch($wher);
		$content_data['deal'] = $deal;
		$this->load->view('contact', $content_data);
	}



	public function logout()
    {
    	$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('accName');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('add1');
		$this->session->unset_userdata('add2');
		$this->session->unset_userdata('add3');
		$this->session->unset_userdata('add4');
		$this->session->unset_userdata('add5');
		$this->session->unset_userdata('add6');


		// $pid = $this->session->userdata('Id');
		// $data = array(
		// 	'rowid' => $pid,
		// 	'user_id'   => 0
		// );
		// $this->cart->update($data);
		$this->cart->destroy();

		$url = base_url();
		redirect($url, 'refresh');
    }




	

	
}
