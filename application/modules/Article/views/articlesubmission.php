 <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
          <li><a href="<?php echo base_url("Dashboard")?>">My Account</a></li>
         <li class="active"><a href="#">Article Submission</a></li>
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
              <h1><strong>Article Submission</strong></h1>
                <div class="dashboard">
                  <ul>
                    <li>
                      <h6><a href="#"><strong>Coron's Treasure</strong></a></h6>
                      <table>
                        <thead>
                          <tr>
                            <th><a href="#">Author</a></th>
                            <th style="position: relative; left: 150px;">1&nbsp; &nbsp; <a href="ActiveSubmission.html">Active</a></th>
                            <th style="float: right;"><a href="<?php echo base_url("Article/NewSubmission")?>">New Submission</a></th>
                          </tr>
                        </thead>
                      </table>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>
 <?php $this->load->view('template/footer'); ?>