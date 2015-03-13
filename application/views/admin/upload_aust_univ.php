
<br /><br /><br />
<table align="center">
<span id="message" style="color:red;margin-left:540px;"></span><br /><br />
	<form id="univName" class="form-horizontal" name="univName" method="post" action="<?php echo base_url('admin/view_aust_univ_detail');?>" enctype="multipart/form-data">
		<tr>
			
			<td >Upload UK College Details</td>
		</tr>
		<?php //echo "<pre>";print_r($data);exit;?>
		<tr>
			<td>
			 	<select id="selectUniversity" name="selectUniversity">
				<?php foreach($universityData as $univ){ ?>
				<option value="<?php echo $univ['id'];?>" selected="selected"><?php echo $univ['univName'];?></option>
				<?php } ?>
				</select>
			</td>
		</tr>
			
		<tr>
			<td>
			<button  type="submit" class="btn btn-small btn-success" name="submit">
				Submit
			</button>
			</td>
		</tr>
			
			
			
	</form>
</table>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> 


 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    <script> 
       $("#univName").submit(function(){

		var univId = $("#selectUniversity").val();

		window.location.href='<?php echo base_url()?>admin/view_aust_univ_detail/'+univId;
		return false;

		});

    </script> 

 

