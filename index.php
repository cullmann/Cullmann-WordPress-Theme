<?php get_header(); ?>
			
			<div id="content" class="clearfix">
				
				<!--BEGIN BIO//-->
	<div id="section" class="ruleBottom">
		<div id="focusHeader" style="display: block;">
					
						<div title="1"><img src="<?php bloginfo('template_url'); ?>/images/image-1.jpg" style="float: left;" class="round1" /><h2>HTML Slide</h2><p>Example of an HTML slide.</p><p>Lorem ipsum dolor sit amet, nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p><a href="http://reddit.com">Learn More &#8250;</a></p></div>	
						<div title="2"><a href="http://google.com"><img src="<?php bloginfo('template_url'); ?>/images/image-2.jpg" alt="2" class="round1" /></a></div>
						<div title="3"><a href="http://google.com"><img src="<?php bloginfo('template_url'); ?>/images/image-3.jpg" alt="3" class="round1" /></a></div>
						<div title="4"><a href="http://google.com"><img src="<?php bloginfo('template_url'); ?>/images/image-4.jpg" alt="4" class="round1" /></a></div>
					
					<script type="text/javascript">		
						$(document).ready(function(){ $('#focusHeader').jshowoff({
							effect: 'slideLeft',
							controls: false ,
							hoverPause: false ,
							links: false, 
						}); });
					</script>
		</div>
	<!--BEGIN FOCUS HEADER//-->
				<!--<div id="focusHeader" style="display: block;">
					<img src="wp-content/themes/cullmann-theme/images/header-1.jpg" />
				</div>//-->
	<!--BEGN BIO//-->	
				
					<h1 class="h2">Chris Cullmann, Digital Strategy and Creative</h1>
					<p>
						As a marketing strategist, Chris brings a unique, artistic perspective to digital branding. His perspectives were forged from years 					
					</p>
					<p>
						of experience as a digital designer, web developer, and creative director&mdash;skills and experiences useful to multichannel branding campaigns.
					</p>
	</div>
	<!--END BIO//-->
					
	<!--END FOCUS HEADER//-->
					
				<div id="main" class="col620 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> style="width: 240px; float: left; padding-right: 40px;">
						
						<header>
							<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> 
								<time><?php the_time('F jS, Y'); ?></time> 
								<!--<?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?>//--> 
								<span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.
							</p>
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" clear: both;>
							<?php the_excerpt(); ?> 
							<?php _e('Continue reading <a href="'. get_permalink($post->ID) . '">'.the_title('', '', false).'</a>'); ?>
						</section> <!-- end article section -->
						
						
						<footer>
							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
						</footer> <!-- end article footer -->
						
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					<!--
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					//-->
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
					
			
				</div> <!-- end #main -->
   				
   					<!--BEGIN CASE STUDIES//-->
						<div id="sectionHead">
							<h1>Case Studies</h1>
							<span class="sectionNav"><a href="#">See more case studies</a></span>
						</div>
	
						<div id="casestudy">
							<img src="wp-content/themes/cullmann-theme/images/case-study-1.jpg" class="snipeImage">
								<h1>Case Study 1</h1>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
								</p>
						</div>
	
						<div id="casestudy">
							<img src="wp-content/themes/cullmann-theme/images/case-study-2.jpg" class="snipeImage">
								<h1>Case Study 1</h1>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
								</p>
						</div>
					<!--END CASE STUDIES//-->
					
					<!--BEGIN CASE STUDIES//-->
						<div id="sectionHead">
							<h1>My Social Footprint</h1>
							<span class="sectionNav"><a href="/about/">Want more?</a></span>
						</div>
	
						<div id="casestudy">
								<p style="width: 800px;">
									<a href="http://www.twitter.com/cullmann">Twitter</a> &nbsp; &nbsp; 
									<a href="http://www.linkedin.com/in/cullmann">LinkedIn</a> &nbsp; &nbsp; 
									<a href="https://plus.google.com/u/0/103473174843225569676/posts">Google+</a> &nbsp; &nbsp;
									<a href="http://www.facebook.com/cullmann">Facebook</a> &nbsp; &nbsp; 
									<a href="http://disqus.com/cullmann/">Disqus</a> &nbsp; &nbsp;
									<a href="http://www.quora.com/Chris-Cullmann">Quora</a> &nbsp; &nbsp;
									<a href="http://www.flickr.com/photos/29855972@N00/">Flickr</a> &nbsp; &nbsp; 
									<a href="http://followgram.me/cullmann">Instagram</a> &nbsp; &nbsp; 
									<a href="http://www.vimeo.com/cullmann">Vimeo</a> &nbsp; &nbsp; 
									<a href="http://www.youtube.com/user/cullmanndesign">YouTube</a> &nbsp; &nbsp; 
									<a href="#">eMail</a> &nbsp; &nbsp; 
								</p>
						</div>
					<!--END CASE STUDIES//-->
					
   				</div>
			</div> <!-- end #content -->
	</div>

<?php get_footer(); ?>