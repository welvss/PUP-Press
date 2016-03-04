<html>
<head>
	<title>AMSes | ATTENDANCE MONITORING SYSTEM</title>

	<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/main.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <!-- jQuery -->
    <script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/date_time.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
</head>
<body>


	 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       
            
            <ul>
                <li><a href ="<?php echo base_url()."index.php/Home/Logout"?>">Logout</a></li>
                <li>Home</li>
                <li>Profile</li>
                <li>Student Login</li>
                <li>Student Logout</li>
                <li>Alumni</li>

            </ul>



            <div class="date_time">
                    <span id="date_time"></span>
                    <script type="text/javascript">window.onload = date_time('date_time');</script>
            </div>

        
    </nav>




    <div class="container">

                <div class="row">
                    <div class="aside">
                         <img class = "logo" src="<?php echo base_url('images/pup_logo.png'); ?>" />  
                         <center><h3 class="ams">ATTENDANCE MONITORING SYSTEM</h3></center>                     
                    </div>
        <div class="col-md-6">
            <div class="well well-sm">
               <div class="details">
                <div class="col-md-9">
                    <div class="profile">
                          <img class = "profilepic" src="<?php echo base_url('images/profile1.jpg'); ?>" />
                    </div>

                  <div class="info">
                        <table class="info">
                            <tr>
                                <td>Student ID:</td>
                            </tr>
                            <tr>
                                <td>Student Name:</td>
                            </tr>
                            <tr>
                                <td>Year/Course:</td>                          
                            </tr>
                            <tr>
                                <td class="timein">Time in:</td>                          
                            </tr>
                            <tr>
                                <td class="timeout">Time out:</td>                          
                            </tr>
                        </table>
                  </div>
                    



                        </div>
                    </div>
                 <!--   <div class="col-md-6">
                        <div class="well well-sm">
                          
                        </div>
                    </div>   -->
                    
                </div>
               
            </div>
       
        </div>
    </div>

</body>
</html>