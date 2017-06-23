<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>  

	<div class="container_12">	
		<div class="grid_2 onebyfour">
			<a href="http://www.mikemorkes.com/construction/contact.html">
			<h2 style="text-align: right"></h2><br /><br /></h2>
		</div>	
		
		<div class="grid_8 gallery">
		
			<?php dynamic_content_gallery(); ?>
					
		</div>
		
		<div class="grid_2 onebyfour">
			<a href="http://www.mikemorkes.com/construction/contact.html">
			<h2 style="text-align: left"><br /><br /></h2>
		</div>	

	<div class="clear" ></div> 
	</div><!-- end .container_12 -->	

  
<?php get_footer(); ?>  