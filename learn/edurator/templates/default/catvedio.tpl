{include file='header.tpl' p="index"} 
<ul class="breadcrumb" style="font-size: 13px;background: none;border-bottom: none;color: #cecece;padding-left: 17%;padding-top: 2%;">
                  <li ><a href="https://meetuniv.com/">Home</a> <span class="divider"><i class="icon-arrow-right" style="opacity: 0.2;"></i></span></li>
					<li ><a href="https://meetuniv.com/learn/edurator/">Learn</a> <span class="divider"><i class="icon-arrow-right" style="opacity: 0.2;"></i></span></li>
				
					<li class="active">{$cateName}</li>
</ul>
<h1 class="entry-title compact" style="margin-left: 240px;margin-top: -15px;font-size: 35px;">{$cateName}</h1>
<div class="video-banner-row" style="margin-top: 16px;">
        <div class="left video-banner span7">
            <!-- <img src="https://meetuniv.com/assets/images/univ-banner2.jpg" /> -->
           
            <div id="v1">
                {if $display_preroll_ad == true}
					<div id="preroll_placeholder">
						<div class="preroll_countdown">
							{$lang.preroll_ads_timeleft} <span class="preroll_timeleft">{$preroll_ad_data.timeleft_start}</span>
						</div>
						{$preroll_ad_data.code}
					</div>
				{else}
					{include file="player.tpl" page="index"}
				{/if}
            </div>
            <!--<div id="v2" >
               <img src="https://meetuniv.com/assets/images/video2.jpg" />
            </div>
            <div id="v3">
            <img src="https://meetuniv.com/assets/images/video3.jpg" />  
			
            </div>-->
            
        </div>
		<div class="pull-left right-text">
			<h5>{$lang.featured}: {$voth_title}</h5>
			<p style="overflow-y: scroll;width: 337px;padding-right: 10px;height: 170px;"> {$voth_description}</p>
			<ul style="list-style: none;margin-left: 0;margin-top: 28px;">
				<li style="color:#06696f;font-weight:bold;">MORE CATEGORIES</li>
				{foreach from=$subCat key=k item=scat}
					{foreach from=$scat key=k item=cat}
							<a href="{$smarty.const._URL}/browse-{$cat.name}-videos-1-date.html{$cat.id}" class="label label-default" style="font-size:12px;color:white;background-color: #08c;">{$cat.name}</a>
					{/foreach}
				{/foreach}
				<!--<li><a href="#"><img src="https://meetuniv.com/learn/edurator/templates/default/images/arrow-bullet.jpg">Watch Featured Videos</a></li>
				<li><a href="#"><img src="https://meetuniv.com/learn/edurator/templates/default/images/arrow.jpg">Watch More Videos</a></li>-->
				<!--<li><a href="#"><img src="https://meetuniv.com/learn/edurator/templates/default/images/arrow.jpg">More Lorem & Ipsum</a></li>-->
			</ul>
		</div>
	  <!--<div class="video-ielts">
			<ul>
				<li class="home "><a href="javascript:void(0);" onclick="showv1()" class="choosed">Lorem</a></li>
				<li class="about"><a href="javascript:void(0);" onclick="showv2()">Lorem</a></li>
				<li><a href="javascript:void(0);" onclick="showv3()">Lorem</a></li>
			</ul>
	  </div>-->
          
        </div>
		<!-- contents starts-->
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="advertisement">
						
							<div class="span4" style="border-right: 1px solid #ccc;margin-left: 12px;height: 172px;">
								<div class="first">
									<h3 style="clear:both; overflow:hidden; margin-bottom:16px;">SHARE THIS !</h3>
									<div style="margin-top: 19px;clear:both">
										<!--<div class="in"><script src="//platform.linkedin.com/in.js" type="text/javascript">
										  lang: en_US
										</script>
										<script type="IN/Share" data-counter="right"></script>
										</div>-->
										<div class="facebook"><!--<p style="margin:0">16</p>-->
										<span><iframe src="https://www.facebook.com/plugins/like.php?app_id=527890870664757&amp;href=https://www.facebook.com/meetuniv/&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:180px; height:35px;" allowTransparency="true"></iframe></span>
										</div>
									</div>
								
								
								</div>
							</div>
							
							<div class="span4" style="border-right: 1px solid #ccc;/*margin-left: 12px;*/ margin: auto;">
								<div class="middle" style="width:270px;">
								<h6>{$articles[104].title}</h6>
								
								<a href="https://meetuniv.com/learn/blog/read-Gear-up!-A-Step-further-towards-your-dream-study-102.html">
								<p style="padding-right: 5%;">{$article_Content}
								{$articles[104].excerpt}
								</p></a>
								<!--<p style="clear:both;">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
								</p>-->
								</div>
							</div>
							
							<div class="span4" style="border-right: 0px solid #ccc;margin-left: 12px;">
								<div class="middle">
								<h3 style="margin-top: 0px;">Articles</h3>
								<ul class="advert-ul" style="margin-left: 0px;">
								{foreach from=$articles key=k item=art}
									<li></li>
									<li><a href="{$smarty.const._URLARTICLE}/read-{$art.title|replace:' ':'-'}-{$art.id}.html">{$art.title}</a></li>
								{/foreach}
									<!--<li>Article2</li>
									<li>Article3</li>-->
								</ul>
								</div>
							</div>
						 
					
					</div>
					
				</div>
		   </div>
		   
		   <div class="row">
				<div class="span12">
				
					<div class="sample-videos">
						<!--<h4>Watch Free Sample Videos</h4>-->
						<!--tabs start-->
				<section id="tabs">
				
        <div class="columns">
			<ul id="tab" class="nav nav-tabs">
				{foreach from=$categories key=k item=cat}
					<!--{assign var='parentId' value=$cat.parent_id}-->
					
						<li><a href="#cat_{$cat.id}" data-toggle="tab">{$cat.name}</a></li>
					
				{/foreach}
				<!--<li class="active"><a href="#english" data-toggle="tab">English</a></li>
				<li><a href="#examprep" data-toggle="tab">ExamPrep</a></li>
				<li><a href="#fun" data-toggle="tab">Fun</a></li>
				<li><a href="#collegeready" data-toggle="tab">College Ready</a></li>
				<li><a href="#new" data-toggle="tab">New</a></li>-->
				<!--<li id="more"><a href="#more" data-toggle="tab">More<img src="https://meetuniv.com/assets/images/more-arrow.png"></a>-->
					<ul  class="level2">
						<li id="level2"><a href="#"> level2 link1</a>
							<ul class="level3">
								<li><a href="link1">level3 link1</a> </li>
								<li><a href="link1">level3 link1</a> </li>
								<li><a href="link1">level3 link1</a> </li>
								<li><a href="link1">level3 link1</a> </li>
							</ul>
						</li>
						<li><a href="#">level2 link2</a></li>
						<li><a href="#">level2 link3</a></li>
						<li><a href="#">level2 link4</a></li>
					</ul>
				</li>
			</ul>
			
			<div id="myTabContent" class="tab-content">
			{$html}
				
				
			</div>
			
    </section>
				<!-- tabs end-->
										
						
					</div>
					
				</div>
		   </div>
	   </div>
        <!-- contents ends ->
      {include file='footer.tpl' p="index"} 
      