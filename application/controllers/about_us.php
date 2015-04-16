<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_us
 *
 * @author User
 */
class About_Us extends CI_Controller{
    //put your code here
    
    public function index()
	{
            $data=array();
            $data['slider']=FALSE;
            
            $this->load->model('about_us_model');
            $data['result']=$this->about_us_model->selectContentByCategoryId();
            //$data['categoryInfo']=$this->about_us_model->selectCategory();
            
            $data['maincontent']=  $this->load->view('about_us',$data,TRUE);
            $data['title']='About Us | Telic Apps';
            $this->load->view('home',$data);
                
	}
        

}

?>
