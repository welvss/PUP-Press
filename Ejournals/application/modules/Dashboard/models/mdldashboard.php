<?php

class MdlDashboard extends CI_Model{
    
    
    function get()
    {
        if(isset($options['username']))
            $this->db->set('username', $options['username']);
            
        if(isset($options['password']))
            $this->db->set('password', md5($options['password']));
        
        if(isset($options['LastName']))
            $this->db->set('LastName', $options['LastName']);
        if(isset($options['FirstName']))
            $this->db->set('FirstName', $options['FirstName']);
        if(isset($options['MiddleName']))
            $this->db->set('MiddleName', $options['MiddleName']);
        if(isset($options['Email']))
            $this->db->set('Email', $options['Email']);
        if(isset($options['MailingAddress']))
            $this->db->set('MailingAddress', $options['MailingAddress']);
        if(isset($options['City']))
            $this->db->set('City', $options['City']);
        if(isset($options['Affiliation']))
            $this->db->set('Affiliation', $options['Affiliation']);
        if(isset($options['ContactNumber']))
            $this->db->set('ContactNumber', $options['ContactNumber']);

        $query = $this->db->get("tbl_users");
        

        if(isset($options['users_id']))
            return $query->row(0);
        return $query->result();
    }


   

    function modify($options = array())
    {       
        if(isset($options['username']))
            $this->db->set('username', $options['username']);
            
        if(isset($options['password']))
            $this->db->set('password', md5($options['password']));
        
        if(isset($options['LastName']))
            $this->db->set('LastName', $options['LastName']);
        if(isset($options['FirstName']))
            $this->db->set('FirstName', $options['FirstName']);
        if(isset($options['MiddleName']))
            $this->db->set('MiddleName', $options['MiddleName']);
        if(isset($options['Email']))
            $this->db->set('Email', $options['Email']);
        if(isset($options['MailingAddress']))
            $this->db->set('MailingAddress', $options['MailingAddress']);
        if(isset($options['City']))
            $this->db->set('City', $options['City']);
        if(isset($options['Affiliation']))
            $this->db->set('Affiliation', $options['Affiliation']);
        if(isset($options['ContactNumber']))
            $this->db->set('ContactNumber', $options['ContactNumber']);
        $this->db->where('users_id', $this->session->userdata('users_id'));
        $this->db->update('tbl_users');
        
        return $this->db->affected_rows();
        
    }
    
}
