<?php
//Start a session
session_start();
$cartNum = '0';
if(isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $k => $v) {
		$cartNum += $v;
	}
}
//print_r($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Assembler Couture | Confirm Order</title>
	<meta name="description" content="Fashion Destination Station" />
	<link rel="icon" type="image/png" href="favicon.png">

	<!--css-->
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" media="all" href="css/lessframework.css"/>
	<link rel="stylesheet" media="all" href="css/ddsmoothmenu.css"/>
	<link rel="stylesheet" type="text/css" href="css/prettyphoto.css"/>
	<link rel="stylesheet" type="text/css" href="css/progtracker.css"/>

	<!--js--> 
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

	 <!---menu-->
	<script type="text/javascript" src="js/jquery_005.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

	<script type="text/javascript">
	ddsmoothmenu.init({
		mainmenuid: "top_nav", //menu DIV id
		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu', //class added to menu's outer DIV
		//customtheme: ["#1c5a80", "#18374a"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	})
	</script>

	<!---prettyPhoto-->
	<script type="text/javascript" src="js/jquery_004.js"></script>
	 
	<script type="text/javascript">
		$(function(){
			$("a[class^='prettyPhoto']").prettyPhoto({theme:'pp_default'});
		});
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

</head>

<body>
<div style="position:fixed; top: 0; clear:both; width:100%; z-index:10000;">
	<div id="templatemo_header"></div>
     <div class="wrapper cf">
    	<div id="site_title"><h1><a href="index.php"><img src='images/aclogo.png'></a></h1></div>
       <!--The Assembler -->
        <div class="cleaner"></div>
    
</div>    
<div id="nav">
    	 <div class="ddsmoothmenu1">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" >Home</a>
                </li>
                <li><a href="category.php?cat=1&gen=Mens" id="category1">Mens</a>
                    <ul>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Shirt" >Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Pants" >Pants</a></li>                        
                  </ul>
                <li><a href="category.php?cat=1&gen=Womens" id="category2">Womens</a>
                	<ul>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Shirt">Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Pants">Pants</a></li>                        
                  </ul>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li style="float:right;"><a href="cart.php"   style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
				</ul>
            </div>
            </div>
         </div>
 </div>
    <div class="wrapper cf" style="margin-top:127px;">
  	<a href="index.php" style="border: solid black 1px; position:fixed; left: 0;"><img src="images/TerribleTees160x600.png" /><br>Advertisement.</a>
	<a href="index.php" style="border: solid black 1px; position:fixed; right: 0;"><img src="images/AssemblerCouture160x600.png" /><br>Advertisement.</a>
          
          
            <div id="combo-holder">
            
<select id="comboNav">
<option value="" selected="selected">Navigation</option>
<option value="index.php">HOME</option>
<option value="category.php?cat=1&gen=Mens">WOMENS</option>
<option value="category.php?cat=1&gen=Womens">MENS</option>
<option value="about.php">ABOUT</option>
<option value="contact.php">CONTACT</option></select>
</div>

    <div id="templatemo_main">
    <div id="progressbar" style="width: 980px">
		<span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; color:black; text-align: center;">Shopping Cart...</p>
			<img src="images/load1full.png"/>
		</span><span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; color:black; text-align: center;">Billing/Shipping...</p>
			<img src="images/load2full.png"/>
		</span><span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; color:black; text-align: center;">Order Confirmation...</p>
			<img src="images/load3full.png"/>
		</span><span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; text-align: center;">Receipt!</p>
			<img src="images/load4empty.png"/>
		</span>


            </div><br>
	
	<center>
	
<?php
	//If the cart exists, do following actions
	if(isset($_SESSION['cart'])) {
		//Set up variables used by cart
		$totalcost = 0.00;
		
		//Connect to DB
		require ("../../comp199login.php");
		if (!$LinkID) {
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("c199grp05", $LinkID);
		
		echo 	"<h2 style='color:black;'> YOUR ORDER </h2>
				<table>
				<thead><tr>
				<th> Product: </th> 
				<th> Color:   </th>
				<th> Size:    </th>
				<th> Quantity:</th>
				<th> Item Price</th>
				<th> Subtotal:    </th>
				</tr></thead>";

		//Display each product in cart, a few steps for each
		foreach($_SESSION['cart'] as $id => $quantity) {
			//Query to find product information
			$result1 = mysql_query("
				SELECT * 
				FROM fashion_products JOIN product_info
				USING (prod_style)
				WHERE product_id = '$id' 
			",$LinkID);
			echo mysql_error($LinkID);
			$row = mysql_fetch_assoc($result1);
			//Assign returned values to variables
			$pic = $row['prod_photo'];
			$nam = $row['prod_name'];
			$col = $row['prod_color'];
			$size = $row['prod_size'];
			$pri = $row['prod_price'];
			$subprice = $pri * $quantity;
			$totalcost = $totalcost + $subprice;

			echo '<tbody><tr>';
			echo 	'<td>'.$nam.'</td>',
					'<td>'.$col.'</td>',
					'<td>'.$size.'</td>',
					'<td>'.$quantity.'</td>',
					'<td>$'.$pri.'</td>',
					'<td>$'.$subprice.'</td>';
			echo '</tr>';
			echo '</tbody>';
		}
		
		echo '</table></center>';

		//Display cart total cost
		echo "<center><br><h2 style='color:black;'> TOTAL: $$totalcost </h2>";

		//If the cart doesn't exist or is empty, display msg
	} else {
		die("<h2>Your cart is empty.</h2>");
	}
		
	//print_r($_POST);
	
	// Luhn Algorithm for credit card checksum (courtesy of Ray Hayes)
	function is_valid_card($number) {

		// Strip any non-digits (useful for credit card numbers with spaces and hyphens)
		$number=preg_replace('/\D/', '', $number);

		// Set the string length and parity
		$number_length=strlen($number);
		$parity=$number_length % 2;

		// Loop through each digit and do the maths
		$total=0;
		for ($i=0; $i<$number_length; $i++) {
		$digit=$number[$i];
		// Multiply alternate digits by two
		if ($i % 2 == $parity) {
		  $digit*=2;
		  // If the sum is two digits, add them together (in effect)
		  if ($digit > 9) {
			$digit-=9;
		  }
		}
		// Total up the digits
		$total+=$digit;
		}
		// If the total mod 10 equals 0, the number is valid
		return ($total % 10 == 0) ? TRUE : FALSE;
	}
	
	// assign and validate billing info from POST form
	$billFirstName = ucfirst(strtolower(htmlspecialchars(strip_tags(trim($_POST['billFirstName'])), ENT_QUOTES)));
	if(!preg_match("/^[A-Z\s,.'-]+$/i", $_POST['billFirstName'])) {
		die('Invalid billing first name.');
	}
	$billLastName = ucfirst(strtolower(htmlspecialchars(strip_tags(trim($_POST['billLastName'])), ENT_QUOTES)));
		if(!preg_match("/^[A-Z\s,.'-]+$/i", $_POST['billLastName'])) {
		die('Invalid billing last name.');
	}
	$billingName = $billFirstName." ".$billLastName;
	
	$billAddress = strtoupper(htmlspecialchars(strip_tags(trim($_POST['billAddress'])), ENT_QUOTES));
	if(!preg_match("/^[A-Z0-9\s,.'-]+$/i", $_POST['billAddress'])) {
		die('Invalid billing address.');
	}
	$billCity = ucfirst(strtolower(htmlspecialchars(strip_tags(trim($_POST['billCity'])), ENT_QUOTES)));
	if(!preg_match("/^[A-Z\s,.'-]+$/i", $_POST['billCity'])) {
		die('Invalid billing city name.');
	}
	$billProvince = $_POST['billProvince'];
	
	$billPostal = strtoupper(htmlspecialchars(strip_tags(trim($_POST['billPostal'])), ENT_QUOTES));
	if(!preg_match('/^[A-Z]\d[A-Z](\s|\-)?\d[A-Z]\d$/i', $billPostal)) {
		die('Invalid billing postal code.');
	}
	$billPhone = htmlspecialchars(strip_tags(trim($_POST['billPhone'])), ENT_QUOTES);
	if(!preg_match('/^([0-9]{7,11}|(\s*))$/', $billPhone)) {
		die('Invalid billing phone number.');
	}
	$billEmail = strtolower(htmlspecialchars(strip_tags(trim($_POST['billEmail'])), ENT_QUOTES));
	if(!preg_match('/^([^@]+)\@([^@]+)\.([^@]+)$/i', $billEmail)) {
		die('Invalid billing email address.');
	}
	
	// if shipping info same as billing info
	if( isset($_POST['shipSameAddress']) ) {
		$shippingSameAsBilling = $_POST['shipSameAddress'];
	}
	if ( isset($shippingSameAsBilling) ) {
		$shipFirstName = $billFirstName;
		$shipLastName = $billLastName;
		$shippingName = $shipFirstName." ".$shipLastName;
		$shipAddress = $billAddress;
		$shipCity = $billCity;
		$shipProvince = $billProvince;
		$shipPostal = $billPostal;
		$shipPhone = $billPhone;
		$shipEmail = $billEmail;
	
	// if not same, shipping info from POST form
	} else {
		$shipFirstName = ucfirst(strtolower(htmlspecialchars(strip_tags(trim($_POST['shipFirstName'])), ENT_QUOTES)));
		if(!preg_match("/^[A-Z\s,.'-]+$/i", $_POST['shipFirstName'])) {
			die('Invalid shipping first name.');
		}
		$shipLastName = ucfirst(strtolower(htmlspecialchars(strip_tags(trim($_POST['shipLastName'])), ENT_QUOTES)));
		if(!preg_match("/^[A-Z\s,.'-]+$/i", $_POST['shipLastName'])) {
			die('Invalid shipping last name.');
		}
		$shippingName = $shipFirstName." ".$shipLastName;
		
		$shipAddress = strtoupper(htmlspecialchars(strip_tags(trim($_POST['shipAddress'])), ENT_QUOTES));
		if(!preg_match("/^[A-Z0-9\s,.'-]+$/i", $_POST['shipAddress'])) {
			die('Invalid shipping address.');
		}
		$shipCity = ucfirst(strtolower(htmlspecialchars(strip_tags(trim($_POST['shipCity'])), ENT_QUOTES)));
		if(!preg_match("/^[A-Z\s,.'-]+$/i", $_POST['shipCity'])) {
			die('Invalid shipping city name.');
		}
		$shipProvince = $_POST['shipProvince'];
		
		$shipPostal = strtoupper(htmlspecialchars(strip_tags(trim($_POST['shipPostal'])), ENT_QUOTES));
		if(!preg_match('/^[A-Z]\d[A-Z](\s|\-)?\d[A-Z]\d$/i', $shipPostal)) {
			die('Invalid shipping postal code.');
		}
		$shipPhone = htmlspecialchars(strip_tags(trim($_POST['shipPhone'])), ENT_QUOTES);
		if(!preg_match('/^([0-9]{7,11}|(\s*))$/', $shipPhone)) {
			die('Invalid shipping phone number.');
		}
		$shipEmail = strtolower(htmlspecialchars(strip_tags(trim($_POST['shipEmail'])), ENT_QUOTES));
		if(!preg_match('/^([^@]+)\@([^@]+)\.([^@]+)$/i', $shipEmail)) {
			die('Invalid shipping email address.');
		}
	}
	
	// credit card info from POST form
	$cardType = $_POST['cardType'];
	$cardExpiry = $_POST['cardMonth'].' / '.$_POST['cardYear'];
	$cardNumber = htmlspecialchars(strip_tags(trim($_POST['cardNumber'])), ENT_QUOTES);
	$cardCode = htmlspecialchars(strip_tags(trim($_POST['cardCode'])), ENT_QUOTES);

	// validate credit card
	if (is_valid_card($cardNumber) == FALSE) {
		$cardNumber = null;
		$cardType = null;
		die('Invalid credit card number.');
		
	} else if ($cardType == 'MasterCard') {
		if(!preg_match('/^5[1-5][0-9]{14}$/', $cardNumber)) {
			die('Invalid credit card number.');
		}
	} else if ($cardType == 'Visa') {
		if(!preg_match('/^4[0-9]{15}$/', $cardNumber)) {
			die('Invalid credit card number.');
		}
	} else if ($cardType == 'American Express') {
		if(!preg_match('/^3[47][0-9]{13}$/', $cardNumber)) {
			die('Invalid credit card number.');
		}
	}
	if ( $cardType == 'Visa' || $cardType == 'MasterCard' ) {
		if(!preg_match('/^\d{3}$/i', $cardCode)) {
			die('Invalid CVV code.');
		}
	} else if ( $cardType == 'American Express' ) {
		if(!preg_match('/^\d{4}$/i', $cardCode)) {
			die('Invalid CVV code.');
		}
	}
	// hide the credit card number except last 4 digits
	if ( $cardType == 'Visa' || $cardType == 'MasterCard' ) {
		$cardHidden = "XXXXXXXXXXXX".substr($cardNumber, -4);
	} else if ( $cardType == 'American Express' ) {
		$cardHidden = "XXXXXXXXXXX".substr($cardNumber, -4);
	}

	//Add the info to session variable for transfer to receipt page
	$_SESSION['pinfo'][1] = $shippingName;
	$_SESSION['pinfo'][2] = $shipAddress;
	$_SESSION['pinfo'][3] = $shipCity;
	$_SESSION['pinfo'][4] = $shipProvince;
	$_SESSION['pinfo'][5] = $shipPostal;
	$_SESSION['pinfo'][6] = $shipPhone;
	$_SESSION['pinfo'][7] = $shipEmail;
	$_SESSION['pinfo'][8] = $cardType;
	$_SESSION['pinfo'][9] = $cardNumber;
	$_SESSION['pinfo'][10] = $cardHidden;
	$_SESSION['pinfo'][11] = $cardExpiry;
	$_SESSION['pinfo'][12] = $cardCode;
	$_SESSION['pinfo'][13] = $billingName;
	
	
	// print out summaries
	echo 	"<table style='display: inline-block; vertical-align: top;'>
				<tr><th colspan='2'> Billing </th></tr>
				<tr><td> Cardholder Name: </td><td> $billingName </td></tr>
				<tr><td> Credit Card Number: </td><td> $cardHidden </td></tr>
				<tr><td> Card Expiry Date: </td><td> $cardExpiry </td></tr>
				<tr><td> Address: </td><td> $billAddress </td></tr>
				<tr><td> City: </td><td> $billCity </td></tr>
				<tr><td> Province: </td><td> $billProvince </td></tr>
				<tr><td> Postal Code: </td><td> $billPostal </td></tr>
				<tr><td> Phone Number: </td><td> $billPhone </td></tr>
				<tr><td> Email: </td><td> $billEmail </td></tr>
			</table>";
	
	echo 	"<table style='display: inline-block; vertical-align: top;'>
				<tr><th colspan='2'> Shipping </th></tr>
				<tr><td> Name: </td><td> $shippingName </td></tr>
				<tr><td> Address: </td><td> $shipAddress </td></tr>
				<tr><td> City: </td><td> $shipCity </td></tr>
				<tr><td> Province: </td><td> $shipProvince </td></tr>
				<tr><td> Postal Code: </td><td> $shipPostal </td></tr>
				<tr><td> Phone Number: </td><td> $shipPhone </td></tr>
				<tr><td> Email: </td><td> $shipEmail </td></tr>
			</table>
			</center>";
?>

<br><center>
	<button class="clickme" onclick="history.go(-1);"> Back to Billing </button>
	<a href='receipt.php' ><button class="clickme"> Complete Order </button></a>
</center><br><br>
</div>
</div>

		<div id="templatemo_footer100">  
		<div class="wrapper cf"> 
      
	<a id="gotop" href="#top"><img src="images/backtotop.png" alt="go to top"></a>
	<!--footer start -->

<!-- made this for potential bonus marks??????-->
<div id="social">

   <div class="social-networks"> 
			<ul class="social-networks">
			  <li class="icon-facebook"><a href="https://www.facebook.com/pages/Assembler-Couture/280640215431007">Facebook</a></li>
			  <li class="icon-twitter"><a href="https://twitter.com/AssemblrCouture">Twitter</a></li>
			  <li class="icon-dribbble"><a href="http://www.pinterest.com/assemblerc/">Pinterest</a></li>
			  <li class="icon-linkedin"><a href="http://www.linkedin.com/pub/assembler-couture/95/846/350">LinkedIn</a></li>
			  <li class="icon-flickr"><a href="https://plus.google.com/u/0/117112216953014306929">Google+</a></li>
			</ul>
        </div>
        </div>
        <div id="footer">

			<p ><a href="index.php"> Home</a> / 
				<a href="category.php?cat=1&gen=Mens">Mens</a> / 
				<a href="category.php?cat=1&gen=Womens">Womens</a> / 
				<a href="contact.php">Contact</a> / 
				<a href="about.php">About</a> /
				<a href="staff.php">Staff Login</a>
			<a style="padding-left:40px"></a></p>

        </div>
        </div>
 </div>
</body>
</html>