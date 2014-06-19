<?php	?>
<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css" />
<title>Assembler Couture | Staff Login</title>

</head>
<body>

<div id="templatemo_header"></div>
	<div class="wrapper cf">
		<div id="site_title"><h1><a href="index.php"><img src='images/aclogo.png'></a></h1></div>
		<!--The Assembler -->
		<div class="cleaner"></div>
	</div>

<div id="templatemo_main" style="padding-top:70px;">
	<h2>Staff Login</h2>
		<br>
			<form name="login" method="post" action="verify.php">
			
				<label>Username:</label>
					<input type="text" name="username">
				<br><br>
				
				<label>Password:</label>
					<input type="password" name="password">
				<br><br>

				<input type="submit" value="Login"><input type="reset" value="Reset">
				
			</form>
</div>	

</body>
</html>