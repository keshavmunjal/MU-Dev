	
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.1.min.js"></script>
	<!--<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>-->
	<!--<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>-->
    <!--<script src="https://code.jquery.com/jquery.js"></script>-->
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom-form-elements.js"></script>
    <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap_calendar.min.js"></script>
	<script>
         $(document).ready(function(){
         
         
         
         $('.carousel').carousel({
         
         interval: 5000,
         
         pause:"hover"
         
         })
         
         
         							   $('.tab_spine  ul').slideUp();
         							   
         							    $('.tab_spine  ul:first').slideDown();
         							   
         							       $('.tab_spine h4').click(function (e) {
             e.preventDefault();
         	$('.tab_spine  ul').slideUp();
             $(this).next().slideDown();
         	return false;
         	
             })
         						
         						
         $('#profile_tab a').click(function (e) {
         									
           e.preventDefault();
           $(this).tab('show');
         })
         
         
         $(".alert").alert();
         
         
         $(".saved").alert()
         								   
         							   
         						   })
         
         
      </script>