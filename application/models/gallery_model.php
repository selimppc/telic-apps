<?php

class Gallery_Model extends CI_Model{
    //put your code here
    
    public function selectGalleryByGalleryId()
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');

        $querey_result=  $this->db->get();
        $result=$querey_result->result();
        return $result;
    }  
}

?>
