 <nav id="directory">
      <ul class="breadcrumbs">
         <li><a href="<?php echo base_url('Journal/AtoZ');?>">PUP Journals</a></li>
         <li><a href="#">Travel</a></li>
         <li class="active"><a href="#"><?php echo $journal->journal_title;?></a></li>
      </ul>
      <hr>
    </nav>

  </header>
  </div>

    

<!--Main Body-->
    <div id="body-wrapper">
    <div class="push-15"></div>
      <div class="body Journal-homepage">
        <div class="row">
          <div class="small-8 columns">
            <ul class="accordion secondary" data-accordion data-multi-expand="true">
              <li class="accordion-item is-active" data-accordion-item>
                <a href="#" class="accordion-title journal-title" style="background: #19b64d; color: white;"><?php echo $journal->journal_title;?></a>
                <ul class="dropdown menu secondary journal-menu" data-dropdown-menu>
                  <li>
                  <a href="#">About</a>
                  <ul class="menu journal-submenu" style="color: black" data-animation-in="fade-in">
                    <li><a href="#">About the journal</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Submit</a></li>
                  <li><a href="#">Subscribe</a></li>
                </ul>
                <div class="accordion-content" data-tab-content>
                  <img src="<?php echo base_url('assets/img/ct_thumb.png')?>" alt="Journal's Title" class="journal-thumb">
                  I would start in the open state, due to using the `is-active` state class.
                </div>
              </li>
      <!-- ... -->
            </ul>
            <!--Panel-->
            <div class="panel">
            <div class="submission-section">
              <h5>Under the cave, Sticks and Stones</h5>
              <p  class="article-author-name" style="float:left">John Gabriel, Super Mega Master in Information Technology.</p>
              <button class="pdf"><a href="#"><span class="fa fa-file-pdf-o fa-2x"></span>PDF</a></button>
            </div>
                <h6>Abstract</h6>
              <p class="panel-content"><?php echo $journal->description;?></p>
              <p class="panel-content">
                <?php echo $journal->description;?>
              </p>
            </div>
          </div>

          <div class="small-4 columns">
            <div class="callout">
                <input type="text" placeholder="Search...">
            </div>
            
          </div>

        </div>
        <!--End of row-->
    </div>
    <div class="push"></div>
  </div>


    </div>

    <?php $this->load->view('template/footer'); ?>