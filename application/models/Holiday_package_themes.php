<?php

 class Holiday_package_themes extends Core
 {

     public function __construct()
     {
         parent::__construct('holiday_package_themes');
     }
     public function get_theme_name($param = '')
     {
         
         if($param!='' && $param=='activity')
         {
           $sql = "SELECT  GROUP_CONCAT( DISTINCT holiday_package_activity.theme_id  SEPARATOR ',') as theme FROM holiday_package_activity where holiday_package_activity.theme_id!='' and  holiday_package_activity.activity_status=1";  
         }
         else{
         $sql = "SELECT  GROUP_CONCAT( DISTINCT holiday_package.package_theme_id SEPARATOR ',') as theme FROM holiday_package where holiday_package.status=1";
         }
         $sqlres = $this->db->query($sql);

         $result = $sqlres->row_array();

         if (!empty($result) && $result['theme'] != '')
         {
             $sql1 = 'SELECT * FROM `holiday_package_themes` WHERE `holiday_package_themes`.`theme_id` IN (' . $result['theme'] . ')';

             $sqlres1 = $this->db->query($sql1);

             $result1 = $sqlres1->result_array();
             return $result1;
         }
     }

 }
 