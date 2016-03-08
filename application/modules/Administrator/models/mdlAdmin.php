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


    public function createjournal($options=array())
    {

        $this->db->insert('tbl_journal', $options);   
        return $this->db->insert_id();

    }
    public function check_if_title_exists($title)
    {
        $this->db->where('journal_title',$title);
        $result = $this->db->get('tbl_journal');
        if($result->num_rows()>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function check_if_path_exists($path)
    {
        $this->db->where('path',$path);
        $result = $this->db->get('tbl_journal');
        if($result->num_rows()>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function get($data = array())
    {

       
        
        if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
            $this->db->order_by($options['sort_by'], $options['sort_direction']);
        
        $query = $this->db->get("tbl_journal");
        
        if(isset($options['count']))
            return $query->num_rows();
        
        if(isset($options['users_id']))
            return $query->row(0);
        //die($this->db->last_query());
        return $query->result();
    }


    function deletejournal($journal_id)
    {
        $this->db->where('journal_id', $journal_id);
        $this->db->delete('tbl_journal'); 
        return true;
    }

    
}
