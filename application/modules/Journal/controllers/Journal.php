<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal extends MX_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
        $this->load->model('mdljournal');
         
    }

	

    
    
    function is_logged_in()
    {
        $this->load->model('mdljournal');
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            $data['link'] = "Home";
            $this->load->view('template/header',$data);
        }
        else
        {
            $data = array(
            'header' => '',
            'link'  => "Dashboard",
            'title' =>$this->mdljournal->user_title(),
            'username' =>$this->mdljournal->user_name(),
            'lastname' =>$this->mdljournal->user_lastname(),
            'firstname' =>$this->mdljournal->user_firstname(),
            'middlename' =>$this->mdljournal->user_middlename(),
            'ps_id' => $this->session->userdata('ps_id'),
            'img' => $this->mdljournal->user_img(),
            'color' => $this->mdljournal->user_color()
         ); 
        $this->load->view('template/dashboardheader',$data);
        }
    }
   
    public function atoz()
    {
          $data['A'] = $this->mdljournal->getA(array('sort_by'=>'journal_title','sort_direction'=>'DESC'));
        $this->load->view('atoz',$data);
    }
     public function viewjournal()
    {  
      
        
        $data['journal'] = $this->mdljournal->get(array('path'=>$this->uri->segment(3)));   

        $this->load->view('viewjournal',$data);
        
    }


}