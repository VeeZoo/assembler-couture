/******************************************************************
*     Validate Form / Disable Shipping - JavaScript Functions	  *
*                                                                 *
*     Author:  Luke Booth & Victoria Zou                  		  *
*******************************************************************/

function validateForm() {

	// get values from billing form
	var billingFirstName = document.getElementById("billing_firstname").value;
	var billingLastName = document.getElementById("billing_lastname").value;
	var billingAddress = document.getElementById("billing_address").value;
	var billingCity = document.getElementById("billing_city").value;
	var billingProvince = document.getElementById("billing_province").value;
	var billingPostal = document.getElementById("billing_postal").value;
	var billingPhone = document.getElementById("billing_phonenumber").value;
	var billingEmail = document.getElementById("billing_email").value;

	// get values from shipping form
	var shippingFirstName = document.getElementById("shipping_firstname").value;
	var shippingLastName = document.getElementById("shipping_lastname").value;
	var shippingAddress = document.getElementById("shipping_address").value;
	var shippingCity = document.getElementById("shipping_city").value;
	var shippingProvince = document.getElementById("shipping_province").value;
	var shippingPostal = document.getElementById("shipping_postal").value;
	var shippingPhone = document.getElementById("shipping_phonenumber").value;
	var shippingEmail = document.getElementById("shipping_email").value;
	
	// get values from credit card form
	var cardType = document.getElementById("credit_card_type").value;
	var cardNumber = document.getElementById("credit_card_number").value;
	var cardCode = document.getElementById("card_security_code").value;

	// get the checkbox value true or false
	var sameAsBillingChecked = document.getElementById("same_as_billing").checked;

	// blank field validation
	var billingHasEmptyFields = false;
	var shippingHasEmptyFields = false;

	if ( billingFirstName == "" ) {
		billingHasEmptyFields = true;
	}
	if ( billingLastName == "" ) {
		billingHasEmptyFields = true;
	}
	if ( billingAddress == "" ) {
		billingHasEmptyFields = true;
	}
	if ( billingCity == "" ) {
		billingHasEmptyFields = true;
	}
	if ( billingProvince == "" ) {
		billingHasEmptyFields = true;
	}
	if ( billingPostal == "" ) {
		billingHasEmptyFields = true;
	}
	if ( billingEmail == "" ) {
		billingHasEmptyFields = true;
	}
	if ( sameAsBillingChecked == true ) {
		shippingHasEmptyFields = false;
	}
	if ( shippingFirstName == "" ) {
		shippingHasEmptyFields = true;
	}
	if ( shippingLastName == "" ) {
		shippingHasEmptyFields = true;
	}
	if ( shippingAddress == "" ) {
		shippingHasEmptyFields = true;
	}
	if ( shippingCity == "" ) {
		shippingHasEmptyFields = true;
	}
	if ( shippingProvince == "" ) {
		shippingHasEmptyFields = true;
	}
	if ( shippingPostal == "" ) {
		shippingHasEmptyFields = true;
	}
	if ( shippingEmail == "" ) {
		shippingHasEmptyFields = true;
	}
	
	// name/city validation
	var regexName = /^[A-Z\s\,\.\'\-]+$/i;
	
	// address validation
	var regexAddress = /^[A-Z0-9\s\,\.\'\-]+$/i;
	
	// postal code validation
	var regexPostal = /^[A-Z]\d[A-Z](\s|\-)?\d[A-Z]\d$/i;
	
	// phone number validation
	var regexPhone = /^([0-9]{7,11}|\s*)$/;
	
	// email validation
	var regexEmail = /^([^@]+)\@([^@]+)\.([^@]+)$/i;
	
	// credit card validation
	var regexCard;
	var regexCode;
	if ( cardType == "MasterCard" ) {
		regexCard = /^5[1-5][0-9]{14}$/;
		regexCode = /^[0-9]{3}$/;
	} else if ( cardType == "Visa" ) {
		regexCard = /^4[0-9]{15}$/;
		regexCode = /^[0-9]{3}$/;
	} else if ( cardType == "American Express" ) {
		regexCard = /^3[47][0-9]{13}$/;
		regexCode = /^[0-9]{4}$/;
	} else {
		alert("Please choose a valid credit card type.")
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
	}

	// if empty fields, fail
	if ( billingHasEmptyFields || shippingHasEmptyFields ) {
		alert( "Please fill in all required fields." );
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid first name, fail
	} else if ( !regexName.test(billingFirstName) ) {
		alert("Please enter a valid first name.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
	
	// if invalid last name, fail
	} else if ( !regexName.test(billingLastName) ) {
		alert("Please enter a valid last name.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid city name, fail
	} else if ( !regexName.test(billingCity) ) {
		alert("Please enter a valid city.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid address, fail
	} else if ( !regexAddress.test(billingAddress) ) {
		alert("Please enter a valid address.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid postal code, fail
	} else if ( !regexPostal.test(billingPostal) ) {
		alert("Please enter a valid postal code.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid phone number, fail
	} else if ( !regexPhone.test(billingPhone) ) {
		alert("Please enter a valid phone number or leave blank.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;

	// if invalid email, fail
	} else if ( !regexEmail.test(billingEmail) ) {
		alert("Please enter a valid email address.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
		// if invalid first name, fail
	} else if ( !regexName.test(shippingFirstName) ) {
		alert("Please enter a valid first name.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
	
	// if invalid last name, fail
	} else if ( !regexName.test(shippingLastName) ) {
		alert("Please enter a valid last name.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid city name, fail
	} else if ( !regexName.test(shippingCity) ) {
		alert("Please enter a valid city.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid address, fail
	} else if ( !regexAddress.test(shippingAddress) ) {
		alert("Please enter a valid address.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid postal code, fail
	} else if ( !regexPostal.test(shippingPostal) ) {
		alert("Please enter a valid postal code.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid phone number, fail
	} else if ( !regexPhone.test(shippingPhone) ) {
		alert("Please enter a valid phone number or leave blank.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;

	// if invalid email, fail
	} else if ( !regexEmail.test(shippingEmail) ) {
		alert("Please enter a valid email address.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;

	// if invalid credit card, fail
	} else if ( !regexCard.test(cardNumber) ) {
		alert("Please enter a valid credit card number.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// if invalid security code, fail
	} else if ( !regexCode.test(cardCode) ) {
		alert("Please enter a valid CVV.");
		if (window.event) { window.event.returnValue=false; return false;
		} else { return false; }
		event.returnValue=false;
		
	// all checks passed, success
	}else{

	}
}

function disableShipping(){
  
	document.getElementById("shipping_firstname").disabled = !document.getElementById("shipping_firstname").disabled;
	document.getElementById("shipping_lastname").disabled = !document.getElementById("shipping_lastname").disabled;
	document.getElementById("shipping_address").disabled = !document.getElementById("shipping_address").disabled;
	document.getElementById("shipping_city").disabled = !document.getElementById("shipping_city").disabled;
	document.getElementById("shipping_province").disabled = !document.getElementById("shipping_province").disabled;
	document.getElementById("shipping_postal").disabled = !document.getElementById("shipping_postal").disabled;
	document.getElementById("shipping_phonenumber").disabled = !document.getElementById("shipping_phonenumber").disabled;
	document.getElementById("shipping_email").disabled = !document.getElementById("shipping_email").disabled;
	
	if ( document.getElementById("same_as_billing").checked ) {
	// if the "same as billing" checkbox is checked off, 
		document.getElementById("shipping_firstname").value = document.getElementById("billing_firstname").value;
		document.getElementById("shipping_lastname").value = document.getElementById("billing_lastname").value;
		document.getElementById("shipping_address").value = document.getElementById("billing_address").value;
		document.getElementById("shipping_city").value = document.getElementById("billing_city").value;
		document.getElementById("shipping_province").value = document.getElementById("billing_province").value;
		document.getElementById("shipping_postal").value = document.getElementById("billing_postal").value;
		document.getElementById("shipping_phonenumber").value = document.getElementById("billing_phonenumber").value;
		document.getElementById("shipping_email").value = document.getElementById("billing_email").value;

		document.getElementById("shipping_firstname").style.backgroundColor = "silver";
		document.getElementById("shipping_lastname").style.backgroundColor = "silver";
		document.getElementById("shipping_address").style.backgroundColor = "silver";
		document.getElementById("shipping_city").style.backgroundColor = "silver";
		document.getElementById("shipping_province").style.backgroundColor = "silver";
		document.getElementById("shipping_postal").style.backgroundColor = "silver";
		document.getElementById("shipping_phonenumber").style.backgroundColor = "silver";
		document.getElementById("shipping_email").style.backgroundColor = "silver";		
	}else{
	// let someone type a shipping address
		document.getElementById("shipping_firstname").value = "";
		document.getElementById("shipping_lastname").value = "";
		document.getElementById("shipping_address").value = "";
		document.getElementById("shipping_city").value = "";
		document.getElementById("shipping_province").value = "";
		document.getElementById("shipping_postal").value = "";
		document.getElementById("shipping_phonenumber").value = "";
		document.getElementById("shipping_email").value = "";
		
		document.getElementById("shipping_firstname").style.backgroundColor = "white";
		document.getElementById("shipping_lastname").style.backgroundColor = "white";
		document.getElementById("shipping_address").style.backgroundColor = "white";
		document.getElementById("shipping_city").style.backgroundColor = "white";
		document.getElementById("shipping_province").style.backgroundColor = "white";
		document.getElementById("shipping_postal").style.backgroundColor = "white";
		document.getElementById("shipping_phonenumber").style.backgroundColor = "white";
		document.getElementById("shipping_email").style.backgroundColor = "white";	
	}
}
