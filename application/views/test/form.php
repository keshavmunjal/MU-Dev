<br /><br ><br />
<div id="stylized" class="dap_direct_signup_form">
  <form id="dap_direct_signup" name="dap_direct_signup" method="post" action="http://myieltsgurus.com/dap/signup_submit.php">
 <label>First Name</label>
 <input type="text" name="first_name" id="first_name" />
 <label>Email</label>
 <input type="text" name="email" id="email" />
 <button type="submit">Sign Up</button>
   <input type="hidden" name="productId" value="3" />
   <input type="hidden" name="redirect" value="http://myieltsgurus.com/staging/login/ ?msg=SUCCESS_CREATION" />
  </form>
</div>
<br /><br ><br />

<a href="http://meetuniv.com/assets/inDepthAnalysisFpdf.php">Click here to download your pdf</a><br/><br/>
<?php
$title=urlencode('Gifted: Report');
$url=urlencode('http://meetuniv.com/gifted/report');
$summary=urlencode('Custom message that summarizes what your tab is about, or just a simple message to tell people to check out your tab.');
$image=urlencode('http://meetuniv.com/assets/img/gifted.jpg');
?>
<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">Insert text or an image here.</a>

<a href="#" onclick="FBShareOp();">/Share on Fb</a>
<script type="application/javascript">
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '573246749399495',                            
      status     : true,                                 
      xfbml      : true                                  
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

function FBShareOp(){
	var product_name   = 	"I'm a Dlophin! What animal are you?";
	var description	   =	"Take the gifted Quiz to find out what animal personality you are. Discover what makes you tick, what you're naturally good at, and what careers may suit you.";
	var share_image	   =	'http://meetuniv.com/assets/img/gifted.jpg';
	var share_url	   =	'http://meetuniv.com/gifted/report';	
        var share_capt     =    'caption';
    FB.ui({
        method: 'feed',
        name: product_name,
        link: share_url,
        picture: share_image,
        caption: share_capt,
        description: description

    }, function(response) {
        if(response && response.post_id){}
        else{}
    });

}

</script>
