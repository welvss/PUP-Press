<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

	public function index() 	
    {
        $this->load->model('mdldashboard');
         $data = array(
            'title' =>$this->mdldashboard->user_title(),
            'lastname' =>$this->mdldashboard->user_lastname(),
            'firstname' =>$this->mdldashboard->user_firstname(),
            'middlename' =>$this->mdldashboard->user_middlename(),
            'ps_id' => $this->session->userdata('ps_id')
         ); 
        
	    $this->load->view('index',$data);
		
	}

 
    public function update_if()
    {   

                 
                   
                    {    
                                  
                         $user = array(
                               'username'=>$_POST['username'],
                               'Title' => $_POST['Title'],
                               'LastName' => $_POST['LastName'],
                               'FirstName' => $_POST['FirstName'],
                               'MiddleName' =>$_POST['MiddleName'],
                               'Email' => $_POST['Email'],
                               'MailingAddress' => $_POST['MailingAddress'],
                               'City' => $_POST['City'],
                               'Affiliation' => $_POST['Affiliation'],
                               'ContactNumber' => $_POST['ContactNumber'],
                               'Fax' => $_POST['Fax'],
                               'img' => $this->do_upload('img')
                               
                               );
       
                        if($this->mdldashboard->modify($user))
                        redirect('Dashboard');
                        redirect('Dashboard');
                    }
               
                   
    }
    public function update_else()
    {
        {
                       
                        $data = array(
                      
                        'title' =>$this->mdldashboard->user_title(),
                        'lastname' =>$this->mdldashboard->user_lastname(),
                        'firstname' =>$this->mdldashboard->user_firstname(),
                        'middlename' =>$this->mdldashboard->user_middlename(),
                        'username' =>$this->mdldashboard->user_name() ,
                        'mail' =>$this->mdldashboard->user_mailingaddress(),
                        'email' =>$this->mdldashboard->user_email(),
                        'city' =>$this->mdldashboard->user_city(),
                        'affiliation' =>$this->mdldashboard->user_affiliation(),
                         'contact' =>$this->mdldashboard->user_contact(),
                        'fax' =>$this->mdldashboard->user_fax(),
                        
                        );
                        $this->load->view('Edit',$data);
        }
    }

    public function do_upload()
    {
        $type = explode('.', $_FILES["img"]["name"]);
        $type = $type[count($type)-1];
        $url = "./images/".uniqid(rand()).'.'.$type;
        if (in_array($type, array("jpg","jpeg","gif","png"))) 
        {
           if (is_uploaded_file($_FILES["img"]["tmp_name"])) 
           {
               if (move_uploaded_file($_FILES["img"]["tmp_name"], $url)) 
               {
                   return $url;
               }
           }
        }
        return "";
    }
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect('Home/Signin');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Home/Signin');
    } 
    public function edit()
    { 
        $this->load->library('form_validation');
        $this->load->model('mdldashboard');
       
       
        if($this->input->post('submit'))
        {         
                
                if($_POST['username']!=$this->mdldashboard->user_name() && $_POST['Email']!=$this->mdldashboard->user_email())
                { 
                    $this->form_validation->set_rules('username','Username','required|callback_check_if_username_exists');
                    $this->form_validation->set_rules('Email','Email','required|callback_check_if_email_exists');
                    if($this->form_validation->run($this))
                    {
                         $this->update_if();
                    }
                   else
                    $this->update_else();
                }
                else
                if($_POST['username']!=$this->mdldashboard->user_name())
                { 
                    $this->form_validation->set_rules('username','Username','required|callback_check_if_username_exists');
                    if($this->form_validation->run($this))
                    {
                         $this->update_if();
                    }
                   else
                    $this->update_else();
                }
                else
                if($_POST['Email']!=$this->mdldashboard->user_email())
                { 
                    $this->form_validation->set_rules('Email','Email','required|callback_check_if_email_exists');
                    if($this->form_validation->run($this))
                    {
                         $this->update_if();
                    }
                   else
                    $this->update_else();
                   
                }
                else
                { 
                    if($_POST['username']==$this->mdldashboard->user_name() || $_POST['Email']==$this->mdldashboard->user_email())
                    {
                         $this->update_if();
                    }
                   else
                    $this->update_else();
                   
                }
        }
        else
        $this->update_else();
                   
        
    }




     public function check_if_username_exists($requested_username)
        {
            $this->load->model('mdldashboard');
            $username_available = $this -> mdldashboard ->check_if_username_exists($requested_username);
            if($username_available)
            {
                 return TRUE;
            }
            else
            {
                
                 return FALSE;
            }

        }
         public function check_if_email_exists($requested_email)
        {
            $this->load->model('mdldashboard');
            $email_available = $this -> mdldashboard ->check_if_email_exists($requested_email);
            if($email_available)
            {
                 return TRUE;
            }
            else
            {
        
                 return FALSE;
            }

        }



    public function changepass()
     { 
        $this->load->library('form_validation');
        $this->load->model('mdldashboard');
        $this->form_validation->set_rules('password2', 'Password', 'required|md5|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'New Password', 'trim|required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        if($this->input->post('submit'))
        {          
                
                if($this->form_validation->run($this))
                { 
                    
                   
                        $data = array(
                        'password'=>($_POST['password']),
        
                        );
                        if($this->mdldashboard->change_pass($data))
                        redirect('Dashboard');
                }
                 else
            $this->load->view('Edit-pass');
                   
                
                
        }
        else
        $this->load->view('Edit-pass');
                   
        
    }
    public function validate_credentials()
    {
            
            $this->load->model('mdldashboard');
            
            if($this->mdldashboard->can_change_pass()){
                
                return true;
                             
            }else{
                $this->form_validation->set_message('validate_credentials','Incorrect Password!');
                return false;
            }
    }


}