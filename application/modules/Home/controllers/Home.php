<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(isset($is_logged_in) || $is_logged_in == true)
        {
            redirect('Dashboard');
        }
    }
	public function index() 	{

		#$this->load->model('mdl_tasks');
		#$data['query'] = $this->mdl_tasks->get('priority');
	    $this->load->view('index');
		
	}
        
        public function signin() {
                
            $this->load->view('signin');
            
        }
    
        
        
        public function login_validation() {
            
          
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('username','Username','required|callback_validate_credentials');
            $this->form_validation->set_rules('password','Password','required|md5');
            
            if($this->form_validation->run($this))
            {
               
                    $data = array(
                    
                    'username' =>$this->input->post('username'),
                    'users_id' =>$this->mdlusers->check_id(),
                    'ps_id' =>$this->mdlusers->checK_privilege(),
                    'is_logged_in'=> true
                    
                    );
                    
                $this->session->set_userdata($data);
                redirect('Dashboard');
             
                
            
                
                               
            }
            else
            {
                
                $this->load->view('signin');
            }
        }
        
        public function validate_credentials(){
            
            $this->load->model('mdlusers');
            
            if($this->mdlusers->can_log_in()){
                
                return true;
                             
            }else{
                $this->form_validation->set_message('validate_credentials','Incorrect username/password!');
                return false;
            }
        }
        
       
        
        
      /*  public function register_user()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[6]');
            $this->form_validation->set_rules('password_confirm','Password Confirmation','trim|required|matches[password]');
            $this->form_validation->set_rules('firstname','First Name','trim|required');
            $this->form_validation->set_rules('middletname','Middle Name','trim|required');
            $this->form_validation->set_rules('lastname','Last Name','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required');
            if($this->form_validation->run() == FALSE)
            {
               $this->load->view('register');
            }
            else
            {
                $this->load->model('mdlusers');
                if($query =$this ->mdlusers ->create_user())
                {
        
                    redirect_to('Home/Signup');
                }
                else
                {
                    redirect_to('Home/Register');
                }
            }
        }*/
        
    public function register_validation()
    {   
        $this->load->library('form_validation');
        $this->load->model('mdlusers'); 
        $this->form_validation->set_rules('username','Username','required|callback_check_if_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('Email','Email','required|callback_check_if_email_exists');
        $this->form_validation->set_rules('checkbox','Agreement', 'required');
        if($this->input->post('submit'))
        { 
             $rand = array('#952d2d','#A98320','#404040');
                    
            if($this->form_validation->run($this))
            {
                   
                    $user = array(
                    'username'=>$_POST['username'],
                    'password'=>md5($_POST['password']),
                    'Title' => $_POST['Title'],
                    'LastName' => $_POST['LastName'],
                    'FirstName' => $_POST['FirstName'],
                    'MiddleName' =>$_POST['MiddleName'],
                    'Email' => $_POST['Email'],
                    'MailingAddress' => $_POST['MailingAddress'],
                    'City' => $_POST['City'],
                    'Affiliation' => $_POST['Affiliation'],
                    'Fax' => $_POST['Fax'],
                    'ContactNumber' => $_POST['ContactNumber'],
                    'color' => $rand[rand(1,4)]
                     );
                    if($this->mdlusers->Register($user))
                        redirect('Home/Signin');
            }
            else
            {
                $this->load->view('register');
            }
            
        }
        else
        {
            $this->load->view('register');
        }

    }


    public function register()
    {
        $this->load->view('register');
    }

    public function check_if_username_exists($requested_username)
    {
            $this->load->model('mdlusers');
            $username_available = $this -> mdlusers ->check_if_username_exists($requested_username);
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
            $this->load->model('mdlusers');
            $email_available = $this -> mdlusers ->check_if_email_exists($requested_email);
            if($email_available)
            {
                 return TRUE;
            }
            else
            {
        
                 return FALSE;
            }

    }


     public function check_if_accept_terms() 
    {
            if ($this->input->post('checkbox'))
            { 
                return TRUE;
            }
            else
            {
                   
                return FALSE;
            }
    }

}
?>
