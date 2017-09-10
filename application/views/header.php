<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Student Management</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/sidebar.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>" />
	<script src="<?php echo base_url("assets/js/ajax.js"); ?>" /></script>
	<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>" /></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>" /></script>
	<script src="<?php echo base_url("assets/js/search.js"); ?>" /></script>
	<style type="text/css">
		.active{ 
		    background-color: #92BABB;
		}
		body {
		    background-color: #D9DEE0;
		}
	</style>
</head>
<body>

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="<?php echo site_url('home') ?>" class="w3-bar-item w3-button active">Student Management</a>
  <a href="#" class="w3-bar-item w3-button">Courses</a>
  <a href="#" class="w3-bar-item w3-button">Logout</a>
</div>
