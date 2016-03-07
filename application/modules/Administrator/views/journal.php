<?php $this->load->view('template/adminheader'); ?>
    <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
         <li><a href="<?php echo base_url("Dashboard")?>">My Account</a></li>
         <li><a href="<?php echo base_url("Administrator")?>">Site Administration</a></li>
         <li class="active"><a href="#">Journals</a></li>
      </ul>
      <hr>
    </nav>
   
  </header>
  </div>

    <!--Main Body-->
    <div id="body-wrapper">
    <div class="push-15"></div>
      <div class="body myAccount admin-journal">
        <div class="row">
          <div class="small-12 columns">
            <div class="right-col">
              <h1><strong>Journals</strong></h1>
                <div class="dashboard">
                  <table id="table_id"  class="display hover">
                    <thead>
                      <tr>
                        <th >Journal Title</th>
                        <th >Path</th>
                        <th >Category</th>
                        <th width="50px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">Singaporean Tours</a></td>
                        <td></td>
                        <td>Travel</td>
                        <td><a href="#">Edit</a><a href="#" style="margin-left: 25px;">Delete</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">Coron's Treasures</a></td>
                        <td>Content Goes Here</td>
                        <td>Travel</td>
                        <td><a href="#">Edit</a><a href="#" style="margin-left: 25px;">Delete</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">Hong Kong Disney Land Travels</a></td>
                        <td>Content Goes Here</td>
                        <td>Travel</td>
                        <td><a href="#">Edit</a><a href="#" style="margin-left: 25px;">Delete</a></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
                <!-- End of Dashboard-->
                <div class="large reveal" id="journalmodal" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
                  <h1><strong>Create a Journal</strong></h1>
                  <!--Form-->
                    <form>
                        <div class="row">
                           <div class="medium-12 columns">
                            <label><strong>Journal Title*</strong>
                              <input type="text" placeholder="">
                            </label>
                          </div>
                        </div>
                        <div class="row">
                           <div class="medium-12 columns">
                            <label><strong>Journal Description*</strong>
                              <textarea name="" id="" cols="30" rows="5"></textarea>
                            </label>
                          </div>
                        </div>
                         <div class="row">
                           <div class="medium-6 columns">
                            <label><strong>Path*</strong>
                              <input type="text" placeholder="">
                            </label>
                          </div>
                        </div>
                        <!--Modal-->
                        <div class="row">
                          <div class="medium-12 columns">
                             <p class="help-text" id="exampleHelpText">This should be a single short word or acronym that identifies the journal. The journal's URL will be http://localhost/pup-press/index.php/path</p>
                             <p>* Denotes required field</p>
                             <label for="checkbox1"> <input id="checkbox1" type="checkbox">Enable this journal to appear publicly on the site</label>
                             <button href="#" class="btn -yellow" type="submit" value="Submit" style="float:right;"><strong>Save</strong></button>
                          </div>
                        </div>
                    </form>
                  <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <h6 class="h6-border"><a data-open="journalmodal">Create a Journal</a></h6>

          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>
  <?php $this->load->view('template/footer'); ?>