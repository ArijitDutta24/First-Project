<?php

 class Holiday_reservation_model extends Core
 {

     public function __construct()
     {
         parent::__construct('holiday_reservation');
     }

     public function reseration_history_mail_for_package($user_id = 0, $transaction_id = '')
     {
         $res = array();
         $data = array();
         $this->db->select('*');
         $this->db->from('holiday_transaction');
         $this->db->join('holiday_reservation', 'holiday_transaction.holiday_transaction_id = holiday_reservation.trans_id');

         $this->db->join('holiday_package', 'holiday_reservation.package_or_activity_id = holiday_package.package_id');
         $this->db->join('holiday_destination', 'holiday_package.destination_id = holiday_destination.holiday_destination_id');

         if ($user_id)
         {
             $this->db->where('holiday_transaction.user_id', $user_id);
         }
         if ($transaction_id)
         {
             $this->db->where('holiday_transaction.holiday_transaction_id', $transaction_id);
         }
         $this->db->order_by('holiday_transaction_id', 'DESC');

         $q = $this->db->get();

         $data['total'] = $q->num_rows();
         $data['reservations'] = $q->result_array();
         return $data;
     }

     public function reseration_history_mail_for_activity($user_id = 0, $transaction_id = '')
     {
         $res = array();
         $data = array();
         $this->db->select('*');
         $this->db->from('holiday_reservation');
//         $this->db->join('holiday_reservation', 'holiday_transaction.holiday_transaction_id = holiday_reservation.trans_id');

         $this->db->join('holiday_package_activity', 'holiday_reservation.package_or_activity_id = holiday_package_activity.activity_id');
        

         if ($user_id)
         {
             $this->db->where('holiday_reservation.user_id', $user_id);
         }
         if ($transaction_id)
         {
             $this->db->where('holiday_reservation.trans_id', $transaction_id);
         }
         $this->db->order_by('holiday_reservation_id', 'DESC');

         $q = $this->db->get();
         $data['reservations'] = $q->result_array();
         return $data;
     }

     public function get_all_bookings($where = NULL, $order_by = array(), $group_by = '', $limit = '', $offset = 0)
     {
         $ret = array();
         $this->db->select('holiday_transaction.*,holiday_reservation.package_or_activity_id,holiday_reservation.no_of_person');
         $this->db->from('holiday_reservation');
         $this->db->join('holiday_transaction', 'holiday_transaction.holiday_transaction_id=holiday_reservation.trans_id', 'left');
         //$this->db->where('holiday_package_activity.activity_status', 1);
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



         $result = $this->db->get();

         //echo $this->db->last_query();exit;
         $results = $result->result_array();

         return $results;
     }

 }
 