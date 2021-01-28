<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ChatNode</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="image/chatnode-logo.png" rel="icon">
  <link href="image/chatnode-logo.png" rel="ChatNode_logo">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<style type="text/css">
  		.mobileHide { display: inline; }
		 /* Smartphone Portrait and Landscape */
 		 @media only screen
   		 and (min-device-width : 320px)
   		 and (max-device-width : 480px){
   		  .mobileHide { display: none;}
			  }
		</style>


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style0.css" rel="stylesheet">
  <!-- <link href="css/profile.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script type="text/javascript">
    $("#datepicker").datepicker({
      dateFormat: 'dd.mm.yy',
      changeMonth: true,
      changeYear: true,
      yearRange: '-99:-08'
    });
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
</head>

<body>
  <?php
    include ('session.php');
    include ('time_stamp.php');
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html"><img src="assets/img/logo.png" style="width:200px; height:200px"/></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
      <a href="home.php" class="logo mr-auto"><h2 style="float:left; font-family:Oswald; margin: 10px; color:#fff;">ChatNode</h2></a>

      <!-- <div class="mobileHide">
       <h2 style="float:right; font-family:Oswald; margin: 10px">ChatNode</h2></div> -->
      <!--<img src="assets/img/Utkarshini_name.jpeg" alt="" class="img-fluid" style="width:7.5em;"/></a>-->

      <nav class="nav-menu d-none  d-lg-block" >
        <ul >
          <!-- <li><a href="home.php" title="ChatNode"><b>ChatNode</b></a></li> -->
  				<li></li>
  				<li></li>
  				<li></li>
  				<li></li>
  				<li></li>
  				<li></li>
  				<!-- <li><a href="timeline.php" title="<?php //echo $username ?>"><label><?php //echo $username ?></label></a></li> -->
  				<li></li>
  				<li></li>
  				<li><a href="home.php" title="Home"><label>New Posts</label></a></li>
          <li></li>
          <li><a href="chat.php" title="Chat"><label>Chat</label></a></li>
          <li></li>
          <li><a href="paid_posts.php" title="Paid Posts"><label>Paid Posts</label></a></li>
          <li></li>
  				<li><a href="profile.php" title="Profile"><label class="active">Profile</label></a></li>
          <li></li>
  				<!-- <li><a href="photos.php" title="Settings"><label>Photos</label></a></li> -->
  				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
