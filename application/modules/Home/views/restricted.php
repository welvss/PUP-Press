<html>
<head>
	<title>AMSes | ATTENDANCE MONITORING SYSTEM</title>

	<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <!-- jQuery -->
    <script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/date_time.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
</head>
<body>

      
	 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       
            <ul class="nav">

                <li>Home</li>
                <li>Profile</li>
                <span class="date_time" id="date_time"></span>
                <script type="text/javascript">window.onload = date_time('date_time');</script>

            </ul>


            
        
    </nav>


    <div class="container">


   
            <div class="aside">
                <div class="col-md-4">
                    <img class = "logo" class="img-responsive" src="<?php echo base_url('images/pup_logo.png'); ?>" />
                    
                    <center><h3 class="ams">ATTENDANCE MONITORING SYSTEM</h3></center>
                </div>

            </div>
     

       
      
      <div class="col-lg-4 .col-lg-offset-1 .col-md-6 .col-md-offset-0">
           

        
        <table class="loginform">  
        <br><br><br><br><br><br><br>
          <h1>Opps!</h1>
          <h2>This is a restricted page.</h2>
                
        </table>
        <a href="<?php echo base_url()."profile/uprofile/login"?>">back to login</a>
     
     </div>

       
        
    </div>
</body>
</html>



