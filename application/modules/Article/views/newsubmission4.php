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
              <h1><strong>Step 4. Confirmation</strong></h1>
            </div>
              <div class="steps">
                <ul class="breadcrumbs">
                  <li>1. Start</li>
                  <li><a href="<?php echo base_url("Article/UploadSubmission")?>">2. UPLOAD SUBMISSION</a></li>
                  <li><a href="<?php echo base_url("Article/EnterMetadata")?>">3. ENTER METADATA</a></li>
                  <li><strong>4. CONFIRMATION </strong></li>
                </ul>
              </div>
              <div class="submission-section">
                <p>To submit your manuscript to <strong>Coron's Treasure Journal</strong>  click Finish Submission. The submission's principal contact will receive an acknowledgement by email and will be able to view the submission's progress through the editorial process by logging in to the journal web site. Thank you for your interest in publishing with <strong>Coron's Treasure Journal</strong>.</p>
                <h6><strong>FILE SUMMARY</strong></h6>
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ORIGINAL FILE NAME</th>
                      <th>TYPE</th>
                      <th>FILE SIZE</th>
                      <th>DATE UPLOADED</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td>420</td>
                    <td>Article.docs</td>
                    <td>Submission File</td>
                    <td>14kb</td>
                    <td>03-06</td>
                  </tbody>
                </table>
              </div>
               <button href="#" class="btn -yellow" type="submit" value="Submit"><strong>Finish Submission</strong></button>
            </div>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>
    <?php $this->load->view('template/footer'); ?>