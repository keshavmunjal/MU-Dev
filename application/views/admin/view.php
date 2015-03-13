<style>
.input-text{margin-right:10px; margin-left:10px;}
</style>
<br />
<?php if(!empty($univData)){ ?>
<table align="center" style="margin-top:30px;">
<?php if(!empty($message)){ ?>
	<span id="welcome_message" style="color:red;margin-left:620px;"> <?php echo "Updated Successfully"; ?></span>
<?php } ?>
<div style="margin-left:650px;font-weight:bold;margin-top:10px;font-size: 15px;color: blue;">US University</div>
<div style="margin-left:630px;font-weight:bold;margin-top:10px;font-size: 13px;"><?php echo $univData[0]['univName']; ?></div>

	<form id="univName" class="form-horizontal" name="univName" method="post" action="" enctype="multipart/form-data">
		<tr>
			
			
		</tr>
		<?php //echo "<pre>";print_r($univData);exit;?>
		<tr>
			<td>
			 	Type
			</td>
			<td>
			 	<input type="text" name="type" value="<?php echo $univData[0]['type']; ?>" class="input-text">
			 	<input type="hidden" name="univId" value="<?php echo $univData[0]['univId']; ?>" class="input-text">
				<input type="hidden" name="universityName" value="<?php echo $univData[0]['univName']; ?>" class="input-text">
			</td>
			<td>
				Year of Estab
			</td>
			<td>
			 	<input type="text" name="yearOfEst" value="<?php echo $univData[0]['yearOfEst']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<td>
				Students
			</td>
			<td>
			 	<input type="text" name="students" value="<?php echo $univData[0]['students']; ?>" class="input-text">
			</td>
			<td>
				Scholership
			</td>
			<td>
			 	<input type="text" name="scholership" value="<?php echo $univData[0]['scholership']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<td>
				Tution Fee
			</td>
			<td>
			 	<input type="text" name="tutionFee" value="<?php echo $univData[0]['tutionFee']; ?>" class="input-text">
			</td>
			<td>
				Staff
			</td>
			<td>
			 	<input type="text" name="staff" value="<?php echo $univData[0]['staff']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<!--<td>
				Courses
			</td>
			<td>
			 	<input type="text" name="courses" value="<?php echo $univData[0]['courses']; ?>" class="input-text">
			</td>-->
			<td>
				Intake
			</td>
			<td>
			 	<input type="text" name="intakes" value="<?php echo $univData[0]['intakes']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<td>
				Accomodation
			</td>
			<td>
			 	<input type="text" name="accomodation" value="<?php echo $univData[0]['accomodation']; ?>" class="input-text">
			</td>
			<td>
				Student Satisfaction
			</td>
			<td>
			 	<input type="text" name="studentSatiscation" value="<?php echo $univData[0]['studentSatisfaction']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<td>
				Acceptance Criteria
			</td>
			<td>
			 	<input type="text" name="acceptance" value="<?php echo $univData[0]['acceptanceCriteria']; ?>" class="input-text">
			</td>
			<td>
				Website
			</td>
			<td>
			 	<input type="text" name="website" value="<?php echo $univData[0]['website']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<td>
				Address
			</td>
			<td>
			 	<input type="text" name="address" value="<?php echo $univData[0]['address']; ?>" class="input-text">
			</td>
			<td>
				Library
			</td>
			<td>
			 	<select id="library" name="library" class="input-text">
				<option value="Select" selected="selected">Select</option>
				<option value="1" <?php if($univData[0]['library']==1) {?>selected="selected" <?php } ?>>Yes</option>
				<option value="0" <?php if($univData[0]['library']==0) {?>selected="selected" <?php } ?>>No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Sports
			</td>
			<td>
			 	<select id="sports" name="sports" class="input-text">
				<option value="Select" selected="selected">Select</option>
				<option value="1" <?php if($univData[0]['sports']==1) {?>selected="selected" <?php } ?>>Yes</option>
				<option value="0" <?php if($univData[0]['sports']==0) {?>selected="selected" <?php } ?>>No</option>
				</select>
			</td>
			<td>
				Scholer
			</td>
			<td>
			 	<select id="scholer" name="scholer" class="input-text">
				<option value="Select" selected="selected">Select</option>
				<option value="1" <?php if($univData[0]['scholer']==1) {?>selected="selected" <?php } ?>>Yes</option>
				<option value="0" <?php if($univData[0]['scholer']==0) {?>selected="selected" <?php } ?>>No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Housing
			</td>
			<td>
			 	<select id="housing" name="housing" class="input-text">
				<option value="Select" selected="selected">Select</option>
				<option value="1" <?php if($univData[0]['housing']==1) {?>selected="selected" <?php } ?>>Yes</option>
				<option value="0" <?php if($univData[0]['housing']==0) {?>selected="selected" <?php } ?>>No</option>
				</select>
			</td>
			<td>
				Exchange
			</td>
			<td>
			 	<select id="exchange" name="exchange" class="input-text">
				<option value="Select" selected="selected">Select</option>
				<option value="1" <?php if($univData[0]['exchange']==1) {?>selected="selected" <?php } ?>>Yes</option>
				<option value="0" <?php if($univData[0]['exchange']==0) {?>selected="selected" <?php } ?>>No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Online
			</td>
			<td>
			 	<select id="online" name="online" class="input-text">
				<option value="Select" selected="selected">Select</option>
				<option value="1" <?php if($univData[0]['online']==1) {?>selected="selected" <?php } ?>>Yes</option>
				<option value="0" <?php if($univData[0]['online']==0) {?>selected="selected" <?php } ?>>No</option>
				</select>
			</td>
			<td>
				Facebook Link
			</td>
			<td>
			 	<input type="text" name="facebookLink" value="<?php echo $univData[0]['facebook_link']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<td>
				Twitter Link
			</td>
			<td>
			 	<input type="text" name="twitterLink" value="<?php echo $univData[0]['twitter_link']; ?>" class="input-text">
			</td>
			<td>
				Linkedin 
			</td>
			<td>
			 	<input type="text" name="linkedin" value="<?php echo $univData[0]['linkedin']; ?>" class="input-text">
			</td>
		</tr>
		<tr>
			<td>
				Youtube Link
			</td>
			<td>
			 	<input type="text" name="youtubelink" value="<?php echo $univData[0]['youtube_link']; ?>" class="input-text">
			</td>
			<td>
				Overview
			</td>
			<td>
			 	<!--<input type="text" name="overview" value="<?php echo $univData[0]['overview']; ?>" class="input-text">-->
				<textarea name="overview" rows="4" cols="5" class="input-text">
					<?php echo $univData[0]['overview']; ?>
				</textarea> 
			</td>
		</tr>
		<tr>
			<td>
				Change Logo
			</td>
			<td>
			 	<input type="file" name="picture" value="" class="input-text">
			</td>
			<td>
				<?php 
				if($univData[0]['logo']){ ?>
				<img src="<?php echo base_url()?>assets/univ_logo/<?php echo $univData[0]['logo'];?>" alt="<?php echo $univData[0]['univName'];?>" title="<?php echo $univData[0]['univName'];?>" style="max-width: 70px;margin: 11px 4px;" class="img-polaroid"></img>
				<?php } ?>
			</td>
		</tr>
			
		<tr>
			<td></td>
			<td>
			<button  type="submit" class="btn btn-small btn-success" name="submit" class="input-text" style="margin-left: 9px;margin-top: 12px;">
				Submit
			</button>
			</td>
		</tr>
			
			
			
	</form>
</table>
<?php }else{ ?>
<table align="center">
	<tr>
		<td><?php echo "NO record found!";?> </td>
	</tr>
<table>
<?php
}
?>
<br /><br /><br> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    


