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
        $data = array(
            'title' =>$this->mdladmin->user_title(),
            'lastname' =>$this->mdladmin->user_lastname(),
            'firstname' =>$this->mdladmin->user_firstname(),
            'middlename' =>$this->mdladmin->user_middlename(),
            'ps_id' => $this->session->userdata('ps_id'),
            'img' => $this->mdladmin->user_img(),
            'color' => $this->mdladmin->user_color()
        ); 
        $this->load->view('template/adminheader',$data);
    }
    
	public function index() 	
    {
        
        
        
	    $this->load->view('index');
		
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
        $data['journals'] = $this->mdladmin->get(array('sort_by'=>'users_id','sort_direction'=>'ASC'));
        $this->load->view('journal',$data);
    }


    public function createjournal()
    {
        

            $this->load->library('form_validation');
             $this->load->model('mdladmin');
            $this->form_validation->set_rules('journal_title','Journal Title','callback_check_if_title_exists');
            $this->form_validation->set_rules('path','Path','callback_check_if_path_exists');
            
            
                    if($this->form_validation->run($this))
                    {
                        {
                                if($_POST['visibility'] != null)
                                { 
                                    $data = array( 
                                        'journal_title' => $_POST['journal_title'],
                                        'description' => $_POST['description'],
                                        'path' => $_POST['path'],
                                        'visibility' => $_POST['visibility'],
                                        'users_id' => $this->session->userdata('users_id')
                                    );
                                    if($this->mdladmin->createjournal($data))
                                    redirect('Administrator/Journal');
                                }
                                else
                                { 
                                    $data = array( 
                                        'journal_title' => $_POST['journal_title'],
                                        'description' => $_POST['description'],
                                        'path' => $_POST['path'],
                                        'visibility' => 0,
                                        'users_id' => $this->session->userdata('users_id')
                                    );
                                    if($this->mdladmin->createjournal($data))
                                    redirect('Administrator/Journal');
                                }
                        }
                    }
                    else
                    $this->load->view('journal');
           
           


    }



     public function check_if_title_exists($requested_title)
        {
           
            $title_available = $this -> mdladmin ->check_if_title_exists($requested_title);
            if($title_available)
            {
                 return TRUE;
            }
            else
            {
               
                return FALSE;
            }

        }
         public function check_if_path_exists($requested_path)
        {
            
            $path_available = $this -> mdladmin ->check_if_path_exists($requested_path);
            if($path_available)
            {
                 return TRUE;
            }
            else
            {
                
                return FALSE;
            }

        }


    public function deletejournal()
    {  
      
        $this->mdladmin->deletejournal($this->uri->segment(3));
            
        redirect('Administrator/Journal');
    }

     

}