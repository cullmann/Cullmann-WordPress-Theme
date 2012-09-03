<!--FOOTER ELEMENT//-->

<div id="fatFooter">
	<div id="container">
	<div id="fatFooterSection">
		<h2>About Chris</h2>
		<p style="padding-right: 25px;">
			Chris Cullmann is a Creative Director and Online Strategist. He works for <a href="http://www.ogilvycommonhealth.com" target="_blak">Ogilvy CommonHealth Interactive Marketing</a>, a digital agency dedicated to healthcare marketing. His professional and personal portfolio includes interactive websites, viral and social media, and online education applications. His portfolio and observations about the design and marketing industry can be found at <a href="http://www.cullmanndesign.com">www.cullmanndesign.com</a>
		</p>
		<p style="padding-right: 25px;">
			The opinions expressed on this site are my own and do not reflect those of my employer or those who I am professionally connected.  
		</p>
	</div>
	<div id="fatFooterSection">
		<h2>Archives</h2>		
		<ul id="fatFooter">
			<?php wp_get_archives('type=monthly&limit=10&format=html'); ?>
			<li><a href="#">See more posts</a></li>
		</ul>
	</div>
	<div id="fatFooterSection">
		<h2>Tags</h2>
		<ul id="fatFooter">
			 <?php wp_list_categories('show_count=1&orderby=name&exclude=10,11,12,14&title=l1'); ?> 
		</ul>
	</div>
	<div id="fatFooterSection">
		<h2>Blog Roll</h2>		
		<ul id="fatFooterRoll">
			<?php the_post(); ?>	
			<?php wp_get_links( $blogroll ); ?>  
			<li><a href="#">See more posts</a></li>
		</ul>
	</div>
</div>	


<p class="signOff">
	<?php bloginfo('name'); ?> &copy;2011 Chris Cullmann All rights reserved. Great stuff is out there
</p>

</div>	
 
 <!-- custom scripts -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		
		<!--[if (lt IE 9) & (!IEMobile)]>
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/ie/DOMAssistantCompressed-2.8.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/ie/selectivizr-1.0.1.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/respond.min.js"></script>
		<![endif]-->		
		
		<!--[if lt IE 7 ]>
    		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/ie/dd_belatedpng.js"></script>
    		<script>DD_belatedPNG.fix("img, .png_bg");</script>
  		<![endif]-->
		
		<!--<?php wp_footer(); // js scripts are inserted using this function ?>//-->
		
		<!-- Insert Analytics -->
		
		<!-- End Analytics -->
 
</body>
</html>
