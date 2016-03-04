 <?php $this->load->view('template/header') ?>


 <div id="body-wrapper">
      <div class="body" id="register-page">
        <div class="row">
          <div class="small-12">
            
          <h1>Register with Polytechnic University of the Philippines Journals</h1>
          <p>If you are already registerd with Polytechnic Unviersity Journals, <a href="<?php echo base_url('Home/Signin')?>">please log in here</a>.</p>
          <p>Reguired information is marked in bold.</p>
          <?php echo form_open('Home/register_validation');?>
          <label>
              <strong> <?php echo validation_errors(); ?></strong>
             
          </label>
          <!--Form-->
          <div class="row">
            <div class="small-8 columns">
              
                
                <!--Error Validator-->
                  <div data-abide-error class="alert callout" style="display: none;" data-abide-error>
                    <p><i class="fa fa-exclamation-triangle fa-lg"></i> Please fill up missing required fields!</p>
                  </div>
                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left "><strong>Username</strong></label>
                  </div>
                  <div class="small-8 columns">
                    
                  <?php
                      $data = array(

                             'type'  => 'text',
                             'name'  => 'username',
                             'id'    => 'username',
                             'class' => 'form-control',
                             'placeholder' => 'Username',
                             'maxlength' => "30",
                             'required' => true
                          );
                      echo form_input($data);
                  ?>
                     <span class="form-error">
                      Invalid entry for username
                    </span>
                    <p class="help-text" id="exampleHelpText">The username must contain only lowercase letters, numbers, and hyphens/underscores.</p>
                  </div>
                </div>
  
                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>Password</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                      $data = array(
                      'type'  => 'password',
                      'name'  => 'password',
                      'id'    => 'password',
                      'class' => 'form-control',
                      'placeholder' => 'Password',
                      'minlength' => "6",
                      'required' => true
                    );
                    echo form_input($data);
    
                    ?>
                    <span class="form-error">
                      Invalid entry for password
                    </span>
                    <p class="help-text" id="exampleHelpText">The password must be at least 6 characters.</p>
                   </div>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>Confirm Password</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <input type="password" id="passconf" name="passconf" placeholder="Confirm Password">
                     <span class="form-error">
                      passwords do not match
                    </span>
                  </div>
                </div>

               <h1>Personal Information</h1>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label">Title</label>
                  </div>
                  <div class="small-4 columns">
                    <select class="selector" id='Title' name='Title' required ='TRUE'>
                    <option value="" disabled selected> - Please Select -</option>
                     <option value="Dr.">Dr.</option>
                      <option value="Prof.">Prof.</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Ms.">Ms.</option>
                      <option value="Rev.">Rev.</option>
                      <option value="Sir">Sir</option>
                    </select>
                    <span class="form-error">
                      Invalid entry for Title
                    </span>
                  </div>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>First Name</strong></label>
                  </div>
                  <div class="small-8 columns">
                  <?php
                     $data = array(
                     'type'  => 'text',
                     'name'  => 'FirstName',
                      'id'    => 'FirstName',
                     'class' => 'form-control',
                     'placeholder' => 'First Name',
                     'required' => true
                 );
                  echo "".form_input($data);
    
                 ?>
                    <span class="form-error">
                      Invalid entry for first name
                    </span>
                  </div>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Middle Name</label>
                  </div>
                  <div class="small-8 columns">
                  <?php
                    $data = array(
                    'type'  => 'text',
                    'name'  => 'MiddleName',
                    'id'    => 'MiddleName',
                    'class' => 'form-control',
                    'placeholder' => 'Middle Name',
            
                    'required' => true
                    );
                    echo "".form_input($data);
                  ?>
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>Last Name</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                         $data = array(
                                  'type'  => 'text',
                                  'name'  => 'LastName',
                                  'id'    => 'LastName',
                                  
                                'placeholder' => 'Last Name',
                                'required' => true
                                  
                            );
                        echo "".form_input($data);
    
                     ?>
                    <span class="form-error">
                      Invalid entry for Last Name
                    </span>
                  </div>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Affiliation</label>
                  </div>
                  <div class="small-8 columns">
                     <?php
                      $data = array(
                      'type'  => 'text',
                      'name'  => 'Affiliation',
                      'id'    => 'Affiliation',
                      'placeholder' => 'Affiliation', 
                      'required' => TRUE
                      );
                      echo "".form_input($data);
      
                   ?>
                  </div>
                 
                </div>
                     <p class="help-text" id="exampleHelpText" style="padding-left: 230px;">Your institution, e.g. "Taguig City University".</p>
                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>Email</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                    $data = array(
                       'type'  => 'Email',
                        'name'  => 'Email',
                        'id'    => 'Email',
                     
                        'placeholder' => 'Email',
                        'required' => true
                 
                         );
                    echo form_input($data);
    
                    ?>
                    <span class="form-error">
                      Invalid entry for username
                    </span>
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Mailing Address</label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                      $data = array(
                      'type'  => 'text',
                      'name'  => 'MailingAddress',
                      'id'    => 'MailingAddress',
                      'placeholder' => 'MailingAddress', 
                      );
                      echo "".form_input($data);
      
                   ?>
                  </div>
                </div>


                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">City</label>
                  </div>
                  <div class="small-8 columns">
                     <?php
                      $data = array(
                      'type'  => 'text',
                      'name'  => 'City',
                      'id'    => 'City',
                      'placeholder' => 'City', 
                      );
                      echo "".form_input($data);
      
                   ?>
                </div>
              </div>
                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Contact Number</label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                      $data = array(
                      'type'  => 'text',
                      'name'  => 'ContactNumber',
                      'id'    => 'ContactNumber',
                      'placeholder' => 'Contact Number'
                      );
                      echo "".form_input($data);
      
                   ?>
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Fax</label>
                  </div>
                  <div class="small-8 columns">
                     <?php
                      $data = array(
                      'type'  => 'text',
                      'name'  => 'Fax',
                      'id'    => 'Fax',
                      'placeholder' => 'Fax' 
                      );
                      echo "".form_input($data);
      
                   ?>
                  </div>
                </div>

                
                   <h1>Privacy Statement</h1>
                   <label for="checkbox"> 
                    <?php
                      $data = array(
                      'type'  => 'checkbox',
                      'name'  => 'checkbox',
                      'id'    => 'checkbox',
                      'required' => TRUE,
                      'value'=> TRUE
                     
                      );
                      echo "".form_input($data);
      
                   ?>I agree to the Polytechnic Unviersity of the Philippines Journals <a href="#"> Terms of Service</a> and <a href="#">Privacy Policy</a>. </label>
                    <!--Submit Buttom-->
                  
                    <?php echo form_submit('submit','Register with PUP PRESS','class="btn -yellow"');?>
                        
               
               <br>
               <br>
               <br>
               <br>
            </div>
          </div>
          <!--End of From-->
        <?php echo form_close();?>
          </div>
        </div>
    </div>
  </div>


    </div>
<?php $this->load->view('template/footer') ?>