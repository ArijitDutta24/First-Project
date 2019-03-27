<?php
class Holiday_package_activity_model extends Core {
    
    public function __construct()
    {
        parent::__construct('holiday_package_activity');
    }

    public function get_all_activities($where = NULL, $order_by = array(), $group_by = '', $limit = '', $offset = 0)
     {
         $ret = array();
         $this->db->select('holiday_package_activity.*,holiday_package_themes.theme_name,holiday_activity_gallery.activity_image');
         $this->db->from('holiday_package_activity');
         $this->db->join('holiday_package_themes', 'holiday_package_activity.theme_id=holiday_package_themes.theme_id', 'left');
        
         $this->db->join('holiday_activity_gallery', 'holiday_package_activity.activity_id=holiday_activity_gallery.activity_id ', 'left');

         $this->db->where('holiday_package_activity.activity_status', 1);
         if ($where)
         {
             $this->db->where($where);
         }
         if (count($order_by) > 0)
         {
             $this->db->order_by($order_by[0], $order_by[1]); //$order_by[0]=name of field // $order_by[1]=asc/desc;
         }
        

         if ($group_by != '')
         {
             $this->db->group_by($group_by);
         }

         $this->db->group_by('holiday_package_activity.activity_id');


         $tempdb = clone $this->db;
         $num_results = $tempdb->count_all_results();
         $ret['total_count'] = $num_results;

         if (is_numeric($limit))
         {
             $this->db->limit($offset, $limit);
         }
        $result = $this->db->get();
        $ret['result'] = $result->result_array();

		/*$qry = "SELECT FOUND_ROWS() as cnt";
		$res = $this->db->query($qry);
		$response = $res->result_array();
		
		$ret['total_count'] = $response[0]['cnt'];*/
         
         return $ret;
     }

     public function getActivityBysearch($where = NULL, $filter = array(), $order_by = array(), $group_by = '', $limit = '', $offset = 0)
     {
         $ret = array();

         $this->db->select('holiday_package_activity.*,holiday_package_themes.theme_name,holiday_activity_gallery.activity_image');
         $this->db->from('holiday_package_activity');
         $this->db->join('holiday_package_themes', 'holiday_package_activity.theme_id=holiday_package_themes.theme_id', 'left');
        
         $this->db->join('holiday_activity_gallery', 'holiday_package_activity.activity_id=holiday_activity_gallery.activity_id ', 'left');

         $this->db->where('holiday_package_activity.activity_status', 1);

        
         if ($filter)
         {
             if ($filter['min_price'] != '')
             {
                 $this->db->where('holiday_package_activity.activity_price >=', $filter['min_price']);
                 $this->db->where('holiday_package_activity.activity_price <=', $filter['max_price']);
             }
            
             if (!empty($filter['theme']))
             {
                 $them = '( ';
                 foreach ($filter['theme'] as $th_key => $th_val)
                 {
                     $them .= ' holiday_package_themes.theme_id= "' . $th_val . '"';
                     if ($th_key < count($filter['theme']) - 1)
                     {
                         $them .= ' or ';
                     }
                     // $them 'holiday_package_themes.theme_id REGEXP',  $th_val
                     //$this->db->where('holiday_package_themes.theme_id REGEXP',  $th_val);
                 }
                 $them .= ' ) ';
                 $this->db->where($them);
             }
             
         }
         if ($where)
         {
             $this->db->where($where);
         }
         if (count($order_by) > 0)
         {
             $this->db->order_by($order_by[0], $order_by[1]); //$order_by[0]=name of field // $order_by[1]=asc/desc;
         }
         

         if ($group_by != '')
         {
             $this->db->group_by($group_by);
         }

         $this->db->group_by('holiday_package_activity.activity_id');


         $tempdb = clone $this->db;
         $num_results = $tempdb->count_all_results();
         $ret['total_count'] = $num_results;

         if (is_numeric($limit))
         {
             //$this->db->limit($limit, $offset);
             $this->db->limit($offset, $limit);
         }
         $result = $this->db->get();
         //echo $this->db->last_query(); exit;
         $ret['result'] = $result->result_array();
         return $ret;
//         return $result->result_array();
     }

     public function get_lr_activities($where = NULL, $order_by = array(), $group_by = '', $limit = '', $offset = 0)
     {
        $ret = array();

        $act_array = array();

        $this->db->select('holiday_package_activity.*');

         $this->db->from('holiday_package_activity');

         $this->db->join('holiday_store', 'holiday_package_activity.holiday_store_id=holiday_store.holiday_store_id', 'left');
         
         if ($where)
         {
             $this->db->where($where);
         }
         if (count($order_by) > 0)
         {
             $this->db->order_by($order_by[0], $order_by[1]); //$order_by[0]=name of field // $order_by[1]=asc/desc;
         }
        

         if ($group_by != '')
         {
             $this->db->group_by($group_by);
         }

         $this->db->group_by('holiday_package_activity.activity_id');
         
        $result = $this->db->get();

        $ret = $result->result_array();

        if($ret)
        {
            foreach ($ret as $key => $value) {

                $row['id'] = 'act_'.$value['activity_id']; 

                $row['name'] = $value['activity_name'];               
                  
                $act_array[] = $row;          
            }

            
        }
        return $act_array;
        
     }
 	

}