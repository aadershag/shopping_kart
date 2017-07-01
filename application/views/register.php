<div class="panel panel-default panel-list">
                  <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title">Register</h3>
                  </div>
                  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                  <form class="total_form" method="post" action="<?php echo base_url(); ?>index.php/users/register">
                    <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter first name">
                    </div>
                    <label  for="lastname">Last Name</label>
                    <input name="lastname" type="text" class="form-control"  placeholder="Enter last name">
                    <label for="emailadd">Email address</label>
                    <input type="email" class="form-control" name="emailadd" placeholder="Email">
                    <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control" name="password1" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" class="form-control" name="password2" placeholder="Re-enter Password">
                    </div>
                     <button name="submit" type="submit" class="btn subtn btn-default">Submit</button>
                  </form>
                </div>