 <?php if($this->session->flashdata('registered')) : ?>
  <div class="alert alert-success">
      <?php echo $this->session->flashdata('registered'); ?>
  </div>
<?php endif; ?>
 <?php if($this->session->flashdata('pass_login')) : ?>
  <div class="alert alert-success">
      <?php echo $this->session->flashdata('pass_login'); ?>
  </div>
<?php endif; ?>
 <?php if($this->session->flashdata('fail_login')) : ?>
  <div class="alert alert-success">
      <?php echo $this->session->flashdata('fail_login'); ?>
  </div>
<?php endif; ?>


        <div class="panel panel-default panel-list">
                  <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title">Games</h3>
                  </div>
         <div class="row boxbox">
          <?php if(is_array($products) || is_object($products)){?>
          <?php foreach($products as $product): ?>
           <div class="col-md-4 xs-6 game">
            
                <a href="<?php echo base_url(); ?>index.php/Products/details/<?php echo $product->id; ?> ">
                        <img style="margin left: 10px; height: 150px; width: 100%" src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>"/>
                        <div class="game-price">Rs.<?php echo $product->price; ?></div>
                 </a>
                  <div class="game-title">
                        <?php echo $product->title; ?>
                  </div>
                   <div ><?php echo $product->stock; ?> left in stock.</div>
                   <?php if($product->stock>0){ ?>
                   <form method="post" action= "<?php echo base_url();?>index.php/cart/add" >
                      QTY: <input class="qty" type="text" name="qty" value="1"/>
                      <br>
                      <input type="hidden" name="price" value="<?php echo $product->price; ?>" />
                      <input type="hidden" name="item_number" value="<?php echo $product->id; ?>" />
                      <input type="hidden" name="title" value="<?php echo $product->title; ?>" />
                       
                      <button class="btn btn-primary" type="submit" onmouseover="myfunc()">Add To Cart</button>
                      <?php } else{ ?>
                   s
                    <?php }?>
                   </form>
                   <br>

          </div>
<?php endforeach; }?>