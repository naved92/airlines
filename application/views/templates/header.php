<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $title;?>|| Airlines Management System </title>
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
			<li class="active"><a href="<?php echo site_url();?>/logout">Logout</a></li>
		
		</div>
	</div>
</div>
</hr>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-home">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
      </button>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-home">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('home')?>">Home <span class="sr-only">(current)</span></a></li>
        
		<li><a href="<?php echo site_url('find_route/index')?>">Find Route <span class="sr-only">(current)</span></a></li> 
			
		
		</ul>
      
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	