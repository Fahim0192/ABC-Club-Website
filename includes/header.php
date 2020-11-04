<?php
 if(!isset($_SESSION)) 
 { 
	 session_start(); 
 }

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ABC Club</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" />
		<!-- Site Icons -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		
	</head>

    <body class="is-preload">
    
   <div id="page-wrapper">
   <div class="login-logout">
   <?php if(!isset($_SESSION['login'])) { ?>
	<a href="login.php">Login</a>
	<?php } else { ?>
	<a href="logout.php">Logout</a> |
	<a href="myfitness.php">myfitness</a>
	<?php  }?>

</div>
   