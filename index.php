<?php
error_reporting(0);
session_start();
if(isset($_SESSION[userid])){
	header("Location: dashboard");
}
include 'config-root.php';


?>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Mobile Groomer</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.15.10/dev/polyfiller.js"></script>
        <script type="text/javascript" src="js/initialiseWebshim.js"></script>
		<script src="js/addFields.js"></script>
		<script src="js/login.js"></script>

	</head>
	<body>
		<?php include 'header.php';
		include 'register.php';
		include 'login.php';?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 home-video" >
					<!--<iframe width="100%" height="75%"  src="https://www.youtube.com/embed/XNiHNnz30zU" frameborder="0" allowfullscreen></iframe>-->					
					<img src="images/banner1.jpg" style="width:100%">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-12" style=" text-align:center;">
					<a href="features/"><button class="btn btn-default">Lets get started</button></a>
				</div>
			</div>
		</div>
		<p>&nbsp;</p>
		</div>
		<p>&nbsp;</p>
		<?php include 'footer.php';?>
	</body>
</html>	