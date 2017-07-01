<div class="panel panel-default panel-list">
                  <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title">Order Details</h3>
                  </div>
                  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                  <form class="total_form" method="post" action="<?php echo base_url(); ?>index.php/products/place_order">
                    <div class="form-group">
                    <label for="firstname">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <label  for="lastname">Address</label>
                    <input name="address" type="text" class="form-control"  placeholder="Enter Address">
                    <label for="emailadd">District</label>
                    <input type="text" class="form-control" name="district" placeholder="District">
                    <div class="form-group">
                    <label for="username">Pincode</label>
                    <input type="number" class="form-control" name="pincode" placeholder="Enter Pincode">
                    </div>
                    <div class="form-group">
                    <label for="password1">State</label>
                    <input type="text" class="form-control" name="state" placeholder="Enter State">
                    </div>
                    <div class="form-group">
                    <label for="password2">Mobile Number</label>
                    <input type="number" class="form-control" name="number" placeholder="Enter Mobie Number">
                    </div>
                     <button name="submit" type="submit" class="btn subtn btn-default">Submit</button>
                  </form>
                </div>