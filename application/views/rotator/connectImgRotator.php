<center>
<?php
$path = realpath(APPPATH . '../assets/mu_banners/connect').'/connect_banners.txt';//exit;
$fcontents = join ('', file ($path));
$s_con = explode("~" , $fcontents);
//print_r($s_con);exit;

$banner_no = rand(0,(count($s_con)-1));
echo $s_con[$banner_no];
?>
</center>
