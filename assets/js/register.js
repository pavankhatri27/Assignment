/**
 * File : admin.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 */

$(document).ready(function(){
	
	var addadminForm = $("#registerForm");
	
	var validator = addadminForm.validate({
		
		rules:{
			fname :{ required : true },
			lname :{ required : true },
			age : { required : true, digits : true },
			email : { required : true, email : true, remote : { url : baseURL + "Assignment/checkEmailExists", type :"post"} },
			password : { required : true },
			confirmPassword : { required : true, equalTo: "#password" },
			Address :{ required : true },
			contact : { required : true, digits : true },
			profile : { required : true },
			resume : { required : true },
		},
		messages:{
			fname :{ required : "This First Name is required" },
			lname :{ required : "This Last Name is required" },
			age : { required : "This Age is required", digits : "Please enter Numbers only" },
			email : { required : "This Email address is required", email : "Please enter valid Email address", remote : "Email already taken" },
			password : { required : "This Password is required" },
			confirmPassword : {required : "This Confirm Password is required", equalTo: "Please enter same Password" },
			Address : { required : "The Address is required"},
			contact : { required : "This Phone No. is required", digits : "Please enter Numbers only" },
			profile : { required : "This Profile is required"},
			resume : { required : "This Resume is required" },
		}
	});
});
