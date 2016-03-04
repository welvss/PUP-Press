<?php $this->load->view('template/header.php') ?>


  </header>
  </div>
    <!--Main Body-->
    <div id="body-wrapper">
    <!--Carousel/Picture Slider-->
         <div id="owl-example" class="owl-carousel owl-theme">
          <div><img src="<?php echo base_url('assets/img/image-1.png'); ?>" alt=""></div>
          <div><img src="<?php echo base_url('assets/img/image-2.jpg'); ?>" alt=""></div>
          <div><img src="<?php echo base_url('assets/img/image-4.jpg'); ?>" alt=""></div>
          <div><img src="<?php echo base_url('assets/img/image-3.jpg'); ?>" alt=""></div>
        </div>
        <div class="row">
            <!--Featured Journals-->
              <div class="small-8 columns">
                
              </div>
                <!--Annoucement & Events-->
               <div class="small-4 columns">
               <!--Anouncement-->
                <ul id="announcement">
                  <li><h1><i class="fa fa-commenting fa-lg side-icon"></i><a href="#">Announcements</a></h1></li>
                  <li><i class="fa fa-rss fa-lg side-icon"></i><a href="">RSS Feed</a></li>
                  <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                  <li><a href="#">Aliquam molestie, metus sit amet auctor ullamcorper, metus velit laoreet.</a></li>
                  <li><a href="#">Quisque dignissim accumsan quam, id scelerisque turpis dignissim vel.</a></li>
                  <li><a href="#">Duis faucibus, leo sed egestas dapibus, justo justo dapibus diam, nec porta urna est vitae sem</a></li>
                  <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                </ul>
              </div>
          </div>
    </div>
    <!--End Body Wrapper-->
    <div class="push">
      <!--WhiteSpace-->
    </div>
</div>
    <!--Footer-->
 <?php $this->load->view('template/footer.php') ?>