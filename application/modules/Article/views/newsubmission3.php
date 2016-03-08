
  

 <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
          <li><a href="<?php echo base_url("Dashboard")?>">My Account</a></li>
         <li><a href="<?php echo base_url("Article/ArticleSubmission")?>">Article Submission</a></li>
         <li class="active"><a href="#">New Submission</a></li>
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
          <div class="small-12 columns">
            <div class="right-col">
            <div class="title">
              <h1><strong>Step 3. Enter Metadata</strong></h1>
            </div>
              <div class="steps">
                <ul class="breadcrumbs">
                <li>>1. Start</li>
                  <li><a href="<?php echo base_url("Article/UploadSubmission")?>">2. UPLOAD SUBMISSION</a></li>
                  <li><strong>3. ENTER METADATA</strong></li>
                  <li>4. CONFIRMATION</li>
                </ul>
              </div>
              <!--Author-->
              <div class="submission-section">
              <p>Reguired information is marked in <strong>bold</strong>.</p>
                <h6><strong>Authors</strong></h6>
                <div class="row">
                          <div class="small-8 columns end">
                          <!--Form-->
                          <form data-abide novalidate>
                           <div data-abide-error class="alert callout" style="display: none;" data-abide-error>
                            <p><i class="fa fa-exclamation-triangle fa-lg"></i> Please fill up missing required fields!</p>
                          </div>
                              <div class="small-4 columns">
                              <label for="right-label" ><strong>First Name</strong></label>
                            </div>
                            <div class="small-8 columns">
                              <input type="text" id="rig-label" required >
                               <span class="form-error">
                                Invalid entry for First
                              </span>
                            </div>

                             <div class="small-4 columns">
                              <label for="right-label" >Middle Name</label>
                            </div>
                            <div class="small-8 columns">
                              <input type="text" id="rig-label">
                            </div>

                            <div class="small-4 columns">
                              <label for="right-label" ><strong>Last Name</strong></label>
                            </div>
                            <div class="small-8 columns">
                              <input type="text" id="rig-label" required >
                               <span class="form-error">
                                Required Field
                              </span>
                            </div>

                            <div class="small-4 columns">
                              <label for="right-label" ><strong>Email</strong></label>
                            </div>
                            <div class="small-8 columns">
                              <input type="text" id="rig-label" required >
                               <span class="form-error">
                                Invalid entry for Email
                              </span>
                            </div>

                            <div class="small-4 columns">
                              <label for="right-label" >Affiliation</label>
                            </div>
                            <div class="small-8 columns">
                              <textarea name="" id="" cols="30" rows="5"></textarea>
                               <p class="help-text" id="exampleHelpText" style="margin-top:5px; ">Your institution, e.g. "Taguig City University".</p>
                            </div>

                            <a href="#" class="button tiny" style="color: white; text-decoration:none;">Add AnotherAuthor</a>
                              
                          </form>

                        </div>
                  </div>
              </div>
<!--Title Abstract-->
              <div class="submission-section">
                <h6><strong>Title and Abstract</strong></h6>
                <div class="row">
                  <div class="small-8 columns">
                  <!--Form-->
                  <form data-abide novalidate>
                   <div data-abide-error class="alert callout" style="display: none;" data-abide-error>
                    <p><i class="fa fa-exclamation-triangle fa-lg"></i> Please fill up missing required fields!</p>
                  </div>
                      <div class="small-4 columns">
                      <label for="right-label" ><strong>Title</strong></label>
                    </div>
                    <div class="small-8 columns">
                      <input type="text" id="rig-label" required >
                       <span class="form-error">
                        Invalid entry for First
                      </span>
                    </div>

                    <div class="small-4 columns">
                      <label for="right-label" ><strong>Abstract</strong></label>
                    </div>
                    <div class="small-8 columns">
                      <textarea name="" id="" cols="30" rows="7" style="margin-bottom: 25px;"></textarea>
                    </div>
                  </form>
                </div>
                    
                  </div>
              </div>
               <button href="#" class="btn -yellow" type="submit" value="Submit"><strong>Save and Submit</strong></button>
            </div>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>

    <?php $this->load->view('template/footer'); ?>