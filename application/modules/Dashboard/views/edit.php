<?php $this->load->view('template/dashboardheader'); ?>
 <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
         <li><a href="<?php echo base_url("Dashboard")?>">My Account</a></li>
         <li class="active"><a href="#">Edit Account Details</a></li>
      </ul>
      <hr>
    </nav>
   
  </header>
  </div>

<div id="body-wrapper">
      <div class="body" id="edit-account">
        <div class="row">
          <div class="small-12">
            
          <h1>Edit Account Details</h1>
          <strong><p>Required information is marked in *.</p></strong>
          <!--Form-->
           <?php echo form_open_multipart('Dashboard/edit');?>
          <label>
              <strong> <?php echo validation_errors(); ?></strong>
             
          </label>
          <div class="row">
            <div class="small-8 columns">
             
       
                <!--Error Validator-->
                  <div data-abide-error class="alert callout" style="display: none;" data-abide-error>
                    <p><i class="fa fa-exclamation-triangle fa-lg"></i> Please fill up missing required fields!</p>
                  </div>
                  <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Username*</label>
                  </div>
                  <div class="small-8 columns">
                   <?php
                    $data = array(
                                    'type'  => 'text',
                                    'name'  => 'username',
                                    'id'    => 'username',
                                    'class' => 'username',
                                    'value' => $username,

                                    'placeholder' => 'Username'
                                    
                                    
                                    
                                  );
                             
                              echo form_input($data);
                    ?>
                    <span class="form-error">
                      Invalid entry for first name
                    </span>
                  </div>
                </div>
                

                   <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" >Title*</label>
                  </div>
                  <div class="small-4 columns">
                    <select class="selector" id='Title' name='Title' required ='TRUE'>
                    <option value="<?php echo $title; ?>" ><?php echo $title; ?></option>
                      <option value="Dr.">Dr.</option>
                      <option value="Prof.">Prof.</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Ms.">Ms.</option>
                      <option value="Rev.">Rev.</option>
                      <option value="Sir">Sir</option>
                    </select>
                  </div>
                </div>

               <h1>Personal Information</h1>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">First Name*</label>
                  </div>
                  <div class="small-8 columns">
                   <?php
                     $data = array(
                     'type'  => 'text',
                     'name'  => 'FirstName',
                      'id'    => 'FirstName',
                     'class' => 'form-control',
                     'placeholder' => 'First Name',
                     'value' => $firstname,
                     'maxlength' => "30" 
                 );
                  echo form_input($data);
    
                 ?>
                    <span class="form-error">
                      Invalid entry for first name
                    </span>
                  </div>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Middle Name*</label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                    $data = array(
                    'type'  => 'text',
                    'name'  => 'MiddleName',
                    'id'    => 'MiddleName',
                    'class' => 'form-control',
                    'placeholder' => 'Middle Name',
                    'value' => $middlename,
                    'maxlength' => "30" 
                    );
                    echo form_input($data);
                  ?>
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Last Name*</label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                         $data = array(
                                  'type'  => 'text',
                                  'name'  => 'LastName',
                                  'id'    => 'LastName',
                                  'value' => $lastname,
                                'placeholder' => 'Last Name',
                                  
                            );
                        echo form_input($data);
    
                     ?>
                    <span class="form-error">
                      Invalid entry for surname
                    </span>
                  </div>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Affliation*</label>
                  </div>
                  <div class="small-8 columns">
                   <?php
                      $data = array(
                      'type'  => 'text',
                      'name'  => 'Affiliation',
                      'id'    => 'Affiliation',
                      'value' => $affiliation,
                      'placeholder' => 'Affiliation', 
                      );
                      echo form_input($data);
      
                   ?>
                  </div>
                  <p class="help-text" id="exampleHelpText" style="padding-left: 230px;">Your institution, e.g. "Taguig City University".</p>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Email*</label>
                  </div>
                  <div class="small-8 columns">
                   <?php
                    $data = array(
                       'type'  => 'Email',
                        'name'  => 'Email',
                        'id'    => 'Email',
                        'value' => $email,
                        'placeholder' => 'Email',
                         'maxlength' => "30" 
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
                      'value' => $mail,
                      'placeholder' => 'MailingAddress'
                      );
                      echo form_input($data);
      
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
                      'value' => $city,
                      'placeholder' => 'City', 
                      );
                      echo form_input($data);
      
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
                      'value' => $contact,
                      'placeholder' => 'Contact Number', 
                      );
                      echo form_input($data);
      
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
                      'value' => $fax,
                      'placeholder' => 'Fax', 
                      );
                      echo form_input($data);
      
                   ?>
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Profile Picture</label>
                  </div>
                  <div class="small-8 columns">
                 
                    <?php
                      $data = array(
                     
                      'name'  => 'img',
                      'id'    => 'img',
                      'allowedtypes' => 'gif|jpg|png',
                                       
                     
                      );
                   echo form_upload($data)?>
                  </div>
                </div>

                  <div class="row">
                    <div class="small-8 columns">
                      <label for="checkbox1"><input id="checkbox1" type="checkbox">Send me occasional newsletter and offers from PUP Press.</label>
                    </div>
                     
                  </div>
               
                    <div class="row">
                      <div class="small-8 columns">
                      
                        <?php echo form_submit('submit', 'Save','class="btn -yellow"' , 'upload image'); ?>
                      </div>
                    </div>                
                <?php form_close();?>
            </div>
        </div>
          <h1>Privacy Statement</h1>
                   <p>The information you provide to Polytechnic University of the Philippines Journals is treated as confidential and will not be released to a third party. For more information see our <a href="#">Privacy Policy</a>.</p>      
            <ul style="list-style-type: circle;">
              <li><a href="MyAccount.html">Go back to the main My Account options page</a></li>
              <li><a href="#">Log out</a></li>
            </ul>

          </div>
        </div>
    </div>
  </div>


    </div>
<?php $this->load->view('template/footer'); ?>