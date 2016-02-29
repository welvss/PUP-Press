<?php $this->load->view('template/dashboardheader'); ?>

<div id="body-wrapper">
      <div class="body" id="edit-account">
        <div class="row">
          <div class="small-12">
            
          <h1>Edit Account Details</h1>
          <p>Reguired information is marked in bold.</p>
          <!--Form-->
          <div class="row">
            <div class="small-8 columns">
              <?=form_open('index.php/Dashboard/edit');?>
       
                <!--Error Validator-->
                  <div data-abide-error class="alert callout" style="display: none;" data-abide-error>
                    <p><i class="fa fa-exclamation-triangle fa-lg"></i> Please fill up missing required fields!</p>
                  </div>
                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>Username</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <?php
                    $data = array(
                                    'type'  => 'text',
                                    'name'  => 'username',
                                    'id'    => 'username',
                                    'class' => 'username',
                                    'value' => $user->username,
                                    'width' => '30%',
                                    'maxlength' => "30" 
                                  );
                              echo form_hidden('users_id', $this->uri->segment(3));
                              echo "".form_input($data);
                    ?>
                  </div>
                </div>

                   <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label">Title</label>
                  </div>
                  <div class="small-4 columns">
                    <select class="selector">
                    <option value="" disabled selected> Mr.</option>
                      <option value="Dr.">Dr</option>
                      <option value="Professor">Professor</option>
                      <option value="Miss">Miss</option>
                      <option value="Mr.">Mr</option>
                      <option value="Mrs.">Mrs</option>
                      <option value="Ms.">Ms</option>
                      <option value="Reverend">Reverend</option>
                      <option value="Sir">Sir</option>
                    </select>
                  </div>
                </div>

               <h1>Personal Information</h1>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>First Name</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <input type="text" id="rig-label" placeholder="First Name" required value="Welvin">
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
                    <input type="text" id="rig-label" placeholder="Middle Name" `data-abide-ignore` value="">
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>Last Name</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <input type="text" id="rig-label" placeholder="Last Name" required value="Medina">
                    <span class="form-error">
                      Invalid entry for surname
                    </span>
                  </div>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Affliation</label>
                  </div>
                  <div class="small-8 columns">
                    <textarea  class="text-area"placeholder="Affliation" `data-abide-ignore` value=""></textarea>
                  </div>
                  <p class="help-text" id="exampleHelpText" style="padding-left: 230px;">Your institution, e.g. "Taguig City University".</p>
                </div>

                 <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left"><strong>Email</strong></label>
                  </div>
                  <div class="small-8 columns">
                    <input type="text" id="rig-label" placeholder="Email" required value="welvs.medina@gmail.com">
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
                    <input type="text" id="rig-label" placeholder="Mailing Address" `data-abide-ignore` value="">
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Mailing Address 2</label>
                  </div>
                  <div class="small-8 columns">
                    <input type="text" id="rig-label" placeholder="Mailing Address 2" `data-abide-ignore` value="">
                  </div>
                </div>


                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">City</label>
                  </div>
                  <div class="small-8 columns">
                    <input type="text" id="rig-label" placeholder="City" `data-abide-ignore` value="">
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Telephone</label>
                  </div>
                  <div class="small-8 columns">
                    <input type="text" id="rig-label" placeholder="Telephone" `data-abide-ignore` value="">
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Fax</label>
                  </div>
                  <div class="small-8 columns">
                    <input type="text" id="rig-label" placeholder="Fax" `data-abide-ignore` value="">
                  </div>
                </div>

                <div class="row">
                  <div class="small-4 columns">
                    <label for="right-label" class="float-left">Profile Picture</label>
                  </div>
                  <div class="small-8 columns">
                  <button class="file-upload "><input type="file" class="file-input"></button>
                  </div>
                </div>

                  <div class="row">
                    <div class="small-8 columns">
                      <label for="checkbox1"><input id="checkbox1" type="checkbox">Send me occasional newsletter and offers from PUP Press.</label>
                    </div>
                     
                  </div>
               
                    <div class="row">
                      <div class="small-8 columns">
                        <button href="#" class="btn -yellow" type="submit" value="Submit">Submit</button>
                        <?php echo form_submit('submit', 'Submit','class="btn -yellow"'); ?>
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