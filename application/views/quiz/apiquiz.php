<div class="demo-mode">
        <div class="container">
          <p> </p>
          <nav class="left">
           <h3 style="margin-top: 3px;color: #666999;">Psychometric Analysis</h3>
          </nav>
          
          <form id="form1" runat="server" style="margin:6px 0px; float:right;width:120px" >
			<div style="border:1px solid #01a9fe; border-radius:5px; background:#ffffff; height:21px; width:113px;margin: 8px 0px;" class="left">
				<label id="lblTime" style=" font-weight:bold; color:#01a9fe;margin:0px 40px;" ></label>
				<input type="hidden" value="0" id="lblTimeValue"/>
			</div>
		  </form>
          </div>
          
        </div>
      <!-- subheader -->
	  <!--progress bar -->
	  <div class="container progress-container">
	  <br>
		<div class="span1">
			<b>Progress</b>
		</div>
		<div class="span10">
			<div class="progress progress-striped active" id="progress">
				<div class="bar" id="bar" style="width: 0%;"></div>
			</div>
		</div>
		</div>
	  </div>
	  <!--end-->
	  
      <!--Slider-->
      <div class="container">
      <div id="myCarousel" class="myCarousel slide" style="margin-bottom:0 !important">
         <ol class="carousel-indicators quiz-list" style="right:0px; top:373px; font-size:11px; color:#ffffff">
		 <?php for($i=1;$i<=40;$i++){?>
           <!--<li class="<?php echo ($i==1)?'active':'';?>" id="link-slide-<?php echo $i;?>" onclick='gotoslide(<?php echo $i;?>)' style="text-indent:0px !important;border-radius: 2px; cursor:pointer;width:18px;text-align:center;"><?php echo $i;?></li>-->
         <?php }?>
            
		 </ol>
         <!-- Carousel items -->
         <div class="carousel-inner">
            
			<!-- group A Questions starts-->
			<article class="item active">
              
				<div class="question" id="instruction">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer" id="answer-1">
					<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
						<ol class="simple_with_animation vertical" id="question-1">
							<li class="first">Visualize<input type="hidden" value="1"/></li>
							<li class="second">Organize<input type="hidden" value="2"/></li>
							<li class="third">Personalize<input type="hidden" value="3"/></li>
							<li class="forth">Analyze<input type="hidden" value="4"/></li>
						</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
              
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
					<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
						<ol class="simple_with_animation vertical" id="question-2">
							<li class="first">Logical<input type="hidden" value="1"/></li>
							<li class="second">Detailed<input type="hidden" value="2"/></li>
							<li class="third">Conceptual<input type="hidden" value="3"/></li>
							<li class="forth">Interpersonal<input type="hidden" value="4"/></li>
						</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
          
            </article>
			<article class="item ">
              
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-3">
						<li class="first">Schedule<input type="hidden" value="1"/></li>
						<li class="second">Intuition<input type="hidden" value="2"/></li>
						<li class="third">Imagination<input type="hidden" value="3"/></li>
						<li class="forth">Processing<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
          
               
            </article>
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>   
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-4">
						<li class="first">Realistic<input type="hidden" value="1"/></li>
						<li class="second">Bureaucratic<input type="hidden" value="2"/></li>
						<li class="third">Co-operative<input type="hidden" value="3"/></li>
						<li class="forth">Creative<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-5">
						<li class="first">Authoritarian<input type="hidden" value="1"/></li>
						<li class="second">Reliable<input type="hidden" value="2"/></li>
						<li class="third">Value-driven<input type="hidden" value="3"/></li>
						<li class="forth">Flexible<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-6">
						<li class="first">Emotional<input type="hidden" value="1"/></li>
						<li class="second">Mathematical<input type="hidden" value="2"/></li>
						<li class="third">Detail-oriented<input type="hidden" value="3"/></li>
						<li class="forth">Visual<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p> 
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-7">
						<li class="first">Structured<input type="hidden" value="1"/></li>
						<li class="second">Sensory<input type="hidden" value="2"/></li>
						<li class="third">Intuition based<input type="hidden" value="3"/></li>
						<li class="forth">Data collection<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p> 
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-8">
						<li class="first">Spiritual<input type="hidden" value="1"/></li>
						<li class="second">Technical<input type="hidden" value="2"/></li>
						<li class="third">Innovative<input type="hidden" value="3"/></li>
						<li class="forth">Organized<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question">
				 <p class=" left ques">Instructions:</p>   
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-9">
						<li class="first">Conceptual<input type="hidden" value="1"/></li>
						<li class="second">Planning<input type="hidden" value="2"/></li>
						<li class="third">Logical<input type="hidden" value="3"/></li>
						<li class="forth">Feeling<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few groups of words. Rate the words in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not like this</b></span>
				  <span><b>2 - I am a little like this</b></span>
				  <span><b>3 - I am a lot like this</b></span>
				  <span><b>4 - I am exactly like this</b></span>
				</div>
				<div class="clear"></div>
				<div class="answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-10">
						<li class="first">Methodical<input type="hidden" value="1"/></li>
						<li class="second">Group orientation<input type="hidden" value="2"/></li>
						<li class="third">Long term thinking<input type="hidden" value="3"/></li>
						<li class="forth">Critical<input type="hidden" value="4"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<!-- group A Questions Ends-->
			
			
			<!-- group B Questions Starts-->
           <article class="item ">
            <div class="question">
			<p class="left ques">Instructions:</p>  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
            <p class="left" id="Question-11" style="padding: 5px 10px;"><b>I wish strategizing was easy?</b></p>  
            </div>
            <div class="clear answer" id="answer-11">
				<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
				<label>
                  <input type="radio" onclick="next_new()" name="option-B11" id="option-B11-1" class="left" value="4"/>
                  <p class="left opt">Strongly Disagree</p>
				</label>
                </div>
                <div class=" clear option">
				<label>
                  <input type="radio" onclick="next_new()" name="option-B11" id="option-B11-2" class="left" value="3"/>
                  <p class="left opt">Moderately Disagree</p>
				</label>
                </div>
                <div class=" clear option">
				<label>
                  <input type="radio" onclick="next_new()" name="option-B11" id="option-B11-3" class="left" value="2"/>
                  <p class="left opt">Moderately Agree</p>
				</label>
                </div>
                <div class=" clear option">
				<label>
                  <input type="radio" onclick="next_new()" name="option-B11" id="option-B11-4" class="left" value="1"/>
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
				</label>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div>
            </div>  
			<div class="clear" style="height:2px;"></div>
            </article>
			
			<!---2nd question-->

			<article class="item ">			
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>If I see value in a product, I urge others to buy it?</b></p>  
            </div>
            <div class=" clear answer">
			  <div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div> 
              <div class="left options">
                <div class=" clear option">
				  <label>
					  <input type="radio" onclick="next_new()" name="option-B12" id="option-B12-1" class="left" value="1"/>
					  <p class="left opt">Strongly Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B12" id="option-B12-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B12" id="option-B12-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B12" id="option-B12-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
                </div>
              </div><!--START-->
			  <div class="clear" style="height:2px;"></div>
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---3rd question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I find it easy to convince others?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B13" id="option-B13-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B13" id="option-B13-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B13" id="option-B13-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B13" id="option-B13-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
			  </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---4th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Numerical data makes me dizzy</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B14" id="option-B14-1" class="left" value="4"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B14" id="option-B14-2" class="left" value="3"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B14" id="option-B14-3" class="left" value="2"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B14" id="option-B14-4" class="left" value="1"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---5th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Similarities stand out more than differences</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B15" id="option-B15-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B15" id="option-B15-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B15" id="option-B15-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B15" id="option-B15-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---6th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Most business problems require mathematical analysis for successful solutioning?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B16" id="option-B16-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B16" id="option-B16-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B16" id="option-B16-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B16" id="option-B16-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---7th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Having the power to control drives me to work hard?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B17" id="option-B17-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B17" id="option-B17-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B17" id="option-B17-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B17" id="option-B17-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---8th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>More often than not, I am able to influence others</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B18" id="option-B18-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B18" id="option-B18-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B18" id="option-B18-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B18" id="option-B18-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---9th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Designing a system which runs the company would be a dream come true?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B19" id="option-B19-1" class="left" value="1" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B19" id="option-B19-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B19" id="option-B19-3" class="left" value="3" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B19" id="option-B19-4" class="left" value="4" />
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---10th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I would love to set up business strategy when I grow up?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B20" id="option-B20-1" class="left" value="1" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B20" id="option-B20-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				 <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B20" id="option-B20-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B20" id="option-B20-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---11th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I look out for new developments in technology</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B21" id="option-B21-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B21" id="option-B21-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B21" id="option-B21-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B21" id="option-B21-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---12th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>It would be interesting to analyze how 'production' happens in manufacturing</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B22" id="option-B22-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B22" id="option-B22-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B22" id="option-B22-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B22" id="option-B22-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---13th question-->
			
			
			<article class="item">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I would not  necessarily influence my friends to buy a new product just because I liked it ?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B23" id="option-B23-1" class="left" value="4"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B23" id="option-B23-2" class="left" value="3"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B23" id="option-B23-3" class="left" value="2"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B23" id="option-B23-4" class="left" value="1"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			<article class="item ">
			
			<!---14th question-->
			
			
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I have a natural liking for numbers</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B24" id="option-B24-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B24" id="option-B24-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B24" id="option-B24-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B24" id="option-B24-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---15th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Given the chance I would love to produce the blueprint of an entrepreneurial venture?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B25" id="option-B25-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B25" id="option-B25-2" class="left" value="1"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B25" id="option-B25-3" class="left" value="2"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B25" id="option-B25-4" class="left" value="3"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---16th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I like numbers more than words</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B26" id="option-B26-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B26" id="option-B26-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B26" id="option-B26-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B26" id="option-B26-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---17th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>When I get down to research, I go really deep into it?</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B27" id="option-B27-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B27" id="option-B27-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B27" id="option-B27-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B27" id="option-B27-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---18th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Crafting a strategy is half as exciting as carrying it out</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B28" id="option-B28-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B28" id="option-B28-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B28" id="option-B28-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B28" id="option-B28-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---19th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I would love to work as a research & development specialist.</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B29" id="option-B29-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B29" id="option-B29-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B29" id="option-B29-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B29" id="option-B29-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
                  </label>				 
				 <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---20th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I would rather use a tried and tested technology than try a new one</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B30" id="option-B30-1" class="left" value="4"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B30" id="option-B30-2" class="left" value="3"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B30" id="option-B30-3" class="left" value="2"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B30" id="option-B30-4" class="left" value="1"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---21th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I am looking forward to studying Finance when I grow up </b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B31" id="option-B31-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B31" id="option-B31-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B31" id="option-B31-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B31" id="option-B31-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---22th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I find myself guiding others to take decisions</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B32" id="option-B32-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B32" id="option-B32-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B32" id="option-B32-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B32" id="option-B32-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			
			<!---23th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>I have a deep interest in research models that help in forming business strategy</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B33" id="option-B33-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B33" id="option-B33-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B33" id="option-B33-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B33" id="option-B33-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---24th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>My thought process is rather structured</b></p>  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B34" id="option-B34-1" class="left" value="4"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B34" id="option-B34-2" class="left" value="3"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B34" id="option-B34-3" class="left" value="2"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B34" id="option-B34-4" class="left" value="1"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			
			<!---25th question-->
			
			
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  <br />  
				<p>
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
				</p>
              <p class="left"><b>Re-defining a business process would be a great learning experience</b></p> 
