<?php

class Welcome_Model extends CI_Model{
    //put your code here
    
    public function selectHomeContent()
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('content_id',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function selectContentByCategoryId($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('category_id',$category_id);
        $querey_result=  $this->db->get();
        $result=$querey_result->result();
        return $result;
    }
    
    public function selectContentByContentId($content_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        $this->db->where('content_id',$content_id);
        $querey_result=  $this->db->get();
        $result=$querey_result->result();
        return $result;
    }

    
}

?>
