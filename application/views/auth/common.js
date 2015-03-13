//////admin login code for validation and ajax form submit/////////////////
$(document).ready(function(){
	
	
		
	/////////////// Add REP Form ///////////////////
	$("#register_form").validate({
	    rules: {
	    	firstName:  {
	            required: true,
	            lettersonly: true
		    },
		    lastName:  {
	            required: true,
	            lettersonly: true
		    },
		    user_type: "required",
		    //dob: "required",
		    userName: "required",
		    passwd: "required",
		    conf_passwd: {
		    	equalTo: "#passwd"
		    	},
		    email: {
	 		  required: true,
	            email: true  
	 	   },
	 	  phone: {
	            required: true,
	            alphanumeric:true
		    }
	    },
	    messages: {
	    	firstName:{
	            required:  "Please enter first name",
	            lettersonly:"Please enter alphabets only"
	        }, 
        lastName:{
            required:  "Please enter last name",
            lettersonly:"Please enter alphabets only"
        }, 
        user_type: "Please select type of user",
        //dob: "Please enter date of birth",
        userName: "Please enter username",
        passwd:  "Please enter Password",
        conf_passwd: {
	    	equalTo: "Password should be same"
	    	},
       email:  {
		   required: "Please enter   Email",
            email: "Please enter valid  Email"  
	   },
	   phone: {
            required: "Please enter number",
            alphanumeric:"Please enter alphanumeric only"
        }
	    },
	    submitHandler: function(form) {
	 	    var dataString = $('#register_form').serialize();
	
			$.ajax({
				type: "POST",
				url: root+"handler.php",
				data: dataString,
				cache: false,
				beforeSend: function()
				{
					$('#showLoder').show();	
					$('#register').attr("disabled",true);
			    },
				success: function(data)
				{
					$('#register').attr("disabled",false);
					$('#showLoder').hide();
				  if($.trim(data) == "success")
					{
						$('#errors').html('<span style="color:green;">User has been added successfully.</span>').show();
						 setTimeout(function() {
						   window.location.href = root+"login.php"
						  }, 3000);
					}
					else 
					{
						$('#errors').html('<span style="color:red;">Error! Please try again.</span>').show();
					}
				}
			}); 
	    }
	});
/////////////// Add Event  Form ///////////////////
	$("#event_form").validate({
	    rules: {
	    	eventName:  {
	            required: true
		    },
		    title:  {
	            required: true
		    },
		    description: "required",
		    candidate_image: "required",
		    schedule_date: "required",
		    schedule_time: "required",
		    passwd: "required",
		    conf_passwd: {
		    	equalTo: "#passwd"
		    	},
		    email: {
	 		  required: true,
	            email: true  
	 	   },
	 	  phone: {
	            required: true,
	            alphanumeric:true
		    },
		    event_type:"required"
	    },
	    messages: {
	    	eventName:{
	            required:  "Please enter event name"
	        }, 
	        title:{
            required:  "Please enter title"
        }, 
        candidate_image: "Please choose event Image",
        description: "Please enter description",
        schedule_date: "Please select date",
        schedule_time: "Please select time",
        passwd:  "Please enter Password",
        conf_passwd: {
	    	equalTo: "Password should be same"
	    	},
       email:  {
		   required: "Please enter   Email",
            email: "Please enter valid  Email"  
	   },
	   phone: {
            required: "Please enter number",
            alphanumeric:"Please enter alphanumeric only"
        },
        event_type:{
        	required: "Please select event type"
        }
	    },
	    submitHandler: function(form) {
	 	    var dataString = $('#event_form').serialize();
	//alert(dataString);
			$.ajax({
				type: "POST",
				url: root+"handler.php",
				data: dataString,
				cache: false,
				beforeSend: function()
				{
					$('#showLoder').show();	
					$('#add_event').attr("disabled",true);
			    },
				success: function(data)
				{//alert(data);
					$('#add_event').attr("disabled",false);
					$('#showLoder').hide();
				    if($.trim(data) == "success")
					{
				    	
						$('#errors').html('<span style="color:Green;">Event has been added successfully.</span>').show();
						
						
					}
					else 
					{
						$('#errors').html('<span style="color:red;">Error! Please try again.</span>').show();
					}
				}
			}); 
	    }
	});
	jQuery.validator.addMethod("lettersonly", function(value, element) {
		return  this.optional(element) || /^[a-z\s]*$/i.test(value);
		}, "Letters only please");
	
	/////Functio to add category Validation /////////////////////////
	$("#login_form").validate({
	    rules: {
	    	userName: {
	            required: true
		    },
		    passwd: {
	            required: true
		    },
		    user_type: "required"
	    },
	    messages: {
	    	userName: {
	            required: "Please enter Username name"
	        } ,
	        user_type: "Please select type of user",
	        passwd: {
	            required: "Please enter password"
	        } 
	    },
	    submitHandler: function(form) {
			var dataString = $('#login_form').serialize();
			$.ajax({
				type: "POST",
				url: root+"handler.php",
				data: dataString,
				cache: false,
				beforeSend: function(){
				$('#showLoder').show();	
			    },
				success: function(data){
				$('#showLoder').hide();	
					if($.trim(data)=="success")
					{
						window.location = root+"scheduled_sessions.php";
					}
					else if($.trim(data)=="failed")
					{
						$('#errors').html('<span style="color:red;">Either email or password is incorrect.Please try again.</span>').show();
					}
					else 
					{
						$('#errors').html('<span style="color:white;">Error! Please try again.</span>').show();
					}
					
					}
				});
	     }
	});
	
	
	
		

});

  