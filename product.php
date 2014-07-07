<?php
session_start();
$cartNum = '0';
if(isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $k => $v) {
		$cartNum += $v;
	}
}
?>

<!DOCTYPE html>
<html>
<!-- 
	"Assembler Couture"
	L. Booth, M. Marzitelli, V. Zou
-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Assembler Couture | Products</title>
		<meta name="description" content="Fashion Destination Station" />
		<link rel="icon" type="image/png" href="favicon.png">
		
		<!--css-->
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" media="all" href="css/lessframework.css"/>
		<link rel="stylesheet" media="all" href="css/ddsmoothmenu.css"/>
		<link rel="stylesheet" type="text/css" href="css/prettyphoto.css"/>

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

		<!-- Color button styles -->
		<style type="text/css">	
			button#color1, button#color2 {
			background-color: #000000;
			border: 1px solid #ffffff;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			-ms-border-radius: 5px;
			-o-border-radius: 5px;
			color: white;
			width: 60px;
			height: 60px;
			font-weight: bold;
			text-align: center;
			text-shadow: 2px 2px 2px #000000;
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
                <li><a href="category.php?cat=1&gen=Mens" >Mens</a>
                    <ul>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Shirt" >Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Pants" >Pants</a></li>                        
                  </ul>
                <li><a href="category.php?cat=1&gen=Womens" >Womens</a>
                	<ul>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Shirt" >Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Pants" >Pants</a></li>                        
                  </ul>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li style="float:right;"><a href="cart.php" style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
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

			<div id="templatemo_main" style="overflow: auto"> <!--START MAIN DIV INSERT-->
			
				<?php
				//Get selected product item# from query string
				$prodcode = $_GET['id'];

				// Connect to the MySQL server using linked login/pw
				// Use your own MySQL login in a separate file
					require ("../../login.php");
					
				// Error if cannot connect
					if (!$LinkID) {
						die('Could not connect: ' . mysql_error("Cannot connect to database."));
					}

				// Choose the database
					mysql_select_db("mydatabase", $LinkID); // choose database
					
				// Query DB for product info
						$result1 = mysql_query("
							SELECT * 
							FROM fashion_products JOIN product_info
							USING (prod_style)
							WHERE prod_thumb = '$prodcode'
							GROUP BY prod_thumb  
						",$LinkID);
					echo mysql_error($LinkID);
					$row = mysql_fetch_assoc($result1);
					
				//Take results and assign each attribute to a variable
				$nam = $row['prod_name'];
				$des = $row['prod_desc'];

				// Get clothing color info
						$result2 = mysql_query("
							SELECT prod_color, prod_photo, color_hex
							FROM fashion_products JOIN product_colors
							USING (prod_color)
							WHERE prod_thumb = '$prodcode'
							GROUP BY prod_color;
						",$LinkID);
					echo mysql_error($LinkID);
					
					$row = mysql_fetch_assoc($result2);
					$color2 = $row['prod_color'];
					$photo2 = $row['prod_photo'];
					$hex2 = $row['color_hex'];
					
					$row = mysql_fetch_assoc($result2);
					$color1 = $row['prod_color'];
					$photo1 = $row['prod_photo'];
					$hex1 = $row['color_hex'];
					
					echo "<h2>$nam</h2>";
				?>

			<div style="float: left; padding: 0px 10px;">
			
				<!-- PHP variable to JS variable -->
				<input type="hidden" id="productcode" name="productcode" value="<?php echo $prodcode; ?>" style="display:none" />

				<!-- Product photo -->
				<img id="image1" src="images/<?php echo $photo1; ?>.png" />
				<img id="image2" src="images/<?php echo $photo2; ?>.png" style="display:none;" />
				<br><br>
				
			</div>
			
			<div style="float: right; padding: 0px 10px; width:400px;">
				
				<!-- Display the product description -->
				<?php echo "Description: $des<br>"; ?>
				
				<!-- Change clothing colors -->
				<br><br>
					Color:	&emsp;
				<button name='prodcolor' id='color1' style='background-color:<?php echo $hex1; ?>;' onClick="changeColor1()"><?php echo $color1; ?></button>
				<button name='prodcolor' id='color2' style='background-color:<?php echo $hex2; ?>;' onClick="changeColor2()"><?php echo $color2; ?></button>
				<br><br>
					
					Size:	&emsp;
				<input type="radio" name="prodsize" value="small" checked>Small &emsp;
				<input type="radio" name="prodsize" value="medium">Medium &emsp;
				<input type="radio" name="prodsize" value="large">Large &emsp;
				<br><br>
				
				<button class='clickme' name='addtocart' id='addtocart' onClick="addToCart()">Add to Cart</button>
			
			</div>
			<div style="clear: both"></div>
				<!--END MAIN DIV INSERT-->
				
				
			</div> <!--end templateemo_main Div-->
		</div> <!--end Wrapper cf Div-->

<!-- Link to 'Add To Cart' script -->
<script language="javascript" type="text/javascript" src="js/product.js"></script>
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

						</div><!--end Footer Div-->
					</div> <!--end Wrapper cf Div-->
				</div> <!--end Templateemo_footer100 Div-->
	</body>
</html>