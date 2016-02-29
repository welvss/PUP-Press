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
        ($data['username'] = $this->session->userdata('username'));
	    $this->load->view('index', $data);
		
	}
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect('index.php/Home/Signin');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index.php/Home/Signin');
    } 
    public function edit(){ 
        $this->load->model('mdldashboard');
        
        if($this->input->post('submit'))
        {
            $user = array(
                        'username'=>$_POST['username'],
                        'LastName' => $_POST['LastName'],
                        'FirstName' => $_POST['FirstName'],
                        'MiddleName' =>$_POST['MiddleName'],
                        'Email' => $_POST['Email'],
                        'MailingAddress' => $_POST['MailingAddress'],
                        'City' => $_POST['City'],
                        'Affiliation' => $_POST['Affiliation'],
                        'ContactNumber' => $_POST['ContactNumber']
                        
                        );

            if($this->mdldashboard->modify($user))
                redirect('index.php/Dashboard');
        }
        else
        {
            $data['user'] = $this->session->userdata('users_id');
            //$data['user'] = $this->mdlUsers->get(array('users_id'=>$this->uri->segment(3)));
            //print_r($data['user']); die($this->db->last_query());
            $this->load->view('Edit',$data);
        }
    }
}