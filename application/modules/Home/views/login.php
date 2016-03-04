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

        <?php
        #SETTINGS

        $username = array(
         
         'class'        => 'form-control',
         'name'         => 'username',
         'id'           => 'username',
         'required'     => true
        );
        $password = array(
         
         'class'        => 'form-control',
         'name'         => 'password',
         'required'     => true
        );
        $submit = array(
         'value'        => 'Login',
         'class'        => 'btn btn-danger btn-lg',
         'name'         => 'login_submit'
        );  

        ?>


	
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
     

       
      
      <div class="lform">
           

        
        <table class="loginform">  

                <tr>
                   <h1 class ="logintitle">LOGIN</h1> 
                </tr>      

                <tr>
             <?php echo form_open('home/login_validation');?>

                    <div class="form-inline">
                      
                        <div class="col-xs-3">
                          <td><label for="username" class="username"><h1>Username</h1></label></td>
                          <td><?php echo form_input($username); ?></td>
                        </div>
                    </div>
                </tr>

                <tr>
                    <div class="form-inline">
                        <div class="col-xs-3">
                          <td><label for="password" class="password"><h1>Password</h1></label></td>
                          <td><?php echo form_password($password);?></td>
                        </div>                        
                    </div>
                </tr>
                <tr>   
                    
                    <td class="loginbutton"><?php echo form_submit($submit); ?></td>
                </tr>   
                <tr class="validation_errors">
                   <td><br><br><?php echo validation_errors(); ?></td>
                </tr>

            <?php echo form_close(); ?>
            
                
        </table>
     
          </div>
         
    </div>
</body>
</html>