<p></p>			  
            </div>
            <div class=" clear answer">
			<div class="list">
					<ol>
						<li>1.</li>
						<li>2.</li>
						<li>3.</li>
						<li>4.</li>
					</ol>
				</div>
              <div class="left options">
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B35" id="option-B35-1" class="left" value="1"/>
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B35" id="option-B35-2" class="left" value="2"/>
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B35" id="option-B35-3" class="left" value="3"/>
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" onclick="next_new()" name="option-B35" id="option-B35-4" class="left" value="4"/>
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div><!--START-->
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			<!-- group B Questions Ends-->
			
			
			<!-- group C Questions Starts-->
			<article class="item ">
				<div class="question">
				<p class=" left ques">Instructions:</p>  
				  <p>Given below are a few groups of statements. Rate the statements in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not at all like this</b></span>
				  <span><b>2 - I am not like this</b></span>
				  <span><b>3 - I am a little like this</b></span>
				  <span><b>4 - I am a lot like this</b></span>
				  <span><b>5 - I am exactly like this</b></span>
				</div>
				<div class=" clear answer" id="answer-36">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
							<li>5.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-36">
						<li class="first">I would choose a job that provides me with future security<input type="hidden" value="1"/></li>
						<li class="second">I would want a role/job which gets recognized by others<input type="hidden" value="2"/></li>
						<li class="third">I would choose to make my own decisions with independence<input type="hidden" value="3"/></li>
						<li class="forth">I want a job that provides different kinds of work<input type="hidden" value="4"/></li>
						<li class="first">I would choose a job that gives me the opportunity to be with a lot of people<input type="hidden" value="5"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question">
				<p class=" left ques">Instructions:</p>  <br />  
				  <p>Given below are a few groups of statements. Rate the statements in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not at all like this</b></span>
				  <span><b>2 - I am not like this</b></span>
				  <span><b>3 - I am a little like this</b></span>
				  <span><b>4 - I am a lot like this</b></span>
				  <span><b>5 - I am exactly like this</b></span>
				
				</div>
				<div class=" clear answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
							<li>5.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-37">
						<li class="first">I would want a job where I can make friends and relationships that will last <input type="hidden" value="1"/></li>
						<li class="second">I would not want a job that has poor future employability<input type="hidden" value="2"/></li>
						<li class="third">I want a job where I can work independently<input type="hidden" value="3"/></li>
						<li class="forth">I want a position which gets recognized by others<input type="hidden" value="4"/></li>
						<li class="first">I would rather have a job that gives me a great variety of tasks<input type="hidden" value="5"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question"><p class=" left ques">Instructions:</p>  <br />  
				  <p>Given below are a few groups of statements. Rate the statements in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not at all like this</b></span>
				  <span><b>2 - I am not like this</b></span>
				  <span><b>3 - I am a little like this</b></span>
				  <span><b>4 - I am a lot like this</b></span>
				  <span><b>5 - I am exactly like this</b></span>
				 
				</div>
				<div class=" clear answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
							<li>5.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-38">
						<li class="first">I want a job where my accomplishments get recognized and rewarded<input type="hidden" value="1"/></li>
						<li class="second">I want a job that will give me the opportunity to different things<input type="hidden" value="2"/></li>
						<li class="third">I would rather have a moderate basic salary than a huge bonus<input type="hidden" value="3"/></li>
						<li class="forth">I want a job where I have a free hand at doing my tasks independently<input type="hidden" value="4"/></li>
						<li class="first">I want a position that allows me to associate with others<input type="hidden" value="5"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question"><p class=" left ques">Instructions:</p>  <br />  
				  <p>Given below are a few groups of statements. Rate the statements in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not at all like this</b></span>
				  <span><b>2 - I am not like this</b></span>
				  <span><b>3 - I am a little like this</b></span>
				  <span><b>4 - I am a lot like this</b></span>
				  <span><b>5 - I am exactly like this</b></span>
				
				</div>
				<div class=" clear answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
							<li>5.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-39">
						<li class="first">I would like a job that provides a variety in the nature of work<input type="hidden" value="1"/></li>
						<li class="second">I would like a job where I have the free will to take my own decisions<input type="hidden" value="2"/></li>
						<li class="third">I want a position that gives me the opportunity to bond with a large group of people<input type="hidden" value="3"/></li>
						<li class="forth">I would choose a job where I occasionally get a pat on my back for work well done<input type="hidden" value="4"/></li>
						<li class="first">I would choose a job that provides me with future employability<input type="hidden" value="5"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question"><p class=" left ques">Instructions:</p>  <br />  
				  <p>Given below are a few groups of statements. Rate the statements in each cluster based on the rating scale ranging from ‘I am not like this' (1) to ‘I am exactly like this' (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – I am not at all like this</b></span>
				  <span><b>2 - I am not like this</b></span>
				  <span><b>3 - I am a little like this</b></span>
				  <span><b>4 - I am a lot like this</b></span>
				  <span><b>5 - I am exactly like this</b></span>
				 
				</div>
				<div class=" clear answer">
				<div class="list">
						<ol>
							<li>1.</li>
							<li>2.</li>
							<li>3.</li>
							<li>4.</li>
							<li>5.</li>
						</ol>
					</div>
					<div style="float:left">
					<ol class="simple_with_animation vertical" id="question-40">
						<li class="first">I would choose a job that gives me the opportunity to belong to a large group of people<input type="hidden" value="1"/></li>
						<li class="second">I would choose a position with autonomy and decision making powers<input type="hidden" value="2"/></li>
						<li class="third">I want to have a safe and stable career<input type="hidden" value="3"/></li>
						<li class="forth">I want a position which gets recognized by others<input type="hidden" value="4"/></li>
						<li class="first">I want a job that provides a great variety of work<input type="hidden" value="5"/></li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			
			<!-- group C Questions Ends-->
            <!--conect slider-->
            </div>
            
         </div>
          <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev" style="background:none !important; left:213px;margin-top:-67px;">Previous</a>-->
          <div style="margin:10px 0px;">
              <input type="hidden" id="currentQuestion" value="1"/>  
			  <span id="serialize_output"></span>
			  <!--<a class=" btn1 btn btn-primary" style="margin-top:0 !important" onclick="prev()"><< Prev</a>-->
			  <button class="btn btn-primary" id="tour-btn" style="margin-top:0 !important">Quick Tour</button>
			  <span class="alert alert-danger bs-alert-old-docs offset3" id="error" style="display:none">
			    Please choose one of the options.
			  </span>
              <a  class=" btn1 btn btn-primary pull-right" style="margin-top:0 !important" id="nextBtn" onclick="next()">Next >></a>
              <button  class=" btn1 btn btn-success offset4" id="reportBtn" style="margin-top:0 !important;display:none;" onclick="calculatePartC()" >Show Report</button>
              <!--<input type="button" class=" btn2 btn btn-success" value="Flag for preview" style="margin-top:0 !important" />-->
              
              
            </div>
          <!--<a class="carousel-control right" href="#myCarousel" data-slide="next" style="background:none !important; margin-top:-37px; right:60px; margin-top:-67px;">Next</a> -->
        </div> 
      </div>
	  <div id="gap"></div>
       <?php $this->load->view('layout/js');?>
		<script src="<?php echo base_url()?>assets/js/jquery-sortable.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-tour.js"></script>
		<script src="http://tympanus.net/Development/AnimatedCheckboxes/js/svgcheckbx.js"></script>
		
		<script type="text/javascript">
		/*******Tour Script*******/
			var tour = new Tour({
			  name: "tour",
			  container: "body",
			  keyboard: true,
			  storage: window.localStorage,
			  debug: false,
			  backdrop: false,
			  redirect: true,
			  orphan: false,
			  duration: false,
			  basePath: "",
			  template: "<div class='popover tour'><div class='arrow'></div><h3 class='popover-title gifted-popover'></h3> <div class='popover-content'> </div><div class='popover-navigation'><button class='btn btn-small btn-success pull-right' data-role='next'>Got It</button><div style='clear:both'></div></div> </nav> </div>"
			});

		// Add your steps. Not too many, you don't really want to get your users sleepy
		tour.addSteps([
		  {
			element: "#instruction", // string (jQuery selector) - html element next to which the step popover should be shown
			placement:"bottom",
			title: "How to take the exam", // string - title of the popover
			content: "Read the instructions for this section carefully.", // string - content of the popover,
			backdrop: true
		  },
		  {
			element: "#answer-1", // string (jQuery selector) - html element next to which the step popover should be shown
			placement:"top",
			title: "Arrange these boxes according to your prefrences", // string - title of the popover
			content: "You can use the mouse to drag them in your required order.", // string - content of the popover,
			backdrop: true
		  },
		  {
			element: "#nextBtn",
			placement:"top",
			title: "Move To Next Question",
			content: "After you arrange your answer you can simply move to next question.",
			backdrop: true
		  },
		  {
			element: "#Question-11",
			placement:"top",
			title: "For this section",
			content: "Read the question for this section carefully.",
			backdrop: true
		  },
		  {
			element: "#answer-11", // string (jQuery selector) - html element next to which the step popover should be shown
			placement:"top",
			title: "Select an option ", // string - title of the popover
			content: "Choose the best option applicable.", // string - content of the popover,
			backdrop: true
		  },
		  {
			element: "#answer-36", // string (jQuery selector) - html element next to which the step popover should be shown
			placement:"top",
			title: "Arrange these boxes according to your prefrences", // string - title of the popover
			content: "You can use the mouse to drag them in your required order.<br>Press Esc. to close.", // string - content of the popover,
			backdrop: true,
			duration:4000
		  }
		]);
		// Initialize the tour
		tour.init();
		// Start the tour
		tour.start();
		$(document).on("click","#tour-btn",function(){tour.restart();tour.goTo(0);});
		
		
		
		$(document).ready(function() {
		/*******End of Tour Script*******/
		
		var time = setInterval('ShowTime()', 1000);
		
		var adjustment

		$("ol.simple_with_animation").sortable({
		  group: 'simple_with_animation',
		  pullPlaceholder: false,
		  // animation on drop
		  onDrop: function  (item, targetContainer, _super) {
			var clonedItem = $('<li/>').css({height: 0})
			item.before(clonedItem)
			clonedItem.animate({'height': item.height()})
			
			item.animate(clonedItem.position(), function  () {
			  clonedItem.detach()
			  _super(item)
			})
		  },

		  // set item relative to cursor position
		  onDragStart: function ($item, container, _super) {
			var offset = $item.offset(),
			pointer = container.rootGroup.pointer

			adjustment = {
			  left: pointer.left - offset.left,
			  top: pointer.top - offset.top
			}

			_super($item, container)
		  },
		  onDrag: function ($item, position) {
			$item.css({
			  left: position.left - adjustment.left,
			  top: position.top - adjustment.top
			})
		  }
		})
		
		});
		
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
		
		function gotoslide(slide)
		{
			$('#myCarousel').carousel(slide-1);
			$('#myCarousel').carousel('pause');
			$("#currentQuestion").val(slide);
			checkLast();
		}
		function next_new()
		{
			var question = $("#currentQuestion").val();
			
			var next = parseInt(question)+1;
			if(next<=40)
			{
				if(next==11)
				{
				calculatePartA();
				}
				if(next==36)
				{
				calculatePartB();
				}
				
				var per = parseInt((question*100)/40);
				//alert(per);
				$("#bar").width(per+'%');
				$('#myCarousel').carousel('pause');
				$("#currentQuestion").val(next);
				setTimeout(function(){$('#myCarousel').carousel('next');},500);
				
				
				if(next==36)
				{
					//alert("section c");
					setTimeout(function(){
						if(tour.ended())
							tour.restart();
						tour.goTo(5);
					},1000);
				}
				
				checkLast();
			}
		}
		function next()
		{
			var question = $("#currentQuestion").val();
			
			var next = parseInt(question)+1;
			if(question>=11 && question<36)
			{
				//alert(question);
				if(!verify(question))
				return;
			}
			if(next<=40)
			{
				if(next==11)
				calculatePartA();
				if(next==36)
				calculatePartB();
				
				var per = parseInt((question*100)/40);
				//alert(per);
				$("#bar").width(per+'%');
				$('#myCarousel').carousel('next');
				$('#myCarousel').carousel('pause');
				$("#currentQuestion").val(next);
				
				
				
				if(next==11)
				{
					/*Section B*/
					setTimeout(function(){
						if(tour.ended())
							tour.restart();
						tour.goTo(3);
					},1000);
				}
				if(next==36)
				{
					alert("section c");
					setTimeout(function(){
						if(tour.ended())
							tour.restart();
						tour.goTo(5);
					},1000);
				}
				
				checkLast();
			}
		}
		function calculatePartB()
		{
			//alert("part B");
			var ans = new Array();
			count=1;
			for(var j=11;j<=35;j++)
			{
				for(var i=1;i<=4;i++)
				{
					//alert($("#option-B11-"+i).is(':checked'));
					if($("#option-B"+j+"-"+i).is(':checked'))
					{
						//alert("Option-"+j+"-"+i+" ="+$("#option-B"+j+"-"+i).val());
						if(isNaN($("#option-B"+j+"-"+i).val()))
						{
						alert("Error Code :"+j);
						}
						ans[count++]= parseInt($("#option-B"+j+"-"+i).val());
					}
				}
			}
			//alert(ans);
			/***
			2,3,8,13,22	Influencing Others	17
			1,7,10,15,18	Controlling Business	13
			9,11,12,20,25	Application of Technology	15
			4,6,14,16,21	Quantitative Analysis	11
			5,17,19,23,24	Research & Development	14
			****/
			
			//alert(ans[2]+' '+ans[3]+' '+ans[8]+' '+ans[13]+' '+ans[22]);
			//alert(ans[9]+' '+ans[11]+' '+ans[12]+' '+ans[20]+' '+ans[25]);
			io = ans[2]+ans[3]+ans[8]+ans[13]+ans[22];
			cb = ans[1]+ans[7]+ans[10]+ans[15]+ans[18];
			aot = ans[9]+ans[11]+ans[12]+ans[20]+ans[25];
			qa = ans[4]+ans[6]+ans[14]+ans[16]+ans[21];
			rnd = ans[5]+ans[17]+ans[19]+ans[23]+ans[24];
			
			//alert(io+" "+cb+" "+aot+" "+qa+" "+rnd);
			
			/*****saving score******/
			var apiemail=getURLParameter('email');
			var testId = getURLParameter('testid');
			//data = "part=B&io="+io+"&cb="+cb+"&aot="+aot+"&qa="+qa+"&rnd="+rnd+"&email="+apiemail+"&testid="+testId;
			data = "part=B&io="+io+"&cb="+cb+"&aot="+aot+"&qa="+qa+"&rnd="+rnd;
			
			
			$.post("<?php echo base_url('quiz/saveapiscore')?>",data,function(response){
			
			//alert(response);
			});
			
			/******Saved*****/
			
			
		}
		function calculatePartC()
		{
			var score = [];
			for(var i=1;i<=10;i++)
				score[i]=[];
			for(var i=36,j=1;i<=40;i++,j++)
			{
				var count = 1;
				$('#question-'+i+' input').each(function(){
					score[j][count] = parseInt($(this).val());
					count++;
				});
			}
			//alert(score);
			/*****Getting Values****/
			A1=score[1][1]; B1=score[1][2];	C1=score[1][3];	D1=score[1][4]; E1=score[1][5];
			A2=score[2][1]; B2=score[2][2];	C2=score[2][3];	D2=score[2][4]; E2=score[2][5];
			A3=score[3][1]; B3=score[3][2];	C3=score[3][3];	D3=score[3][4]; E3=score[3][5];
			A4=score[4][1]; B4=score[4][2];	C4=score[4][3];	D4=score[4][4]; E4=score[4][5];
			A5=score[5][1]; B5=score[5][2];	C5=score[5][3];	D5=score[5][4]; E5=score[5][5];
			
			//alert(A1+" "+B1+" "+C1+" "+D1+" "+E1);
			//alert(A2+" "+B2+" "+C2+" "+D2+" "+E2);
			//alert(A3+" "+B3+" "+C3+" "+D3+" "+E3);
			//alert(A4+" "+B4+" "+C4+" "+D4+" "+E4);
			//alert(A5+" "+B5+" "+C5+" "+D5+" "+E5);
			/**calculating part c score*/
			/*
			1A,2B,3C,4E,5C	Security
			1D,2E,3B,4A,5E	Variety
			5A,4C,3E,2A,1E	Affiliation
			1B,2D,3A,4D,5D	Recognition
			1C,2C,3D,4B,5B	Autonomy
			*/
			sec = A1+B2+C3+E4+C5;
			ver = D1+E2+B3+A4+E5;
			affi =  A5+C4+E3+A2+E1;
			rec = B1+D2+A3+D4+D5;
			auto = C1+C2+D3+B4+B5;
			
			//alert(sec+" "+ver+" "+affi+" "+rec+" "+auto);
			
			var apiemail=getURLParameter('email');
			var testId = getURLParameter('testid');
			//data = "part=C&sec="+sec+"&ver="+ver+"&affi="+affi+"&rec="+rec+"&auto="+auto+"&email="+apiemail+"&testid="+testId;
			data = "part=C&sec="+sec+"&ver="+ver+"&affi="+affi+"&rec="+rec+"&auto="+auto;
			
			$.post("<?php echo base_url('quiz/saveapiscore')?>",data,function(response){
			//alert(response);
			window.location.href = '<?php echo base_url()?>gifted/reportapi';
			});
			/*****/
		}
		function calculatePartA()
		{
			var score = [];
			for(var i=1;i<=10;i++)
				score[i]=[];
			for(var i=1;i<=10;i++)
			{
				var count = 1;
				$('#question-'+i+' input').each(function(){
					score[i][count] = parseInt($(this).val());
					count++;
				});
			}
			
			/****Generating values****/
			A1=score[1][1]; B1=score[1][2];	C1=score[1][3];	D1=score[1][4];
			A2=score[2][1]; B2=score[2][2];	C2=score[2][3];	D2=score[2][4];
			A3=score[3][1]; B3=score[3][2];	C3=score[3][3];	D3=score[3][4];
			A4=score[4][1]; B4=score[4][2];	C4=score[4][3];	D4=score[4][4];
			A5=score[5][1]; B5=score[5][2];	C5=score[5][3];	D5=score[5][4];
			A6=score[6][1]; B6=score[6][2];	C6=score[6][3];	D6=score[6][4];
			A7=score[7][1]; B7=score[7][2];	C7=score[7][3];	D7=score[7][4];
			A8=score[8][1]; B8=score[8][2];	C8=score[8][3];	D8=score[8][4];
			A9=score[9][1]; B9=score[9][2];	C9=score[9][3];	D9=score[9][4];
			A10=score[10][1]; B10=score[10][2];	C10=score[10][3];	D10=score[10][4];
			/****End of Getting value*****/
			
			/**Calculating Part A score**/
			/*
			1D,2A,3D,4A,5A,6B,7D,8B,9C,10D	Upper Left (A)
			1B,2B,3A,4B,5B,6C,7A,8D,9B,10A	Lower Left (B)
			1C,2D,3B,4C,5C,6A,7B,8A,9D,10B	Lower Right (C )
			1A,2C,3C,4D,5D,6D,7C,8C,9A,10C	Upper Right (D)
			*/
			
			UpperLeft = D1+A2+D3+A4+A5+B6+D7+B8+C9+D10;
			LowerLeft = B1+B2+A3+B4+B5+C6+A7+D8+B9+A10;
			LowerRight = C1+D2+B3+C4+C5+A6+B7+A8+D9+B10;
			UpperRight = A1+C2+C3+D4+D5+D6+C7+C8+A9+C10;
			
			totalScore = UpperLeft + LowerLeft+LowerRight+UpperRight;
			
			//alert("total score of part A is "+totalScore);
			//alert(UpperLeft+' '+LowerLeft+' '+LowerRight+' '+UpperRight);
			
			/**End**/
			
			/*****saving score******/
			var apiemail=getURLParameter('email');
			var testId = getURLParameter('testid');
			//data = "part=A&UpperLeft="+UpperLeft+'&LowerLeft='+LowerLeft+'&LowerRight='+LowerRight+'&UpperRight='+UpperRight+"&email="+apiemail+"&testid="+testId;
			data = "part=A&UpperLeft="+UpperLeft+'&LowerLeft='+LowerLeft+'&LowerRight='+LowerRight+'&UpperRight='+UpperRight+"&testid="+testId;
			
			$.post("<?php echo base_url('quiz/saveapiscore')?>",data,function(response){
			
			//alert(response);
			});
			
			/******Saved*****/
			
			//alert(A1+" "+B1+" "+C1+" "+D1);
			
			//alert(score);
		}
		function getURLParameter(name) {
		return decodeURI(
			(RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
		);
		}
		function prev()
		{
			var question = $("#currentQuestion").val();
			//alert(question);
			var previous = parseInt(question)-1;
			if(previous)
			{
			$('#myCarousel').carousel('prev');
			$('#myCarousel').carousel('pause');
			$("#currentQuestion").val(previous);
			checkLast();
			}
		}
		function checkLast()
		{
			if($("#currentQuestion").val()==40)
			{
				$("#reportBtn").show();
				$("#nextBtn").hide();
			}
			else
			{
				$("#nextBtn").show();
				$("#reportBtn").hide();
			}
		}
		function verify(current)
		{
			var valid = true;
			var flag=false;
			for(var i=1;i<=4;i++)
			{
				if($("#option-B"+current+"-"+i).prop('checked'))
				{
					flag=true;
				}
			}
			if(!flag)
			{
				//$("#link-slide-"+j).css("background-color","red");
				$("#error").show();
				setTimeout(function(){$("#error").fadeOut();},2000);
				valid=false;
			}
			return valid;
		}
		</script>			