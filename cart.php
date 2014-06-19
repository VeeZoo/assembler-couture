<?php
//Start a session
session_start();

//If this page was given a query string with "ADD"
if(isset($_GET['act']) && $_GET['act'] == 'add') {
	//If the item is in the cart already, increment quantity by one
	if(isset($_SESSION['cart'][$_GET['id']])) {
		$_SESSION['cart'][$_GET['id']]++;
	} else { //Else add it to the cart at quantity 1
		$_SESSION['cart'][$_GET['id']] = 1;
	}
	//Reloads page to get rid of query string
	header("Location: cart.php");
}
//Deletes any items (from the cart array) that were checked for removal
if(isset($_POST['remove'])) {
	foreach($_POST['remove'] as $id) {
		unset($_SESSION['cart'][$id]);
	}
}
//Updates item quantities (directly to the cart array)
if (isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $id => $quant) {
		if(isset($_POST[$id])) {
			$_SESSION['cart'][$id] = $_POST[$id];
		}
	}
}
//If the cart is empty after item removal, unset it
if (empty($_SESSION['cart'])) {
	unset($_SESSION['cart']);
}
//print_r($_SESSION['cart']);
$cartNum = '0';
if(isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $k => $v) {
		$cartNum += $v;
	}
}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Assembler Couture | Shopping Cart</title>
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
form {
	font-size: 12px;
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
                <li style="float:right;"><a href="cart.php"  style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
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

			<div id="templatemo_main"> <!--START MAIN DIV INSERT-->
             <div id="progressbar" style="width: 980px">
		<span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; color:black; font-weight:bold; text-align: center;">Shopping Cart...</p>
			<img src="images/load1full.png"/>
		</span><span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; text-align: center;">Billing/Shipping...</p>
			<img src="images/load2empty.png"/>
		</span><span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; text-align: center;">Order Confirmation...</p>
			<img src="images/load3empty.png"/>
		</span><span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; text-align: center;">Receipt!</p>
			<img src="images/load4empty.png"/>
		</span>
            </div><br>
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
		
		//Open cart form
		echo "<form method='post' action='cart.php'>";

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
			
			//Display product information
			echo "<img src='images/$pic.png' height='80' width='60' /> 
				Product: $nam  
				Color: $col  
				Size: $size  
				Quantity: <select name=$id />";
			//loop that populates the drop down with options
			for ($i=1 ; $i<=10; $i++) {
				echo "<option value='$i'";
				if ($i == $quantity) { //sets the appropriate number as default on reload
					echo " selected='selected' ";
				}
				echo "> $i </option>";
			}
				
			echo "</select>
				(@$$pri ea.)  
				Price: $$subprice <b> | </b>
				Remove? <input type='checkbox' name='remove[]' value='$id' /><br>";
		}
		//Display cart total cost
		echo "<h2 style='color:black;'> TOTAL: $$totalcost </h2>";
		
		//Close form, submit button
		echo "<input type='submit' class='clickme' value='Update Cart'>
				</form><br>";
		echo "<form action='billing.php'>
				<input type='submit' class='clickme' value='Checkout'>
				</form><br>";
		
		//Display a return 
		echo "<a href='index.php'> Continue Shopping </a>";

	//If the cart doesn't exist or is empty, display msg
	} else {
		echo "<h2>Your cart is empty.</h2>";
	}
	//Used for clearing the query string
	//unset($_SERVER['QUERY_STRING']);
		
	?>
				<!--END MAIN DIV INSERT-->
				
			</div> <!--end templateemo_main Div-->
		</div> <!--end Wrapper cf Div-->
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

						</div><!--end Footer Div-->
					</div> <!--end Wrapper cf Div-->
				</div> <!--end Templateemo_footer100 Div-->
	</body>
</html>