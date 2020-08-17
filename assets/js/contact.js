/**
 * File : admin.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 */

$(document).ready(function(){
	
	var addadminForm = $("#contactForm");
	
	var validator = addadminForm.validate({
		
		rules:{
			contact-name :{ required : true },
			contact-email : { required : true, email : true },
			contact-phone : { required : true, digits : true },
			contact-subject : { required : true },
			contact-message : { required : true },
		},
		messages:{
			contact-name :{ required : "This Name is required" },
			contact-email : { required : "This Email address is required", email : "Please enter valid Email address" },
			contact-phone : { required : "This Phone No. is required", digits : "Please enter Numbers only" },
			contact-subject : { required : "This Subject is required"},
			contact-message : { required : "This Message is required" },
		}
	});
});
