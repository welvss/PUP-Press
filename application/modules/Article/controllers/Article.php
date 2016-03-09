<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MX_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
        $this->load->model('mdlarticle');

         $data = array(
            'header' => 'My Account |',
            'title' =>$this->mdlarticle->user_title(),
            'username' =>$this->mdlarticle->user_name(),
            'lastname' =>$this->mdlarticle->user_lastname(),
            'firstname' =>$this->mdlarticle->user_firstname(),
            'middlename' =>$this->mdlarticle->user_middlename(),
            'ps_id' => $this->session->userdata('ps_id'),
            'img' => $this->mdlarticle->user_img(),
            'color' => $this->mdlarticle->user_color()
         ); 
        $this->load->view('template/dashboardheader',$data);
    }

    public function ArticleSubmission()
    {
        $data['A'] = $this->mdlarticle->getA(array('sort_by'=>'journal_title','sort_direction'=>'DESC'));
        $this->load->view('ArticleSubmission',$data);
    }
    public function NewSubmission()
    {
        $data['journal'] = $this->mdlarticle->get(array('journal_id'=>$this->uri->segment(3)));   
        $this->load->view('NewArticle',$data);
    }
   
    
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect('Home/Signin');
        }
    }
    public function createarticle()
    {
        
        $this->load->model('mdlarticle');
        if($this->input->post('submit'))
        { 
            
            $data = array( 
                'article_title' => $_POST['article_title'],
                'abstract' => $_POST['abstract'],
                'journal_id' => $_POST['journal_id'],
                'users_id' => $this->session->userdata('users_id'),
                'file' => $this->do_upload()
            );
            if($this->mdlarticle->createarticle($data))
            redirect('Article/ArticleSubmission');
        }
                               
                    
        else
       redirect('Article/ArticleSubmission');
        

    }
     public function do_upload()
    {
       

        $type = explode('.', $_FILES["file"]["name"]);
        $type = $type[count($type)-1];
        $url = "./articles/".uniqid(rand()).'.'.$type;
        if (in_array($type, array("PDF","pdf"))) 
        {
           if (is_uploaded_file($_FILES["file"]["tmp_name"])) 
           {
               if (move_uploaded_file($_FILES["file"]["tmp_name"], $url)) 
               {
                   return $url;
               }
           }
        }
        return "";
    }
    public function ReviewArticle()
    {
        $data['Article'] = $this->mdlarticle->getArticle(array('sort_by'=>'article_title','sort_direction'=>'ASC'));
        $this->load->view('activearticle',$data);
    }
    public function Review()
    {
        $data['article'] = $this->mdlarticle->getArticle(array('article_id'=>$this->uri->segment(3)));   
        $this->load->view('review',$data);
    }
    public function reviewer()
    {
        
        $this->load->model('mdlarticle');
        if($this->input->post('submit'))
        { 
            
            $data = array( 
                'article_id' => $_POST['article_id'],
                'subject' => $_POST['subject'],
                'review' => $_POST['review'],
                'journal_id' => $_POST['journal_id'],
                'users_id' => $this->session->userdata('users_id'),
                'pending' =>$_POST['pending']
                
            );
            $id['id'] = $_POST['article_id'];
            
            if($this->mdlarticle->review($data))
            redirect('Article/ReviewArticle');
        }
                               
                    
        else
       redirect('Article/ReviewArticle');
        

    }

}