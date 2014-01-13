<?php get_header(); ?>
			
			<div id="article" class="clearfix">
			
		
			
				<div id="mainCustom" class="col620 clearfix" role="main" >
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
						
						<header>
							
							<h1><?php the_title(); ?></h1>
							
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time><?php the_time('F jS, Y'); ?></time> <br />
								<!--<?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"><br /></span> //-->
							</p>
							
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<!--<?php the_content(); ?>//-->
							<?php the_content( $more_link_text , $strip_teaser, $more_file ); ?> 
							
						</section> <!-- end article section -->
						
						
							
						
						<footer>
							
							<p><em>All perspectives and views expressed here are my own. <br /><br /></em></p>
							<!--<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>//-->
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
				
					<!--<?php comments_template(); ?>
					
						<div>
							<p>
								<?php previous_post(); ?>    <?php next_post(); ?>
							</p>
						</div>
						
					<?php endwhile; ?>			
					
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
				</div>
				</div> <!-- end #main -->
        
			</div> <!-- end #content -->
		</div>
	</div>

<?php get_footer(); ?>