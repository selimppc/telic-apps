<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller {
    //put your code here
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_login_model');
        $this->load->database();
        $this->load->helper('url');
    }
    
    public function index()
    {
        $this->load->view('admin/login');
    }
    
    public function checkLogin() {
        
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        
        $result = $this->admin_login_model->checkLoginInfo($username, $password);
        if ($result) {

            $sdata = array();
            $sdata['name'] = $result->name;
            $sdata['admin_id'] = $result->admin_id;
            $sdata['login_status'] = TRUE;
            $this->session->set_userdata($sdata);
            redirect('super_admin');
            
        } else {
            $sdata = array();
            $sdata['message'] = 'Username Or Password Invalid.';
            $this->session->set_userdata($sdata);
            redirect("admin/index");
        }
    }
}

?>
