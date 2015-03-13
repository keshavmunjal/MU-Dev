<?php
//local database configuration ////////////
$con=mysqli_connect('mu-development.ccbae3jhwwnq.us-west-2.rds.amazonaws.com','mu_development','mudev2015!','meetuniv_campaign');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else { echo "Connected"; }
?>