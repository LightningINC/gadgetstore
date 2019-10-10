<!DOCTYPE html>
<html>
<title>Gadget Store</title>

<!-- Mirrored from www.w3schools.com/w3css/tryw3css_templates_food_blog.htm by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2017 15:47:02 GMT -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/w3.css">
<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">


<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"> </script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/myscript.js"> </script>

<script>
  <?php if($validated):?>    
    var jq = jQuery.noConflict();
    jq(document).ready(function(){
            jq("#myModal").modal("show");
    });
  <?php endif;?>
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-sidenav a {padding:20px}
.panel-default{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)!important;
}
.product_tile:hover{
      box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
}
</style>
<body  class="container">


<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#435761; color:#fff;">
  <div class="container-fluid">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a style="color:white;"class="navbar-brand headd" href="<?php echo base_url();?>">Gadget Store</a>
    </div>
    
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li> <a href="<?php echo base_url();?>products/category/1"> Phones </a> </li>
          <li> <a href="<?php echo base_url();?>products/category/2"> Laptops </a> </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          <li><a class="new_nav"  href="<?php echo base_url();?>cart"><span class="fa fa-shopping-cart"></span> Cart <span style="background:#F71640!important; " id="cart_item_number" class="badge"><?php echo $this->cart->total_items() ;?></span> </a></li>
          
            <?php if(!$this->session->userdata('logged_in')):?>
          <li><a class="new_nav" href="<?php echo base_url();?>users/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a class="new_nav"  href="<?php echo base_url();?>users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php else:?>
          <li><a style="color:#fff; font-family:cursive;" href=""> Welcome <?php echo $this->session->userdata('username');?>,</a></li>
          <li> <a class="new_nav"  href="<?php echo base_url();?>users/logout">logout</a></li>
            <?php endif;?>

        </ul>   
  </div>
</nav>


</div>
  
<!-- !PAGE CONTENT! -->
<div class="container" style="max-width:100%;margin-top:75px">
    <div style="max-width:1200px align="center" ">
      <div class="container">
        <div class="row">
        <?php if($this->session->flashdata('paid')):?>
          <div style="text-align:center;"class="alert alert-success">
          <?php echo $this->session->flashdata('paid');?>
          </div>
        <?php endif;?>