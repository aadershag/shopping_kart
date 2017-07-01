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
            <script>
                function myFunction() {
                    alert("Please log in!");
                    }
            </script>
            <p style="text-align: center"><button class="btn btn-default"  href="<?php echo base_url();?>index.php/cart/update" type="submit">Update Cart</button>
            <a href="<?php echo base_url();?>index.php/products/cart" class="btn btn-default" type="submit">Go To Cart</a></p>
            <?php if(!$this->session->userdata('logged_in')):?>
                <p style="text-align: center"><a class="btn btn-default" onclick="myFunction()">Place Order</a></p>
            <?php else: ?>
                 <p style="text-align: center"><a href="<?php echo base_url();?>index.php/users/order" class="btn btn-default" type="submit">Place Order</a></p>
            <?php endif;?>
            </form>
          
          </div>