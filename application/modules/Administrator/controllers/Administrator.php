<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends MX_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
        $this->is_admin();
        $this->load->model('mdladmin');
    }
    
	public function index($data= array()) 	
    {
        
         $data = array(
            'title' =>$this->mdladmin->user_title(),
            'lastname' =>$this->mdladmin->user_lastname(),
            'firstname' =>$this->mdladmin->user_firstname(),
            'middlename' =>$this->mdladmin->user_middlename(),
            'ps_id' => $this->session->userdata('ps_id'),
            'img' => $this->mdladmin->user_img(),
            'color' => $this->mdladmin->user_color()
         ); 
        
	    $this->load->view('index',$data);
		
	}

 
   
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect('Home/Signin');
        }
    }
     function is_admin()
    {
        $ps_id = $this->session->userdata('ps_id');
        if($ps_id != 1)
        {
            redirect('Dashboard');
        }
    }
    
    public function journal()
    {
        $data = array(
            'title' =>$this->mdladmin->user_title(),
            'lastname' =>$this->mdladmin->user_lastname(),
            'firstname' =>$this->mdladmin->user_firstname(),
            'middlename' =>$this->mdladmin->user_middlename(),
            'ps_id' => $this->session->userdata('ps_id'),
            'img' => $this->mdladmin->user_img(),
            'color' => $this->mdladmin->user_color()
         ); 
        $this->load->view('journal',$data);
    }


     

}