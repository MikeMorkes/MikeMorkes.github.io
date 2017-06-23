<?php /* Template Name: Archive
*/ ?> 

<?php get_header(); ?>  

	<div class="container_12">	
		<div class="content">

			<?php query_posts('category_name=blog&showposts=100'); ?>

			<?php while (have_posts()) : the_post(); ?>

				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

					<?php the_content('Read the rest of this entry &raquo;'); ?>
					
					<a href="<?php the_permalink(); ?>" title="Read the rest of <?php the_title(); ?>" class="more-link">Read the rest of this entry »</a><br /><br />

				</div>

            	<hr>

			<?php endwhile; ?>
		  
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