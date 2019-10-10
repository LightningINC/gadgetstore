      <div class="container">
        <div class="panel panel-default"  style="padding:5px; ">
      <div class="panel-heading"style="color:white center; text-align:center;"> <?php echo $products->title;?>  </div>
      <div class="panel-body"> 
          <div class="col-md-5 col-sm-8">
            <div class="w3-container">
            <div class="w3-display-container">
              <img src="<?php echo base_url();?>assets/images/<?php echo $products->image; ?>" style="width:100%">
            </div>
            
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div style="text-align:center;"> 
                <div class="row">
                  <div style="padding:10px;" class="col-md-12 col-sm-12 col-xs-6">
                    <img src="<?php echo base_url();?>assets/images/<?php echo $products->image; ?>" style="width:135px; height:150px;">
                  </div>
                  <div style="padding:10px;" class="col-md-12 col-sm-12 col-xs-6">
                    <img src="<?php echo base_url();?>assets/images/<?php echo $products->image; ?>" style="width:135px; height:150px;">
                  </div>                  
                </div>
            </div>
        </div>
        <div class="col-md-5">
          <div>
          <br>
          <p style="text-align:center;" class="product_title"><strong><?php echo $products->title;?></strong><br></p>
          <p style="text-align:center;" class=""><b class="amount">NGN <?php echo $this->cart->format_number($products->price);?></b></p>
            <p style="text-align:center;"><?php echo $products->description;?></p>
          </div>
          <div style="text-align:center;">
          <br>
           <p> 
           <form method="POST" action="<?php echo base_url();?>cart/add">
              <input type="hidden" name="item_number" value="<?php echo $products->id ;?>"/>
              <input type="hidden" name="title" value="<?php echo $products->title ;?>"/>
              <input type="hidden" name="price" value="<?php echo $products->price ;?>"/>
              <div style="display:inline-flex; padding:5px;">
                <input id="msg" type="number" style="width:70px;" value="1" class="form-control" name="qty" placeholder="QTY"/> 
                  <button class="btn btn-primary" style="border-radius:0;" type="submit"> 
                    add to Cart
                  </button>
                 </div>
            </form>
            </div>

        </div>
        
      </div>
        </div>



      <hr id="about">
    </div>