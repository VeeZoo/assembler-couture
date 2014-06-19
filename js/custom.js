// JavaScript Document
jQuery(document).ready(function($) {
//##########################################
	// The Devilish Combo Navigator lol
	//##########################################	
		
	// Create the dropdown base
	$("<select id='comboNav' />").appendTo("#combo-holder");
	
	// Create default option "Go to..."
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Navigation"
	}).appendTo("#combo-holder select");
	
	// Populate dropdown with menu items
	$("#nav a").each(function() {
		var el = $(this);		
		var label = $(this).parent().parent().attr('id');
		var sub = (label == 'nav') ? '' : '- ';
		
		$("<option />", {
		 "value"   : el.attr("href"),
		 "text"    :  sub + el.text()
		}).appendTo("#combo-holder select");
	});

	
	
	// This is for the action of the Combo Navigator
	
	$("#comboNav").change(function() {
	  location = this.options[this.selectedIndex].value;
	});
	// Slider
	// goto top	
	
$('#gotop').click(function () {
  $('html,body').animate({
    scrollTop: 0
  }, 1000);
  return false;
});
	});//close	