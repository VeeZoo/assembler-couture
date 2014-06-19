/******************************************************************
*     Add Product to Cart - JavaScript Functions			      *
*                                                                 *
*     Author:  Victoria Zou                   					  *
*******************************************************************/

/* This function defines the required event listeners for the
   various form elements.
*/

window.onload = function () {
    var elem;
    // Define event listeners for the size radio buttons.
    var radios = document.getElementsByName("prodsize");
    for (var i = 0, max = radios.length; i < max; i++) {
        elem = radios[i];
        if (elem) {
            elem.addEventListener("click", changeSize, false);
        } else {
            alert('error');
        }
    }	
}  /* end function window.onload */

/******************************************************************/
var currentSize = "small";
var currentColor = document.getElementById('color1').innerHTML;

function changeSize() {
/* Determine which of the three radio buttons was
clicked by user by finding the one having the checked property. */

	var radioElements = document.getElementsByName("prodsize");
	var radioValue = 0;

	for (var i=0; i < radioElements.length; i++ ) {
		if (radioElements[i].checked) {
			radioValue = radioElements[i].value;
			break;
		}
	}
	currentSize = radioValue;
}

function changeColor1() {
	document.getElementById('image2').style.display='none';
	document.getElementById('image1').style.display='';
	currentColor = document.getElementById('color1').innerHTML;
}

function changeColor2() {
	document.getElementById('image1').style.display='none';
	document.getElementById('image2').style.display='';
	currentColor = document.getElementById('color2').innerHTML;
}

function addToCart() {

	var sizeCode = "";
	var colorCode = "";

	if (currentSize == "small") {
		sizeCode = "S";
	} else if (currentSize == "medium") {
		sizeCode = "M";
	} else if (currentSize == "large") {
		sizeCode = "L";
	} else {
		sizeCode = "S";
	}
	
	if (currentColor == "Black") {
		colorCode = "K";
	} else if (currentColor == "Blue") {
		colorCode = "B";
	} else if (currentColor == "Green") {
		colorCode = "G";
	} else if (currentColor == "Grey") {
		colorCode = "E";
	} else if (currentColor == "Pink") {
		colorCode = "P";
	} else if (currentColor == "Red") {
		colorCode = "R";
	} else if (currentColor == "Yellow") {
		colorCode = "Y";
	} else {
		colorCode = "error";
	}
	
	var currentCode = document.getElementById('productcode').value;
	var productCode = currentCode + colorCode + sizeCode;
	var url = "cart.php?id=199" + productCode + "&act=add";

	window.location.href = url;
}



