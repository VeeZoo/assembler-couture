<?php
// Verify user is logged in
	session_start();
	if (!isset($_SESSION["username"])) {
		header('Location: staff.php');
		exit; 
	}

// URL decode the received data and assign them to variables
	$sentId = urldecode($_REQUEST['sentId']);
	$sentGender = urldecode($_REQUEST['sentGender']);
	$sentType = urldecode($_REQUEST['sentType']);
	$sentStyle = urldecode($_REQUEST['sentStyle']); 
	$sentColor = urldecode($_REQUEST['sentColor']); 

// Clean and validate PRODUCT ID
	$string1 = htmlspecialchars(strip_tags(trim($sentId)), ENT_QUOTES);
	if(!preg_match('/^(M|W)[A-Z]\d{2}[A-Z]$/',$string1))
		die('Please follow proper product ID formatting ie. "WS01R".<br>
				First letter is the gender code ie. "M/W".<br>
				Second letter is the type code ie. any letter.<br>
				Two following numbers is the style code ie. sequential number.<br>
				Last letter is the color code ie. any letter (refer to color table).<br>
				Store code "199" and size code "S/M/L" have been added for you.');

// If checks passed, assign user input to variables
	$prodIdSml = '199'.$string1.'S';
	$prodIdMed = '199'.$string1.'M';
	$prodIdLrg = '199'.$string1.'L';
	$prodPhoto = $string1;
	$prodThumb = substr($string1, 0, 4);

// Clean and validate PRODUCT GENDER
	$string2 = htmlspecialchars(strip_tags(trim($sentGender)), ENT_QUOTES);
	if(!preg_match('/^Mens$|^Womens$/',$string2))
		die('Product gender must be "Mens" or "Womens"');

// If checks passed, assign user input to variable
	$prodGender = $string2;
		
// Clean and validate PRODUCT TYPE
	$string3 = htmlspecialchars(strip_tags(trim($sentType)), ENT_QUOTES);
	if(!preg_match('/^[A-z]{3,10}$/i',$string3))
		die('Product type must contain 3 to 10 letters.');

// If checks passed, assign user input to variable
	$prodType = ucfirst(strtolower($string3));
	
// Clean and validate PRODUCT STYLE
	$string4 = htmlspecialchars(strip_tags(trim($sentStyle)), ENT_QUOTES);
	if(!preg_match('/^[A-z]{3,12}$/i',$string4))
		die('Product style must contain 3 to 12 letters.');

// If checks passed, assign user input to variable
	$prodStyle = ucfirst(strtolower($string4));
	
// Clean and validate PRODUCT COLOR
	$string5 = htmlspecialchars(strip_tags(trim($sentColor)), ENT_QUOTES);
	if(!preg_match('/^[A-z]{3,12}$/i',$string5))
		die('Product color must contain 3 to 12 letters.');

// If checks passed, assign user input to variables
	$prodColor = ucfirst(strtolower($string5));

// 3 different queries for 3 different sizes

	$insertSml =	"INSERT INTO ".
					"fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb) ".
					"VALUES ('".$prodIdSml."','".$prodGender."','".$prodType."','".$prodStyle."','".$prodColor."','Small','".$prodPhoto."','".$prodThumb."');";
	
	$insertMed =	"INSERT INTO ".
					"fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb) ".
					"VALUES ('".$prodIdMed."','".$prodGender."','".$prodType."','".$prodStyle."','".$prodColor."','Medium','".$prodPhoto."','".$prodThumb."');";
	
	$insertLrg =	"INSERT INTO ".
					"fashion_products (product_id,prod_gender,prod_type,prod_style,prod_color,prod_size,prod_photo,prod_thumb) ".
					"VALUES ('".$prodIdLrg."','".$prodGender."','".$prodType."','".$prodStyle."','".$prodColor."','Large','".$prodPhoto."','".$prodThumb."');";


// Connect to the MySQL server using linked login/pw
	require ("../../comp199login.php");
	
// Error if cannot connect
	if (!$LinkID) {
		die('Could not connect: ' . mysql_error());
	}

// Choose the database
	mysql_select_db("c199grp05", $LinkID);

// Make inserts with user-generated queries
	$ret1 = mysql_query($insertSml, $LinkID);

	if(!$ret1) {
		die('Could not insert data: ' . mysql_error());
	}
	
	$ret2 = mysql_query($insertMed, $LinkID);

	if(!$ret2) {
		die('Could not insert data: ' . mysql_error());
	}
	
	$ret3 = mysql_query($insertLrg, $LinkID);

	if(!$ret3) {
		die('Could not insert data: ' . mysql_error());
	}

// Run the first query for FASHION PRODUCTS TABLE
	$result1 = mysql_query("
		SELECT * 
		FROM fashion_products;
	",$LinkID);

// Show error if applicable
	echo mysql_error($LinkID);

// Fetch a row with the column labels
	$row = mysql_fetch_assoc($result1);
   
// Start table
	print "<br><fieldset><legend>Fashion Products</legend><br>";
	print "<table border=1><tr>";

// Print the column labels
	foreach (array_keys($row) as $label) {
		print "<td><b>$label</b></td>";
	}
	print "</tr><tr>";

// Print the values for the first row
	foreach ($row as $value) {
		print "<td>$value</td>";
	}
	print "</tr><tr>";
    
// Print the rest of the rows
	while ($row = mysql_fetch_row($result1)) {
		foreach ($row as $value) {
			print "<td>$value</td>";
		}
		print "</tr><tr>";
	}
	
// End table
	print "</tr></table></fieldset>";
	 
// Run the second query for PRODUCT INFO TABLE
	$result2 = mysql_query("
		SELECT * 
		FROM product_info;
	",$LinkID);

// Show error if applicable
	echo mysql_error($LinkID);

// Fetch a row with the column labels
	$row = mysql_fetch_assoc($result2);

// Start table
	print "<br><fieldset><legend>Product Info</legend><br>";
	print "<table border=1><tr>";
	
// Print the column labels
	foreach (array_keys($row) as $label) {
		print "<td><b>$label</b></td>";
	}
	print "</tr><tr>";

// Print the values for the first row
	foreach ($row as $value) {
		print "<td>$value</td>";
	}
	print "</tr><tr>";
    
// Print the rest of the rows
	while ($row = mysql_fetch_row($result2)) {
		foreach ($row as $value) {
			print "<td>$value</td>";
		}
		print "</tr><tr>";
	}
	
// End table
	print "</tr></table></fieldset>";
	
// Run the third query for PRODUCT COLORS TABLE
	$result3 = mysql_query("
		SELECT * 
		FROM product_colors;
	",$LinkID);

// Show error if applicable
	echo mysql_error($LinkID);

// Fetch a row with the column labels
	$row = mysql_fetch_assoc($result3);

// Start table
	print "<br><fieldset><legend>Product Colors</legend><br>";
	print "<table border=1><tr>";
	
// Print the column labels
	foreach (array_keys($row) as $label) {
		print "<td><b>$label</b></td>";
	}
	print "</tr><tr>";

// Print the values for the first row
	foreach ($row as $value) {
		print "<td>$value</td>";
	}
	print "</tr><tr>";
    
// Print the rest of the rows
	while ($row = mysql_fetch_row($result3)) {
		foreach ($row as $value) {
			print "<td>$value</td>";
		}
		print "</tr><tr>";
	}
	
// End table
	print "</tr></table></fieldset><br><br>";
?>
