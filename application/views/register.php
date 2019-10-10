<div class="container">
        <div class="panel panel-default"  style="padding:5px; ">
      <div class="panel-heading"style="color:white center; text-align:center;"> Register  </div>
      <div class="panel-body"> 
          <div class="col-md-3 col-sm-2">
          </div>
          <div class="col-md-6 col-sm-8 col-xs-12">
            <form method="POST" action="<?php echo base_url();?>users/register">
              <div class="form-group">
                <span style="color:red"><?php echo form_error('fname'); ?></span>
                <label for="fname">First Name*</label>
                <input type="text" name="fname" value="<?php echo set_value('fname'); ?>" class="form-control" id="email">
              </div>

              <div class="form-group">
                <span style="color:red"><?php echo form_error('lname'); ?></span>
                <label for="lname">Last Name*</label>
                <input type="text" name="lname" value="<?php echo set_value('lname'); ?>" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <span style="color:red"><?php echo form_error('email'); ?></span>
                <label for="email">Email Address*</label>
                <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <span style="color:red"><?php echo form_error('username'); ?></span>
                <label for="username">Choose Username*</label>
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <span style="color:red"><?php echo form_error('password1'); ?></span>
                <label for="pwd">Password*</label>
                <input type="password" name="password1" value="<?php echo set_value('password1'); ?>" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <span style="color:red"><?php echo form_error('password2'); ?></span>
                <label for="pwd">Confirm Password*</label>
                <input type="password" name="password2" value="<?php echo set_value('password2'); ?>" class="form-control" id="pwd">
              </div>
              <button type="submit" name="register" class="btn btn-primary">Register</button>
            </form>
          </div>
          <div class="col-md-3 col-sm-2">
          </div>
      </div>
        </div>
        <hr id="about">
    </div>
