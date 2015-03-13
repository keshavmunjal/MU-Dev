 <div class="demo-mode">
        <div class="container">
          <p> </p>
          <nav class="left">
            <ul><li></li>
              <li> <a>Psychometric Analysis</a></li>
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
         <ol class="carousel-indicators quiz-list" style="right:0px; top:373px; font-size:11px; color:#ffffff">
		 <?php for($i=1;$i<=40;$i++){?>
           <!-- <li class="<?php echo ($i==1)?'active':'';?>" id="link-slide-<?php echo $i;?>" onclick='gotoslide(<?php echo $i;?>)' style="text-indent:0px !important;border-radius: 2px; cursor:pointer;width:18px;text-align:center;"><?php echo $i;?></li>-->
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Visualize</li>
						<li>Organize</li>
						<li>Personalize</li>
						<li>Analyze</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
					<!--<ol class="simple_with_animation vertical">
					</ol>-->
				</div>
          
               
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Logical</li>
						<li>Detailed</li>
						<li>Conceptual</li>
						<li>Interpersonal</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
					<!--<ol class="simple_with_animation vertical">
					</ol>-->
				</div>
          
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Schedule</li>
						<li>Intuition</li>
						<li>Imagination</li>
						<li>Processing</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
					<!--<ol class="simple_with_animation vertical">
					</ol>-->
				</div>
          
               
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Realistic</li>
						<li>Bureaucratic</li>
						<li>Co-operative</li>
						<li>Inventive</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Authoritarian</li>
						<li>Reliable</li>
						<li>Value-Oriented</li>
						<li>Flexible</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Emotional</li>
						<li>Quantitative</li>
						<li>Detail-oriented</li>
						<li>Visual</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Structured</li>
						<li>Sensory</li>
						<li>Intuitive</li>
						<li>Data collection</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Spiritual</li>
						<li>Technical</li>
						<li>Innovative</li>
						<li>Organized</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Conceptual</li>
						<li>Planning</li>
						<li>Logical</li>
						<li>Feeling</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				<div class=" clear answer">
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>Methodical</li>
						<li>Group orientation</li>
						<li>Long term thinking</li>
						<li>Critical</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				  </div>
            </article>
			
			<!-- group A Questions Ends-->
			
			<!-- group B Questions Starts-->
           <article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>I wish strategizing came to me naturally?</b></p>  
            </div>
            <div class=" clear answer">
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option-B11" id="option-B11-1" class="left" />
                  <p class="left opt">Strongly Disagree</p>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option-B11" id="option-B11-2" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option-B11" id="option-B11-3" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option-B11" id="option-B11-4" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
              <div class="right fig">
                <!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
            </div>  
            </article>
			<article class="item ">
            <div class="question">
			<p class=" left ques">Instructions:</p>  
				Given below is a set of behavioural statements. Please rate each statement based on the degree to which you agree or disagree with them. Refer to the rating scale given alongside the statements and place a tick under the appropriate rating. You are not being judged so please be as honest as possible with your response.
              <p class="left"><b>If I see value in a product, I urge others to buy it?</b></p>  
            </div>
            <div class=" clear answer">
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
              <div class="left options">
                <div class=" clear option">
                  <p class="left opt">A</p>
                  <input type="radio" name="option" id="optionA" class="left" />
                  <p class="left opt">Strongly Disagree</p>
				  <input type="hidden" id="optionA-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">B</p>
                  <input type="radio" name="option" id="optionB" class="left" />
                  <p class="left opt">Moderately Disagree</p>
				  <input type="hidden" id="optionB-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">C</p>
                  <input type="radio" name="option" id="optionC" class="left" />
                  <p class="left opt">Moderately Agree</p>
				  <input type="hidden" id="optionC-" value=""/>
                </div>
                <div class=" clear option">
                  <p class="left opt">D</p>
                  <input type="radio" name="option" id="optionD" class="left" />
                  <p class="left opt">Strongly Agree</p>
				  <input type="hidden" id="optionD-" value=""/>
                </div>
              </div>
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
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>I would choose a job that provides me with future security</li>
						<li>I would want a role/job which gets recognized by others</li>
						<li>I would choose a position with autonomy and decision making powers</li>
						<li>I want a job that provides a great variety of work</li>
						<li>I would choose a job that gives me the opportunity to belong to a large group of people</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>I would want a role/job which would give me the opportunity to have long lasting interpersonal relations</li>
						<li>I would not want a job that has poor future employability</li>
						<li>I want a job where I can exercise independence</li>
						<li>I want a position which gets recognized by others</li>
						<li>I would rather have a job that gives me a great variety of tasks</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>I want a job where my accomplishments get recognized and rewarded</li>
						<li>I want a job that will give me the opportunity to different things</li>
						<li>I would rather have a moderate basic salary than a huge variable component</li>
						<li>I want a job where I have a free hand at doing my tasks independently</li>
						<li>I want a position that allows me to affiliate with others</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>I would like a job that provides a variety in the nature of work</li>
						<li>I would like a job where I have the autonomy to take my own decisions</li>
						<li>I want a position that gives me the opportunity to bond with a large group of people</li>
						<li>I would choose a job where I occasionally get a pat on my back for work well done</li>
						<li>I would choose a job that provides me with future employability</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
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
				  <div class="left options">
					<ol class="simple_with_animation vertical">
						<li>I would choose a job that gives me the opportunity to belong to a large group of people</li>
						<li>I would choose a position with autonomy and decision making powers</li>
						<li>I want to have a safe and stable career</li>
						<li>I want a position which gets recognized by others</li>
						<li>I want a job that provides a great variety of work</li>
					</ol>
				  </div>
				  <div class="right fig">
					<!--<img src="<?php // echo base_url()?>assets/img/market-shares.jpg" /> -->
				</div>
            </article>
			
			
			<!-- group C Questions Ends-->
            <!--conect slider-->
            </div>
            
         </div>
          <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev" style="background:none !important; left:213px;margin-top:-67px;">Previous</a>-->
          <div style="overflow:hidden; padding-left:313px;">
              <input type="hidden" id="currentQuestion" value="1"/>  
			  <span id="serialize_output"></span>
			  <a class=" btn1 btn btn-primary" style="margin-top:0 !important" onclick="prev()">Prev</a>
              <a  class=" btn1 btn btn-primary" style="margin-top:0 !important" onclick="next()">Next</a>
              <a  class=" btn1 btn btn-success" id="reportBtn" style="margin-top:0 !important;display:none;" onclick="showReport()">Show Report</a>
              <!--<input type="button" class=" btn2 btn btn-success" value="Flag for preview" style="margin-top:0 !important" />-->
              
              
            </div>
          <!--<a class="carousel-control right" href="#myCarousel" data-slide="next" style="background:none !important; margin-top:-37px; right:60px; margin-top:-67px;">Next</a> -->
        </div> 
      </div>
	  <div id="gap"></div>
       <?php $this->load->view('layout/js');?>
		<script src="<?php echo base_url()?>assets/js/jquery-sortable.js"></script>
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
			//alert(next)
			$('#myCarousel').carousel('next');
			$('#myCarousel').carousel('pause');
			$("#currentQuestion").val(next);
			checkLast();
		}
		function prev()
		{
			var question = $("#currentQuestion").val();
			var previous = parseInt(question)-1;
			$('#myCarousel').carousel('prev');
			$('#myCarousel').carousel('pause');
			if(previous)
			$("#currentQuestion").val(previous);
			else
			$("#currentQuestion").val('40');
			checkLast();
		}
		function checkLast()
		{
			if($("#currentQuestion").val()==40)
			{
				$("#reportBtn").show();
			}
			else
			{
				//$("#reportBtn").hide();
			}
		}
		function showReport()
		{
			var valid = true;
			
			for(var j=11;j<36;j++)
			{
				var flag=false;
				for(var i=1;i<=4;i++)
				{
					if($("#option-B11-"+i).prop('checked'))
					{
						flag=true;
					}
				}
				if(!flag)
				{
					$("#link-slide-"+j).css("background-color","red");
					valid=false;
				}
				else
				{
					$("#link-slide-"+j).css("background-color","#b0b0af");
					
					//this is success 
				}
			}
			if(valid)
			{
				window.location.href="<?php echo base_url()?>quiz/report";
			}
		}
		</script>	