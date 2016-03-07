<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class MdlAdmin extends CI_Model{
    
  //User Info

    public function user_color()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $color = $row->color;
        }
        return $color;
    }
    public function user_img()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $img = $row->img;
        }
        return $img;
    }
    public function user_title()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $title = $row->Title;
        }
        return $title;
    }

    public function user_name()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $username = $row->username;
        }
        return $username;
    }
    public function user_password()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $password = $row->password;
        }
        return $password;
    }

    public function user_fax()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $fax = $row->Fax;
        }
        return $fax;
    }
    public function user_contact()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $contact = $row->ContactNumber;
        }
        return $contact;
    }
   public function user_affiliation()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $affiliation = $row->Affiliation;
        }
        return $affiliation;
    }

    public function user_city()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $city = $row->City;
        }
        return $city;
    }



    public function user_email()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $email = $row->Email;

        }
        return $email;
    }



    public function user_mailingaddress()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $mail = $row->MailingAddress;
        }
        return $mail;
    }



    public function user_lastname()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            $lastname = $row->LastName;
        }
        return $lastname;
    }




     public function user_firstname()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
           
            $firstname = $row->FirstName;
        }
        return $firstname;
    }



     public function user_middlename()
    {
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $query = $this->db->get('tbl_users');
        foreach ($query->result() as $row)
        {
            
            $middlename = $row->MiddleName;

        }
        return $middlename;
    }

// User Info end


    function change_pass($options = array())
    {       
        
            
        $this->db->set('password', md5($options['password']));
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $this->db->update('tbl_users');
        return $this->db->affected_rows();
        
    }


    public function can_change_pass()
    {
       
        $this->db->where('username', $this->user_name());
        $this->db->where('password', md5($this->input->post('password2')));
    
        $query = $this->db->get('tbl_users');
        
        if($query->num_rows() == 1)
        {
            return true;
        }else
        {
            return false;
        }
        
    }




    
}
