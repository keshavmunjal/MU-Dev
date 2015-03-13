<?php 
session_start();
$Message="";
$message="";
if(count($_POST)>0) {
	$username = "meetuniv_lms";
    $password = "deepaklms2013!";
    $hostname = "localhost"; 
    $dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MeetUniv</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/indexcss.css" rel="stylesheet">
		<link href="css/forget_password.css" rel="stylesheet">
		<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	</head>
	<body>
		<header>
			<div class="custom_Background">
				<div class="container">	
					<div class="row">
						<div class="col-lg-offset-3 col-lg-6">
						<form name="frmUser" method="post" action="">
						<?php   if(isset($_GET['Message'])){
                echo $_GET['Message'];
                }?>
		                <div class="message"><?php if($message!="") { echo $message; } ?></div>
							<div class="model_bg">
								<div class="row">
									<div class="col-lg-12 pull-left">
										<div class="input_gap">
											<img src="images/model-logo.png" class="img-responsive">
										</div>	
									</div>
								</div>
								<div class="row">
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-6">
										<h3 class="login_heading">LOGIN</h3>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
										<img src="images/compu.png" class="pull-right">
									</div>								
								</div>
								<hr class="custom_hr">
								<div class="row">
									<div class="col-lg-12">
										<div class="input-group input_gap">
											<input type="text" class="form-control green_input" id ="email_id" placeholder="Email Address"name="email_id">
											<span class="input-group-addon green_input">
											<i class="fa fa-envelope fa-lg"></i></span>
										</div>
										<div class="input-group input_gap">
											<input type="text" class="form-control green_input"  id ="password" placeholder="Password" name="password">
											<span class="input-group-addon green_input"><i class="fa fa-key fa-lg"></i></span>
										</div>
									</div>
								</div>
								<div class="row butt_gap_model">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											<div class="checkbox">
												<label class="check_label">
												  <input type="checkbox"> Remember Me
												</label>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											<a href=""><h5 class="forget_pass">Forgot Password ?</h5></a>
										</div>
								</div>
								<div class="row">
									<div class="col-lg-12 text-center">
									    <input type="image" src="images/model_login.png" alt="Submit">
										<!--<a href=""><img src="images/model_login.png" class="img-responsive model_login"></input></a> -->
									</div>
								</div>
							</div>
						  </form>
						</div>	
					</div>
				</div>	
			</div>
		</header>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
  </body>
</html> 