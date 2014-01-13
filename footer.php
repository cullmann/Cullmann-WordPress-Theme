<!--FOOTER ELEMENT//-->

<div id="fatFooter">
	<div id="container">
	<div id="fatFooterSection">
		<h2>About Chris</h2>
		<p style="padding-right: 25px;">
			Chris Cullmann is a Digital Strategist and Creative Director. He works to craft projects that are both effective and aesthetically beautiful. His background in design and development help him plan and execute campaigns that reach across every channel from mail to socia and every platform from desktop to mobile.
		</p>
<!--
		<p style="padding-right: 25px;">	
			Chris works for <a href="http://www.ogilvycommonhealth.com" target="_blak">Ogilvy CommonHealth Worldwide</a>, a multi-channel agency dedicated to healthcare marketing. 
		</p>

		<p style="padding-right: 25px;">
			The opinions expressed on this site are his own and do not reflect those of his employer or his professionally connections.  
		</p>
//-->
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
	&copy;2014 Chris Cullmann All rights reserved. Great stuff is out there
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
		
		<script type="text/javascript">

  			var _gaq = _gaq || [];
  				_gaq.push(['_setAccount', 'UA-38831946-1']);
  				_gaq.push(['_trackPageview']);

  			(function() {
   				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  			})();

		</script>
		
		<!-- End Analytics -->
 
</body>
</html>
