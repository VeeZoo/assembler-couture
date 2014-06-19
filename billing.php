<?php
//Start a session
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

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assembler Couture | Billing & Shipping</title>
<meta name="description" content="Fashion Destination Station" />
<link rel="icon" type="image/png" href="favicon.png">

<!--css-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="css/lessframework.css"/>
<link rel="stylesheet" media="all" href="css/ddsmoothmenu.css"/>
<link rel="stylesheet" type="text/css" href="css/prettyphoto.css"/>
<link rel="stylesheet" type="text/css" href="css/progtracker.css"/>

<style type="text/css">
table.curvedEdges { border:10px solid red;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
table.curvedEdges td, table.curvedEdges th { border-bottom:1px dotted red;padding:5px; }
</style>

<style>
div#additionalInfo {
    float: none;
    overflow: auto;
	font-size: 12px;
}
div#floatCheckout {
	float: right;
	background-color: #900;
	width: auto;
}
div#creditCard {
	float: inherit;
	border: solid white thin;
	padding-bottom:inherit;
	padding: 10px 100px;
	font-size: 12px;
}
table {
float: inherit;
	border: solid white thin;
	size: inherit;
}
div#billing {
	float: left;
	padding:10px 100px;
}

div#shipping {
	float: right;
	padding:10px 100px;
}

div.fieldSet { 
	border: solid white thin;
	}
fieldset {
	border: none;
	padding 0;
}
legend {
	font-size: 20px;
	width: 100%;
	padding: 5px;
}
label.field {
	text-align: right;
	width: 100 px;
	float: left;
	font-weight: bold;
}
input.textbox-300 {
	width: 300px;
	float: left;
}
fieldset p {
	clear: both;
	padding: 5px;
}
label span, .required {
	color: red;
	font-weight: bold;
}
h3 {
	color: #990000;
	font-weight: normal;
}
</style>

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

</head>

<body>
<div style="position:fixed; top: 0; clear:both; width:100%; z-index:10000;">
	<div id="templatemo_header"></div>
     <div class="wrapper cf" >
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
 </div>
<div class="wrapper cf" style="margin-top:127px;">
	<a href="index.php" style="border: solid black 1px; position:fixed; left: 0;"><img src="images/CaffeFantastico160x600.png" /><br>Advertisement.</a>
	<a href="index.php" style="border: solid black 1px; position:fixed; right: 0;"><img src="images/TerribleTees160x600.png" /><br>Advertisement.</a>  
		 
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
			<p style="margin-bottom: -4px; text-align: center;">Order Confirmation...</p>
			<img src="images/load3empty.png"/>
		</span><span style="display: inline-block; vertical-align:top;">
			<p style="margin-bottom: -4px; text-align: center;">Receipt!</p>
			<img src="images/load4empty.png"/>
		</span>


            </div

