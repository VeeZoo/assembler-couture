<?php 
session_start();
session_unset();
session_destroy(); 
?>
<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css" />
<title>Assembler Couture | Logged Out</title>

</head>
<body>

<div id="templatemo_header"></div>
	<div class="wrapper cf">
		<div id="site_title"><h1><a href="index.php"><img src='images/aclogo.png'></a></h1></div>
		<!--The Assembler -->
		<div class="cleaner"></div>
	</div>

<div id="templatemo_main" style="padding-top:70px;">

	<h2>You have successfully logged out.</h2><br>
	
	<a href="index.php"> Back to Store </a>

</div>
</html>