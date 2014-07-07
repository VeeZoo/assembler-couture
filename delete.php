<?php
// Verify user is logged in
	session_start();
	if (!isset($_SESSION["username"])) {
		header('Location: staff.php');
		exit; 
	}

// URL decode the received data and assign them to variables
	$sentId = urldecode($_REQUEST['removeID']);

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
	$prodId = '199'.$string1;

// One query to delete 3 sizes

	$delete = "DELETE FROM fashion_products WHERE product_id LIKE '".$prodId."_';";

// Connect to the MySQL server using linked login/pw
// Use your own MySQL login in a separate file
	require ("../../login.php");
	
// Error if cannot connect
	if (!$LinkID) {
		die('Could not connect: ' . mysql_error());
	}

// Choose the database
	mysql_select_db("mydatabase", $LinkID);

// Delete row with user-generated query
	$ret1 = mysql_query($delete, $LinkID);

	if(!$ret1) {
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
