<!--Demo modal--->
<?php //echo "<pre>";print_r($_GET);exit;?>
<div id="demoModal" class="modal hide fade">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Confirmation Message
    </div>
	<div class="modal-body">
			<form action="#" method="post" name="frm" id="getCouponCode">
				<div class="control-group">
					<div class="controls">
					  <h5>Congrats on sharing it with your friends !</h5><br/>
					  <h6>Please check your email.</h6>
					  
					</div>
				</div>
			</form>
	</div>
    <div class="modal-footer">
    <p style="font-size:20px;margin-left:240px;"><a href="" data-dismiss="modal">Thanks !</a></p>
    </div>
</div>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
 <style>
	  .standard:hover{background:#f7f7f3;}
	  .standard{background:#fff;}
	  .pro:hover{background:#f7f7f3;}
	  .pro{background:#fff;}
	  </style>
	  
	 
<style>

.roi-lbl{border:1px solid #ccc; padding:5px 10px; margin-left: 348px; width: 69px; font-size:15px; font-weight:bold; color:#00ba84;margin-left: 188px; }

.roi{padding-bottom:40px; overlow:hidden;}

.roi h4{font-weight:bold !important;}



.pro{border:1px solid #ccc; overflow:hidden; padding-left:25px; padding-top:39px; margin:34px 21px 25px 0; width:260px; height: 774px;}

input[type="button"].roi-button{background:#00ba84; width:266px !important; border-radius:5px; line-height:59px; border:0; color:#fff !important; font-weight:bold; font-size:21px; margin-top:2px; margin-left: -15px;}

.st-price{margin-top:16px; padding-top: 19px; padding-bottom: 14px; padding-left: 47px; background: url(assets/images/roi-bullets.jpg) no-repeat; color: #00ba84;  font-size: 49px; font-weight: bold;} 

.pro-price{margin-top:16px; padding-top: 19px; padding-bottom: 14px; padding-left: 47px; background: url(assets/images/roi-bullets2.jpg) no-repeat; color: #00ba84; font-size: 49px; font-weight: bold;} 

.st-price span{font-size:29px; color:#aaaaaa; font-weight:normal;}

.pro-price span{font-size:29px; color:#aaaaaa; font-weight:normal;}



.roi ul{margin:33px 0 0 0	}

.pro ul li{line-height:29px; letter-spacing: 1px; color: #aaaaaa; font-size: 19px; padding-top: 3px; background: url(assets/images/roi-bullets2.jpg) no-repeat; padding-left: 24ssspx; list-style: none; margin:4px 0; }

.standard{border:1px solid #ccc; overflow:hidden;padding:45px 0 45px 25px;width:260px; margin:32px 13px 25px 0; }
.prf{border:1px solid #ccc; overflow:hidden;padding:45px 0 45px 25px;width:260px; margin:34px 13px 25px 0; }

.standard ul li{line-height:29px; letter-spacing: 1px; color: #aaaaaa; font-size: 19px; padding-top: 3px; background: url(assets/images/roi-bullets.jpg) no-repeat; padding-left: 0px; list-style: none; margin:7px 0; }
 
 .prf ul li{line-height:29px; letter-spacing: 1px; color: #aaaaaa; font-size: 19px; padding-top: 3px; background: url(assets/images/roi-bullets.jpg) no-repeat; padding-left: 19px; list-style: none; margin:7px 0; padding-bottom: 25px; }
 
 .text{margin-top: 20px;
margin-bottom: -26px;margin-left: 13px;}
 .icon_text{font-size: 10px;
margin-left: -12px;}
.line{font-size:10px !important;line-height :21px!important;}
.icon{float:right;margin-right:20px !important;}
</style>
<!--Modal box upgrade499-->
<div id="upgrade499" class="modal hide fade" style="width: 800px;margin-left: -452px;">
	
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4><img src="<?php echo base_url()?>assets/images/pshycometric_img/shopping_cart.png"> My Cart</h4>
	<table class="table">
        <thead>
          <tr>
            <th width="200px">Plan</th>
            <th width="300px">DESCRIPTION</th>
            <th>PRICE</th>            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="80px">Standard</td>
            <td width="1200px" style="margin-right:153px; padding-right: 190px;">In-Depth personality analysis, Career Path, Your Strengths and weakness, Your Work Values analysis, Interest Mapping, One Telephonic session with our career Expert. </td>
            <td width="110px">Rs.499</td>
          </tr>
        </tbody>
      </table>
	  <form method="post" name="form">
		<input type="checkbox" id="myCheckbox" style="margin-bottom:7px;margin-left: 10px;">&nbsp;&nbsp;<span style="font-size:13px;">I have a coupon code !</span>
		<div id="textBoxShow">
		<input type="text" class="span3" id="coupon_code" placeholder="enter cupon code here" style="margin-left: 9px;height: 14px;width: 150px;">
	  <button type="submit" class="btn" id="submit" style="margin-top:-10px;height: 26px;">Apply</button>
	  </div>
	  <span id="errorMessage" style="color:red;"></span>
	  <span id="successMessage" style="color:green;"></span>
	</form>
		<h4 class="pull-right" style="margin-right: 40px;">Amount Payable</h4>
		<div class="clearfix"></div>
		
		<p class="pull-right" id="getValue" style="margin-right: 40px;">Rs 499</p>
		<p class="pull-right" id="free" style="margin-right: 40px; display:none;">Rs 00</p>
		<p class="pull-right" id="getDiscount" style="margin-right: 40px; display:none;">Rs 99</p>
		<div class="clearfix"></div>
		</div>
 <?php 
 $userId=$this->tank_auth->get_user_id();
		if(!$userId)
		{
			echo "error";exit;
		}
		$userDetail = $this->quizmodel->getUserInfo($userId);
		
	$graphVal = $_GET['graphVal'];
	$graph1 = $_GET['graph1'];
	$graph2 = $_GET['graph2'];
?>
  <div class="modal-footer" id="proceedToPay">
    <button class="btn" data-dismiss="modal" aria-hidden="true" style="margin-right: 2px;">GO BACK</button>
	<form method="post" action="<?php echo base_url()?>ccavenue/Checkout.php" style="float: right;margin-top: 0px;">
	<input type="hidden" name="marchant_id" value="STANDARD">
	<input type="hidden" name="order_id" value="<?php echo uniqid();?>">
	<input type="hidden" name="cust_name" value="<?php echo $userDetail[0]['fullname'];?>">
	<input type="hidden" name="cust_email" value="<?php echo $userDetail[0]['email'];?>">
	<input type="hidden" name="cust_mobile" value="<?php echo $userDetail[0]['mobile'];?>">
	<input type="hidden" name="amount" value="499">
    <button class="btn btn-primary">PROCEED TO PAYMENT</button>
	</form>
  </div>
  <div class="modal-footer" id="downloadPdf" style="display:none;">
    <a href="<?php echo base_url()?>assets/inDepthAnalysisFpdf.php?value=<?php echo $_GET['graphVal']; ?>&graph1=<?php echo $_GET['graph1']; ?>&graph2=<?php echo $_GET['graph2']; ?>" target="_blank" class="btn">Download</a>
  </div>
	
</div>
<!--Modal box upgrade1999-->
<div id="upgrade1999" class="modal hide fade" style="width: 885px;margin-left: -452px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4><img src="<?php echo base_url()?>assets/images/pshycometric_img/shopping_cart.png"> My Cart</h4>
	<table class="table">
        <thead>
          <tr>
            <th width="200px">Plan</th>
            <th width="300px">DESCRIPTION</th>
            <th>PRICE</th>            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="80px">Professional</td>
            <td width="1200px" style="margin-right:153px;padding-right: 190px;">Standard +, 3 Telephonic counselling sessions with our career Expert, 1 year email and chat support </td>
            <td width="110px">Rs.1999</td>
          </tr>
        </tbody>
      </table>
	  <form method="post" name="form">
		<input type="checkbox" id="myCheckbox1" style="margin-bottom:7px;margin-left: 10px;">&nbsp;&nbsp;<span style="font-size:13px;">I have a coupon code !</span>
		<div id="textBoxShow1">
		<input type="text" class="span3" id="coupon_code1" placeholder="enter cupon code here" style="margin-left: 9px;height: 14px;width: 150px;">
	  <button type="submit" class="btn" id="submit1" style="margin-top:-10px;height: 26px;">Apply</button>
	  </div>
	  <span id="errorMessage1" style="color:red;"></span>
	</form>
		<h4 class="pull-right" style="margin-right: 40px;">Amount Payable</h4>
		<div class="clearfix"></div>
		
		<p class="pull-right" id="getValue" style="margin-right: 40px;">Rs 1999</p>
		<!--<p class="pull-right" id="getDiscount" style="margin-right: 40px; display:none;">Rs 10</p>-->
		<div class="clearfix"></div>
	</div>
 
  <div class="modal-footer" id="proceedToPay">
    <button class="btn" data-dismiss="modal" aria-hidden="true">GO BACK</button>
	<form method="post" action="<?php echo base_url()?>ccavenue/Checkout.php" style="float: right;margin-top: 0px;">
	<input type="hidden" name="marchant_id" value="STANDARD1">
	<input type="hidden" name="order_id" value="<?php echo uniqid();?>">
	<input type="hidden" name="cust_name" value="<?php echo $userDetail[0]['fullname'];?>">
	<input type="hidden" name="cust_email" value="<?php echo $userDetail[0]['email'];?>">
	<input type="hidden" name="cust_mobile" value="<?php echo $userDetail[0]['mobile'];?>">
	<input type="hidden" name="url" value="<?php echo 'http://meetuniv.com/assets/inDepthAnalysisFpdf.php?value='.$_GET['graphVal'];?>">
	<input type="hidden" name="amount" value="1999">
	 <button class="btn btn-primary">PROCEED TO PAYMENT</button>
	</form>
	</div>
  <!--<div class="modal-footer" id="downloadPdf" style="display:none;">
    <a href="#" class="btn">Downloadd</a>
  </div>-->
 </div>
	
<!--Modal box upgrade4999-->
<div id="upgrade4999" class="modal hide fade" style="width: 885px;margin-left: -452px;">
	<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4><img src="<?php echo base_url()?>assets/images/pshycometric_img/shopping_cart.png"> My Cart</h4>
	<table class="table">
        <thead>
          <tr>
            <th width="200px">Plan</th>
            <th width="300px">DESCRIPTION</th>
            <th>PRICE</th>            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="80px">Ultimate</td>
            <td width="1200px" style="margin-right:153px;padding-right: 190px;">Professional +, 30 min long Video session with our career expert, 1 year complete anytime counselling with telephonic and video support, Full Data Security</td>
            <td width="110px">Rs.4999</td>
          </tr>
        </tbody>
      </table>
	  <form method="post" name="form">
		<input type="checkbox" id="myCheckbox2" style="margin-bottom:7px;margin-left: 10px;">&nbsp;&nbsp;<span style="font-size:13px;">I have a coupon code !</span>
		<div id="textBoxShow2">
		<input type="text" class="span3" id="coupon_code2" placeholder="enter cupon code here" style="margin-left: 9px;height: 14px;width: 150px;">
	  <button type="submit" class="btn" id="submit2" style="margin-top:-10px;height: 26px;">Apply</button>
	  </div>
	  <span id="errorMessage2" style="color:red;"></span>
	</form>
		<h4 class="pull-right" style="margin-right: 40px;">Amount Payable</h4>
		<div class="clearfix"></div>
		
		<p class="pull-right" id="getValue" style="margin-right: 40px;">Rs 4999</p>
		<!--<p class="pull-right" id="getDiscount" style="margin-right: 40px; display:none;">Rs 10</p>-->
		<div class="clearfix"></div>
	</div>
 
  <div class="modal-footer" id="proceedToPay">
    <button class="btn" data-dismiss="modal" aria-hidden="true">GO BACK</button>
	<form method="post" action="<?php echo base_url()?>ccavenue/Checkout.php" style="float: right;margin-top: 0px;">
	<input type="hidden" name="marchant_id" value="STANDARD1">
	<input type="hidden" name="order_id" value="<?php echo uniqid();?>">
	<input type="hidden" name="cust_name" value="<?php echo $userDetail[0]['fullname'];?>">
	<input type="hidden" name="cust_email" value="<?php echo $userDetail[0]['email'];?>">
	<input type="hidden" name="cust_mobile" value="<?php echo $userDetail[0]['mobile'];?>">
	<input type="hidden" name="url" value="<?php echo 'http://meetuniv.com/assets/inDepthAnalysisFpdf.php?value='.$_GET['graphVal'];?>">
	<input type="hidden" name="amount" value="4999">
    <button class="btn btn-primary">PROCEED TO PAYMENT</button>
	</form>
  </div>
  <!--<div class="modal-footer" id="downloadPdf" style="display:none;">
    <a href="#" class="btn">Downloadd</a>
  </div>-->
</div>
<!--main-->
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <!--<ul class="breadcrumb univ_breadcrumb">
                  <li><a href="http://meetuniv.com/">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li><a href="http://meetuniv.com/college">College Search</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li class="active">Northumbria University</li>
               </ul>-->
			   
			   <div class="span12">
					<div class="row">
					   <div class="span4 roi pull-left	">
					   <div class="border-line pull-left">
							<div class="standard">
								<h4>Standard</h4>
								<p class="st-price"> <i class="fa fa-inr"></i> 499<span>  </span></p>
								<ul>
									<li> <i class="fa fa-check"></i> In-Depth personality analysis</li>
									<li> <i class="fa fa-check"></i> Career Path </li>
									<li> <i class="fa fa-check"></i> Your Strengths and weakness</li>
									<li> <i class="fa fa-check"></i> Your Work Values analysis</li>
									<li> <i class="fa fa-check"></i> Interest Mapping</li>
									<li> <i class="fa fa-check"></i> One Telephonic session with our career Expert</li>
									<li>
									<div class="textshare" style="color: #25BB85;;font-size: 11px !important;"><b>SHARE IT TO YOUR FRIENDS AND GET IT FOR</b>
									<span style="color: red;font-size: 17px !important;"><i><b>&nbspFREE</b></i> </span>
									</div>
									</li> 
									<li>  
									
									<!----Facebook API---->
									<a href="#" onClick="FBShareOp(); return false;"><input type="image" src="<?php echo base_url()?>assets/images/pshycometric_img/facebook.png" style="margin-left: 66px;margin-top: -13px;" ></a>
									
									<!----Twitter API---->
									<a id="ref_tw" href="http://twitter.com/home?status=<?php 
								   if($_GET['graphVal'] == '1'){
									echo "I'm a Eagle! What animal are you? Take the gifted Quiz to find out what animal personality you are...!"; 
								   }else if($_GET['graphVal'] == '2'){
									echo "I'm a Bear! What animal are you? Take the gifted Quiz to find out what animal personality you are...!";
								   }else if($_GET['graphVal'] == '3'){
									echo "I'm a Dolphin! What animal are you? Take the gifted Quiz to find out what animal personality you are...!";
								   }else if($_GET['graphVal'] == '4'){
									echo "I'm a Lion! What animal are you? Take the gifted Quiz to find out what animal personality you are...!";
								   }
								   ?>+<?php echo 'http://meetuniv.com/gifted-intro';?>"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;">
									<input type="image" src="<?php echo base_url()?>assets/images/pshycometric_img/twitter.png" style="margin-left: 25px;margin-top: -13px;" ></a>
									<!--<input type="image" src="<?php echo base_url()?>assets/images/pshycometric_img/linkedin.png" style="margin-left: 16px;margin-top: -13px;" >
									</li> -->
									
								</ul>
								<input id ="upgrade_499" type="button" class="roi-button" value="Upgrade" style="margin-top: 10px !importent;">
								<div class="text">Click Upgrade To Enter Coupon Code</div>
							</div>
						</div>
					   </div>
					   
					   
					  <div class="span4 roi pull-left	">
					   <div class="border-line pull-left">
							<div class="standard">
								<h4>Professional</h4>
								<p class="st-price"><i class="fa fa-inr"></i> 1999<span></span></p>
								<ul>
									<li> <i class="fa fa-check"></i> Standard +</li>
									<li> <i class="fa fa-check"></i> 3 Telephonic counselling sessions with our career Expert</li>
									<li> <i class="fa fa-check"></i> 1 year email and chat support</li>
								</ul>
								<input id ="upgrade_1999" type="button" class="roi-button" value="Upgrade" style="margin-top: 285px;">
								<div class="text">Click Upgrade To Enter Coupon Code</div>
							</div>
						</div>
					   </div>
						
					   <div class="span4 roi pull-right">
							<div class="pro pull-right">
								<h4>Ultimate</h4>
								<p class="pro-price"><i class="fa fa-inr"></i> 4999<span></span></p>
								<ul>
									<li> <i class="fa fa-check"></i> Professional +</li>
									<li> <i class="fa fa-check"></i> 30 min long Video session with our career expert</li>
									<li> <i class="fa fa-check"></i> 1 year complete anytime counselling with telephonic and video support</li>
									<li> <i class="fa fa-check"></i> Full Data Security</li>
								</ul>
								<input id ="upgrade_4999" type="button" class="roi-button" value="Upgrade" style="margin-top: 204px;">
								<div class="text">Click Upgrade To Enter Coupon Code</div>
							</div>
						</div>
						
					</div>
			   </div>
			   </div>
			  
					
            </article>
            </div>
         </div>
         <!--end main-->
<?php $this->load->view('layout/js');?>
	<script>
		$(document).on("click","#upgrade_499",function(){
		$('#upgrade499').modal('show');
			
		});
	</script>
	<script>
		$(document).on("click","#upgrade_1999",function(){
		$('#upgrade1999').modal('show');
			
		});
	</script>
	<script>
		$(document).on("click","#upgrade_4999",function(){
		$('#upgrade4999').modal('show');
			
		});
	</script>
	<script>
	$(function() {
		$("#submit").click(function() {
		
			var coupon = $("#coupon_code").val();
			if(coupon == 'HELPME100')
			{
				$('#proceedToPay').hide();
				$('#downloadPdf').show();
				$('#getValue').hide();
				$('#getDiscount').hide();
				$('#free').show();
				$('#errorMessage').hide();
				$("#successMessage").text('Coupon Applied Successfully.....!');
				$('#successMessage').fadeOut(5000);
			}
			else if(coupon == '12345')
			{
				$('#getValue').hide();
				$('#free').hide();
				$('#getDiscount').show();
				$('#errorMessage').hide();
				$("#successMessage").text('Coupon Applied Successfully.....!');
				$('#successMessage').fadeOut(5000);
			} 
			else
			{
				$("#errorMessage").text('Please enter valid coupon code!');
			}
			return false;
		});
		
	});
	$(function() {
		$("#submit1").click(function() {
		
			var coupon = $("#coupon_code1").val();
			if(coupon == '1234')
			{
				/* $('#proceedToPay').hide();
				$('#downloadPdf').show();
				$('#getValue').hide();
				$('#getDiscount').show(); */
				
			}else{
				$("#errorMessage1").text('Please enter valid coupon code!');
				$('#errorMessage1').fadeOut(5000);
			}
			return false;
		});
		
	});
	$(function() {
		$("#submit2").click(function() {
		
			var coupon = $("#coupon_code2").val();
			if(coupon == '12345')
			{
				/* $('#proceedToPay').hide();
				$('#downloadPdf').show();
				$('#getValue').hide();
				$('#getDiscount').show(); */
				
			}else{
				$("#errorMessage2").text('Please enter valid coupon code!');
				$('#errorMessage2').delay(5000).fadeOut();
			}
			return false;
		});
		
	});
	
	$('#textBoxShow').hide(); // on default, hide textbox
	$('#myCheckbox').click(function(){
	var checked_status = this.checked;
	if(checked_status == true) {
		$('#textBoxShow').show();
	}else{
		$('#textBoxShow').hide();
	}
	});
	
	$('#textBoxShow1').hide(); // on default, hide textbox
	$('#myCheckbox1').click(function(){
	var checked_status = this.checked;
	if(checked_status == true) {
		$('#textBoxShow1').show();
	}else{
		$('#textBoxShow1').hide();
	}
	});
	
	$('#textBoxShow2').hide(); // on default, hide textbox
	$('#myCheckbox2').click(function(){
	var checked_status = this.checked;
	if(checked_status == true) {
		$('#textBoxShow2').show();
	}else{
		$('#textBoxShow2').hide();
	}
	});
	</script>
	
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
	var graphVal= '<?php echo $_GET['graphVal'];?>';
	if(graphVal == '1'){
		var product_name   = 	"I'm an Eagle! What animal are you?";
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/eagle12.jpg';
	}else if(graphVal == '2'){
		var product_name   = 	"I'm a Bear! What animal are you?";
	}else if(graphVal == '3'){
		var product_name   = 	"I'm a Dolphin! What animal are you?";
	}else if(graphVal == '4'){
		var product_name   = 	"I'm a Lion! What animal are you?";
	}
	var description	   =	"Take the gifted Quiz to find out what animal personality you are. Discover what makes you tick, what you're naturally good at, and what careers may suit you.";
	if(graphVal == '1'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/eagle12.jpg';
	}else if(graphVal == '2'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/bear12.jpg';
	}else if(graphVal == '3'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/dolphin12.jpg';
	}else if(graphVal == '4'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/lion12.jpg';
	}
	//var share_image	   =	'http://meetuniv.com/assets/img/gifted.jpg';
	var share_url	   =	'http://meetuniv.com/gifted-intro';	
        //var share_capt     =    'caption';
    FB.ui({
        method: 'feed',
        name: product_name,
        link: share_url,
        picture: share_image,
        //caption: share_capt,
        description: description

    }, function(response) {
        if(response && response.post_id){
			
			//$('#demoModal').fadeOut("slow");
			var graphVal = '<?php echo $_GET['graphVal'];?>';
			url="<?php echo base_url();?>quiz/sendCoupon";
			data = {graphValue:graphVal};
		    $.ajax({
			type	:	'POST',
			data	:	data,
			url		:	url,
			success: function(data){
					//alert(data);
					if(data == 'Email sent.'){
						$('#demoModal').modal('show');
					}
				},
			
		  });
		}
        else{}
    });

}

</script>
