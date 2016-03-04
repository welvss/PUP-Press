<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polytechnic University of the Philippines | Journal</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
  </head>
  <body class="homepage">
<div class="wrapper">
<!--Header-->
   <div id="header-wrapper" class="myAccount">
     <header  id="header">
      <!--MainHeader-->
       <div class="inner">
        <h1><a href="index.html">Polytechnic University of the Philippines</a></h1>
            <p class="sub-brand">| J O U R N A L</p>
        </div>
        <!--Right Navigation-->
        <div id="right-nav">
          <ul class="ulnav breadcrumbs">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Help</a></li>
          </ul>
         <div id="login-nav">
            <ul class="ulnav breadcrumbs">
               <li><a href="Sign-in.html">View Basket</a></li>
              <li><a href="#">Logged in as: <?php echo $this->mdldashboard->user_name();?></a></li>
            </ul>
          </div>
        </div>
            <!--Subject Navigation-->
   <nav id="nav">
        <ul class="nav">
            <li><a href="#">Our Journals</a></li>
            <li><a href="#">Access & Purchase</a></li>
            <li><a href="#">For Authors</a></li>
            <li><a href="#">For Librarians</a></li>
            <li><a href="#">For Societies</a></li>
            <li><a href="#">Corporate Services</a></li>
          </ul>
    </nav>
    <nav id="nav2">
        <ul class="nav">
            <li><span><?php echo $this->mdldashboard->user_firstname()." ".$this->mdldashboard->user_lastname();?></span></li>
            <li><a href="<?php echo base_url("Dashboard/ChangePass")?>">Change Password</a></li>
            <li><a href="<?php echo base_url("Dashboard/Edit")?>">View/Change User Information</a></li>
            <li><a href="<?php echo base_url("Dashboard/Logout")?>">Sign Out</a></li>
          </ul>
    </nav>
  
  