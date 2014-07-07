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
<html lang="en" class="no-js">

<head>
	<title>Assembler Couture | Home</title>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="description" content="Fashion Destination Station" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta charset="UTF-8" />
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
        
		
		 <!---Simple Multi-Item Slider by tympanus.net-->
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/slider_style.css" />
		<script src="js/modernizr.custom.63321.js"></script>

		<!---prettyPhoto-->
		<script type="text/javascript" src="js/jquery_004.js"></script>
		 
		<script type="text/javascript">
			$(function(){
				$("a[class^='prettyPhoto']").prettyPhoto({theme:'pp_default'});
			});
		</script>         


 
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
					<li style="float:right;"><a href="cart.php" style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
				</ul>
            </div>
            </div>
    </div>
</div> //END TEST HERE

    <div class="wrapper cf" style="margin-top:105px;">
	<a href="index.php" style="border: solid black 1px; position:fixed; left: 0;"><img src="images/AssemblerCouture160x600.png" /><br>Advertisement.</a>
	<a href="index.php" style="border: solid black 1px; position:fixed; right: 0;"><img src="images/CaffeFantastico160x600.png" /><br>Advertisement.</a>
          
            <div id="combo-holder">
            
<select id="comboNav">
<option value="" selected="selected">Navigation</option>
<option value="index.php">HOME</option>
<option value="category.php?cat=1&gen=WOMENS">WOMENS</option>
<option value="category.php?cat=1&gen=MENS">MENS</option>
<option value="about.php">ABOUT</option>
<option value="contact.php">CONTACT</option></select>
</div>

    <div id="templatemo_main">
	<center><a href="index.php" style="border: none;"><img style="border: solid black 1px;" src="images/AssemblerCouture728x90.png" /></a></center>

    <h1 style='color:#333;'>WELCOME TO OUR CLOTHING LINE</h1>
	<h3 style='color:777;'>WE WISH TO SHARE THE STYLES WITH YOU IN EAGERNESS! </h3>
	
				<!-- start item slider -->
				<div id="mi-slider" class="mi-slider">
					<ul>
						<li><a href="product.php?id=MS02"><img src="images/shirt1.png" alt="img01"><h4>Collared</h4></a></li>
						<li><a href="product.php?id=WS02"><img src="images/shirt2.png" alt="img02"><h4>Long-Sleeved</h4></a></li>
						<li><a href="product.php?id=MS01"><img src="images/shirt3.png" alt="img03"><h4>Crew Neck</h4></a></li>
						<li><a href="product.php?id=MS01"><img src="images/shirt4.png" alt="img04"><h4>V-Neck</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="images/pants1.png" alt="img05" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/pants1.png'"><h4>Cargo</h4></a></li>
						<li><a href="product.php?id=WP01"><img src="images/pants2.png" alt="img06"><h4>Track</h4></a></li>
						<li><a href="product.php?id=MP02"><img src="images/pants3.png" alt="img07"><h4>Jeans</h4></a></li>
						<li><a href="product.php?id=MP01"><img src="images/pants4.png" alt="img08"><h4>Sweats</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="images/skirt1.png" alt="img09" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/skirt1.png'"><h4>A-Line</h4></a></li>
						<li><a href="#"><img src="images/skirt2.png" alt="img10" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/skirt2.png'"><h4>Mini</h4></a></li>
						<li><a href="#"><img src="images/skirt3.png" alt="img11" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/skirt3.png'"><h4>Formal</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="images/shoes1.png" alt="img12" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/shoes1.png'"><h4>Canvas</h4></a></li>
						<li><a href="#"><img src="images/shoes2.png" alt="img13" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/shoes2.png'"><h4>Formal</h4></a></li>
						<li><a href="#"><img src="images/shoes3.png" alt="img14" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/shoes3.png'"><h4>High Heels</h4></a></li>
						<li><a href="#"><img src="images/shoes4.png" alt="img15" onMouseOver="this.src='images/comingsoon.png'" onMouseOut="this.src='images/shoes4.png'"><h4>Runners</h4></a></li>
					</ul>
					<nav>
						<a href="#">Shirts</a>
						<a href="#">Pants</a>
						<a href="#">Skirts</a>
						<a href="#">Shoes</a>
					</nav>
				</div><!-- /slider -->

       
 </div>
	<!-- scripts for slider -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/jquery.catslider.js"></script>
	<script>
			$(function() {
				$( '#mi-slider' ).catslider();
			});
	</script>
	</div>
	<div id="templatemo_footer100">  
		<div class="wrapper cf"> 
      
			<a id="gotop" href="#top"><img src="images/backtotop.png" alt="go to top"></a>
			<!--footer start -->

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