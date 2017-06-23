<?php 
/* Template Name Posts: Gallery
*/ ?> 

<?php get_header(); ?>  

	<div class="container_12">	
		<div class="content">

  			  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
  			        
  			  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>  
  			                 
 			  <?php the_content(); ?>  
  			      			    
  			  <?php endwhile; else: ?>  
  			    
  			  <h2>Woops...</h2>  
  			    
  			  <p>Sorry, no posts we're found.</p>  
  			    
  			  <?php endif; ?>  
  			    
  			  <p align="center"><?php posts_nav_link(); ?></p>  
  			  
		</div>
		
		<div class="sidebar">
			
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/limousin-world-website/"><img src="<?php bloginfo('template_url'); ?>/img/limoworld_thumb.jpg" width="140" height="140" border="0" /></a><br />
						<p>website</p>
					</div>
						
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/boxer-illustration/"><img src="<?php bloginfo('template_url'); ?>/img/boxer_thumb.gif" width="140" height="140" border="0" /></a>
						<p>illustration</p>
					</div>

					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/sts-peter-paul-catholic-school-stingers-mascot-logo/"><img src="<?php bloginfo('template_url'); ?>/img/stingers_thumb.gif" width="140" height="140" border="0" /></a>
						<p>logo</p>
					</div>
				
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/mr-ooleys-website/"><img src="<?php bloginfo('template_url'); ?>/img/mrooleys_thumb.jpg" width="140" height="140" border="0" /></a>
						<p>website</p>
					</div>				

					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/santa-claus-illustration/"><img src="<?php bloginfo('template_url'); ?>/img/santa_thumb.gif" width="140" height="140" border="0" /></a>
						<p>illustration</p>

					</div>
					
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/wulfs-nascar-g949n-herd-sire-logo/"><img src="<?php bloginfo('template_url'); ?>/img/nascar_thumb.gif" width="140" height="140" border="0" /></a>
						<p>logo</p>
					</div>

			
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/205/"><img src="<?php bloginfo('template_url'); ?>/img/avalanche_thumb.gif" width="140" height="140" border="0" /></a>
						<p>logo</p>
					</div>
					
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/oklahoma-state-fair-website/"><img src="<?php bloginfo('template_url'); ?>/img/okstatefair_thumb.jpg" width="140" height="140" border="0" /></a>
						<p>website</p>
					</div>
				
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/jack-o-lantern-illustration/"><img src="<?php bloginfo('template_url'); ?>/img/jackolantern_thumb.gif" width="140" height="140" border="0" /></a>
						<p>illustration</p>
					</div>
				
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/sts-peter-paul-catholic-school-bedlam-auction-logo/"><img src="<?php bloginfo('template_url'); ?>/img/ppbedlam_thumb.gif" width="140" height="140" border="0" /></a>
						<p>logo</p>
					</div>
					
					<div class="grid_2 one-portfolio">
						<a href="http://www.mikemorkes.com/transcity/2012/08/28/lincoln-at-central-park-landing-page/"><img src="<?php bloginfo('template_url'); ?>/img/lincolnacp_thumb.jpg" width="140" height="140" border="0" /></a>
						<p>website</p>
					</div>
				
					<div class="grid_2 one-portfolio">
						<a href=" http://www.mikemorkes.com/transcity/2012/08/28/christmas-elf-illustration/"><img src="<?php bloginfo('template_url'); ?>/img/elf_thumb.gif" width="140" height="140" border="0" /></a>
						<p>illustration</p>
					</div>
				
	<div class="clear" ></div> 
	</div>

	<br />
</div><!-- end .container_12 -->

  
<?php get_footer(); ?>  