<nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="index.html">PUP Journals</a></li>
         <li><a href="MyAccount.html">My Account</a></li>
         <li><a href="#">Reviewer</a></li>
         <li class="active"><a href="#">Active Submission</a></li>
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
              <h1><strong>Active Submissions</strong></h1>
                <ul class="menu">
                  <li><strong>Active</strong></li>
                </ul>
                       <table id="table_id"  class="display hover">
                    <thead>
                      <tr>
                        <th >ID</th>
                        <th >YYYY-MM-DD</th>
                        <th> Title</th>
                        <th >Due</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                    <?php
                      if(isset($Article) && is_array($Article) && count($Article) > 0)
                      {
                          foreach ($Article as $As)
                          {
                            echo
                            
                                  '<td>'.$As->article_id.'</td>
                                  <td>'.$As->date.'</td>
                                  <td><a href="Review'.'/'.$As->article_id.'">'.$As->article_title.'</a></td>
                                  <td>04-01-16</td>';
                           
                               
                          }
                      }
                        
                      ?>
                       
                      </tr>
                    </tbody>
                  </table>
              </div>

          </div>
      </div>
    </div>
    <div class="push"></div>
  </div>


    </div>
<?php $this->load->view('template/footer'); ?>