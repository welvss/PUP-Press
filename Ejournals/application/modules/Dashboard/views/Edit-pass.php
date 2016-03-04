<?php $this->load->view('template/dashboardheader'); ?>
    <!--Main Body-->
    <div id="body-wrapper">
      <div class="body" id="edit-account">
        <div class="row">
          <div class="small-12">
            
          <h1>Change Pasword</h1>
          <p>Reguired information is marked in bold.</p>
          <?php echo form_open('index.php/Dashboard/changepass');?>
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
                    <label for="right-label" class="float-left "><strong>Current Password</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                      $data = array(
                      'type'  => 'password',
                      'name'  => 'password2',
                      'id'    => 'password2',
                      'placeholder' => 'Password',
                      'minlength' => "6",
                      'required' => true
                    );
                      echo form_input($data);
                    ?>
                  </div>
                </div>
  
                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong> New Password</strong></label>
                  </div>
                  <div class="small-8 columns">
                   <?php
                      $data = array(
                      'type'  => 'password',
                      'name'  => 'password',
                      'id'    => 'password',
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
                    <input type="password" id="passconf" name ="passconf" placeholder="Confirm Password">
                     <span class="form-error">
                      passwords do not match
                    </span>
                  </div>
                </div>

                    <!--Submit Buttom-->
                  <?php echo form_submit('submit','Save','class="btn -yellow"');?>
                        
               <?php echo form_close();?>
               <br>
            </div>
        </div>
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