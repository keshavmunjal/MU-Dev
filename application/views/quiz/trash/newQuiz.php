 <div class="demo-mode">
        <div class="container">
          <p> Demo Mode</p>
          <nav class="left">
            <ul>
              <li> <a>Numerical</a></li>
              <li> <a>Abstract</a></li>
              <li> <a>Verbal</a></li>
              <li> <a>Accuracy</a></li>
            </ul>
          </nav>
          
          <form id="form1" runat="server" style="margin:6px 0px; float:right;width:120px" >
			<div style="border:1px solid #01a9fe; border-radius:5px; background:#ffffff; height:21px; width:113px;" class="left">
				<label id="lblTime" style=" font-weight:bold; color:#01a9fe;margin:0px 40px;" ></label>
				<input type="hidden" value="<?php echo($lastQuizTime)?$lastQuizTime:0;?>" id="lblTimeValue"/>
			</div>
		  </form>
          </div>
          
        </div>
      <!-- subheader -->
      <!--Slider-->
      <div class="container">
      <div id="myCarousel" class="myCarousel slide" style="margin-bottom:0 !important">
         <ol class="carousel-indicators" style="left:359px; top:373px; font-size:11px; color:#999999">
		 <?php for($i=1;$i<=10;$i++){?>
            <li onclick='gotoslide(<?php echo $i;?>)' style="text-indent:1px !important; background:none !important;cursor:pointer"><?php echo $i;?></li>
         <?php }?>
		 </ol>
         <!-- Carousel items -->
         <div class="carousel-inner">
		 <?php foreach($question as $q){
		 
		 $result = $this->quizmodel->checkAllreadyAnswer($q->id);
		 //print_r($result);exit;
		 ?>
            <article class="item <?php echo ($q->id==1)?'active':'' ;?>">
              
            <div class="question">
              <p class=" left ques">Question <?php echo $q->id ;?>:</p>
              <p class="left"><?php echo $q->question ;?></p>  
            </div>
            <div class=" clear answer">
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="checkbox" id="optionA<?php echo $q->id ;?>" class="left" onclick="firstcheck(<?php echo $q->id ;?>)" <?php echo in_array(1,$result)?'checked':'';?>/>
                  <p class="left opt"><?php echo $q->optionA ;?></p>
				  <input type="hidden" id="optionA-<?php echo $q->id ;?>" value="<?php echo in_array(1,$result)?'1':'0';?>"/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="checkbox" id="optionB<?php echo $q->id ;?>" class="left" onclick = "secondcheck(<?php echo $q->id ;?>)" <?php echo in_array(2,$result)?'checked':'';?>/>
                  <p class="left opt"><?php echo $q->optionB ;?></p>
				  <input type="hidden" id="optionB-<?php echo $q->id ;?>" value="<?php echo in_array(2,$result)?'1':'0';?>"/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="checkbox" id="optionC<?php echo $q->id ;?>" class="left" onclick = "thirdcheck(<?php echo $q->id ;?>)" <?php echo in_array(3,$result)?'checked':'';?>/>
                  <p class="left opt"><?php echo $q->optionC ;?></p>
				  <input type="hidden" id="optionC-<?php echo $q->id ;?>" value="<?php echo in_array(3,$result)?'1':'0';?>"/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="checkbox" id="optionD<?php echo $q->id ;?>" class="left" onclick = "fourthcheck(<?php echo $q->id ;?>)" <?php echo in_array(4,$result)?'checked':'';?>/>
                  <p class="left opt"><?php echo $q->optionD ;?></p>
				  <input type="hidden" id="optionD-<?php echo $q->id ;?>" value="<?php echo in_array(4,$result)?'1':'0';?>"/>
                </div>
                <div class=" clear option">
                  <p class="left opt">E</p>
                  <input type="checkbox" id="optionE<?php echo $q->id ;?>" class="left" onclick = "fifthcheck(<?php echo $q->id ;?>)" <?php echo in_array(5,$result)?'checked':'';?>/>
                  <p class="left opt"><?php echo $q->optionE ;?></p>
				  <input type="hidden" id="optionE-<?php echo $q->id ;?>" value="<?php echo in_array(5,$result)?'1':'0';?>"/>
                </div>
              </div>
              <div class="right fig">
                <img src="<?php echo base_url()?>assets/img/market-shares.jpg" />
            </div>
          
               
            </article>
			<?php }?>
           
            <!--conect slider-->
            </div>
            
         </div>
          <a class="carousel-control left" href="#myCarousel" data-slide="prev" style="background:none !important; left:213px;margin-top:-67px;">Previous</a>
          <div style="overflow:hidden; padding-left:313px;">
              <input type="hidden" id="currentQuestion" value="1"/>  
			  <input type="button" class=" btn1 btn btn-success" value="Submit Ans" style="margin-top:0 !important" onclick="submitAns()" />
              <input type="button" class=" btn1 btn btn-primary" value="Quit" style="margin-top:0 !important" onclick="location.replace('<?php echo base_url('quiz/score')?>')" />
              <!--<input type="button" class=" btn2 btn btn-success" value="Flag for preview" style="margin-top:0 !important" />-->
              
              
            </div>
          <a class="carousel-control right" href="#myCarousel" data-slide="next" style="background:none !important; margin-top:-37px; right:60px; margin-top:-67px;">Next</a> 
        </div> 
      </div>
	  <div id="gap"></div>
       <?php $this->load->view('layout/js');?>
      
		<script type="text/javascript">
		$(document).ready(function() {
		var time = setInterval('ShowTime()', 1000);
		});
		
		function submitAns()
		{
			var question = $("#currentQuestion").val();
			var ans ='';
			var q = false;
			if($("#optionA-"+question).val()==1)
			{
				ans=ans+'1';
				q = true;
			}
			if($("#optionB-"+question).val()==1)
			{
				ans += (q)?',':'';
				ans=ans+'2';
				q = true;
			}
			if($("#optionC-"+question).val()==1)
			{
				ans += (q)?',':'';
				ans=ans+'3';
				q = true;
			}
			if($("#optionD-"+question).val()==1)
			{
				ans += (q)?',':'';
				ans=ans+'4';
				q  = true;
			}
			if($("#optionE-"+question).val()==1)
			{
				ans += (q)?',':'';
				ans=ans+'5';
				q = true;
			}
			
			if(ans!="")
			{
				data = 'question='+question+'&answer='+ans;
				$.get('<?php echo base_url('quiz/saveanswer')?>',data,function(msg){
					//alert(msg);
					var next = parseInt(question)+1;
					//alert(next)
					$('#myCarousel').carousel('next');
					$('#myCarousel').carousel('pause');
					$("#currentQuestion").val(next);
				});
			}
		}
		
		
		function firstcheck(id)
		{
			if($("#optionA"+id).is(':checked'))
			{
				$("#optionA-"+id).val('1');
			}
			else
			{
				$("#optionA-"+id).val('0');
			}
		}
		function secondcheck(id)
		{
			if($("#optionB"+id).is(':checked'))
			{
				$("#optionB-"+id).val('1');
			}
			else
			{
				$("#optionB-"+id).val('0');
			}
		}
		function thirdcheck(id)
		{
			if($("#optionC"+id).is(':checked'))
			{
				$("#optionC-"+id).val('1');
			}
			else
			{
				$("#optionC-"+id).val('0');
			}
		}
		function fourthcheck(id)
		{
			if($("#optionD"+id).is(':checked'))
			{
				$("#optionD-"+id).val('1');
			}
			else
			{
				$("#optionD-"+id).val('0');
			}
		}
		function fifthcheck(id)
		{
			if($("#optionE"+id).is(':checked'))
			{
				$("#optionE-"+id).val('1');
			}
			else
			{
				$("#optionE-"+id).val('0');
			}
		}
		function gotoslide(slide)
		{
			$('#myCarousel').carousel(slide-1);
			$('#myCarousel').carousel('pause');
			$("#currentQuestion").val(slide);
		}
		function ShowTime() {
			var t_td = $('#lblTime');
			var t_tdValue = $('#lblTimeValue');
			var temp;
			var t = parseInt(t_tdValue.val(), 10);
			//alert(t);
			if (isNaN(t)) {
				t = '1';
			} else {
				t++;
				t = t < 0 ? 0 : t;
				var minutes = Math.floor(t / 60);
				var seconds = t % 60;

				minutes = minutes < 10 ? "0"+minutes : minutes;
				seconds = seconds < 10 ? "0"+seconds : seconds;

				temp = minutes+":"+seconds;
			}
			t_td.text(temp);
			t_tdValue.val(t);
			var data='timespent='+t;
			/* $.get('<?php echo base_url('quiz/savetime')?>',data,function(msg)
			{
			console.log(msg);
			}); */ //saving time in database instently
		}
		</script>	