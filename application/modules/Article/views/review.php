 <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
         <li><a href="MyAccount.html">My Account</a></li>
         <li><a href="#">Reviewer</a></li>
         <li><a href="#"><?php echo "#". $article->article_id ?></a></li>
         <li class="active"><a href="#">Review</a></li>
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
              <div class="submission-section">
                <h1><strong><?php echo "#". $article->article_id ?> Review</strong></h1>
                <h5>Submission to be reviewed.</h5>
                <div class="row">
                  <div class="small-12 columns">
                    <div class="row">
                      <div class="small-2 columns">
                        <p><strong>Title</strong></p>
                      </div>

                      <div class="small-10 columns">
                        <p><?php echo $article->article_title ?></p>
                      </div>

                    </div>

                     <div class="row">
                      <div class="small-2 columns">
                        <p><strong>Abstract</strong></p>
                      </div>

                      <div class="small-10 columns">
                        <p><?php echo $article->abstract ?></p>
                      </div>
                    </div>

                     <div class="row">
                      <div class="small-2 columns">
                        <p><strong>Attachment</strong></p>
                      </div>

                      <div class="small-10 columns">
                        <button><a href="<?php echo base_url($article->file) ?>"><span class="fa fa-file-pdf-o fa-2x"></span>PDF</a></button>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
              <!--Review Sched-->
              <div class="submission-section">
                <h5>Review Schedule</h5>
                <div class="row">
                  <div class="small-2 columns">
                    <p><strong>Review Request</strong></p>
                  </div>
                  <div class="small-10 columns">
                    <p>2016-01-15</p>
                  </div>
                </div>
                <div class="row">
                  <div class="small-2 columns">
                    <p><strong>Review Due</strong></p>
                  </div>
                  <div class="small-10 columns">
                    <p>2016-03-15</p>
                  </div>
                </div>
              </div>
              <!--Review-->
              <div class="submission-section">
              <h5>Review</h5>
               <?php echo form_open('Article/Reviewer');?>
                    <div class="row">
                      <div class="small-2 columns">
                        <label for="right-label" class="float-left "><strong>Subject</strong></label>
                      </div>
                      <div class="small-4 columns end">
                        <?php
                                $data = array(
                                  'type' => 'text', 
                                  'required' => true, 
                                  'name' => 'subject'

                                );
                                echo form_input($data);
                              ?>
                              <?php
                               echo form_hidden('journal_id', $article->journal_id);
                               echo form_hidden('article_id', $this->uri->segment(3));
                              ?>
                      </div>
                    </div>

                    <div class="row">
                      <div class="small-2 columns">
                        <label for="right-label" class="float-left "><strong>Review</strong></label>
                      </div>
                      <div class="small-10 columns end">
                        <?php
                                $data = array(
                                  'cols' => '30', 
                                  'rows' => '10', 
                                  'required' => true, 
                                  'name' => 'review'

                                );
                                echo form_textarea($data);
                      ?>
                      </div>
                    </div>
                
                <p style="margin-top: 25px;">Select a recommendation and submit the review to complete the process. You must enter a review or upload a file before selecting a recommendation.</p>
                <div class="row">
                  <div class="small-5 columns">
                    <p><strong>Recommendation</strong></p>
                  </div>
                  <div class="small-4 columns end">
                    <select class="selector" name="pending">
                    <option value="" disabled selected> - Please Select -</option>
                      <option value="0">Accept Submission</option>
                      <option value="RR">Revision Required</option>
                      <option value="1">Decline Submission</option>
                    </select>
                  </div>
                </div>
              </div>
                <?php echo form_submit('submit', 'Submit', 'class="btn -yellow"','style="float:right;"');?>
            </div>
              <?php form_close();?>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>
<?php $this->load->view('template/footer'); ?>