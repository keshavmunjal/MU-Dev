
<br /><br /><br />
<table align="center">
<span id="message" style="color:red;margin-left:540px;"></span><br /><br />
	<form id="importleadForm" class="form-horizontal" name="importleadForm" method="post" action="<?php echo base_url('admin/event');?>" enctype="multipart/form-data">
		<tr>
			
			<td >Upload CSV</td>
		</tr>
		<tr>
			<td>
				<input type="file" accept=".csv" name="filename"/>													
			</td>
		</tr>
			
		<tr>
			<td>
			<button  type="submit" class="btn btn-small btn-success" name="submit">
				Submit
			</button>
			<a class="btn btn-small btn-primary" href="<?php echo base_url('sample_format.csv')?>">
			<i class="icon-on-left bigger-110 icon-cloud-download"></i>Sample Format</a>
			</td>
		</tr>
			
			
			
	</form>
</table>

<br /><br /><br> 


 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    <script> 
        // wait for the DOM to be loaded 
        $(document).submit(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#importleadForm').ajaxForm(function() { 
				$("#message").text("Uploaded successfully!");
                //alert("Thank you for your comment!"); 
            }); 
        }); 
    </script> 

