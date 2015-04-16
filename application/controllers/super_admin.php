<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
session_start();
/**
 * Description of super_admin
 *
 * @author User
 */

class Super_Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
               if(!$this->session->userdata('admin_id')) redirect('admin');
               
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "510px", //Setting a custom width
                'height' => '250px', //Setting a custom height
            ),
        );
         $this->data['ckeditor_1'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor_1',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "450px", //Setting a custom width
                'height' => '250px', //Setting a custom height
            ),
        ); 
          
        $this->load->model('super_admin_model');       
    }
    
    public function index() {
        $data = array();
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/admin_home_message', '', TRUE);
        $data['title'] = 'Control Panel | Telic Apps';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('login_status');
        $sdata = array();
        $sdata['message'] = 'You are successfully logout !';
        $this->session->set_userdata($sdata);
        redirect('admin','refresh');
    }
    
    public function add_content_form()
    {
        $data = array();
        $data['check_editor'] = $this->data;
        $data['categoryInfo']=$this->super_admin_model->selectAllcategory();
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/add_content',$data, TRUE);
        $data['title'] = 'Add Content | Telic Apps';

        $this->load->view('admin/admin_home', $data);
    }
    public function save_content()
    {
               
        if($_FILES)
        {
        $this->load->library('upload');
        $config['upload_path'] = './images/content_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']	= '200';
        $this->upload->initialize($config);

        //echo '<pre>';
        //print_r($_FILES);
        //  exit();
         
        $this->upload->do_upload('content_image');

        $image_des = $this->upload->data();
        //echo '<pre>';
        //print_r($image_des);
        //exit();
        
        }
        else{
            //$data['content_image']=
        }
        
        $data=array();
        $data['category_id']=  $this->input->post('category_id',TRUE);
        $data['content_title']=$this->input->post('content_title',TRUE);
        $data['content_description']=$this->input->post('content_description',TRUE);
        //$data['content_image']=$this->input->post('content_image',TRUE);
        $data['content_image'] = 'images/content_images/'.$image_des['file_name'];
        
        $this->super_admin_model->saveContentInfo($data);
        redirect('super_admin/add_content_form');

    }
    
    public function add_category_form()
    {
        $data = array();
        $data['check_editor'] = $this->data;
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/add_category',$data, TRUE);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function save_category()
    {
        $data=array();
        $data['category_name']=$this->input->post('category_name',TRUE);
        $data['category_description']=$this->input->post('category_description',TRUE);
        $this->super_admin_model->saveCategoryInfo($data);
        redirect('super_admin/add_category_form');
    }
    
    
       /*
     * -----------------------------------------------------------------------------------------
     * About US
     * --------------------------------------------------------------------------------------------
     */
    public function view_about_us()
    {
        $data = array();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_about_us/';

        $config['total_rows'] = $this->db->count_all('tbl_content');
        $config['per_page'] = '2';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);

        $data['contentInfo']=$this->super_admin_model->selectContentByAboutUs($config['per_page'], $this->uri->segment(3));
        
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/view_about_us',$data, true);
        $data['title'] = 'View About Us | Telic Apps';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function delete_about_us($content_id)
    {
        $this->super_admin_model->deleteAboutUsByContentId($content_id);
        redirect('super_admin/view_about_us');
    }
    
    public function edit_about_us($content_id)
    {
        $data=array();
        $data['check_editor'] = $this->data;
        
        $data['categoryInfo']=$this->super_admin_model->selectAllcategory();
        $data['result']=$this->super_admin_model->selectContentByContentId($content_id);
        
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/edit_about_us',$data, true);
        $data['title'] = 'Edit About Us | Telic Apps';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function update_about_us()
    {
        $data=array();
        if($_FILES)
        {
        $this->load->library('upload');
        $config['upload_path'] = './images/content_images/';
        $config['allowed_types'] = 'gif|jpg|png';
//       $config['max_size']	= '200';
        $this->upload->initialize($config);

         //echo '<pre>';
          //print_r($_FILES);
          //exit();
         
        $this->upload->do_upload('content_image');

        $image_des = $this->upload->data();
       //echo '<pre>';
         // print_r($image_des);
          //exit();
        

        $data['content_image'] = 'images/content_images/'.$image_des['file_name'];
        }
        else{
            $data['product_image']='images/content_images/'.$image_des['file_name'];
        }
        
        $data['category_id']=  $this->input->post('category_id',TRUE);
        $data['content_title']=$this->input->post('content_title',TRUE);
        $data['content_description']=$this->input->post('content_description',TRUE);
        //$data['content_image'] = 'images/content_images/'.$image_des['file_name'];
        
        $this->super_admin_model->updateAboutUsInfo($content_id,$data);
        redirect('super_admin/view_about_us');
   
    }
    
    /*
     * -----------------------------------------------------------------------------------------
     * Services 
     * --------------------------------------------------------------------------------------------
     */
    
    
    public function view_services()
    {
        $data = array();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_services/';

        $config['total_rows'] = $this->db->count_all('tbl_content');
        $config['per_page'] = '2';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);

        $data['contentInfo']=$this->super_admin_model->selectContentByServices($config['per_page'], $this->uri->segment(3));
        
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/view_services',$data, true);
        $data['title'] = 'View Services | Telic Apps';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function delete_services($content_id)
    {
        $this->super_admin_model->deleteAboutUsByContentId($content_id);
        redirect('super_admin/view_services');
    }
    
    public function edit_services($content_id)
    {
        $data=array();
        $data['check_editor'] = $this->data;
        
        $data['categoryInfo']=$this->super_admin_model->selectAllcategory();
        $data['result']=$this->super_admin_model->selectContentByContentId($content_id);
        
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/edit_services',$data, true);
        $data['title'] = 'Edit Services | Telic Apps';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function update_services()
    {
        $data=array();
        if($_FILES)
        {
        $this->load->library('upload');
        $config['upload_path'] = './images/content_images/';
        $config['allowed_types'] = 'gif|jpg|png';
//       $config['max_size']	= '200';
        $this->upload->initialize($config);

         //echo '<pre>';
          //print_r($_FILES);
          //exit();
         
        $this->upload->do_upload('content_image');

        $image_des = $this->upload->data();
       //echo '<pre>';
         // print_r($image_des);
          //exit();
        

        $data['content_image'] = 'images/content_images/'.$image_des['file_name'];
        }
        else{
            //$data['product_image']='images/content_images/'.$image_des['file_name'];
        }
        
        $data['category_id']=  $this->input->post('category_id',TRUE);
        $data['content_title']=$this->input->post('content_title',TRUE);
        $data['content_description']=$this->input->post('content_description',TRUE);
        //$data['content_image'] = 'images/content_images/'.$image_des['file_name'];
        
        $this->super_admin_model->updateAboutUsInfo($content_id,$data);
        redirect('super_admin/view_services');
   
    }
    
    
     /*
     * -----------------------------------------------------------------------------------------
     * Gallery
     * --------------------------------------------------------------------------------------------
     */
    
    public function add_gallery_form()
    {
        $data = array();
        //$data['galleryInfo']=$this->super_admin_model->selectAllcategory();
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/add_gallery',$data, TRUE);
        $data['title'] = 'Add Gallery | Telic Apps';

        $this->load->view('admin/admin_home', $data);
    }
    public function save_gallery()
    {
               
        if($_FILES)
        {
        $this->load->library('upload');
        $config['upload_path'] = './images/gallery/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']	= '200';
        $this->upload->initialize($config);

        //echo '<pre>';
        //print_r($_FILES);
        //  exit();
         
        $this->upload->do_upload('gallery_image');

        $image_des = $this->upload->data();
        //echo '<pre>';
        //print_r($image_des);
        //exit();
        
        }
        else{
            //$data['content_image']=
        }
        
        $data=array();
        $data['gallery_id']=  $this->input->post('gallery_id',TRUE);
        $data['gallery_name']=$this->input->post('gallery_name',TRUE);
        $data['gallery_image'] = 'images/gallery/'.$image_des['file_name'];
        
        $this->super_admin_model->saveGalleryInfo($data);
        
        //$sdata = array();
        //$sdata['message'] = 'Gallery Image Saved Successfully !';
        //$this->session->set_userdata($sdata);
        
        redirect('super_admin/add_gallery_form');

    }
    
    
    public function view_gallery()
    {
        $data = array();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_gallery/';

        $config['total_rows'] = $this->db->count_all('tbl_gallery');
        $config['per_page'] = '5';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);

        $data['galleryInfo']=$this->super_admin_model->selectImageByGallery($config['per_page'], $this->uri->segment(3));
        
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/view_gallery',$data, true);
        $data['title'] = 'View Gallery | Telic Apps';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function delete_gallery($gallery_id)
    {
        $this->super_admin_model->deleteGalleryByGalleryId($Gallery_id);
        redirect('super_admin/view_services');
    }
    
    public function edit_gallery($gallery_id)
    {
        $data=array();
        $data['check_editor'] = $this->data;
        
        //$data['galleryInfo']=$this->super_admin_model->selectAllgallery();
        $data['result']=$this->super_admin_model->selectGalleryByGalleryId($gallery_id);
        
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/edit_gallery',$data, true);
        $data['title'] = 'Edit Gallery | Telic Apps';
        $this->load->view('admin/admin_home', $data);
    }
    
    public function update_gallery()
    {
        $data=array();
        if($_FILES)
        {
        $this->load->library('upload');
        $config['upload_path'] = './images/gallery/';
        $config['allowed_types'] = 'gif|jpg|png';
//       $config['max_size']	= '200';
        $this->upload->initialize($config);

         //echo '<pre>';
          //print_r($_FILES);
          //exit();
         
        $this->upload->do_upload('gallery_image');

        $image_des = $this->upload->data();
       //echo '<pre>';
         // print_r($image_des);
          //exit();
        

        $data['gallery_image'] = 'images/gallery/'.$image_des['file_name'];
        }
        else{
            //$data['product_image']='images/gallery/'.$image_des['file_name'];
        }
        
        $data['category_id']=  $this->input->post('gallery_id',TRUE);
        $data['content_title']=$this->input->post('gallery_name',TRUE);
        $data['content_description']=$this->input->post('content_description',TRUE);
        //$data['gallery_image'] = 'images/content_images/'.$image_des['file_name'];
        
        $this->super_admin_model->updateAboutUsInfo($gallery_id,$data);
        redirect('super_admin/view_gallery');
   
    }
    
     /*
     * -----------------------------------------------------------------------------------------
     * Logo Theme
     * --------------------------------------------------------------------------------------------
     */
    
    
        public function add_logo()
        {
        $data = array();
        //$data['galleryInfo']=$this->super_admin_model->selectAllcategory();
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/add_logo',$data, TRUE);
        $data['title'] = 'Theme Logo | Telic Apps';

        $this->load->view('admin/admin_home', $data);
        }
        
        public function save_logo()
    {
               
        if($_FILES)
        {
        $this->load->library('upload');
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']	= '200';
        $this->upload->initialize($config);

        //echo '<pre>';
        //print_r($_FILES);
        //  exit();
         
        $this->upload->do_upload('logo_image');

        $image_des = $this->upload->data();
        //echo '<pre>';
        //print_r($image_des);
        //exit();
        
        }
        else{
            //$data['content_image']=
        }
        
        $data=array();
        $data['logo_id']=  $this->input->post('logo_id',TRUE);
        $data['logo_name']=$this->input->post('logo_name',TRUE);
        $data['logo_image'] = 'images/'.$image_des['file_name'];
        
        $this->super_admin_model->saveLogoInfo($data);
      
        redirect('super_admin/add_logo');

    }
    
    /*
     * -----------------------------------------------------------------------------------------
     * About Me Sidebar
     * --------------------------------------------------------------------------------------------
     */
    
    
        public function about_me()
        {
        $data = array();
        $data['check_editor'] = $this->data;
        $data['aside_home'] = $this->load->view('admin/aside_home','', TRUE);
        $data['maincontent'] = $this->load->view('admin/about_me',$data, TRUE);
        $data['title'] = 'About Me | Telic Apps';

        $this->load->view('admin/admin_home', $data);
        }
        
        public function save_about_me()
    {
               
        if($_FILES)
        {
        $this->load->library('upload');
        $config['upload_path'] = './images/about_me/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']	= '200';
        $this->upload->initialize($config);

        //echo '<pre>';
        //print_r($_FILES);
        //  exit();
         
        $this->upload->do_upload('about_me_image');

        $image_des = $this->upload->data();
        //echo '<pre>';
        //print_r($image_des);
        //exit();
        
        }
        else{
            //$data['content_image']=
        }
        
        $data=array();
        $data['about_me_id']=  $this->input->post('about_me_id',TRUE);
        $data['about_me_title']=$this->input->post('about_me_title',TRUE);
        $data['about_me_description']=$this->input->post('about_me_description',TRUE);
        $data['about_me_image'] = 'images/about_me/'.$image_des['file_name'];
        
        $this->super_admin_model->saveAboutMeInfo($data);
      
        redirect('super_admin/about_me');

    }
    
    
    
    

}
?>
