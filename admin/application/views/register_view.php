<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Register || Airlines Management System </title>
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
			<li ><a href="<?php echo site_url();?>/login">Login</a></li>
			<li class="active"> <a href="<?php echo site_url();?>/register">Sign Up</a></li>
		</div>
	</div>
</div>
</hr>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"registerform",
				"name"=>"registerform");
				echo form_open("register/index",$attributes);
			?>
			<fieldset>
				<legend>Register</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="register_username" class="control-label">Username</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="register_username" name="register_username"
							placeholder="Username" type="text" value="<?php echo set_value('register_username');?>" />
							
							<span class="text-danger"><?php echo form_error('register_username'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="register_password" class="control-label">Password</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="register_password" name="register_password"
							placeholder="Password" type="password" value="<?php echo set_value('register_password');?>" />
							
							<span class="text-danger"><?php echo form_error('register_password'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="register_password_conf" class="control-label">Confirm Pass</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="register_password_conf" name="register_password_conf"
							placeholder="Password" type="password" value="<?php echo set_value('register_password_conf');?>" />
							
							<span class="text-danger"><?php echo form_error('register_password_conf'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="register_email" class="control-label">Email Address</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="register_email" name="register_email"
							placeholder="Email" type="text" value="<?php echo set_value('register_email');?>" />
							
							<span class="text-danger"><?php echo form_error('register_email'); ?></span>
						</div>
					</div>
				</div>
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_register" name="btn_register"
							type="submit" value="Register" />
						
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