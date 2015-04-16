<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
            $data=array();

            $this->load->model('super_admin_model');
            //$result=$this->welcome_model->selectHomeContent();
            $this->load->library('pagination');
            $config['base_url']=  base_url() .'welcome/index/';
            $config['total_rows']=  $this->db->count_all('tbl_content');
            $config['per_page']='2';
            $config['page_tag_open']='<p>';
            $config['page_tag_close']='</p>';
            $this->pagination->initialize($config);
            
            $data['result']=$this->super_admin_model->selectContent($config['per_page'],$this->uri->segment(3));
            $data['categoryInfo']=$this->super_admin_model->selectAllcategory();
         
            $data['slider']=$this->load->view('image_slider','', TRUE);
            $data['maincontent']=  $this->load->view('home_message',$data,TRUE);
            $data['title']='Telic Apps | Your Personal Apps';
            $this->load->view('home',$data);
                
	}
        
        
        public function content_detail($content_id)
        {
 
            $data = array();
            $this->load->model('welcome_model');
            $data['result']=$this->welcome_model->selectContentByContentId($content_id);
            $data['slider']=FALSE;
            $data['maincontent'] = $this->load->view('content_detail', $data, TRUE);
            $data['title']='Content Detail';
            $this->load->view('home', $data);
        }
        
        public function theme_logo()
        {
            $data=array();
            $this->load->model('welcome_model');
            $data['result']=$this->welcome_model->selectLogobyLogoId();
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */