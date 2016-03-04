<?php $this->load->view('template/header') ?>
 <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="<?php echo base_url('Home');?>">Home</a></li>
         <li class="active"><a href="<?php echo base_url('Home/Signin');?>">My Account</a></li>
      </ul>
      <hr>
    </nav>

    </header>
  </div>

<?php
        #SETTINGS

        $username = array(
         'placeholder'  => 'Username',
         'name'         => 'username',
         'id'           => 'username',
         'required'     => true
        );
        $password = array(
  
         'placeholder'  => 'Password',
         'name'         => 'password',
         'id'           => 'password',
         'required'     => true
        );
        $submit = array(
         'value'        => 'Sign-in',
         'class'        => 'btn -yellow',
         'name'         => 'login_submit'
        );  

?>




      <div class="body" id="sign-in-page">
        <div class="row">
        <!-- Sign-in -->
          <div id="sign-in" class="small-6 columns">
               <h1>Existing Users</h1>
               <p>If you are already registered with Polytechnic University of the <br>Philippines Journals, please enter your username and password below.</p>
               <?php echo form_open('Home/login_validation');?>
                 <div class="row">
                   <div class="small-10 columns">
                     <label>
                        <strong>Username</strong>
                        <?php echo form_input($username); ?>
                     </label>
                   </div>
                  </div>

                  <div class="row">
                      <div class="small-10 columns">
                     <label>
                        <strong>Password</strong>
                        <?php echo form_password($password);?>
                     </label>
                   </div>
                 </div>
                  <div class="row">
                      <div class="small-10 columns">
                     <label>
                        <strong> <?php echo validation_errors(); ?></strong>
             
                     </label>
                   </div>
                 </div>
           
              <br>
              <?php echo form_submit($submit); ?>
              <a href="#" ><br><br>Forgot your username or password?</a>
            <?php echo form_close(); ?>

           
           </div>
            <!--Register-->
            <div id="register" class="small-6 columns">
             <h1>New User</h1>
             <p>New to Polytechnic University of the Philippines | Journal? Registration is free and only takes a minute. Once registered you will gain access to a range of additional services from Journal including free sample issues, flexible email alerts and the option to save your favourite articles and searches.</p>
             <a href="<?php echo base_url('Home/Register')?>">Click here to register as a new user with P.U.P Journal.</a>
           </div>

        </div>
    </div>
    <div class="push">
    <!--WhiteSpace-->
    </div>
  </div>


    </div>

<?php $this->load->view('template/footer') ?>