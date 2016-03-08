<nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="<?php echo base_url('Journal/AtoZ')?>">PUP Journals</a></li>
         <li class="active"><a href="<?php echo base_url("Dashboard")?>">My Account</a></li>
      </ul>
      <hr>
    </nav>
   
  </header>
  </div>

<div id="body-wrapper">
    <div class="push-15"></div>
      <div class="body myAccount">
        <div class="row">
          <div class="small-4 columns">
            <div id="accountBox">
                          
              <?php if($img!="")
             
                echo  '<img src="'.base_url($img).'" alt="" class="clip-circle">';
              ?>
              <?php 
                if($img=="")
                echo '<div class="bg clip-circle" style="background:'.$color.';"><span>'. substr($firstname, 0,1).substr($lastname, 0,1)."".'</span></div>';
              ?>




              <p>Welcome, <span><strong><?php echo $title." ".$firstname." ". $lastname;?></strong></span>!</p>
              
              <ul id="account-settings">
                <p><strong>Account</strong></p>
                <li><a href="<?php echo base_url("Dashboard/edit")?>">Manage Account Details</a></li>
                <li><a href="#">My Journal</a></li>
                <li><a href="#">Subscription</a></li>
                <li><a href="Dashboard/Logout">Logout</a></li>
              </ul>
            </div>
              <div id="welcome">
                 <h6><strong>Welcome</strong></h6>
              <p>Welcome to Polytechnic University of the Philippines Journals "My Account" Page.</p>
              </div>
           </div>

          <div class="small-8 columns">
            <div class="right-col">
              <h1><strong>Role's Dashboard</strong></h1>
                <div class="dashboard">
                 <ul>
                 <?php 
                  if($ps_id ==5 || $ps_id == 4 || $ps_id ==3 || $ps_id == 2 || $ps_id == 1)
                  echo 
                    '<li class="user_panel">
                     <h6><a href="#"><strong>Journals</strong></a></h6>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                   </li>';
                  
                 ?>
               
                
                <?php 
                 if($ps_id ==4||$ps_id ==1)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="'.base_url('Article/ArticleSubmission').'"><strong>Article Submission</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
                 
                ?>



                <?php
                  if($ps_id ==5 || $ps_id == 4 || $ps_id == 1 )
                  echo 
                    '<li class="user_panel">
                     <h6><a href="#"><strong>See pay-per-view Purchases</strong></a></h6>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                   </li>';
               
                 ?>
               
              
                <?php
                  
                  if($ps_id ==5 || $ps_id == 4 || $ps_id == 1 )
                  echo 
                    '<li class="user_panel">
                     <h6><a href="#"><strong>Manage Subscription</strong></a></h6>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                   </li>';
                
                 ?>
                   <?php 
                 if($ps_id ==3)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Manage Journal</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
                 
                 ?>
                <?php 
                 if($ps_id ==5 || $ps_id == 4 || $ps_id == 1)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Access free sample issues </strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
              
                ?>
                <?php
                  if($ps_id ==5 || $ps_id == 1)
                  echo 
                    '<li class="user_panel">
                     <h6><a href="#"><strong>Apply as Author</strong></a></h6>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                   </li>';
            
                 ?>




                <?php 
                 if($ps_id ==1)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="'.base_url('Administrator').'"><strong>Site Administration</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
              
                ?>
                <?php 
                 if($ps_id ==1)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Manage User Accounts</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
              
                ?>
               
                
              

                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>








    </div>
    <?php $this->load->view('template/footer'); ?>