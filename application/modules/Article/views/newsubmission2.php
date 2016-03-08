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
              <h1><strong>Step 2. Uploading the Submission</strong></h1>
            </div>
              <div class="steps">
                <ul class="breadcrumbs">
                  <li>1. Start</li>
                  <li><strong>2. UPLOAD SUBMISSION</strong></li>
                  <li>3. ENTER METADATA</li>
                  <li>4. CONFIRMATION</li>
                </ul>
              </div>
              <div class="steps" id="guide">
                <p>To upload a manuscript to this journal, complete the following steps.

</p>
                  <ul>
                    <li>1. On this page, click Browse (or Choose File) which opens a Choose File window for locating the file on the hard drive of your computer. </li>
                    <li>2. Locate the file you wish to submit and highlight it. </li>
                    <li>3. Click Open on the Choose File window, which places the name of the file on this page. </li>
                    <li>4. Click Upload on this page, which uploads the file from the computer to the journal's web site and renames it following the journal's conventions.</li>
                    <li>5. Once the submission is uploaded, click Save and Continue at the bottom of this page.</li>
                  </ul>
              </div>
                <div class="steps">
                  <h6><strong>Submission File</strong></h6>
                  <p>No submission file uploaded.</p>
                </div>

                <div class="steps" id="guide">
                  <p>Upload submission file</p>
                  <button class="file-upload "><input type="file" class="file-input"></button>
                  <button>Upload</button>
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