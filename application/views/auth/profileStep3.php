<!--main-->
      <div role="main" id="main">
         <div class="row container no_padding" id="register_page" >
            <ul class="breadcrumb univ_breadcrumb">
               <li><a href="#">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
               <li class="active">Edit Profile</li>
            </ul>
            <section id="register_page_steps">
               <div class="well container">

                  <!--<h2 class="pull-left">Complete Your Profile Dashboard</h2>

                  <aside class="pull-right" id="step"><img  src="<?php echo base_url();?>assets/img/s_1.png"></aside>-->
				<div class="row">
					<div class="span6">
						<h4 class="user-name"><strong><?php echo $userData['fullname']?></strong> 
						<small>- Complete Your Profile Dashboard</small></h4>
					</div>
					<div class="span6 steps">
					  <span class="">
						<img  src="<?php echo base_url();?>assets/img/s_3.png">
					  </span>
					</div>
				</div>
				</div>
               <div id="l_more">
                  <div class="well well-small">
                     <h4>Extended Info</h4>
                  </div>
               </div>
               <div class="row">
                  <article class="span2 l_col_sing " style="background:none;">
                     <div  class="text-center" id="profile_2">
                        <div id="real_profile_pic">
                            <?php 
							if(isset($userProfile['profilePic']))

							{
								if(substr($userProfile['profilePic'],0,1)=='f')
								{
								?>
								<img src="https://graph.facebook.com/<?php echo substr($userProfile['profilePic'],1)?>/picture?type=large"/>
								<?php
								}
								else
								{
						?>

							<img src="<?php echo base_url();?>uploads/user_pic/<?php echo $userProfile['profilePic'];?>">
							

						<?php 
								}
							}

							else

							{

						?>

								<img src="<?php echo base_url();?>assets/img/avatar.png"> 

						<?php

							} 

						?>
                        </div>
                        <p><?php echo $userData['fullname'];?>,<?php echo (isset($userProfile['gender']))?$userProfile['gender']:'';?> <br>
                           <?php echo (isset($userProfile['dob']))?$userProfile['dob']:'';?> 
                        </p>
                        <!--<p class="edit_profile_link"><a href="#">Edit Profile</a></p>-->
                     </div>
                  </article>
                  <article class="span9 r_col_sing row">
				  <?php
					$sat_math=array('name'	=>	'sat_math','id'	=>	'sat_math','value'	=>	set_value('sat_math'),'class'=>'span2','placeholder'=>'Math');
					$sat_reading=array('name'	=>	'sat_reading','id'	=>	'sat_reading','value'	=>	set_value('sat_reading'),'class'=>'span2','placeholder'=>'Reading');
					$sat_writing=array('name'	=>	'sat_writing','id'	=>	'sat_writing','value'	=>	set_value('sat_writing'),'class'=>'span2','placeholder'=>'Writing');
					$sat_composite=array('name'	=>	'sat_composite','id'	=>	'sat_composite','value'	=>	set_value('sat_composite'),'class'=>'span2','placeholder'=>'Composite');
					$act_math=array('name'	=>	'act_math','id'	=>	'act_math','value'	=>	set_value('act_math'),'class'=>'span2','placeholder'=>'Math');
					$act_reading=array('name'	=>	'act_reading','id'	=>	'act_reading','value'	=>	set_value('act_reading'),'class'=>'span2','placeholder'=>'Reading');
					$act_writing=array('name'	=>	'act_writing','id'	=>	'act_writing','value'	=>	set_value('act_writing'),'class'=>'span2','placeholder'=>'Writing');
					$act_composite=array('name'	=>	'act_composite','id'	=>	'act_composite','value'	=>	set_value('act_composite'),'class'=>'span2','placeholder'=>'Composite');
					
					//$ielts=array('name'=>'ielts','id'=>'ielts','value'=>set_value('ielts'));
					//$pte=array('name'=>'pte','id'=>'pte','value'=>set_value('pte'));
					?>
                     <?php 
					 $form_attr = array('class'=>'form-inline');
					 echo form_open($this->uri->uri_string(),$form_attr);?>
                        <div class="sat span9" >
						<label class="radio inline">
                           <input type="radio" name="sat" id="sat"/> SAT</label>
                           
                           <div class="clearfix"></div>
						    <div class="controls controls-row" id="sat-div" style="display:none;">
								<?php //echo form_input($sat_math);
									$userExtSat = explode(",", $userProfileExt['SAT']);
									
									if(!empty($userProfileExt['SAT'])){
									echo form_input(array("name"=>"sat_math","id"=>"sat_math","value"=>$userExtSat[0],"class"=>"span2","placeholder"=>"Math"));
								   }else{
									echo form_input(array("name"=>"sat_math","id"=>"sat_math","value"=>'',"class"=>"span2","placeholder"=>"Math"));
								   }
								?>
								
								<?php //echo form_input($sat_reading);
									if(!empty($userProfileExt['SAT'])){
									echo form_input(array("name"=>"sat_reading","id"=>"sat_reading","value"=>$userExtSat[1],"class"=>"span2","placeholder"=>"Reading"));
								   }else{
									echo form_input(array("name"=>"sat_reading","id"=>"sat_reading","value"=>'',"class"=>"span2","placeholder"=>"Reading"));
								   }
								?>
								<?php //echo form_input($sat_writing);
									if(!empty($userProfileExt['SAT'])){
									echo form_input(array("name"=>"sat_writing","id"=>"sat_writing","value"=>$userExtSat[2],"class"=>"span2","placeholder"=>"Writing"));
								   }else{
									echo form_input(array("name"=>"sat_writing","id"=>"sat_writing","value"=>'',"class"=>"span2","placeholder"=>"Writing"));
								   }
								?>
								<?php //echo form_input($sat_composite);
									if(!empty($userProfileExt['SAT'])){
									echo form_input(array("name"=>"sat_composite","id"=>"sat_composite","value"=>$userExtSat[3],"class"=>"span2","placeholder"=>"Composite"));
								   }else{
									echo form_input(array("name"=>"sat_composite","id"=>"sat_composite","value"=>'',"class"=>"span2","placeholder"=>"Composite"));
								   }
								?>
							</div>
                        </div>
                        <div class="act span9">
						<label class="radio inline">
                           <input type="radio" name="act" id="act"/> ACT</label>
                           <div class="clearfix"></div>
						    <div class="controls controls-row" id="act-div" style="display:none;">
								<?php //echo form_input($act_math);
									$userExtAct = explode(",", $userProfileExt['ACT']);
								
								   if(!empty($userProfileExt['ACT'])){
									echo form_input(array("name"=>"act_math","id"=>"act_math","value"=>$userExtAct[0],"class"=>"span2","placeholder"=>"Math"));
								   }else{
									echo form_input(array("name"=>"act_math","id"=>"act_math","value"=>'',"class"=>"span2","placeholder"=>"Math"));
								   }
								?>
								<?php //echo form_input($act_reading);
								   if(!empty($userProfileExt['ACT'])){
									echo form_input(array("name"=>"act_reading","id"=>"act_reading","value"=>$userExtAct[1],"class"=>"span2","placeholder"=>"Reading"));
								   }else{
									echo form_input(array("name"=>"act_reading","id"=>"act_reading","value"=>'',"class"=>"span2","placeholder"=>"Reading"));
								   }
								?>
								<?php //echo form_input($act_writing);
								   if(!empty($userProfileExt['ACT'])){
									echo form_input(array("name"=>"act_writing","id"=>"act_writing","value"=>$userExtAct[2],"class"=>"span2","placeholder"=>"Reading"));
								   }else{
									echo form_input(array("name"=>"act_writing","id"=>"act_writing","value"=>'',"class"=>"span2","placeholder"=>"Writing"));
								   }
								?>
								<?php //echo form_input($act_composite);
								   if(!empty($userProfileExt['ACT'])){
									echo form_input(array("name"=>"act_composite","id"=>"act_composite","value"=>$userExtAct[3],"class"=>"span2","placeholder"=>"Reading"));
								   }else{
									echo form_input(array("name"=>"act_composite","id"=>"act_composite","value"=>'',"class"=>"span2","placeholder"=>"composite"));
								   }
								?>
							</div>
						   
                              <label>IELTS
                              <input type="text" name="ielts" value="<?php if(isset($userProfileExt['IELTS'])){ echo $userProfileExt['IELTS']; }?>" class="span2" placeholder="IELTS"></label>&nbsp;&nbsp;&nbsp;&nbsp;
                              <label>PTE
                              <input type="text" name="pte" value="<?php if(isset($userProfileExt['PTE'])){ echo $userProfileExt['PTE']; }?>" class="span2" placeholder="PTE"></label>
                        </div>
                        <div class="clearfix"></div>
                        <div id="bu_next" class="pull-right">
                            <a href="<?php echo base_url('auth/profileMatch');?>"><button class="btn " type="button">Back</button></a>
                           <input class="btn " type="submit" onclick="" value="Finish" name="save_external_info">
                        </div>
                     <?php echo form_close();?>
                  </article>
               </div>
            </section>
         </div>
      </div>
      <!--end main-->
	  
	  <?php $this->load->view('layout/js')?>
	  
	  <script>
	  $(document).ready(function(){
	  
		$("#sat").click(function(){
			$("#sat-div").fadeIn();
		});
		$("#act").click(function(){
			$("#act-div").fadeIn();
		});
		
		});
	  
	  </script>