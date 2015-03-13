{include file='header.tpl' p="index"} 
<div class="video-banner-row">
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
			<h3> Lorem Ipsum</h3>
			<p> International students comprise almost 15 percent of the total student body .Total cost of attendance..</p>
			<ul>
				<li><a href="#"><img src="http://meetuniv.com/assets/images/arrow-bullet.jpg">Watch Videos</a></li>
				<li><a href="#"><img src="http://meetuniv.com/assets/images/arrow.jpg">More Lorem</a></li>
				<li><a href="#"><img src="http://meetuniv.com/assets/images/arrow.jpg">More Lorem & Ipsum</a></li>
			</ul>
		</div>
	  <div class="video-ielts">
			<ul>
				<li class="home "><a href="javascript:void(0);" onclick="showv1()" class="choosed">Lorem</a></li>
				<li class="about"><a href="javascript:void(0);" onclick="showv2()">Lorem</a></li>
				<li><a href="javascript:void(0);" onclick="showv3()">Lorem</a></li>
			</ul>
	  </div>
          
        </div>
		<!-- contents starts-->
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="advertisement">
						<div class="add-text">
							<h2>Discover Your Blip</h2>
							<p> New to Blip? Or want to learn more about how to discover 
		web series? Take a visual tour of the videos that await </p>
						</div>
						<div class="add-image">
							<img src="http://meetuniv.com/assets/images/girl-img.jpg">
						</div>
					</div>
					
				</div>
		   </div>
		   
		   <div class="row">
				<div class="span12">
				
					<div class="sample-videos">
						<h4>Watch Free Sample Videos</h4>
						<!--tabs start-->
				<section id="tabs">
				
        <div class="columns">
			<ul id="tab" class="nav nav-tabs">
				<li class="active"><a href="#english" data-toggle="tab">English</a></li>
				<li><a href="#examprep" data-toggle="tab">ExamPrep</a></li>
				<li><a href="#fun" data-toggle="tab">Fun</a></li>
				<li><a href="#collegeready" data-toggle="tab">College Ready</a></li>
				<li><a href="#new" data-toggle="tab">New</a></li>
				<!--<li id="more"><a href="#more" data-toggle="tab">More<img src="http://meetuniv.com/assets/images/more-arrow.png"></a>-->
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
				<div class="tab-pane fade in active" id="english">
				 <!-- image gallery start-->
				 <div class="img-gallery">
						<h2> Algebra </h2>
							<ul class="pm-ul-browse-videos thumbnails span9" id="pm-grid">
							{foreach from=$english_videos key=k item=video_data}
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
									
									<h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
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
							{foreachelse}
								{$lang.top_videos_msg2}
							{/foreach}
							</ul>
						</div>
				 <!-- image gallery ends -->
				 
				 
				</div>
				<div class="tab-pane fade" id="examprep">
				  <!-- image gallery start-->
				 <div class="img-gallery">
						<h2> ExamPrep </h2>
						<ul class="pm-ul-browse-videos thumbnails span9" id="pm-grid">
							{foreach from=$ielts_videos key=k item=video_data}
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
									
									<h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
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
							{foreachelse}
								{$lang.top_videos_msg2}
							{/foreach}
							
							<!--Gre videos-->
							{foreach from=$gre_videos key=k item=video_data}
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
									
									<h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
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
							{foreachelse}
								{$lang.top_videos_msg2}
							{/foreach}
							</ul>
							
						</div>
				 <!-- image gallery ends -->
				</div>
				<div class="tab-pane fade" id="fun">
				  <!-- image gallery start-->
				 <div class="img-gallery">
						<h2> Fun </h2>
						<ul class="pm-ul-browse-videos thumbnails span9" id="pm-grid">
							{foreach from=$fun_videos key=k item=video_data}
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
									
									<h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
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
							{foreachelse}
								{$lang.top_videos_msg2}
							{/foreach}
							
						</div>
				 <!-- image gallery ends -->
				</div>
				<div class="tab-pane fade" id="collegeready">
				  <!-- image gallery start-->
				 <div class="img-gallery">
						<h2> College Ready </h2>
						<ul class="pm-ul-browse-videos thumbnails span9" id="pm-grid">
							{foreach from=$collegeready_videos key=k item=video_data}
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
									
									<h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
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
							{foreachelse}
								{$lang.top_videos_msg2}
							{/foreach}
							
						</div>
				 <!-- image gallery ends -->
				</div>
				<div class="tab-pane fade" id="new">
				  <!-- image gallery start-->
				 <div class="img-gallery">
						<h2> New Videos </h2>
						<ul class="pm-ul-browse-videos thumbnails span9" id="pm-grid">
							{foreach from=$new_videos key=k item=video_data}
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
									
									<h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
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
							{foreachelse}
								{$lang.top_videos_msg2}
							{/foreach}
							
						</div>
				 <!-- image gallery ends -->
				</div>
				<div class="tab-pane fade" id="dropdown2">
				  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
				</div>
			</div>
        
     
    </section>
				<!-- tabs end-->
										
						
					</div>
					
				</div>
		   </div>
	   </div>
        <!-- contents ends ->
      
      