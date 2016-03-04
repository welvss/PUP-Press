<?php

class Mdlusers extends CI_Model{
    
    public function can_log_in()
    {
       
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
    
        $query = $this->db->get('tbl_users');
        
        if($query->num_rows() == 1)
        {
            return true;
        }else
        {
            return false;
        }
        
    }

    public function check_id($data)
    {
        $this->db->where('username', $this->input->post('username'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $user_id = $row->users_id;
        }
        return $user_id;

        
    }
    public function check_privilege($data)
    {
        $this->db->where('users_id', $this->mdlusers->check_id($data));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $ps_id = $row->ps_id;
        }
        return $ps_id;

        
    }

  
    /*public function create_user()
    {
        $username =$this->input->post('username');
        $new_user_insert_data = array(
            'FirstName' => $this->input->post('FirstName'),
            'MiddleName' => $this->input->post('MiddleName'),
            'LastName' => $this->input->post('LastName'),
            'Affiliation' => $this->input->post('Affiliation'),
            'Email' => $this->input->post('Email'),
            'MailingAddress' => $this->input->post('MailingAddress'),
            'City' => $this->input->post('City'),
            'ContactNumber' => $this->input->post('ContactNumber'),
            'Fax' => $this->input->post('Fax')
             );
        $insert=$this->db->insert('tbl_users',$new_user_insert_data);
        return $insert;
    }*/

    public function check_if_username_exists($username)
    {
        $this->db->where('username',$username);
        $result = $this->db->get('tbl_users');
        if($result->num_rows()>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function check_if_email_exists($email)
    {
        $this->db->where('Email',$email);
        $result = $this->db->get('tbl_users');
        if($result->num_rows()>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    function Register($options = array())
    {
        $this->db->insert('tbl_users', $options);   
        return $this->db->insert_id();
        
    
    }
}