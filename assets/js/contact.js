$(document).ready(function(){
	
	var addadminForm = $("#contactForm");
	
	var validator = addadminForm.validate({
		
		rules:{
			contactName :{ required : true },
			contactEmail : { required : true, email : true },
			contactPhone : { required : true, digits : true },
			contactSubject : { required : true },
			contactMessage : { required : true },
		},
		messages:{
			contactName :{ required : "This Name is required" },
			contactEmail : { required : "This Email address is required", email : "Please enter valid Email address" },
			contactPhone : { required : "This Phone No. is required", digits : "Please enter Numbers only" },
			contactSubject : { required : "This Subject is required"},
			contactMessage : { required : "This Message is required" },
		}
	});
});
