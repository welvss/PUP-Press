<?php

class mdlarticle extends CI_Model
{
    
  //User Info

    public function user_privilege()
    {
        $this->db->select('p.description');
        $this->db->from('tbl_privilege');
        $this->db->join('tbl_users u', 'p.ps_id=u.ps_id');
        $this->db->where('u.users_id', $this->seesion->userdata('users_id'));

    }
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
    public function getA($data = array())
    {
        
        if(isset($options['path']))
            $this->db->where('path', $options['path']);
         if(isset($options['journal_title']))
            $this->db->where('journal_title', $options['journal_title']);
         if(isset($options['description']))
            $this->db->where('description', $options['description']);
        if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
            $this->db->order_by($options['sort_by'], $options['sort_direction']);
 
        $query = $this->db->get("tbl_journal");
        
        if(isset($options['count']))
            return $query->num_rows();
        
        if(isset($options['journal_id']))
            return $query->row(0);
        //die($this->db->last_query());
        return $query->result();
    }
    public function get($options = array())
    {
        
        if(isset($options['path']))
            $this->db->where('path', $options['path']);
         if(isset($options['journal_title']))
            $this->db->where('journal_title', $options['journal_title']);
         if(isset($options['description']))
            $this->db->where('description', $options['description']);
        if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
            $this->db->order_by($options['sort_by'], $options['sort_direction']);
 
        $query = $this->db->get("tbl_journal");
        
        if(isset($options['count']))
            return $query->num_rows();
        
        if(isset($options['journal_id']))
            return $query->row(0);
        //die($this->db->last_query());
        return $query->result();
    }

    public function createarticle($options=array())
    {

        $this->db->insert('tbl_article', $options);   
        return $this->db->insert_id();

    }
     public function review($options=array())
    {

        $this->db->insert('tbl_review', $options); 
        return $this->db->insert_id();
 
    
    }
    public function getArticle($options = array())
    {
        
        
         if(isset($options['article_title']))
            $this->db->where('article_title', $options['article_title']);
         if(isset($options['abstract']))
            $this->db->where('abstract', $options['abstract']);
        if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
            $this->db->order_by($options['sort_by'], $options['sort_direction']);
       
        $this->db->where('pending',true);
        $query = $this->db->get("tbl_article");
        
        if(isset($options['count']))
            return $query->num_rows();
        
        if(isset($options['article_id']))
            return $query->row(0);
        //die($this->db->last_query());
        return $query->result();
    }

}
