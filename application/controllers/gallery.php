<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gallery
 *
 * @author User
 */
class Gallery extends CI_Controller{
    //put your code here
    public function index()
	{
        
            $data=array();
            $this->load->model('gallery_model');            
            $data['galleryInfo']=$this->gallery_model->selectGalleryByGalleryId();
            
            $data['slider']=FALSE;
            $data['maincontent']=  $this->load->view('gallery',$data,TRUE);
            $data['title']= 'Gallery | Telic Apps';
            $this->load->view('home',$data);
                
	}
}

?>
