<?php /* Smarty version 2.6.20, created on 2015-03-12 12:29:00
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'index.tpl', 87, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="video-banner-row">
        <div class="left video-banner span7">
            <!-- <img src="http://meetuniv.com/assets/images/univ-banner2.jpg" /> -->
           
            <div id="v1">
                <?php if ($this->_tpl_vars['display_preroll_ad'] == true): ?>
					<div id="preroll_placeholder">
						<div class="preroll_countdown">
							<?php echo $this->_tpl_vars['lang']['preroll_ads_timeleft']; ?>
 <span class="preroll_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['timeleft_start']; ?>
</span>
						</div>
						<?php echo $this->_tpl_vars['preroll_ad_data']['code']; ?>

					</div>
				<?php else: ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
            </div>
            <!--<div id="v2" >
               <img src="http://meetuniv.com/assets/images/video2.jpg" />
            </div>
            <div id="v3">
            <img src="http://meetuniv.com/assets/images/video3.jpg" />  
			
            </div>-->
            
        </div>
		<div class="pull-left right-text">
			<h5><?php echo $this->_tpl_vars['lang']['featured']; ?>
: <?php echo $this->_tpl_vars['voth_title']; ?>
</h5>
			<p style="overflow-y: scroll;width: 337px;padding-right: 10px;height: 170px;"> <?php echo $this->_tpl_vars['voth_description']; ?>
</p>
			<ul style="list-style: none;margin-left: 0;margin-top: 28px;">
				<li><a href="<?php echo @_URL; ?>
/featured_video.php"><img src="<?php echo @_URL; ?>
/templates/default/images/arrow-bullet.jpg">Watch Featured Videos</a></li>
				<li><a href="<?php echo @_URL; ?>
/catvedio.php?id=<?php echo $this->_tpl_vars['categoryId']; ?>
"><img src="<?php echo @_URL; ?>
/templates/default/images/arrow.jpg">Watch More <?php echo $this->_tpl_vars['categoryName']; ?>
 Videos</a></li>
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
						
							<div class="span4" style="border-right: 1px solid #ccc;margin-left: 12px; height: 172px;">
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
								<h6><?php echo $this->_tpl_vars['articles'][106]['title']; ?>
</h6>
								<div class="advert"></div>
								<p><?php echo $this->_tpl_vars['article_Content']; ?>
...
								</p>
								<!--<p style="clear:both;">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
								</p>-->
								</div>
							</div>
							
							<div class="span4" style="border-right: 0px solid #ccc;margin-left: 12px;">
								<div class="middle">
								<h3>Articles</h3>
								<div class="advert"></div>
								<ul class="advert-ul">
								<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['art']):
?>
									<li></li>
									<li><a href="<?php echo @_URLARTICLE; ?>
/read-<?php echo ((is_array($_tmp=$this->_tpl_vars['art']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '-') : smarty_modifier_replace($_tmp, ' ', '-')); ?>
-<?php echo $this->_tpl_vars['art']['id']; ?>
.html"><?php echo $this->_tpl_vars['art']['title']; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
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
						<h4>Watch Free Sample Videos</h4>
						<!--tabs start-->
				<section id="tabs">
				
        <div class="columns">
			<ul id="tab" class="nav nav-tabs">
				<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['cat']):
?>
					<!--<?php $this->assign('parentId', $this->_tpl_vars['cat']['parent_id']); ?>-->
					
						<li><a href="#cat_<?php echo $this->_tpl_vars['cat']['id']; ?>
" data-toggle="tab"><?php echo $this->_tpl_vars['cat']['name']; ?>
</a></li>
					
				<?php endforeach; endif; unset($_from); ?>
				<!--<li class="active"><a href="#english" data-toggle="tab">English</a></li>
				<li><a href="#examprep" data-toggle="tab">ExamPrep</a></li>
				<li><a href="#fun" data-toggle="tab">Fun</a></li>
				<li><a href="#collegeready" data-toggle="tab">College Ready</a></li>
				<li><a href="#new" data-toggle="tab">New</a></li>-->
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
			<?php echo $this->_tpl_vars['html']; ?>

				
				
			</div>
			
    </section>
				<!-- tabs end-->
										
						
					</div>
					
				</div>
		   </div>
	   </div>
        <!-- contents ends ->
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('p' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
      