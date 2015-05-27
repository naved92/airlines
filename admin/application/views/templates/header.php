<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $title?>|| Airlines Management System </title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
        <li><a href="<?php echo site_url('Home')?>">Home <span class="sr-only">(current)</span></a></li>
        
		
		
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Locations <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('Location')?>">Locations Home <span class="sr-only">(current)</span></a></li> 
		    <li><a href="<?php echo site_url('Location/add_location')?>">Add Location</a></li>
			<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Airports <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('Airport')?>">Airports Home <span class="sr-only">(current)</span></a></li> 
		    <li><a href="<?php echo site_url('Airport/add_airport')?>">Add Airport</a></li>
			<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Flights <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('Flight')?>">Flights Home <span class="sr-only">(current)</span></a></li> 
		    <li><a href="<?php echo site_url('Flight/add_flight')?>">Add Flight</a></li>
			<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Flight Schedule <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('Flightschedule')?>">Flight Schedule Home <span class="sr-only">(current)</span></a></li> 
		    <li><a href="<?php echo site_url('Flightschedule/add_flightschedule')?>">Add Flight Schedule</a></li>
			<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Airplane Model<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('airplane_model')?>">Airplane Model Home <span class="sr-only">(current)</span></a></li> 
		    <li><a href="<?php echo site_url('airplane_model/add_airplane_model')?>">Add Airplane Model</a></li>
			<!--- <li class="divider"></li> -->
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Airplane<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('airplane')?>">Airplane Home <span class="sr-only">(current)</span></a></li> 
		    <li><a href="<?php echo site_url('airplane/add_airplane')?>">Add Airplane</a></li>
			<!--- <li class="divider"></li> -->
          </ul>
        </li>

    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Seat Class<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('seat_class')?>">Seat Class Home <span class="sr-only">(current)</span></a></li> 
        <li><a href="<?php echo site_url('seat_class/add_seat_class')?>">Add Seat Class</a></li>
      <!--- <li class="divider"></li> -->
          </ul>
    </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Seat<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('seat')?>">Seat Home <span class="sr-only">(current)</span></a></li> 
		    <li><a href="<?php echo site_url('seat/add_seat')?>">Add Seat</a></li>
			<!--- <li class="divider"></li> -->
          </ul>
    </li>

    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fare Type<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('fare_type')?>">Fare Type Home <span class="sr-only">(current)</span></a></li> 
        <li><a href="<?php echo site_url('fare_type/add_fare_type')?>">Add Fare Type</a></li>
      <!--- <li class="divider"></li> -->
          </ul>
    </li>
		
		
		</ul>
      
      </div><!-- /.navbar-collapse -->
	  
  </div><!-- /.container-fluid -->
</nav>


  