{include file='header.tpl' p="general" rss="video-category"} 
<h1 class="entry-title compact" style="margin-left: 200px;margin-top: 55px;font-size: 35px;">{$categoryName}</h1>
<div class="video-banner-row" style="margin-top: 16px;">

        <div class="left video-banner span7">
            <!-- <img src="http://meetuniv.com/assets/images/univ-banner2.jpg" /> -->
           
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
               <img src="http://meetuniv.com/assets/images/video2.jpg" />
            </div>
            <div id="v3">
            <img src="http://meetuniv.com/assets/images/video3.jpg" />  
			
            </div>-->
            
        </div>
		<div class="pull-left right-text">
			<h3 style="font-size: 15px;line-height: 20px;"> {$lang.featured}: {$voth_title}</h3>
			<p> {$voth_description}</p>
			<ul>
				<li style="color:#06696f;font-weight:bold;">MORE CATEGORIES</li>
				{foreach from=$subCat key=k item=scat}
					{foreach from=$scat key=k item=cat}
							<a href="http://meetuniv.com/learn/edurator/browse-{$scat.$k.tag}-videos-1-date.html" class="label label-default" style="font-size:12px;color:white;background-color: #08c;">{$cat.name}</a>
					{/foreach}
				{/foreach}
				<!--<li><a href="#"><img src="http://meetuniv.com/learn/edurator/templates/default/images/arrow-bullet.jpg">Watch Featured Videos</a></li>-->
				<!--<li><a href="#"><img src="http://meetuniv.com/learn/edurator/templates/default/images/arrow.jpg">Watch More Videos</a></li>-->
				<!--<li><a href="#"><img src="http://meetuniv.com/learn/edurator/templates/default/images/arrow.jpg">More Lorem & Ipsum</a></li>-->
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
						
							<div class="span4" style="border-right: 1px solid #ccc;margin-left: 12px;">
								<div class="first">
									<h3 style="clear:both; overflow:hidden; margin-bottom:16px;">SHARE THIS !</h3>
									<div style="margin-top: 19px;clear:both">
										<div class="in"><p style="margin:0">516</p>
										<span><img src="http://meetuniv.com/learn/edurator/admin/img/share.png" style="margin-top:5px;" ></span>
										</div>
										<div class="facebook"><p style="margin:0">16</p>
										<span><img src="http://meetuniv.com/learn/edurator/admin/img/flike.png" style="margin-top:10px"></span>
										</div>
										<div class="tweet"><p style="margin:0">17</p>
										<span><img src="http://meetuniv.com/learn/edurator/admin/img/flike.png" style="margin-top:10px"></span>
										</div>
									
									</div>
								
								
								</div>
							</div>
							
							<div class="span4" style="border-right: 1px solid #ccc;margin-left: 12px;">
								<div class="middle" style="width:270px;">
								<h3>{$articles[99].title}</h3>
								<div class="advert"></div>
								<p>{$article_Content}</p>
								</div>
							</div>
							
							<div class="span4" style="border-right: 0px solid #ccc;margin-left: 12px;">
								<div class="middle">
								<h3>Articles</h3>
								<div class="advert"></div>
								<ul class="advert-ul">
								{foreach from=$articles key=k item=art}
									<li></li>
									<li><a href="http://meetuniv.com/learn/blog/read-{$art.title|replace:' ':'-'}_{$art.id}.html">{$art.title}</a></li>
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
						<!--<h3>Watch Free Sample Videos</h3>-->
						<!--tabs start-->
				<section id="tabs">
				
        <div class="columns">
			<!--<ul id="tab" class="nav nav-tabs">
				<li class="active"><a href="#math" data-toggle="tab">Math</a></li>
				<li><a href="#sceince" data-toggle="tab">Science</a></li>
				<li><a href="#english" data-toggle="tab">English</a></li>
				<li><a href="#option" data-toggle="tab">Option</a></li>
				<li id="more"><a href="#more" data-toggle="tab">More<img src="images/more-arrow.png"></a>
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
			</ul>-->
			<div id="myTabContent" class="tab-content ">
				<div class="tab-pane active " id="math">
				 <!-- image gallery start-->
				 <div class="img-gallery">
						<ul class="pm-ul-browse-videos thumbnails" id="pm-grid">
			{foreach from=$result key=k item=video_data}
			  <li>
				<div class="pm-li-video">
				    <span class="pm-video-thumb pm-thumb-145 pm-thumb border-radius2">
				    <span class="pm-video-li-thumb-info">
                    {if $video_data.yt_length != 0}<span class="pm-label-duration border-radius3 opac7">{$video_data.duration}</span>{/if}
					{if $video_data.mark_new}<span class="label label-new">{$lang._new}</span>{/if}
					{if $video_data.mark_popular}<span class="label label-pop">{$lang._popular}</span>{/if}
				    </span>
				    <a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
				    </span>
				    
				    <h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link " title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
				    <div class="pm-video-attr">
				        <span class="pm-video-attr-author">{$lang.articles_by} <a href="{$video_data.author_profile_href}">{$video_data.author_name}</a></span>
				        <span class="pm-video-attr-since"><small>{$lang.added} <time datetime="{$video_data.html5_datetime}" title="{$video_data.full_datetime}">{$video_data.time_since_added} {$lang.ago}</time></small></span>
				        <span class="pm-video-attr-numbers"><small>{$video_data.views_compact} {$lang.views} / {$video_data.likes_compact} {$lang._likes}</small></span>
					</div>
				    <p class="pm-video-attr-desc">{$video_data.excerpt}</p>
					
					{if $video_data.featured}
				    <span class="pm-video-li-info">
				        <span class="label label-featured">{$lang._feat}</span>
				    </span>
					{/if}
				</div>
			  </li>
			{/foreach}
			</ul>
						</div>
				 <!-- image gallery ends -->
				</div>
				{if is_array($pagination)}
			<div class="pagination pagination-centered">
              <ul style="margin-left: 90px;">
                {foreach from=$pagination key=k item=pagination_data}
					<li{foreach from=$pagination_data.li key=attr item=attr_val} {$attr}="{$attr_val}"{/foreach}>
						<a{foreach from=$pagination_data.a key=attr item=attr_val} {$attr}="{$attr_val}"{/foreach}>{$pagination_data.text}</a>
					</li>
				{/foreach}
              </ul>
            </div>
			{/if}
			</div>
        
     
    </section>
				<!-- tabs end-->
										
						
					</div>
					
				</div>
		   </div>
	   </div>
        <!-- contents ends ->
		
		{include file='footer.tpl'} 