
<?php get_header(); ?>
			
			<div id="article" class="clearfix">
			
				<div id="articleSidebar">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?>
					<?php the_content(); ?>
				</div>
			
				<div id="articleContent" class="col620 clearfix" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
						
						<header>
							
							<h1><?php the_title(); ?></h1>
							
							<!--<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time><?php the_time('F jS, Y'); ?></time> <br />//-->
								<!--<?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp"><br /></span> //-->
							</p>
							
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<!--<?php the_content(); ?>//-->
							<?php the_content( $more_link_text , $strip_teaser, $more_file ); ?> 
							
						</section> <!-- end article section -->
						
						
							
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
				
					<?php comments_template(); ?>
					
						<div>
							<p>
								Follow me on <a href="http://www.twitter.com/cullmann">Twitter</a>, 
								link to me on <a href="http://www.linkedin.com/in/cullmann">LinkedIn</a>, 
								or find me on <a href="http://www.facebook.com/cullmann">Facebook</a>.
								<!--<?php previous_post(); ?>    <?php next_post(); ?>//-->
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
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
		</div>
	</div>

<?php get_footer(); ?>