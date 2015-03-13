
<br /><br /><br />
<table align="center">
<span id="message" style="color:red;margin-left:540px;"></span><br /><br />
	<form id="importleadForm" class="form-horizontal" name="importleadForm" method="post" action="<?php echo base_url('admin/event');?>" enctype="multipart/form-data">
		<tr>
			
			<td >Upload Data</td>
		</tr>
		<tr>
			 <input class="target" type="text" value="Field 1">
				<select class="target">
				<option value="option1" selected="selected">Option 1</option>
				<option value="option2">Option 2</option>
				</select>
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

<br /><br /><br> 


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    <script> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#importleadForm').ajaxForm(function() { 
				$("#message").text("Uploaded successfully!");
                //alert("Thank you for your comment!"); 
            }); 
        }); 
    </script> 

