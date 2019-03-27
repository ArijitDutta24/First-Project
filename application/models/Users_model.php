<?php error_reporting(0);
class Users_model extends Core {
    public function __construct()
    {
            parent::__construct('user');
    }
    public function find($opta=array())
    {
        if(empty($opta['join'])){
                $opta['join']=array(
                        array(
                                'table'=>'tbl_user_type',
                                'on'=>'tbl_user_type.user_type_id=user.user_type_id'
                        )
                );
        }
        return $this->buildResult(parent::find($opta));
    }
    public function immediateSenior($currentusertypeid=0)
        {
            $q=$this->db->query('select * from user where user_type_id = (select max(user_type_id) from user where user_type_id < '.$currentusertypeid.' )');
        return $q->result_array();
        }
    public function Tree()
    {
        $data = $teamlead_array = $teammember_array = array();
        $this->db->where('user_type_id','5');
        //$this->db->where('senior_id','0');
        $project_namajer = $this->db->get('tbl_user');
        
        if($project_namajer->num_rows>0){
            foreach($project_namajer->result() as $project_namager_result){
                $this->db->where('senior_id',$project_namager_result->id);
                
                $this->db->where('user_type_id','6');
                $teamlead = $this->db->get('tbl_user');
                
                if($teamlead->num_rows>0){
                    foreach ($teamlead->result() as $teamlead_result) {
                        $this->db->where('senior_id',$teamlead_result->id);
                        
                        $this->db->where('user_type_id','7');
                        $teammember = $this->db->get('tbl_user');
                        
                        if($teammember->num_rows>0){
                            foreach ($teammember->result() as $teammember_result) {
                                $teammember_array[] = $teammember_result->name;
                            }
                        }
                        $teamlead_array[] = array(
                            'teamlead' => $teamlead_result->name,
                            'teammember' => $teammember_array
                        );
                        unset($teammember_array);
                    }
                }
                $data[] = array(
                    'project_manager' => $project_namager_result->name,
                    'teamdetails' => $teamlead_array
                );
                unset($teamlead_array);
            }
        }
        return $data;
    }

    public function buildResult($result=array())
    {
            if(!empty($result['users']))
            {
                foreach($result['users'] as $key=>$value)
                {
                    if(!empty($result['user_types']))
                    {
                        foreach($result['user_types'] as $keyx=>$valuex)
                        {
                            if($value['user_type_id']==$valuex['id'])
                            {
                                    if(empty($result['users'][$key]['user_types']))
                                            $result['users'][$key]['user_types']=array();
                                    array_push($result['users'][$key]['user_types'],$valuex);
                            }
                        }
                    }
                }
            }
            return $result;
    }
    public function senior()
    {

        $id=$_GET['q'];
        $q=$this->db->query("select * from user where user_type_id='$id' ");
        return $q;

    }

    public function checkUserdetail($data){
      // print_r($data);die;
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('email'=>$data['email']));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function createUser($udata){
       // print_r($udata);die;
        $this->db->insert('user',array('facebook_id'=>$udata['facebook_id'],'username'=>$udata['username'],'email'=>$udata['email'],
                          'user_status'=>$udata['status'],'add_date'=>$udata['date_of_creation'],'last_login'=>$udata['last_login']));
        $id = $this->db->insert_id();
   
        return $id;

    }

    public function userDetails($id){
        $this->db->select('*');
        $this->db->from('user');        
        $this->db->where(array('user.user_id'=>$id));
        $query=$this->db->get();
        $result = $query->row_array();
        //pr($result);die;
        return $result; 
    }

     public function updateUserdata($condition,$data){
        $this->db->where($condition);
        $this->db->update('user',$data);
        return true;
    }  

    public function fetchuser($data)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('email'=>$data['email']));
        $this->db->where(array('password'=>md5($data['password'])));
        $query = $this->db->get();
        return $query->row_array();   
    }

}
?>