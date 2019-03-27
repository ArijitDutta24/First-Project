<?php

 class Activity_gallery_model extends Core
 {

     public function __construct()
     {
         parent::__construct('holiday_activity_gallery');
     }

     public function deleteActivityImage($id = '') {
        if(!empty($id)) {
            $data = $this->db->get_where('holiday_activity_gallery', array('id'=>$id));
            if($data->num_rows() > 0) {
                $imageName = $data->row_array()['activity_image'];
                if(file_exists('assets/uploads/activity_images/' . $imageName)) {
                    $unlinked = unlink('assets/uploads/activity_images/' . $imageName);
                    $unlinkedThumb = unlink('assets/uploads/activity_images/thumb/' . $imageName);
                    if($unlinked) {
                        $this->db->where('id', $id);
                        $this->db->delete('holiday_activity_gallery');
                        return true;
                    }
                }else{
                    return false;
                }
            }
        }
    }
 }

 