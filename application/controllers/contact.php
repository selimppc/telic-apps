<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author User
 */
class Contact extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model('contact_model');
    }
    
    public function index()
	{
            $data=array();
            $data['slider']=FALSE;
            $data['maincontent']=  $this->load->view('contact','',TRUE);
            $data['title']='Contact | Telic Apps';
            $this->load->view('home',$data);
                
	}
        
    public function send_email()
    {
        $data=array();

        $data['contact_name']=$this->input->post('contact_name',TRUE);
        $data['contact_phone']=$this->input->post('contact_phone',TRUE);
        $data['contact_email']=$this->input->post('contact_email',TRUE);
        $data['contact_country']=$this->input->post('contact_country',TRUE);
        $data['contact_message']=$this->input->post('contact_message',TRUE);

        $contact_id=$this->contact_model->saveContactInfo($data);
        
            /*
             * Start send activation email to the new user
             */
            $mailData=array();    
            $mailData['from_address']='contact_email';
            $mailData['to_address']="selimppc@gmail.com";
            $mailData['admin_full_name']="Selim Reza";
            $mailData['subject']="Contact Message | Telic Apps";
                          
            $mailData['contact_name']=$data['contact_name'];
            $mailData['contact_phone']=$data['contact_phone'];
            $mailData['contact_email']=$data['contact_email'];
            $mailData['contact_country']=$data['contact_country'];
            $mailData['contact_message']=$data['contact_message'];
            
            $this->load->model('mailer_model');
            $this->mailer_model->sendEmail($mailData,'send_email');
            /*
             * End send new password email to the user
             */
            
      
        $sdata = array();
        $sdata['message'] = 'Email Sent Successfully !';
        $this->session->set_userdata($sdata);
        //redirect('contact/send_email');
        redirect("contact/index");
            
            
        
    }
}

?>
