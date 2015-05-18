<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>login || Airlines Management System </title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-sm-6">
			<h1>Airlines Management System</h1>
		</div>
		<div class="col-lg-6 col-sm-6">
			<ul class="nav nav-pills pull-right" style="margin-top:20px;">
			<li class="active"><a href="<?php echo site_url();?>/login">Login</a></li>
			<li> <a href="<?php echo site_url();?>/register">Sign Up</a></li>
		</div>
	</div>
</div>
</hr>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"loginform",
				"name"=>"loginform");
				echo form_open("login/index",$attributes);
			?>
			<fieldset>
				<legend>Login</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="login_username" class="control-label">Username</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="login_username" name="login_username"
							placeholder="Username" type="text" value="<?php echo set_value('login_username');?>" />
							
							<span class="text-danger"><?php echo form_error('login_username'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="login_password" class="control-label">Password</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="login_password" name="login_password"
							placeholder="Password" type="password" value="<?php echo set_value('login_password');?>" />
							
							<span class="text-danger"><?php echo form_error('login_password'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-default" id="btn_login" name="btn_login"
							type="submit" value="Login" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>

</html>