<?php /* Template Name: Homepage
*/ ?> 

<?php get_header(); ?>  

<div class="container_12">			
			
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

<!-- !3 column stack -->
	<div class="grid_4 columnback">
		<h3 class="subhead">Recent Work</h3> 
			<?php dynamic_sidebar('recentwork'); ?>
	</div><!-- end .grid_4  left col-->
	<div class="grid_4 columnback">
		<h3 class="subhead">Recent Posts</h3> 
			<div id="recentposts">
			<?php dynamic_sidebar('recentposts'); ?> 
			</div>
	</div><!-- end .grid_4 middle col-->
	<div class="grid_4 columnback">
		<h3 class="subhead">Twitter Feed</h3> 
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 30000,
  width: 280,
  height: 320,
  theme: {
    shell: {
      background: 'none',
      color: '#ffffff'
    },
    tweets: {
      background: 'none',
      color: '#ffffff',
      links: '#99c2ff'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('mikemorkes').start();
</script>

	</div><!-- end .grid_4 right col-->
	<div class="clear"></div>
	<br />
</div><!-- end .container_12 -->
  
<?php get_footer(); ?>  