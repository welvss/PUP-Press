<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MX_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
        $this->load->model('mdlarticle');

         $data = array(
            'header' => 'My Account |',
            'title' =>$this->mdlarticle->user_title(),
            'username' =>$this->mdlarticle->user_name(),
            'lastname' =>$this->mdlarticle->user_lastname(),
            'firstname' =>$this->mdlarticle->user_firstname(),
            'middlename' =>$this->mdlarticle->user_middlename(),
            'ps_id' => $this->session->userdata('ps_id'),
            'img' => $this->mdlarticle->user_img(),
            'color' => $this->mdlarticle->user_color()
         ); 
        $this->load->view('template/dashboardheader',$data);
    }

    public function ArticleSubmission()
    {
        $this->load->view('ArticleSubmission');
    }
    public function NewSubmission()
    {
        $this->load->view('NewSubmission');
    }
    public function UploadSubmission()
    {
        $this->load->view('NewSubmission2');
    }
    public function EnterMetadata()
    {
        $this->load->view('NewSubmission3');
    }
     public function Confirmation()
    {
        $this->load->view('NewSubmission4');
    }
    
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect('Home/Signin');
        }
    }
   

}