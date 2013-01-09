<! DOCKTYPE HTML>
<html lang= "en-US">
<head>
	<title><?php echo $title ?> </title>
	<script src="<?php echo base_url('/js/jquery-1.8.3.min.js') ?>"></script>
	<script src="<?php echo base_url('/js/onload.js') ?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>">
	<!-- script to enable the back history button for improved navigation-->
	<script> function goBack() {window.history.back()} </script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>
body {background-color:FFB608;}
h2 {font-color:white;}

</style>
</head>
<body>
<center>


<!-- back button -->
<input class="btn btn-inverse" type="button" value="Back" onclick="goBack()">

<!--home button -->
<a href="<?php echo site_url('homepage') ?>">
<button class="btn btn-warning">
HOME</button></a>

<!-- search button-->
<a type="button" href="<?php echo site_url('find') ?>">
<button class="btn btn-warning">
Search</button></a>

<!-- if statment -->
<?php if (!$this->session->userdata('validated')):?>

<a href="<?php echo site_url('login') ?>">
<button class="btn btn-warning">
Login</button></a>
<?php else : ?>

<a href="<?php echo site_url('homepage/do_logout') ?>">
<button class="btn btn-warning">
Logout</button></a>
<?php endif; ?>
