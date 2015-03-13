 <div class="demo-mode">
        <div class="container">
          <p> </p>
          <nav class="left">
           <h3 style="margin-top: 3px;color: #666999;">Gifted : Know what you excel at</h3>
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
              
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
						<ol class="simple_with_animation vertical">
							<li>Visualize</li>
							<li>Organize</li>
							<li>Personalize</li>
							<li>Analyze</li>
						</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
              
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
						<ol class="simple_with_animation vertical">
							<li>Logical</li>
							<li>Detailed</li>
							<li>Conceptual</li>
							<li>Interpersonal</li>
						</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
          
            </article>
			<article class="item ">
              
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span> 
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
					<ol class="simple_with_animation vertical">
						<li>Schedule</li>
						<li>Intuition</li>
						<li>Imagination</li>
						<li>Processing</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
          
               
            </article>
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>Realistic</li>
						<li>Bureaucratic</li>
						<li>Co-operative</li>
						<li>Inventive</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>Authoritarian</li>
						<li>Reliable</li>
						<li>Value-Oriented</li>
						<li>Flexible</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>Emotional</li>
						<li>Quantitative</li>
						<li>Detail-oriented</li>
						<li>Visual</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>Structured</li>
						<li>Sensory</li>
						<li>Intuitive</li>
						<li>Data collection</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>Spiritual</li>
						<li>Technical</li>
						<li>Innovative</li>
						<li>Organized</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question">
				 <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>Conceptual</li>
						<li>Planning</li>
						<li>Logical</li>
						<li>Feeling</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question">
				  <p class=" left ques">Instructions:</p>  
				  <p>Given below are a few clusters of words. Rate the words in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (4). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>Methodical</li>
						<li>Group orientation</li>
						<li>Long term thinking</li>
						<li>Critical</li>
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
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
            <p class="left"><b>I wish strategizing came to me naturally?</b></p>  
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
                  <input type="radio" name="option-B11" id="option-B11-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				</label>
                </div>
                <div class=" clear option">
				<label>
                  <input type="radio" name="option-B11" id="option-B11-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				</label>
                </div>
                <div class=" clear option">
				<label>
                  <input type="radio" name="option-B11" id="option-B11-3" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				</label>
                </div>
                <div class=" clear option">
				<label>
                  <input type="radio" name="option-B11" id="option-B11-4" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
				</label>
                </div>
              </div>
			  <div class="clear" style="height:2px;"></div>
            </div>  
			<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
					  <input type="radio" name="option-B12" id="option-B12-1" class="left" />
					  <p class="left opt">Strongly Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B12" id="option-B12-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" name="option-B12" id="option-B12-2" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B12" id="option-B12-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" name="option-B12" id="option-B12-3" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B12" id="option-B12-4" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  </label>
				  <input type="hidden" name="option-B12" id="option-B12-4" value=""/>
                </div>
              </div><!--START-->
			  <div class="clear" style="height:2px;"></div>
            </div>  
			<div class="clear" style="height:2px;"></div><!--END-->
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B13" id="option-B13-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B13" id="option-B13-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B13" id="option-B13-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B13" id="option-B13-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B14" id="option-B14-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B14" id="option-B14-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B14" id="option-B14-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B14" id="option-B14-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>I tend to detect similarities rather than differences</b></p>  
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
                  <input type="radio" name="option-B15" id="option-B15-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B15" id="option-B15-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B15" id="option-B15-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B15" id="option-B15-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>Most business problems require quantitative data analysis for successful resolution?</b></p>  
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
                  <input type="radio" name="option-B16" id="option-B16-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B16" id="option-B16-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B16" id="option-B16-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B16" id="option-B16-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>Having the power to control a business unit drives me to work hard?</b></p>  
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
                  <input type="radio" name="option-B17" id="option-B17-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B17" id="option-B17-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B17" id="option-B17-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B17" id="option-B17-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>More often than not, I am able to win the approval of others</b></p>  
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
                  <input type="radio" name="option-B18" id="option-B18-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B18" id="option-B18-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B18" id="option-B18-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B18" id="option-B18-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>Designing an operations system would be a dream come true?</b></p>  
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
                  <input type="radio" name="option-B19" id="option-B19-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B19" id="option-B19-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B19" id="option-B19-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B19" id="option-B19-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>Setting up business strategy is totally my cup of tea?</b></p>  
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
                  <input type="radio" name="option-B20" id="option-B20-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B20" id="option-B20-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				 <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B20" id="option-B20-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B20" id="option-B20-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>I look out for technological breakthroughs</b></p>  
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
                  <input type="radio" name="option-B21" id="option-B21-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B21" id="option-B21-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B21" id="option-B21-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B21" id="option-B21-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>It would be interesting to analyze ‘production’ as a business function</b></p>  
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
                  <input type="radio" name="option-B22" id="option-B22-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B22" id="option-B22-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B22" id="option-B22-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B22" id="option-B22-4" class="left" />
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
			<article class="item">
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B23" id="option-B23-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B23" id="option-B23-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B23" id="option-B23-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B23" id="option-B23-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B24" id="option-B24-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B24" id="option-B24-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B24" id="option-B24-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B24" id="option-B24-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B25" id="option-B25-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B25" id="option-B25-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B25" id="option-B25-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B25" id="option-B25-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>Running the numbers is any day better than running text files</b></p>  
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
                  <input type="radio" name="option-B26" id="option-B26-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B26" id="option-B26-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B26" id="option-B26-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B26" id="option-B26-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>When I get down to research, I seldom leave any stone unturned?</b></p>  
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
                  <input type="radio" name="option-B27" id="option-B27-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B27" id="option-B27-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B27" id="option-B27-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B27" id="option-B27-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>Crafting a strategy is half as exciting as executing it</b></p>  
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
                  <input type="radio" name="option-B28" id="option-B28-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B28" id="option-B28-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B28" id="option-B28-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B28" id="option-B28-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B29" id="option-B29-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B29" id="option-B29-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B29" id="option-B29-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B29" id="option-B29-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>I would rather use a tried and tested technology than dabble with a new one</b></p>  
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
                  <input type="radio" name="option-B30" id="option-B30-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B30" id="option-B30-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B30" id="option-B30-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B30" id="option-B30-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>I am looking forward to doing a certification course in Finance, perhaps the Chartered Financial Analyst </b></p>  
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
                  <input type="radio" name="option-B31" id="option-B31-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B31" id="option-B31-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B31" id="option-B31-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B31" id="option-B31-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B32" id="option-B32-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B32" id="option-B32-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B32" id="option-B32-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B32" id="option-B32-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>I have a deep interest in research models that substantiate business strategy</b></p>  
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
                  <input type="radio" name="option-B33" id="option-B33-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B33" id="option-B33-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B33" id="option-B33-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B33" id="option-B33-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
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
                  <input type="radio" name="option-B34" id="option-B34-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B34" id="option-B34-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B34" id="option-B34-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B34" id="option-B34-4" class="left" />
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
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>Re-engineering a business process would be a great learning experience</b></p> 
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
                  <input type="radio" name="option-B35" id="option-B35-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  </label>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B35" id="option-B35-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  </label>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B35" id="option-B35-3" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  </label>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <label>
                  <input type="radio" name="option-B35" id="option-B35-4" class="left" />
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
				  <p>Instructions: Given below are a few clusters of statements. Rate the statements in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
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
					<ol class="simple_with_animation vertical">
						<li>I would choose a job that provides me with future security</li>
						<li>I would want a role/job which gets recognized by others</li>
						<li>I would choose a position with autonomy and decision making powers</li>
						<li>I want a job that provides a great variety of work</li>
						<li>I would choose a job that gives me the opportunity to belong to a large group of people</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question">
				<p class=" left ques">Instructions:</p>  
				  <p>Instructions: Given below are a few clusters of statements. Rate the statements in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
				
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
					<ol class="simple_with_animation vertical">
						<li>I would want a role/job which would give me the opportunity to have long lasting interpersonal relations</li>
						<li>I would not want a job that has poor future employability</li>
						<li>I want a job where I can exercise independence</li>
						<li>I want a position which gets recognized by others</li>
						<li>I would rather have a job that gives me a great variety of tasks</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question"><p class=" left ques">Instructions:</p>  
				  <p>Instructions: Given below are a few clusters of statements. Rate the statements in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
				 
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
					<ol class="simple_with_animation vertical">
						<li>I want a job where my accomplishments get recognized and rewarded</li>
						<li>I want a job that will give me the opportunity to different things</li>
						<li>I would rather have a moderate basic salary than a huge variable component</li>
						<li>I want a job where I have a free hand at doing my tasks independently</li>
						<li>I want a position that allows me to affiliate with others</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question"><p class=" left ques">Instructions:</p>  
				  <p>Instructions: Given below are a few clusters of statements. Rate the statements in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
				
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
					<ol class="simple_with_animation vertical">
						<li>I would like a job that provides a variety in the nature of work</li>
						<li>I would like a job where I have the autonomy to take my own decisions</li>
						<li>I want a position that gives me the opportunity to bond with a large group of people</li>
						<li>I would choose a job where I occasionally get a pat on my back for work well done</li>
						<li>I would choose a job that provides me with future employability</li>
					</ol>
					</div>
					<div class="clear" style="height:2px;"></div>
				</div>
				<div class="clear" style="height:2px;"></div>
            </article>
			<article class="item ">
				<div class="question"><p class=" left ques">Instructions:</p>  
				  <p>Instructions: Given below are a few clusters of statements. Rate the statements in each cluster based on the rating scale ranging from ‘remotely characteristic’ of you (1) to ‘extremely characteristic’ of you (5). No choice is right or wrong; just go with your first response. Please make sure that you rate each word in every cluster, without repeating the same rating more than once.</p>
				  <span><b>1 – Remotely characteristic of me</b></span>
				  <span><b>2 - Somewhat characteristic of me</b></span>
				  <span><b>3 - Very characteristic of me</b></span>
				  <span><b>4 - Extremely characteristic of me</b></span>
				 
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
					<ol class="simple_with_animation vertical">
						<li>I would choose a job that gives me the opportunity to belong to a large group of people</li>
						<li>I would choose a position with autonomy and decision making powers</li>
						<li>I want to have a safe and stable career</li>
						<li>I want a position which gets recognized by others</li>
						<li>I want a job that provides a great variety of work</li>
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
			  <a class=" btn1 btn btn-primary" style="margin-top:0 !important" onclick="prev()"><< Prev</a>
			  <span class="alert alert-danger bs-alert-old-docs offset3" id="error" style="display:none">
			   Please choose an option.
			  </span>
              <a  class=" btn1 btn btn-primary pull-right" style="margin-top:0 !important" id="nextBtn" onclick="next()">Next >></a>
              <a  class=" btn1 btn btn-success offset4" href="<?php echo base_url()?>/gifted/report" id="reportBtn" style="margin-top:0 !important;display:none;" >Show Report</a>
              <!--<input type="button" class=" btn2 btn btn-success" value="Flag for preview" style="margin-top:0 !important" />-->
              
              
            </div>
          <!--<a class="carousel-control right" href="#myCarousel" data-slide="next" style="background:none !important; margin-top:-37px; right:60px; margin-top:-67px;">Next</a> -->
        </div> 
      </div>
	  <div id="gap"></div>
       <?php $this->load->view('layout/js');?>
		<script src="<?php echo base_url()?>assets/js/jquery-sortable.js"></script>
		<script src="http://tympanus.net/Development/AnimatedCheckboxes/js/svgcheckbx.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
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
				var per = parseInt((question*100)/40);
				//alert(per);
				$("#bar").width(per+'%');
				$('#myCarousel').carousel('next');
				$('#myCarousel').carousel('pause');
				$("#currentQuestion").val(next);
				//alert($("#currentQuestion").val());
				checkLast();
			}
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