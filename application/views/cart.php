
<?php if($this->cart->contents()): ?>
      <div style="display:inline-block" class="container row">
      <div class="col-md-12">
        <div class=" panel panel-default"  style="padding:5px; ">
            <div class="panel-heading"style="color:white center; text-align:center;">CART  </div>
              <div class="panel-body"> 
                  <div class="row">
                      <div class="col-md-3 ">
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">



                        <form method="POST" action="<?php echo base_url();?>cart">
                          <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>QUANTITY</th>
                                  <th>PRODUCT</th>
                                  <th style="text-align:right;"> PRICE </th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 0;?> 
                                      <?php foreach($this->cart->contents() as $items):?>
                                      <tr>
                                        <td>
                                          <input type="number" style="width:35px;" name="<?php echo $i ;?>qty" min="1" value="<?php echo $items['qty'];?>" placeholder="QTY"/>
                                           <input type="hidden" name="<?php echo $i ;?>rowid" value="<?php echo $items['rowid'];?>"/>
                                        </td>
                                        <td>
                                          <?php echo $items['name'];?>
                                        </td>
                                        <td style="text-align:right">
                                          NGN <?php echo $this->cart->format_number($items['price']);?>
                                        </td>
                                        <td> 
                                          <a class="btn btn-danger" href="<?php echo base_url();?>cart/remove/<?php echo $items['rowid'];?>" > remove</button>
                                        </td>
                                      </tr>
                                        
                            
                                      <?php $i++;?>
                                    <?php endforeach ;?>
                                    
                                    <tr>
                                      
                                    </tr>
                                    <tr>
                                     
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td><strong>Total</strong></td>
                                      <td style="text-align:right;">NGN <?php echo $this->cart->format_number($this->cart->total());?></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                     <td>
                                          <input type="submit" class="btn btn-primary" formmethod="POST" formaction="<?php echo base_url()."cart/update/".$i;?>" value="Update">
                                      </td>
                                    <td></td>
                                      <td> 
                                          <a class="btn btn-danger" href="<?php echo base_url();?>cart/clear_cart"> Clear</a>
                                      </td>
                                          
                                     <td></td>
                                      
                                    </tr>
                              </tbody>
                          </table>
                          <?php if(isset($locy) ){
                             echo $locy;
                           }?>
                          <div>
                            <br><br>
                              <?php if($this->session->userdata('logged_in')):?>
                              <h3 style="color:#435761;"> BILLING ADDRESS </h3>
                              <br>
                                <div style="color:red;" id="error_mail"> </div>
                                
                                <span style="color:red"><?php echo form_error('email'); ?></span>
                                <div class="input-group">
                                  <span class="input-group-addon">Email</span>
                                  <input type="email" id="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="email" >
                                </div>
                                <br>
                                <div style="color:red;" id="error_num"> </div>
                                 <span style="color:red"><?php echo form_error('phone'); ?></span>
                                  <div class="input-group">
                                  <span class="input-group-addon">Phone Number</span>
                                  <input type="text" id="pnumber" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="phone" >
                                </div>
                                <br>
                                <div style="color:red;" id="error_add"> </div>
                                
                              <input type='hidden' name='card_holder_name' value="<?php echo ($this->session->userdata('firstname').' '.$this->session->userdata('lastname'));?>"  />
                                <span style="color:red"><?php echo form_error('address'); ?></span>
                                <div class="input-group">
                                  <span class="input-group-addon">Address</span>
                                  <input id="address" type="text" class="form-control" value="<?php echo set_value('address'); ?>"name="address" placeholder="Address" >
                                </div>
                                  <br>
                                  <span style="color:red"><?php echo form_error('address2'); ?></span>
                                <div class="input-group">
                                  <span class="input-group-addon">Address2</span>
                                  <input   type="text" class="form-control" value="<?php echo set_value('address2'); ?>" name="street_address2" placeholder="Alternative Address">
                                </div>
                                  <br>
                                  <span style="color:red"><?php echo form_error('city'); ?></span>
                                <div class="input-group">
                                  <span class="input-group-addon">city</span>
                                  <input type="text" class="form-control" value="<?php echo set_value('city'); ?>" name="city" placeholder="city" >
                                </div>
                                  <br>
                                  <span style="color:red"><?php echo form_error('state'); ?></span>
                                <div class="input-group">
                                  <span class="input-group-addon">state</span>
                                  <input type="text" class="form-control" name="state" value="<?php echo set_value('state'); ?>" placeholder="ctate" >
                                </div>
                                  <br>
                                  <span style="color  :red"><?php echo form_error('zip'); ?></span>
                                <div class="input-group">
                                  <span class="input-group-addon">Zipcode</span>
                                  <input type="text" class="form-control" name="zip" value="<?php echo set_value('zip'); ?>" placeholder="zipcode" >
                                </div>
                                  <br>
                                  <div class="input-group">
                                  <span class="input-group-addon">country</span>
                                  <input type="text" class="form-control" name="country" value="<?php echo set_value('country'); ?>" placeholder="country" >
                                </div>
                                
                                <br>
                                <input type="submit" class="btn btn-danger btn-lg"  style="margin-left: 39%; cursor:pointer;" value="Pay Now" id="submit"><br>
                                
                        </form>
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog" style="background-color:#2e6da4;top:100px;" >
                          
                            <!-- Modal content-->
                            <div class="modal-content" style="background-color:#2e6da4;">
                              <div class="modal-header" style="text-align:center; padding: 0px; border-bottom:none;" id="mod"> 
                               
                                  <buton type="submit" style="width:100%;" id="mods" class="btn btn-primary btn-lg"> CONTINUE </button>  
                                   
                              </div>
                            </div>
                            
                          </div>
                        </div>

                        <script type="text/javascript">
                          var elmscript = document.createElement('script');
                          elmscript.src = 'https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js';
                          elmscript.type = 'text/javascript';
                          document.getElementsByTagName('head')[0].appendChild(elmscript);
                        </script>
                        <script>
                              document.addEventListener("DOMContentLoaded", function(event) {
                              document.getElementById("mods").addEventListener("click", function(e){
                              
                              var PBFKey = "FLWPUBK-048265af51087277d246c2d50b3e4237-X";
                              var x = getpaidSetup({
                                    PBFPubKey: PBFKey,
                                    customer_email: "<?php echo $email ; ?>",
                                    customer_firstname:" <?php echo ($this->session->userdata('firstname')) ;?>",
                                    customer_lastname: "<?php echo ($this->session->userdata('lastname')) ;?>",
                                    custom_description: "pay internet",
                                    custom_logo: "https://res.cloudinary.com/dkbfehjxf/image/upload/v1511542310/Pasted_image_at_2017_11_09_04_50_PM_vc75kz.png",
                                    custom_title: "Gadgeteer Checkout",
                                    amount: <?php echo ($this->cart->total()) ;?>,
                                    customer_phone: "<?php echo $phone;?>",
                                    country: "NG",
                                    currency: "NGN",
                                    //redirect_url: "",
                                    payment_method: "both",
                                    txref: "rave-123456",

                                    meta: [{metaname:"flightID", metavalue: "AP1234"},{metaname:"address", metavalue:"<?php echo $address;?>"},{metaname:"products",
                                      metavalue:"<?php foreach($this->cart->contents() as $items):?>
                                        <?php echo( $items['qty'] ) ;?>
                                        <?php echo( $items['name']);?>
                                        <?php echo("-"); ?>
                                      <?php endforeach ;?>
                                      "}],
                                    //integrity_hash: "<ADD YOUR INTEGRITY HASH HERE>",
                                    onclose: function() {},
                                    callback: function(response) {
                                      var flw_ref = response.tx.flwRef; // collect flwRef returned and pass to a          server page to complete status check.
                                      console.log("This is the response returned after a charge", response);
                                      if (
                                        response.tx.chargeResponseCode == "00" ||
                                        response.tx.chargeResponseCode == "0"
                                      ) {
                                        // redirect to a success page
                                      } else {
                                        // redirect to a failure page.
                                      }
                                      x.close();
                                    }
                                  });
                                  jq(document).ready(function(){
                                    jq("#myModal").modal("hide");
                                  }); 
                                });
                              });
                            
                              
                          </script>
   

                              <div>
                                <?php else:?>
                                  <div style="text-align: center;">
                                     <div style="text-align: center; color:red">
                                        <strong> You have to login to make a purchase </strong>
                                      </div>
                                        <button class="btn btn-primary" formaction="<?php echo base_url()?>/users/register" style="border-radius:5px;" > 
                                          Sign Up Now
                                        </button>                        
                                  </div>
                                <?php endif; ?>
                             </div>
                            <br>
                            </div>

                        



                      </div>
                      <div class="col-md-3 ">
                      </div>
                  </div>
            </div>
        </div>
      </div>
    </div>
<?php else: ?>
  <p style="text-align:center"> There is no item in your cart </p>
<?php endif;?>
