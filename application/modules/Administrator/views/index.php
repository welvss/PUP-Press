<?php $this->load->view('template/adminheader'); ?>
    <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
         <li><a href="<?php echo base_url("Dashboard")?>">My Account</a></li>
         <li class="active"><a href="#">Site Administration</a></li>
      </ul>
      <hr>
    </nav>
   
  </header>
  </div>

    <!--Main Body-->
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


              <p>Welcome, <span><strong><?php echo $title." ".$firstname." ".$lastname?></strong></span>!</p>
              <ul id="account-settings">
                <p><strong>Account</strong></p>
                 <li><a href="<?php echo base_url("Dashboard/Edit")?>">Manage Account Details</a></li>
                <li><a href="#">My Journal</a></li>
                <li><a href="#">Subscription</a></li>
                 <li><a href="Dashboard/Logout">Logout</a></li>
              </ul>
            </div>
              <div id="welcome">
                 <h6><strong>Welcome Admin!</strong></h6>
              <p>Welcome to Polytechnic University of the Philippines Journals "Site Administration" Page.</p>
              </div>
           </div>

          <div class="small-8 columns">
            <div class="right-col">
              <h1><strong>Site Administration</strong></h1>
                <div class="dashboard">
                <h6><strong>Site Management</strong></h6>
                 <ul>
                  <li class="user_panel">
                    <h6><a href="#"><strong>Site Settings</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>

                  <li class="user_panel">
                    <h6><a href="<?php echo base_url("Administrator/Journal")?>"><strong>Hosted Journal</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>

                    <li class="user_panel">
                    <h6><a href="#"><strong>Categories</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>

                  <h6><strong>Administrative Function</strong></h6>

                  <li class="user_panel">
                    <h6><a href="#"><strong>System Information</strong></a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eos minima, quam cupiditate reiciendis nihil libero voluptatum possimus eum voluptas.</p>
                  </li>

                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>
    <?php $this->load->view('template/footer'); ?>