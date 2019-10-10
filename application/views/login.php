<?php if($this->session->flashdata('registered')):?>
  <div style="text-align:center;"class="alert alert-success">
   <?php echo $this->session->flashdata('registered');?>
  </div>
<?php endif;?>
  
<div class="container">
      <div class="container">
        <div class="panel panel-default"  style="padding:5px; ">
      <div class="panel-heading"style="color:white center; text-align:center;"> Login  </div>
      <div class="panel-body"> 
          <div class="col-md-3 col-sm-2">
          </div>
          <div class="col-md-6 col-sm-8 col-xs-12">
            <form method="POST" action="<?php echo base_url();?>users/login">
            <?php if($this->session->flashdata('fail_login')):?>
              <div style="text-align:center;"class="alert alert-danger">
               <?php echo $this->session->flashdata('fail_login');?>
              </div>
            <?php endif; ?>
              <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" name="username" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="password" class="form-control" id="pwd">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
          <div class="col-md-3 col-sm-2">
          </div>
      </div>
    </div>    
  </div>
  </div>
