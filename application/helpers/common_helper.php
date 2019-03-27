<?php
function pr($array=array())
{
	echo '<pre>';
	print_r($array);
	die;
}

function chkReadPermission($slug=null,$id=null)
{
    $CI =& get_instance();
    $CI->db->select('read_access');
    $CI->db->from('user_permissions');
    $CI->db->join('modules','modules.id = user_permissions.module_id');
    $CI->db->where('modules.slug',$slug);
    $CI->db->where('user_permissions.user_type_id',$id);
    $query=$CI->db->get();
    $res=$query->row_array();
    if(!empty($res))
    {
        return $res['read_access'];
    }
    elseif($id==1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

function chkWritePermission($slug=null,$id=null)
{
    $CI =& get_instance();
    $CI->db->select('write_access');
    $CI->db->from('user_permissions');
    $CI->db->join('modules','modules.id = user_permissions.module_id');
    $CI->db->where('modules.slug',$slug);
    $CI->db->where('user_permissions.user_type_id',$id);
    $query=$CI->db->get();
    $res=$query->row_array();
    if(!empty($res))
    {
        return $res['write_access'];
    }
    elseif($id==1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

function GetUserList($user_type_id='')
{
    $data = array();
    $CI =& get_instance();
    if($user_type_id!=''){
        $CI->db->where('user_type_id',$user_type_id);
    }
    
    $CI->db->where('user_status','1');
    $CI->db->order_by('full_name','ASC');
    $get = $CI->db->get('tbl_user');
    //echo $CI->db->last_query();
    //echo $get->num_rows();
    if($get->num_rows()>0){
        //echo "TEST";
        foreach($get->result() as $result){
            //echo '<pre>';print_r($result);
            $data[] = array(
                'user_id' => $result->user_id,
                'full_name' => $result->full_name,
                'username' => $result->username
            );
        }
    }
    return $data;
}

function getModules($project_id=null)
{
    $data = array();
    $CI =& get_instance();
    $CI->db->select('*');
    $CI->db->from('tbl_module');
    $CI->db->where('project_id',$project_id);
    $get = $CI->db->get();
    return $get->num_rows();
}

function get_users($where=null)
{
   $data = array();
    $CI =& get_instance();
    $CI->db->select('*');
    $CI->db->from('tbl_user');
    if($where)
    {
        $CI->db->where($where);
    }
    $get = $CI->db->get(); 
    $res=$get->result_array();
    return $res;
}
function mail_initiate(){
    $CI =& get_instance();
    $config = array();
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'testdevloper007@gmail.com';  //change it
    $config['smtp_pass'] = 'Password@321'; //change it
    $config['charset'] = 'utf-8';
    $config['newline'] = "\r\n";
    $config['mailtype'] = 'html';
    $config['wordwrap'] = TRUE;
    $CI->email->initialize($config);
}
function cms_title($id){
    $CI = & get_instance();
    $CI->db->from('cms');
    $CI->db->where('cms.cms_id',$id);
    $query=$CI->db->get();
    $res=$query->row_array();
    return $res;
}

function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
	
	function resizeimage($img,$dir,$width,$height) {
    $CI = & get_instance(); $CI->load->library('image_lib');
    $config['image_library'] = 'gd2';
    $config['source_image'] = $img;
    $config['new_image'] = $dir;
    $config['width'] = $width;
    $config['height'] = $height;
    $config['quality'] = '80%';
    $config['maintain_ratio'] = FALSE ;
   // $config['master_dim'] = 'width';
    $CI->image_lib->clear();
    $CI->image_lib->initialize($config);
    $CI->image_lib->resize();
}
function getLogo($id){
	 $CI = & get_instance();
    $CI->db->from('brand');
    $CI->db->where('br_id',$id);
    $query=$CI->db->get();
    $res=$query->row_array();
    return $res['br_image'];
}

function freshPrice($pr_id){
	  $CI = & get_instance();
	  $CI->db->from('servay_opt_val');
	  $CI->db->where('pr_id',$pr_id);
	  $CI->db->where('servay_id',44);
	  $query=$CI->db->get();
	  $res=$query->row_array();
      return $res;	
}

function aboveOneYearPrice($pr_id){
	  $CI = & get_instance();
	  $CI->db->from('servay_opt_val');
	  $CI->db->where('pr_id',$pr_id);
	  $CI->db->where('servay_id',22);
	  $query=$CI->db->get();
	  $res=$query->row_array();
      return $res;	
}
function brandCatName($cat_id){
	$CI = & get_instance();
	  $CI->db->from('category');
	  $CI->db->where('cat_id',$cat_id);
	  $query=$CI->db->get();
	  $res=$query->row_array();
      return $res['cat_name'];	
	
}
?>