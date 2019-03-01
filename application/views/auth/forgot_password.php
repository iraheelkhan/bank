<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Forget Password
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
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity,'','class="form-control" placeholder="Enter your email"');?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn btn-primary"');?></p>

<?php echo form_close();?>
  </div>
          </div>
        </div>
      </div>
      
    </div>
