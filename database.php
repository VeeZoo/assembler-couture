<?php
// Verify user is logged in
	session_start();
	if (!isset($_SESSION["username"])) {
		header('Location: staff.php');
		exit; 
	}

// Connect to the MySQL server using linked login/pw
	require ("../../comp199login.php");
	
// Error if cannot connect
	if (!$LinkID) {
		die('Could not connect: ' . mysql_error());
	}

// Choose the database
	mysql_select_db("c199grp05", $LinkID);
	
// Run the first query
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
	print "</tr></table><br></fieldset>";
	 
// Run the second query
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
	print "</tr></table><br></fieldset>";
	
// Run the third query
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
	print "</tr></table><br></fieldset>";

	
// Run the fourth query
	$result4 = mysql_query("
		SELECT * 
		FROM orders;
	",$LinkID);

// Show error if applicable
	echo mysql_error($LinkID);

// Fetch a row with the column labels
	$row = mysql_fetch_assoc($result4);

// Start table
	print "<br><fieldset><legend>Orders</legend><br>";
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
	while ($row = mysql_fetch_row($result4)) {
		foreach ($row as $value) {
			print "<td>$value</td>";
		}
		print "</tr><tr>";
	}
	
// End table
	print "</tr></table><br></fieldset><br><br>";
	  
?>