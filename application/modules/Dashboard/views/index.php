<?php $this->load->view('template/dashboardheader'); ?>


<div id="body-wrapper">
    <div class="push-15"></div>
      <div class="body myAccount">
        <div class="row">
          <div class="small-4 columns">
            <div id="accountBox">
              <img src="<?php echo base_url('assets/img/welvin.png');?>" alt="" class="clip-circle">
              <p>Welcome, <span><strong><?php echo $title." ".$firstname." ". $lastname?></strong></span>!</p>
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
                  if($ps_id ==5 || $ps_id == 3 || $ps_id ==4)
                  echo 
                    '<li class="user_panel">
                     <h6><a href="#"><strong>Journals</strong></a></h6>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                   </li>';
                  
                 ?>
                <?php 
                 if($ps_id ==3)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Manage Articles</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
                 
                ?>
                <?php
                  if($ps_id ==5 || $ps_id == 4)
                  echo 
                    '<li class="user_panel">
                     <h6><a href="#"><strong>See pay-per-view Purchases</strong></a></h6>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                   </li>';
               
                 ?>
                <?php 
                 if($ps_id ==4)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Article Submission</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
                 
                ?>
                <?php
                  
                  if($ps_id ==5 || $ps_id == 4)
                  echo 
                    '<li class="user_panel">
                     <h6><a href="#"><strong>Manage Subscription</strong></a></h6>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                   </li>';
                
                 ?>
                <?php 
                 if($ps_id ==5 || $ps_id == 4)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Access free sample issues </strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
              
                ?>
                <?php
                  if($ps_id ==5)
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
                    <h6><a href="#"><strong>Manage User Accounts</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
              
                ?>
                <?php 
                 if($ps_id ==1)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Make Announcements</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
            
                ?>
                <?php 
                 if($ps_id ==1)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Edit Home Page</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
            
                ?>
                <?php 
                 if($ps_id ==1)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Make Events</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
           
                ?>
                <?php 
                 if($ps_id ==2)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Publish Journals</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>';
           
                ?>
                <?php 
                 if($ps_id ==2)
                 echo 
                   '<li class="user_panel">
                    <h6><a href="#"><strong>Edit Journals</strong></a></h6>
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