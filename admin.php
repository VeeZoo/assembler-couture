<?php
// Verify user is logged in
session_start();

if (!isset($_SESSION["username"])) {
	header('Location: staff.php');
	exit; 
}
?>

<html>
<head>

	<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="icon" type="image/png" href="favicon.png">
<script type="text/javascript">
// Define INSERT function
	function sqlInsert() {
		var xmlHttp;
		try {
// Check browser compatibility
			xmlHttp=new XMLHttpRequest();
		} catch (e) {
			try {
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
// If not compatible, failure
					alert("Your browser does not support AJAX!");
					return false;
				}
			}
		 }
// Get response from server		
		xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState==4) {
				document.getElementById("returnedTable").innerHTML=xmlHttp.responseText;
			}
		}

// Create variable names for the form input names and values

// Set PRODUCT ID to the name and value of the first form input and URL encode it
		var id = document.getElementById('prod_id').value;
		id = escape(id);

		var idName = document.getElementById('prod_id').name;
		idName = escape(idName);
		
// Set first part of query to name=value form
		var insert1 = idName + '=' + id;
		  
// Set PRODUCT GENDER to the name and value of the second form input and URL encode it
		var gender = "";
		var radios = document.getElementsByName("sentGender");

		if (radios[0].checked) {
			gender = radios[0].value;
		} else if (radios[1].checked) {
			gender = radios[1].value;
		} else {
			alert('No gender selected.');
		}

		gender = escape(gender);

		var genderName =  document.getElementById('prod_gender').name;
		genderName = escape(genderName);
		
// Set second part of query to name=value form
		var insert2 = genderName + '=' + gender;
		  
// Set PRODUCT TYPE to the name and value of the third form input and URL encode it
		var type = document.getElementById('prod_type').value;
		type = escape(type);

		var typeName =  document.getElementById('prod_type').name;
		typeName = escape(typeName);
		  
// Set third part of query to name=value form
		var insert3 = typeName + '=' + type;
		
// Set PRODUCT STYLE to the name and value of the third form input and URL encode it
		var style = document.getElementById('prod_style').value;
		style = escape(style);

		var styleName =  document.getElementById('prod_style').name;
		styleName = escape(styleName);
		  
// Set fourth part of query to name=value form
		var insert4 = styleName + '=' + style;
		
// Set PRODUCT COLOR to the name and value of the third form input and URL encode it
		var color = document.getElementById('prod_color').value;
		color = escape(color);

		var colorName =  document.getElementById('prod_color').name;
		colorName = escape(colorName);
		  
// Set fifth part of query to name=value form
		var insert5 = colorName + '=' + color;
		  
// String the queries together 
		var request = insert1 + '&' + insert2 + '&' + insert3 + '&' + insert4 + '&' + insert5;
		  
// Open the connection and create the URL as a POST
		xmlHttp.open("POST","insert.php", true);
		  
// Set the content type so the server knows how to get data
		xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		
// Send the data
		xmlHttp.send(request);
	}


// Define DELETE function
	function sqlDelete() {
		var xmlHttp;
		try {
// Check browser compatibility
			xmlHttp=new XMLHttpRequest();
		} catch (e) {
			try {
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
// If not compatible, failure
					alert("Your browser does not support AJAX!");
					return false;
				}
			}
		 }
// Get response from server		
		xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState==4) {
				document.getElementById("returnedTable").innerHTML=xmlHttp.responseText;
			}
		}

// Create variable names for the form input names and values

// Set PRODUCT ID to the name and value of the first form input and URL encode it
		var deleteId = document.getElementById('del_prod_id').value;
		deleteId = escape(deleteId);

		var deleteIdName = document.getElementById('del_prod_id').name;
		deleteIdName = escape(deleteIdName);
		
// Set first part of query to name=value form
		var delete1 = deleteIdName + '=' + deleteId;
		  
// String the queries together 
		var request = delete1;
		  
// Open the connection and create the URL as a POST
		xmlHttp.open("POST","delete.php", true);
		  
// Set the content type so the server knows how to get data
		xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		
// Send the data
		xmlHttp.send(request);
	}
	
	
// Define SHOW DATABASE function
	function showDB() {
		var xmlHttp;
		try {
// Check browser compatibility
			xmlHttp=new XMLHttpRequest();
		} catch (e) {
			try {
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
// If not compatible, failure
					alert("Your browser does not support AJAX!");
					return false;
				}
			}
		 }
// Get response from server		
		xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState==4) {
				document.getElementById("returnedTable").innerHTML=xmlHttp.responseText;
			}
		}
		  
// Open the connection and create the URL as a POST
		xmlHttp.open("POST","database.php", true);
		  
// Set the content type so the server knows how to get data
		xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		
// Send the data
		xmlHttp.send(null);
	}
</script>

<style type="text/css">
fieldset {
	padding: 10px;
	border: 2px solid silver;
}

fieldset legend {
    background: #333;
    color: #fff;
    padding: 2px 5px ;
    font-size: 12px;
    border-radius: 5px;
    box-shadow: 0 0 0 2px silver;
    margin-left: 20px;
}

table {
    border: 2px solid gray;
	border-collapse: separate;
}

td {
    padding: 2px;
	border: 1px solid silver;
}
</style>
	
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

	<h2>Admin Page</h2>
	
	<a href="logout.php">Logout</a>
	<br><br>

<!-- Get the input values to be sent to the server -->	
<fieldset>
	<legend>Add an Item to the Catalogue</legend>

	<form>

		<label>Product ID:</label> &emsp; 199<input type="text" id="prod_id" name="sentId">X (omit store code & size code) &emsp;

		<label>Gender:</label>	<input type="radio" id="prod_gender" name="sentGender" value="Mens"> Mens
								<input type="radio" id="prod_gender" name="sentGender" value="Womens"> Womens &emsp;
								
	<br><br>
	
		<label>Product Type:</label>	<input type="text" id="prod_type" name="sentType"> &emsp;

		<label>Product Style:</label>	<input type="text" id="prod_style" name="sentStyle"> &emsp;
		
		<label>Product Color:</label>	<input type="text" id="prod_color" name="sentColor"> &emsp;
		
	<br><br>
	
<!-- Create a button that, when clicked, will run the above JavaScript AJAX function -->
	<input value="Submit" onclick="sqlInsert()" type="button">
	<input type="reset" value="Reset">

	</form>
</fieldset>
<br>
<fieldset>
	<legend>Remove an Item from the Catalogue</legend>

	<form>

		<label>Product ID:</label> &emsp; 199<input type="text" id="del_prod_id" name="removeID">X (omit store code & size code)
		
	<br><br>
	
<!-- JavaScript AJAX DELETE function -->
	<input value="Submit" onclick="sqlDelete()" type="button">
	<input type="reset" value="Reset">

	</form>
</fieldset>

<!-- Create a named space that will be used to put the table returned from the server -->
<br>
DATABASE: <input value="Show Current" onclick="showDB()" type="button">
<br>
<div id="returnedTable" style="float: left;"></div>

</div>

</body>
</html>