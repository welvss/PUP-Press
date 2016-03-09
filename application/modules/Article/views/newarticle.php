nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
         <li><a href="MyAccount.html">My Account</a></li>
         <li><a href="Article-Submission.html">Article Submission</a></li>
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
            <!--Step1-->
            <div class="title">
              <h1><strong>New Article Submission</strong></h1>
            </div>
<!--Title Abstract-->
              <div class="submission-section">
                <h6><strong>Title and Abstract</strong></h6>
                <div class="row">
                  <div class="small-8 columns">
                  <!--Form-->
                   <?php echo form_open_multipart('Article/CreateArticle');?>

                   <div data-abide-error class="alert callout" style="display: none;" data-abide-error>
                    <p><i class="fa fa-exclamation-triangle fa-lg"></i> Please fill up missing required fields!</p>
                  </div>
                      <div class="small-4 columns">
                      <label for="right-label" ><strong>Title</strong></label>
                    </div>
                    <div class="small-8 columns">
                      
                              <?php
                                $data = array(
                                  'type' => 'text', 
                                  'required' => true, 
                                  'name' => 'article_title'

                                );
                                echo form_input($data);
                              ?>
                              <?php
                               
                               echo form_hidden('journal_id', $this->uri->segment(3));
                              ?>
                       <span class="form-error">
                        Invalid entry for First
                      </span>
                    </div>

                    <div class="small-4 columns">
                      <label for="right-label" ><strong>Abstract</strong></label>
                    </div>
                    <div class="small-8 columns">
                       <?php
                                $data = array(
                                  'cols' => '30', 
                                  'rows' => '7', 
                                  'required' => true, 
                                  'name' => 'abstract'

                                );
                                echo form_textarea($data);
                      ?>
                    </div>
                  
                </div>
              </div>
            </div>
                <div class="steps" id="guide">
                  <?php
                      $data = array(
                     
                      'name'  => 'file',
                      'id'    => 'file',
                      'required' => true, 
                      'allowedtypes' => 'PDF|pdf'
                                       
                     
                      );
                   echo form_upload($data)?>
                </div>
              <!--Step 4-->
               
                <?php echo form_submit('submit', 'Submit', 'class="btn -yellow"','style="float:right;"');?>
           
            <!--Final submission-->
               <!--End RightCol-->
            </div>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>

    <?php $this->load->view('template/footer'); ?>