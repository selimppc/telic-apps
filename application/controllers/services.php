<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of services
 *
 * @author User
 */
class Services extends CI_Controller{
    //put your code here
    public function index()
	{
            $data=array();
            $data['slider']=FALSE;
            $this->load->model('services_model');
            
            $data['result']=$this->services_model->selectContentByCategoryId();
            //$data['categoryInfo']=$this->about_us_model->selectCategory();
            
            $data['maincontent']=  $this->load->view('services',$data,TRUE);
            $data['title']='Services | Telic Apps';
            $this->load->view('home',$data);
	}
}

?>
