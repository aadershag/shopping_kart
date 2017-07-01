<div class="cart-block">
            <form action="cart/update" method="post">
            <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
              <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align: right">Item Price</th>
                <th style="text-align: right">Total Price</th>
              </tr>
            
                  <?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>
        
        <?php echo form_hidden($i.'[rowid]',$items['rowid']); ?>

        <tr>
                <td style="color: black"><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right">Rs.<?php  echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">Rs.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>
                
                <tr>
                <td>
                  <br>
                </td>
                </tr>

                <td class="right"><strong>Total</strong></td>
                <td>
                <td>
                <td class="right" style="text-align:right">Rs.<?php echo $this->cart->format_number($this->cart->total()); ?></td>
              
            </table>
            <br>
            <br>
            <p style="text-align: center"><button class="btn btn-default"  href="<?php echo base_url();?>index.php/cart/update" type="submit">Update Cart</button>
            <a href="<?php echo base_url();?>index.php/products/cart" class="btn btn-default" type="submit">Go To Cart</a></p>
            </form>
          
          </div>
          <div class="panel panel-default panel-list">
            <div class="panel-heading panel-heading-dark">
              <h3 class="panel-title">Categories</h3>
            </div>
              <ul class="list-group">
              <?php foreach(get_categories_h() as $category): ?>
               <li class="list-group-item"><a href="<?php echo base_url();?>index.php/products/category/<?php echo $category->id; ?>"><?php echo $category->name;?></a></li>
             <?php endforeach; ?>
            </ul>
        </div>
        <div class="panel panel-default panel-list">
            <div class="panel-heading panel-heading-dark">
              <h3 class="panel-title">Most Popular</h3>
            </div>
              <ul class="list-group">
               <?php foreach(get_popular_h() as $popular): ?>
                <li class="list-group-item"><a href="<?php echo base_url(); ?>index.php/Products/details/<?php echo $popular->id; ?>"><?php echo $popular->title; ?></a></li>
              <?php endforeach; ?>
            </ul>
        </div>