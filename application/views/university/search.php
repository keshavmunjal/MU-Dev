<html>
<head>
<title>University</title>
</head>
<body>
	<form action="<?php echo base_url('university');?>" method="Post">
	<input type="text" value="" name="univKeyWord">
	<input type="submit" value="search" name="searchUniv">
	</form>
	<div id="searchResult">
	<?php 
	if(isset($university))
	{
		foreach($university as $univ)
		{
			echo $univ['univName'];
	?>
	<br>
	<?php
		}
	
	} 
	?>
	</div>
</body>
</html>
