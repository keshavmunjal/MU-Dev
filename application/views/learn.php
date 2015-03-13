<div role="main" id="main">
<div class="container">
	<ul class="breadcrumb univ_breadcrumb">
	  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
	  <li>Learn </li>
	</ul>
	<div class="row">
		<div class="span6">
			<div class="well">
				<blockquote>
					<p class="text-info">Tell me and I forget. Teach me and I remember. Involve me and I learn.</p>
					<small>Benjamin Franklin</small>
				</blockquote>
			</div>
			<h5 class="text-info">Want to get access to our vast resources of content to never stop your learning:</h5>
			<h6 class="success">Want to get access to our vast resources of content to never stop your learning:</h6>			
			<ul>
				<li>Top Curated Education Content</li>
				<li>Get free acess to premium content</li>
				<li>Get free acess to premium counseling</li>
			</ul>
			<br/><br/>
		</div>
		<div class="span6">
			<h4>Fill Up the Details!</h4>
		  <form method="post">
			  <?php if(form_error('name')||form_error('email')||form_error('message')){?>
			  <div class="alert alert-error"  id="contact-error">
				  <?php echo form_error('name');?>
				 <?php echo form_error('email');?>
				 <?php echo form_error('message');?>
			  </div><?php }?>
			  <?php if(isset($success)){?>
				<div class="alert alert-success"  id="contact-error">
				  Success fully saved!
			  </div><?php }?>
			  <div class="controls controls-row">
				  <input id="name" name="name" type="text" class="span3" placeholder="Name"> 
				  <input id="email" name="email" type="email" class="span3" placeholder="Email address">
			  </div>
			  <div class="controls">
				  <textarea id="message" name="message" class="span6" placeholder="Your Message" rows="5"></textarea>
			  </div>
			  
			  <div class="controls">
				  <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Send</button>
			  </div>
		  </form>
		</div>
	</div>
</div>
</div>