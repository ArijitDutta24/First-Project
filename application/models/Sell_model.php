<?php
class Sell_model extends Core {
    
    public function __construct()
    {
        parent::__construct('sell');
    }

    public function fetchsell($id)
    {
    	$data=array();
    	
       $q=$this->db->query('SELECT * FROM user_sell_servay INNER JOIN servay ON servay.servay_id=user_sell_servay.servay_id 
                            INNER JOIN servay_opt_val ON servay_opt_val.servay_opt_val_id=user_sell_servay.servay_opt_val_id 
                            WHERE user_sell_servay.sell_id='.$id);
       //echo $this->db->last_query();
    	if($q->num_rows()>0){
			foreach($q->result_array() as $result){
                if(($result['servay_cat']=='ecod') || ($result['servay_cat']=='aof')){
                    $data[]=$result;
                }else{
                    if($result['status']=='0'){
                        $data[]=$result;
                    }
                    
                }
				//$data[] = $result;
			}
		}
		//pr($data);
		return $data;
    }
    
}