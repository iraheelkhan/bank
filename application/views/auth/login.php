<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Bank
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?php $this->load->view('inc/headerscripts') ?>

    </head>

<body class="">
  <div class="wrapper ">
    <div class="main-panel">
      <!-- Navbar -->
        
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">-
            <div class="col-md-5 offset-2">
              <h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>
  

  <div class="form-group ">
    <?php echo lang('login_identity_label', 'identity', 'class=""');?>
    <?php echo form_input($identity, '', 'class="form-control" placeholder="Enter email or username"');?>
  </div>

  <div class="form-group ">
    <?php echo lang('login_password_label', 'password', 'class="bmd-label-floating"');?>
    <?php echo form_input($password, '', 'class="form-control" placeholder="Enter your password"');?>
  </div>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="form-control btn btn-primary"');?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
