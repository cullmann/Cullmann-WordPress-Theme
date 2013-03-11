<?php get_header(); ?>
			
			<div id="content" class="clearfix">
		
	<!--BEGIN FOCUS HEADER//-->
				<div id="focusHeader" style="display: block;">
					<a href="http://socialmediaweek.org/newyork/events/?id=69271#.USmDZutATVZ" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social-media-week-cullmann.jpg" alt="Social Media Week NY: Pharma and Social: Better Apart? Panel appearance by Chris Cullmann"></a>
					<a href="http://www.chriscullmann.com/the-retina-display-for-webdesigners/"><img src="<?php bloginfo('template_url'); ?>/images/designing-for-retina-displays.jpg" alt="THE RETINA DISPLAY FOR WEB DESIGNERS IN 5-MINUTES"></a>
					<a href="http://www.chriscullmann.com/embedded-systems/"><img src="<?php bloginfo('template_url'); ?>/images/pharmavoice-embedded-systems.jpg" alt="PHARMAVOICE E-SOLUTIONS: EMBEDDED SYSTEMS"></a>
				</div>
	<!--BEGN BIO//-->	
				
				<!--BEGIN BIO//-->
	<div id="section" class="ruleBottom">
						
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
				
					<div id="sectionHead">
						<h1>Recent Posts</h1>
						<span class="sectionNav"><?php next_posts_link(_e()) ?></span>
					</div>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> style="width: 240px; float: left; padding-right: 40px; margin-top: 15px;">
						
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
					
					
					<?php if (function_exists('page_navi')) { 
					?>
						
						<?php page_navi(); 
						
						?>	
						
					<?php } else { 
					?>
						<nav class="ccarchiveCont">
							<ul class="ccarchive">
								<li class="sectionNavLeft"><?php previous_posts_link(_e()) ?></li>
								<li class="sectionNavRight"><?php next_posts_link(_e()) ?></li>
							</ul>
						</nav>
					<?php }	?>		
					
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
							<h1>Recent POVs and Case Studies</h1>
							<span class="sectionNav"><a href="/casestudy/">See more POVs</a></span>
						</div>
	
									<?php
										$args = array(
											'post_type' => 'Case Study',
										);
											$casestudy = new WP_Query( $args );
												if( $casestudy->have_posts() ) {
													while( $casestudy->have_posts() ) {
														$casestudy->the_post();
														?>
															<div id="casestudy">
																<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
																<?php
																	if ( has_post_thumbnail() ) {
																		the_post_thumbnail();
																	} 
																?>
																<p>
																	<?php the_excerpt(); ?> 
																</p>
															</div>
														<?php
													}
												}
												else {
													echo 'No Case Studies';
												}
									?>	
					<!--END CASE STUDIES//-->
					
					
					<!--BEGIN CASE STUDIES//-->
						<div id="sectionHead">
							<h1>My Social Footprint</h1>
							<span class="sectionNav"><a href="/about/">Want more?</a></span>
						</div>
	
						<div id="casestudy">
								<p style="width: 800px;">
									<img src="<?php bloginfo('template_url'); ?>/images/icons/twitter-icon.gif"><a href="http://www.twitter.com/cullmann">Twitter</a> &nbsp; &nbsp; 
									<img src="<?php bloginfo('template_url'); ?>/images/icons/linkedin-icon.gif"><a href="http://www.linkedin.com/in/cullmann">LinkedIn</a> &nbsp; &nbsp; 
									<img src="<?php bloginfo('template_url'); ?>/images/icons/google-plus-icon.gif"><a href="https://plus.google.com/u/0/103473174843225569676/posts">Google+</a> &nbsp; &nbsp;
									<img src="<?php bloginfo('template_url'); ?>/images/icons/facebook-icon.gif"><a href="http://www.facebook.com/cullmann">Facebook</a> &nbsp; &nbsp; 
									<!--<img src="<?php bloginfo('template_url'); ?>/images/icons/twitter-icon.gif"><a href="http://disqus.com/cullmann/">Disqus</a> &nbsp; &nbsp;
									<img src="<?php bloginfo('template_url'); ?>/images/icons/twitter-icon.gif"><a href="http://www.quora.com/Chris-Cullmann">Quora</a> &nbsp; &nbsp; //-->
									<!--<img src="<?php bloginfo('template_url'); ?>/images/icons/flicker-icon.gif"><a href="http://www.flickr.com/photos/29855972@N00/">Flickr</a> &nbsp; &nbsp; //-->
									<!--<img src="<?php bloginfo('template_url'); ?>/images/icons/twitter-icon.gif"><a href="http://followgram.me/cullmann">Instagram</a> &nbsp; &nbsp; //-->
									<img src="<?php bloginfo('template_url'); ?>/images/icons/vimeo-icon.gif"><a href="http://www.vimeo.com/cullmann">Vimeo</a> &nbsp; &nbsp; 
									<img src="<?php bloginfo('template_url'); ?>/images/icons/youtube-icon.gif"><a href="http://www.youtube.com/user/cullmanndesign">YouTube</a> &nbsp; &nbsp; 
								</p>
						</div>
					<!--END CASE STUDIES//-->
					
   				</div>
			</div> <!-- end #content -->
	</div>

<?php get_footer(); ?>