<div class="panel panel-default panel-list" style="    width: 110%;">
                  <div class="panel-heading panel-heading-dark">
                    <h3 class="panel-title">Orders</h3>
                  </div>
                    <div class="panel-body col-md-12" >
                      <?php foreach($products as $product){ ?>
                          	<div class="panel panel-default panel-list">
                              <div class="panel-heading" >
                                <h4 class="panel-title"><?php echo $product->title; ?></h4>
                              </div>
                              <div class="panel-body">
                              <div class="col-md-6" ">
                                <h5 >Qty:</h5>
                                <h6><?php echo $product->quantity;?></h6>
                                <br>
                                <h5>Price:</h5>
                                <h6><?php echo $product->price; ?></h6>
                              </div>
                              <div class="col-md-6">
                                  <a href="<?php echo base_url(); ?>index.php/Products/details/<?php echo $product->id; ?> "   >
                                  <img style="margin left: 10px; height: 150px; width: 100%" src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>"/>
                                  <div class="game-price">Rs.<?php echo $product->price; ?></div>
                      
                                  <div class="game-title"  style="text-decoration:none">
                                  <?php echo $product->title; ?>
                                  </div>
                                  </a>
                              </div>
                              </div>
                            </div>
                      <?php }?>
                    </div>
                </div>
                  

