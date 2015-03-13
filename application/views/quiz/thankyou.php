<style>
	  .standard:hover{background:#f7f7f3;}
	  .standard{background:#fff;}
	  .pro:hover{background:#f7f7f3;}
	  .pro{background:#fff;}	  
	  </style>
	    <!--css add by Debangan-->
	 <style>
	   .giftHeading{color:#0073d1 !important;font-size:45px;}
	   .giftedbackground{background:#b2dff0;padding:40px 0;text-align:center;}
	   .giftedmiddle{background:#d9eff8;padding:40px 0;text-align:center;}
	     .giftedmiddle>p{margin-left:15px;}
	
</style>

<?php include('ccavenue/Aes.php')?>
<?php include('ccavenue/adler32.php')?>
<?php

	/*

		This is the sample RedirectURL PHP Page. It can be directly used for integration with CCAvenue if your application is developed in PHP. You need to simply change the variables to match your variables as well as insert routines for handling a successful or unsuccessful transaction.

		return values i.e the parameters below are passed as POST parameters by CCAvenue server 
	*/


	//---------------------------------------------------------------------------------------------------------------------------------//

	error_reporting(0);
	$workingKey='a54h8n3qsvra5g58gi';		//Working Key should be provided here.
	$encResponse=$_POST["encResponse"];			//This is the response sent by the CCAvenue Server


	$rcvdString=decrypt($encResponse,$workingKey);		//AES Decryption used as per the specified working key.
	$AuthDesc="";
	$MerchantId="";
	$OrderId="";
	$Amount=0;
	$Checksum=0;
	$veriChecksum=false;

	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	//******************************    Messages based on Checksum & AuthDesc   **********************************//
	echo "<center>";


	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==0)	$MerchantId=$information[1];	
		if($i==1)	$OrderId=$information[1];
		if($i==2)	$Amount=$information[1];	
		if($i==3)	$AuthDesc=$information[1];
		if($i==4)	$Checksum=$information[1];	
	}

	$rcvdString=$MerchantId.'|'.$OrderId.'|'.$Amount.'|'.$AuthDesc.'|'.$workingKey;
	$veriChecksum=verifyChecksum(genchecksum($rcvdString), $Checksum);

	if($veriChecksum==TRUE && $AuthDesc==="Y")
	{
		//echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		
		for($i = 0; $i < $dataSize; $i++) 
		{
			$information=explode('=',$decryptValues[$i]);
				//echo '<tr><td>'.$information[$i].'</td></tr>';
				//echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
				
			//$data['score'] = $this->quizmodel->saveUserPaymentDetails($information);
			$info[$i] = $information;
		}
		$userId=$this->tank_auth->get_user_id();
		$sqlQuery = "INSERT into giftedPaymentDetails (user_id,order_id, amount,billing_cust_name,billing_cust_address,billing_cust_state,billing_zip_code,billing_cust_city,billing_cust_country,billing_cust_tel,billing_cust_email,notes,card_category,bank_name,created) values('".$userId."','".$info[1][1]."','".$info[2][1]."','".$info[5][1]."','".$info[6][1]."','".$info[7][1]."','".$info[8][1]."','".$info[9][1]."','".$info[10][1]."','".$info[11][1]."','".$info[12][1]."','".$info[13][1]."','".$info[24][1]."','".$info[25][1]."','".date('Y-m-d H:i:s')."')";
		$query = mysql_query($sqlQuery);
		
	?>
	<!--main-->
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <div class="span12 giftedbackground">
			       <h1>Meet Univ<span class="giftHeading">&nbsp;Gifted !</span></h1>
			   </div>
				<div class="span12 giftedmiddle">
			       <h4>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.</h4>
				    <p>Have a minute ? Help us on share the love ! Follow us on Twitter and like us on facebook 
				  to keep you up to date with all our news and announcements.</p>
			   </div>
					
				<?php
					$graphValue = $this->session->userdata('gvalue');
					$graphName1 = $this->session->userdata('gvalue1');
					$graphName2 = $this->session->userdata('gvalue2');
				?>
				
			   <div class="span12 giftedbackground" style="margin-bottom:20px;">
					<a href="<?php echo base_url()?>assets/inDepthAnalysisFpdf.php?value=<?php echo $graphValue; ?>&graph1=<?php echo $graphName1; ?>&graph2=<?php echo $graphName2; ?>" target="_blank" class="btn"><p class="text-center"><button class="btn btn-large btn-primary" type="button">Click Here Download Pdf</button></p></a>
				  </div>
            </article>
            </div>
         </div>
         <!--end main-->
	<?php
		//Here you need to put in the routines for a successful 
		//transaction such as sending an email to customer,
		//setting database status, informing logistics etc etc
	}
	else if($veriChecksum==TRUE && $AuthDesc==="B")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
		//Here you need to put in the routines/e-mail for a  "Batch Processing" order
		//This is only if payment for this transaction has been made by an American Express Card
		//since American Express authorisation status is available only after 5-6 hours by mail from ccavenue and at the "View Pending Orders"
	}
	else if($veriChecksum==TRUE && $AuthDesc==="N")
	{
	?>
	
	<!--main-->
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <div class="span12 giftedbackground">
			       <h1>Meet Univ<span class="giftHeading">&nbsp;Gifted !</span></h1>
			   </div>
				<div class="span12 giftedmiddle">
			       <h4>Thank you for shopping with us.However,the transaction has been declined.</h4>
				    <p>Have a minute ? Help us on share the love ! Follow us on Twitter and like us on facebook 
				  to keep you up to date with all our news and announcements.</p>
			   </div>
					
			  
            </article>
            </div>
         </div>
         <!--end main-->
	
	<?php
	
		//Here you need to put in the routines for a failed
		//transaction such as sending an email to customer
		//setting database status etc etc
	}
	else
	{
		
	?>
		
		 <!--main-->
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <div class="span12 giftedbackground">
			       <h1>Meet Univ<span class="giftHeading">&nbsp;Gifted !</span></h1>
			   </div>
				<div class="span12 giftedmiddle">
			       <h3 style="color:red;">Security Error. Illegal access detected</h3>
				   <!--<h4>Thank you for shopping with us. However,the transaction has been declined.</h4>-->
				    <p>Have a minute ? Help us on share the love ! Follow us on Twitter and like us on facebook 
				  to keep you up to date with all our news and announcements.</p>
			   </div>
					
			   
            </article>
            </div>
         </div>
         <!--end main-->
	<?php
		//Here you need to simply ignore this and dont need
		//to perform any operation in this condition
	}


	echo "<br><br>";

	//************************************  DISPLAYING DATA RCVD ******************************************//

?>

	

