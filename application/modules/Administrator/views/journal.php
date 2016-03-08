
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
                    <?php
                      if(isset($journals) && is_array($journals) && count($journals) > 0)
                     {
                          foreach ($journals as $journal)
                          {
                            echo
                            '<tr>
                              <td><a href="#">'.$journal->journal_title.'</a></td>
                              <td>'.$journal->path.'</td>
                               <td>Travel</td>
                              <td><a href="#">Edit</a><a href="DeleteJournal/'.$journal->journal_id.'" style="margin-left: 25px;">Delete</a></td>
                             </tr>';
                          }
                      }
                    ?>
                    </tbody>
                  </table>

                </div>
                <!-- End of Dashboard-->
                <div class="large reveal" id="journalmodal" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
                  <h1><strong>Create a Journal</strong></h1>


                  <!--Form-->
                    <?php echo form_open('Administrator/CreateJournal');?>

                        <div class="row">
                           <div class="medium-12 columns">
                            <label><strong>Journal Title*</strong>
                  
                              <?php
                                $data = array(
                                  'type' => 'text', 
                                  'required' => true, 
                                  'name' => 'journal_title'

                                );
                                echo form_input($data);
                              ?>

                            </label>
                          </div>
                        </div>
                        <div class="row">
                           <div class="medium-12 columns">
                            <label><strong>Journal Description*</strong>
                             
                               <?php
                                $data = array(
                                  'cols' => '30', 
                                  'rows' => '5', 
                                  'required' => true, 
                                  'name' => 'description'

                                );
                                echo form_textarea($data);
                              ?>
                            </label>
                          </div>
                        </div>
                         <div class="row">
                           <div class="medium-6 columns">
                            <label><strong>Path*</strong>
                              <?php
                                $data = array(
                                  'type' => 'text', 
                                  'required' => true, 
                                  'name' => 'path'

                                );
                                echo form_input($data);
                              ?>
                            </label>
                          </div>
                        </div>
                        <!--Modal-->
                        <div class="row">
                          <div class="medium-12 columns">
                             <p class="help-text" id="exampleHelpText">This should be a single short word or acronym that identifies the journal. The journal's URL will be http://localhost/pup-press/index.php/path</p>
                             <p>* Denotes required field</p>

                             <label for="checkbox1"> <input id="checkbox1" type="checkbox" name="visibility" value='1'>Enable this journal to appear publicly on the site</label>
                             
                            <?php
                              echo form_submit('submit', 'Save', 'class="btn -yellow"','style="float:right;"')
                            ?>
                            
                          </div>
                        </div>
                    <?php form_close(); ?>
                  <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <h6 class="h6-border"><a data-open="journalmodal">Create a Journal</a></h6>
              <strong> <?php echo validation_errors(); ?></strong>

          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>
  <?php $this->load->view('template/footer'); ?>