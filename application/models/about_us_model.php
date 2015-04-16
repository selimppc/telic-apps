<?php

class About_Us_Model extends CI_Model {
    //put your code here
    
   
    public function selectContentByCategoryId()
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('category_id',2);
        $querey_result=  $this->db->get();
        $result=$querey_result->result();
        return $result;
    }  
    
}

?>
