<?php
//Start a session
session_start();
$cartNum = '0';

?>
<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Assembler Couture | Order Receipt</title>
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
	
<style>
table,th,td {
	border:1px solid white;
	padding:5px;
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
                <li><a href="category.php?cat=1&gen=Mens">Mens</a>
                    <ul>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Shirt">Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Pants">Pants</a></li>                        
                  </ul>
                <li><a href="category.php?cat=1&gen=Womens">Womens</a>
                	<ul>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Shirt">Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Pants">Pants</a></li>                        
                  </ul>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li style="float:right;"><a href="cart.php" class="selected" style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
				</ul>
            </div>
            </div>
         </div>
</div> 
    <div class="wrapper cf" style="margin-top:127px;">

 	<a href="index.php" style="border: solid black 1px; position:fixed; left: 0;"><img src="images/AssemblerCouture160x600.png" /><br>Advertisement.</a>
	<a href="index.php" style="border: solid black 1px; position:fixed; right: 0;"><img src="images/CaffeFantastico160x600.png" /><br>Advertisement.</a>         
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
			<p style="margin-bottom: -4px; color:black; text-align: center;">Receipt!</p>
			<img src="images/load4full.png"/>
		</span>


            </div><br>
	
	<center>
	
<?php
	
	if (!isset($_SESSION['cart'])) {
		die("<h2>Your cart is empty.</h2>");
	}
	
	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_self ="some-email@internet.com";
	$email_subject = "Assembler Couture: Order Receipt";
	 
	 // extracting variables from session

	require ("../../login.php"); // use your own MySQL login in a separate file
	if (!$LinkID) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("mydatabase", $LinkID); // choose database
	
	$shipName = $_SESSION['pinfo'][1];
	$shipAddress = $_SESSION['pinfo'][2];
	$shipCity = $_SESSION['pinfo'][3];
	$shipProvince = $_SESSION['pinfo'][4];
	$shipPostal = $_SESSION['pinfo'][5];
	$shipPhone = $_SESSION['pinfo'][6];
	$shipEmail = $_SESSION['pinfo'][7];

	$cardType =	$_SESSION['pinfo'][8];
	$cardNumber = $_SESSION['pinfo'][9];
	$cardHidden = $_SESSION['pinfo'][10];
	$cardExpiry = $_SESSION['pinfo'][11];
	$cardCode = $_SESSION['pinfo'][12];
	$cardholderName = $_SESSION['pinfo'][13];

	//Build the receipt string for self
	$selfMessage = "Customer Order Details: \n\n";
	
	$totalcost = 0;
	foreach($_SESSION['cart'] as $id => $quantity) {
		$result1 = mysql_query("
			SELECT * 
			FROM fashion_products JOIN product_info
			USING (prod_style)
			WHERE product_id = '$id' 
		",$LinkID);
		echo mysql_error($LinkID);
		$row = mysql_fetch_assoc($result1);
		
		//Assign returned values to variables
		$nam = $row['prod_name'];
		$col = $row['prod_color'];
		$size = $row['prod_size'];
		$pri = $row['prod_price'];
		$subprice = $pri * $quantity;
		$totalcost += $subprice;

		$selfMessage .= "Item: ".$nam." Colour: ".$col." Size: ".$size." Quantity: ".$quantity." Price(ea.): ".$pri." Item Subtotal: ".$subprice."\n"; 
	}
	$selfMessage .= "\nTOTAL: ".$totalcost."\n\n";
	
	$selfMessage .= "Customer Info:\n";
	$selfMessage .= "Name: ".$shipName."\n";
	$selfMessage .= "Address: ".$shipAddress."\n";
	$selfMessage .= "City: ".$shipCity."\n";
	$selfMessage .= "Province: ".$shipProvince."\n";
	$selfMessage .= "Postal Code: ".$shipPostal."\n";
	$selfMessage .= "Phone: ".$shipPhone."\n";
	$selfMessage .= "E-mail: ".$shipEmail."\n\n";
	$selfMessage .= "Card Type: ".$cardType."\n";
	$selfMessage .= "Card Number: ".$cardNumber."\n";
	$selfMessage .= "Cardholder Name: ".$cardholderName."\n";
	$selfMessage .= "Expiry: ".$cardExpiry."\n";
	 
	//Build the receipt string for customer
	$customerMessage = "Thank you for shopping with Assembler Couture!\nHere is your Order Receipt: \n\n";
	$totalcost = 0;
	foreach($_SESSION['cart'] as $id => $quantity) {
		$result1 = mysql_query("
			SELECT * 
			FROM fashion_products JOIN product_info
			USING (prod_style)
			WHERE product_id = '$id' 
		",$LinkID);
		echo mysql_error($LinkID);
		$row = mysql_fetch_assoc($result1);
		
		//Assign returned values to variables
		$nam = $row['prod_name'];
		$col = $row['prod_color'];
		$size = $row['prod_size'];
		$pri = $row['prod_price'];
		$subprice = $pri * $quantity;
		$totalcost += $subprice;

		$customerMessage .= "Item: ".$nam." Colour: ".$col." Size: ".$size." Quantity: ".$quantity." Price(ea.): ".$pri." Item Subtotal: ".$subprice."\n"; 
	}
	$customerMessage .= "\nTOTAL: ".$totalcost."\n\n";
	
	$customerMessage .= "Your info:\n";
	$customerMessage .= "Name: ".$shipName."\n";
	$customerMessage .= "Address: ".$shipAddress."\n";
	$customerMessage .= "City: ".$shipCity."\n";
	$customerMessage .= "Province: ".$shipProvince."\n";
	$customerMessage .= "Postal Code: ".$shipPostal."\n";
	$customerMessage .= "Phone: ".$shipPhone."\n";
	$customerMessage .= "E-mail: ".$shipEmail."\n\n";
	$customerMessage .= "Card Type: ".$cardType."\n";
	$customerMessage .= "Card Number: ".$cardHidden."\n";
	$customerMessage .= "Cardholder Name: ".$cardholderName."\n";
	$customerMessage .= "Expiry: ".$cardExpiry."\n";
	 

	// create email headers
	$selfHeaders = 'From: '.$email_self."\r\n".
	'Reply-To: '.$email_self."\r\n" .
	'X-Mailer: PHP/' . phpversion();

	// send self copy
	@mail($email_self, $email_subject, $selfMessage, $headers); 

	// send customer copy
	@mail($shipEmail, $email_subject, $customerMessage, $headers);
	
		// preparing data to insert into 'orders' table
	$cardHash = md5($cardNumber);
	
	$orderDetails = "";
	foreach ($_SESSION['cart'] as $id => $quantity) {
		$orderDetails .= $id.'x'.$quantity.' ';
	}
	
	// query for insert into 'orders' table
	$insertOrder = "INSERT INTO orders(credit_card_no,credit_card_hash,credit_card_type,credit_card_expiry,".
	"cardholder_name,order_details,order_total,ship_address,ship_city,ship_prov,ship_postal,email) ".
	"VALUES ('".$cardHidden."','".$cardHash."','".$cardType."','".$cardExpiry."','".$cardholderName."','".
	$orderDetails."','".$totalcost."','".$shipAddress."','".$shipCity."','".$shipProvince."','".$shipPostal."','".$shipEmail."');";

	// insert data into 'orders' table
	$order1 = mysql_query($insertOrder, $LinkID);

	if(!$order1) {
		die('Could not insert data: ' . mysql_error());

	}
	unset($_SESSION['cart']);

?>
 
<!-- include your own success html here -->
<h3 style='color:black;'>Your order is complete! A receipt has been sent to the supplied e-mail.</h3>

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