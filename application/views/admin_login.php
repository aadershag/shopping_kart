 
<header>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

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
            <li><a href="<?php echo base_url();?>index.php/users/admin_login">Admin Login</a></li>
            <li style="">
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        </nav>
</header>
<body>
<br>
<div class="container">
<div class="panel panel-default panel-list">
                  <?php if(!$this->session->userdata('logged_in')){?>
                  <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title">Admin Login</h3>
                  </div>
                  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                  <form class="total_form" method="post" action="<?php echo base_url(); ?>index.php/users/admin">
                    <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>

                     <button name="submit" type="submit" class="btn subtn btn-default">Submit</button>
                  </form>
                  <?php }else{ ?>
                  <h2>Please Logout of current session </h2>
                    <form class="navbar-form navbar-right" method="post" action="<?php echo base_url();?>index.php/users/logout">
                     <button type="submit" name="logout" class="btn btn-default">Logout</button>
                    </form>
                  <?php }?>
                </div>
    </div>
</body>