<?php

class Contact_Model extends CI_Model{
    //put your code here
    public function saveContactInfo($data)
    {
        $this->db->insert('tbl_contact',$data);
        $contact_id=$this->db->insert_id();
        return $contact_id;
    }
    
}

?>
