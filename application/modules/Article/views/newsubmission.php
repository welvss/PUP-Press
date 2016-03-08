
  

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
              <h1><strong>Step 1. Starting the Submission</strong></h1>
            </div>
              <div class="steps">
                <ul class="breadcrumbs">
                  <li class="active"><strong>1. START</strong></li>
                  <li>2. UPLOAD SUBMISSION</li>
                  <li>3. ENTER METADATA</li>
                  <li>4. CONFIRMATION</li>
                </ul>
              </div>
              <div id="checklist">
                <h6><strong>Submission Checklist</strong></h6>
                <p>Indicate that this submission is ready to be considered by this journal by checking off the following (comments to the editor can be added below).</p>
                <label for="checkbox2" id="label-checkbox2"> <input id="checkbox2" type="checkbox">The submission has not been previously published, nor is it before another journal for consideration (or an explanation has been provided in Comments to the Editor).</label>
                <label for="checkbox2" id="label-checkbox2"> <input id="checkbox2" type="checkbox">The  The submission file is in OpenOffice, Microsoft Word, RTF, or WordPerfect document file format.</label>
                <label for="checkbox2" id="label-checkbox2"> <input id="checkbox2" type="checkbox">Where available, URLs for the references have been provided</label>
                <label for="checkbox2" id="label-checkbox2"> <input id="checkbox2" type="checkbox">The text is single-spaced; uses a 12-point font; employs italics, rather than underlining (except with URL addresses); and all illustrations, figures, and tables are placed within the text at the appropriate points, rather than at the end.</label>
                <label for="checkbox2" id="label-checkbox2"> <input id="checkbox2" type="checkbox"> The text adheres to the stylistic and bibliographic requirements outlined in the Author Guidelines, which is found in About the Journal.</label>
                <label for="checkbox2" id="label-checkbox2"> <input id="checkbox2" type="checkbox">   If submitting to a peer-reviewed section of the journal, the instructions in Ensuring a Blind Review have been followed.</label>
              </div>
              <div id="privacy">
                <h6><strong>Journal's Privacy Statement</strong></h6>
                <p>The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.</p>
              </div>
               <button href="<?php echo base_url("Article/UploadSubmission")?>" class="btn -yellow" type="submit" value="Submit"><strong>Save and Submit</strong></button>
            </div>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>

    <?php $this->load->view('template/footer'); ?>