><!-- FORM BEGINS HERE -->
<form action="confirmation.php" method="POST">
<div class ="fieldSet" id="additionalInfo" style="width: 75%; margin: 0 auto;">
	<div id="billing" style=' width: 39%; display:inline-block; background-color:rgb(240,240,240); padding: 20px 40px; border:solid 1px grey;'>
    <table >
      <fieldset id="billingInfo">
        <legend><h3>Billing Info</h3></legend>
		
		<p class="required">* Required </p>
		<tr>
        <td><label class="field" for="billing_firstname"><span>*</span>First Name: </label></td>
        <td><input type="text" id="billing_firstname" name="billFirstName" /></td>
        </tr>
        <tr>
        <td><label class="field" for="billing_lastname"><span>*</span>Last Name: </label></td>
        <td><input type="text" id="billing_lastname" name="billLastName" /></td>
        </tr>
        <tr>
        <td><label class="field" for="billing_address"><span>*</span>Address: </label></td>
        <td><input type="text" id="billing_address" name="billAddress" /></td>
        </tr>
        <tr>
        <td><label class="field" for="billing_city"><span>*</span>City: </label></td>
        <td><input type="text" id="billing_city" name="billCity" /></td>
        </tr>
        <tr>         
        <td><label class="field" for="billing_province"><span>*</span>Province: </label></td>
        <td><select id="billing_province" name="billProvince">
        		<option value="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Manitoba">Manitoba</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Newfoundland">Newfoundland</option>
                <option value="Nova Scotia">Nova Scotia</option>
                <option value="Northwest Territories">Northwest Territories</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Ontario">Ontario</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Yukon">Yukon</option>
        </select></td>
        </tr>
        <tr>                      
        <td><label class="field" for="billing_postal"><span>*</span>Postal Code: </label></td>
        <td><input type="text" id="billing_postal" name="billPostal" /></td>
        </tr>
        <tr>        
        <td><label class="field" for="billing_phonenumber">Phone Number: </label></td>
        <td><input type="text" id="billing_phonenumber" name="billPhone" /></td>
        </tr>
        <tr>
        <td><label class="field" for="billing_email"><span>*</span>Email: </label></td>
        <td><input type="text" id="billing_email" name="billEmail" /></td>
		</tr>
      </fieldset>
      </table>
	</div>
	  
	<div id="shipping"  style='width: 39%; display:inline-block; background-color:rgb(240,240,240); padding: 20px 40px 17px 40px; border:solid 1px grey;'>
    <table>
      <fieldset id="shippingInfo" >
        <legend><h3>Shipping Info</h3></legend>
		
        <input type="checkbox" id="same_as_billing" name="shipSameAddress" value="yes" onClick="disableShipping()" />
        <label id="same_as_billing_label"> Check if same as billing </label> <br>
        <br clear="all" />

		<tr>        
        <td><label class="field" for="shipping_firstname">First Name: </label></td>
        <td><input type="text" id="shipping_firstname" name="shipFirstName" /></td>
        </tr>
        <tr>
        <td><label class="field" for="shipping_lastname">Last Name: </label></td>
        <td><input type="text" id="shipping_lastname" name="shipLastName" /></td>
        </tr>
        <tr>
        <td><label class="field" for="shipping_address">Address: </label></td>
        <td><input type="text" id="shipping_address" name="shipAddress" /></td>
        </tr>
        <tr>
        <td><label class="field" for="shipping_city">City: </label></td>
        <td><input type="text" id="shipping_city" name="shipCity" /></td>
        </tr>
        <tr>
        <td><label class="field" for="shipping_province">Province: </label></td>
        <td><select id="shipping_province" name="shipProvince">
        		<option value="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Manitoba">Manitoba</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Newfoundland">Newfoundland</option>
                <option value="Nova Scotia">Nova Scotia</option>
                <option value="Northwest Territories">Northwest Territories</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Ontario">Ontario</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Yukon">Yukon</option>
        </select></td>
        </tr>
        <tr>
        <td><label class="field" for="shipping_postal">Postal Code: </label></td> 
        <td><input type="text" id="shipping_postal" name="shipPostal" /></td>
        </tr>
        <tr>
        <td><label class="field" for="shipping_phonenumber">Phone Number: </label></td> 
        <td><input type="text" id="shipping_phonenumber" name="shipPhone" /></td>
        </tr>
        <tr>
        <td><label class="field" for="shipping_email">Email: </label></td> 
        <td><input type="text" id="shipping_email" name="shipEmail" /></td>
		</tr>
      </fieldset>
	</table>    
	</div>
</div>

<center>
<div id="creditCard"  style='background-color:rgb(240,240,240); padding: 0px 40px; border:solid 1px grey; width: 673px; margin-top: 8px;'>
		 <table>
		 <fieldset>
		 <legend><h3>Credit Card Information</h3></legend>
		 <tr>
		 <td><label class="field" for="credit_card_type"><span>*</span>Type of Card: </label></td>
			<td><select id="credit_card_type" name="cardType">
				<option  value="MasterCard">MasterCard</option>
				<option  value="Visa">Visa</option>
				<option  value="American Express">American Express</option>
			</select></td>
		</tr>
		<tr>
		<td><label class="field" for="credit_card_number"><span>*</span>Card Number: </label></td>
		<td><input type="text" maxlength="16" id="credit_card_number" name="cardNumber"></td>
		</tr>
		<tr>
		<td><label class="field" for="card_security_code"><span>*</span>CVV (Back of Card): </label></td>
		<td><input type="text" maxlength="4" size="4" id="card_security_code" name="cardCode"></td>
		</tr>
		<tr>
		<td><label class="field"><span>*</span>Card Expiration Date (MM/YYYY): </label></td>
		<td><select id="card_expiry_month" name="cardMonth">
				<option  value="01">01</option>
				<option  value="02">02</option>
				<option  value="03">03</option>
				<option  value="04">04</option>
				<option  value="05">05</option>
				<option  value="06">06</option>
				<option  value="07">07</option>
				<option  value="08">08</option>
				<option  value="09">09</option>
				<option  value="10">10</option>
				<option  value="11">11</option>
				<option  value="12">12</option>
			</select> / 
			<select id="card_expiry_year" name="cardYear">
				<option  value="2014">2014</option>
				<option  value="2015">2015</option>
				<option  value="2016">2016</option>
				<option  value="2017">2017</option>
				<option  value="2018">2018</option>
			</select></td>
		</tr>
		</fieldset>
		</table>

		<button class="clickme" style="margin:15px;" onclick="return validateForm();">Submit</button><br>

</div>
</center>
</form>
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
 
<!-- script for form validation & disable shipping -->
<script type="text/javascript" src="js/billing.js"></script>

</body>
</html>