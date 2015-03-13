var login={
	
	execute:function(){
	/*js code should placed here for validation and all js things*/
	$('.gmlogin').on('click',function(){
	     login.gmlogin();
	 } );
   },
   
   gmlogin:function(){
            var accessToken;
			var config = {
				'client_id': '813658188281.apps.googleusercontent.com',
				'scope': 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
				//'scope': 'https://www.googleapis.com/auth/userinfo.email' 
			}; 	
		
           login.auth(config);			
		},
    auth:function(config) {
		gapi.auth.authorize(config, function() {
        accessToken = gapi.auth.getToken().access_token;
        login.validateToken();
               
     });
	 },
	 
	 
	 validateToken:function() {
		$.ajax({
			url: 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=' + accessToken,
			data: null,
			success: function(response){  
				login.getUserInfo();
			},  
			error: function(error) {
			},
			dataType: "jsonp" 
		});
	},
   
   getUserInfo:function() {
       $.ajax({
        url: 'https://www.googleapis.com/oauth2/v1/userinfo?access_token=' + accessToken,
        data: null,
        success: function(response) {
            console.log(response);
			alert(response.email);
			var name=response.given_name+" "+response.family_name;
									var dataString ='name='+name+'&email='+response.email+'&social_id='+response.id;
									$.post('/auth/social_login/google',dataString,function(data){
									 
									   if(data =="SUCCESS"){
										  window.location.href='/';
									  
										 }else{
										  window.location.href='/register';
										 }
									  });
             
        },
        dataType: "jsonp"
    });
	}



}


/**************************facebook login code***************************/
window.fbAsyncInit = function() {
        FB.init({
          appId: '175932012590484',         // appId: '499639700115508',
          cookie: true,
          xfbml: true,
          oauth: true
        });
        FB.Event.subscribe('auth.login', function(response) {
		//console.log(response);
		  //window.location.href='/users/register';
        });
        // FB.Event.subscribe('auth.logout', function(response) {
        // });
      };
      (function(d){
      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
	  js.src = "//connect.facebook.net/en_US/all.js#appId=175932012590484&amp;xfbml=1";
      d.getElementsByTagName('head')[0].appendChild(js);
    }(document));
	

function fblogin()
{
	FB.login(function(response) {
				if (response.authResponse) {
					FB.api('/me', function(response) {
					console.log(response);
					//var facebook ='facebook';
					console.log("https://graph.facebook.com/"+response.id+"/picture?type=large");
					var dataString ='name='+response.name+ '&email='+response.email+'&social_id='+response.id+'&birthday='+response.birthday;
				     $.post('/auth/social_login/facebook',dataString,function(data){
					 console.log(data);
						if(data =="SUCCESS")
						{
							window.location.href='/';	  
						}
						else if(data == "FIRSTSUCCESS")
						{
							window.location.href='/profile';
						}
						else
						{
						   window.location.href='/register';
						}
					  });	
					
					});  
			} 
	}, {perms:'publish_stream,offline_access,manage_pages,email,user_birthday'});
}