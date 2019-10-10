	
<?php foreach($products as $product):?>
        <div class="product_tile col-md-3 col-sm-6 col-xs-12">
          <div class="prod-image"><a href="<?php echo base_url();?>products/details/<?php echo $product->id; ?>"><img src="<?php echo base_url();?>assets/images/<?php echo $product->image; ?>" style="width:100%"></a></div>
          <div class="product_title"><strong> <?php echo $product->title; ?></strong></div>
          <div class="amount">NGN <?php echo $this->cart->format_number($product->price); ?> </div>
          <div class="cartt">
          	<form class="addCart" id="add_cart" method="POST" action="<?php echo base_url();?>cart/add">
          		<input type="hidden" name="item_number" value="<?php echo $product->id?>"/>
          		<input type="hidden" name="price" value="<?php echo $product->price?>"/>
          		<input type="hidden" name="title" value="<?php echo $product->title?>"/>
          		<div style="display:inline-flex; padding:5px;">
	          		<input id="msg" type="number" name="qty" min="1" style="width:70px;" value="1" class="form-control" placeholder="QTY"/> 
	                <button class="btn btn-primary" style="border-radius:0;" type="submit"> 
	                	add to Cart
                 	</button>
                 </div>
          	</form>
          </div>
        </div> 
<?php endforeach; ?>
</div>
<?php if((base_url() == current_url()) || (current_url() == base_url()."products/page/1") ) :?>
	<div style="margin:10px; text-align:center; padding:5px;">
		<ul class="pagination pagination-lg">
	  <li><a href="<?php echo base_url();?>">1</a></li>
	  <li><a href="<?php echo base_url();?>products/page/1">2</a></li>
		</ul>
	</div>
<?php endif;?>
<div>



