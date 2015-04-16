<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_login_model
 *
 * @author User
 */
class Admin_Login_Model extends CI_Model {
    //put your code here
    
    public function checkLoginInfo($username, $password) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('activation_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}

?>
