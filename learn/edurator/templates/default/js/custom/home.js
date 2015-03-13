var home = {
    setEvents:function () {
     $('.gmlogin').on('click',function(){
	     home.gmlogin();
	 } );
   },
   
   gmlogin:function(){
            var accessToken;
			var config = {
				'client_id': '813658188281.apps.googleusercontent.com',
				'scope': 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
				//'scope': 'https://www.googleapis.com/auth/userinfo.email' 
			}; 	
		
           home.auth(config);			
		},
    auth:function(config) {
		gapi.auth.authorize(config, function() {
        accessToken = gapi.auth.getToken().access_token;
        home.validateToken();
               
     });
 },
 
 validateToken:function() {
		$.ajax({
			url: 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=' + accessToken,
			data: null,
			success: function(response){  
				home.getUserInfo();
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
									$.post('http://tavaroti.com/auth/social_login',dataString,function(data){
									 
									   if(data =="SUCCESS"){
										  window.location.href='/';
									  
										 }else{
										  window.location.href='/';
										 }
									  });
             
        },
        dataType: "jsonp"
    });
}     
    
}