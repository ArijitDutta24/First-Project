<?php
class AppController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('site_settings_model');
        // $this->load->model('menu_model');
        // $this->load->model('widget_manager_model');
    $this->initiate();
    }
    
    protected function header_footer($title="",$opt=array())
    {
         if(empty($title))
           $title= SITE_NAME;
           $include=array();
        // $widgets= array();
        // //$widgetdata = $this->widget_manager_model->fetchRecord(array('status'=>1));
        // foreach($widgetdata as $value){
        //     if($value['widget_type']=='H')
        //     {
        //         $widgets[$value['slug_name']] = $value['widget_html'];
        //     }
        //     elseif($value['widget_type']=='T')
        //     {
        //         $widgets[$value['slug_name']] = $value['widget_text'];
        //     }
        //     elseif($value['widget_type']=='S')
        //     {
        //         $widgets[$value['slug_name']] = $value['widget_script'];
        //     }
        //     else
        //     {
        //         $widgets[$value['slug_name']] = $value['widget_link'];
        //     }
        // }
        $include['title']=$title;
        // $include['widgets']=$widgets;
        // //$include['menu']=$this->menu_model->getMenu();
        // $include['navbar']=$this->load->view('includes/navbar',$include,true);
        $include['header_sellerdashboard']=$this->load->view('includes/header',$include,true);
        $include['header_home']=$this->load->view('includes/header_home',$include,true);
        $include['top_header']=$this->load->view('includes/top_header',$include,true);
        $include['footer']=$this->load->view('includes/footer',$include,true);
        return $include;
    }
    
    private function initiate()
    {
         $this->currentTime=(int)time();
         $siteSettings=$this->site_settings_model->fetchRecord(array(),array('setting_name','desc'));
         foreach($siteSettings as $key=>$value)
         {
                 if(!empty($value['setting_value']))
                         define(strtoupper(str_replace(' ','_',$value['slug'])),$value['setting_value']);
                 else
                         define(strtoupper(str_replace(' ','_',$value['slug'])),$value['setting_name']);
         }
        // if(COMPANY_ADDRESS)
        // {
        //     $latLong=$this->getLatLong(COMPANY_ADDRESS);
        //     define('LATITUDE', $latLong['lat']);
        //     define('LONGITUDE', $latLong['long']);
        // }
    }
    private function getLatLong($address)
    {
        $data=array(
            'lat'=>'',
            'long'=>'',
            'address'=>''
        );
        $coordinates = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . ',India&sensor=false');
        $coordinates = json_decode($coordinates);
        if($coordinates->status==="ZERO_RESULTS")
            return $data;
        $data['lat']=$coordinates->results[0]->geometry->location->lat;
        $data['long']=$coordinates->results[0]->geometry->location->lng;
        $data['address']=$coordinates->results[0]->formatted_address;
        return $data;
    }
    protected function initialize()
    {
        $return=array(
                      'result' =>'',
                      'status'=>'initiate',
                      'cause'=>'Nothing is happening..'
        );
        return $return;
    }
    protected function output($cause="",$status="error",$data=array())
    {
       $return=$this->initialize();
       $return['result']=$data;
       $return['cause']=$cause;
       $return['status']='error';
       if(strtolower($status)=="success")
           $return['status']='success';
       if(!$this->input->is_ajax_request())
            return json_encode($return);
       echo json_encode($return);die;
    }
    protected function checkLogin($redirect=true)
    {
        if($this->session->userdata('user_id'))
            return true;
        if($redirect)
            redirect(base_url().'login');
        return false;
    }
}
?>