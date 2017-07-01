 
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
    <div class="list-group">
      <a href="#insert_product" class="list-group-item list-group-item-success">Insert Product</a>
      <a href="#" class="list-group-item list-group-item-info">Add in Stock</a>
      <a href="#" class="list-group-item list-group-item-warning">Add category</a>
      <a href="#" class="list-group-item list-group-item-danger"></a>
    </div>
<div id="insert_product">
                <div class="panel panel-default panel-list">
                  <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title">Insert Product</h3>
                  </div>
                  <form class="total_form" method="post" action="<?php echo base_url(); ?>index.php/users/register">
                    <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="titlw" placeholder="Enter Title">
                    </div>
                    <label  for="description">Description</label>
                    <input name="description" type="text" class="form-control"  placeholder="Enter description">
                    <label for="Price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter Price">
                    <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" name="quantity" placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control" name="password1" placeholder="Enter Password">
                    </div>
                     <button name="submit" type="submit" class="btn subtn btn-default">Submit</button>
                  </form>
                </div>
</div>
</div>
</body>