 <div class="panel panel-default panel-list" style="    width: 110%;">
                  <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title"><?php echo $products->title;?></h3>
                  </div>
                  <br>
                    <div class="row descrip_body">
                    <div class="descrip col-md-6" >
                    	<?php echo $products->description;?>
                    </div>
                    <div class="col-md-6">
                    	 <a href="<?php echo base_url(); ?>index.php/Products/details/<?php echo $products->id; ?> "   >
                        <img style="margin left: 10px; height: 150px; width: 100%" src="<?php echo base_url(); ?>assets/images/products/<?php echo $products->image; ?>"/>
                        <div class="game-price">Rs.<?php echo $products->price; ?></div>
                      
                        <div class="game-title"  style="text-decoration:none">
                        <?php echo $products->title; ?>
                        </div>
                      </a>
                      <!--?php foreach ($this->cart->contents() as $items){
                          echo $items['id']."\n";
                        } ?-->

                      <span><?php echo $products->stock; ?> left in stock.</span>
                      <?php if($this->session->userdata('logged_in')){?>
                          <span>
                          <input type="checkbox" aria-label="..." name="wish" checked>
                          </span>
                      <?php } ?>
                   <form method="post" action= "<?php echo base_url();?>index.php/cart/add" >
                      QTY: <input class="qty" type="text" name="qty" value="1"/>
                      <input type="hidden" name="price" value="<?php echo $products->price; ?>" />
                      <input type="hidden" name="item_number" value="<?php echo $products->id; ?>" />
                      <input type="hidden" name="title" value="<?php echo $products->title; ?>" />
                      <?php if($products->stock>0){ ?>
                      <button class="btn btn-primary" type="submit" onmouseover="myfunc()">Add To Cart</button>
                      <?php } else{ ?>
                    Sorry Product out of Stock.
                    <?php }?>
                      
                   </form>
                  <br>
                  <br>
                  </div>
                  </div>

