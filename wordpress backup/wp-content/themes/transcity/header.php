<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">  
<head profile="http://gmpg.org/xfn/11">  
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>  
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
<link href='http://fonts.googleapis.com/css?family=Economica:400,700|Advent+Pro:500,600,700,300,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" /> 
<link rel="stylesheet" href="http://www.mikemorkes.com/transcity/wp-content/themes/transcity/print.css" type="text/css" media="print" /> 

<?php wp_head(); ?>

</head>
<body>

	<div id="main_bg">
				<img src="http://www.mikemorkes.com/wp-content/themes/transcity/img/blue-mesh.jpg" alt="" />
	</div><br />
<div class="container_gray">

<div class="container_12">
	<div class="grid_12 header">
		<h1>
 		 <a href="http://www.mikemorkes.com" style="color: #ffffff;">Mike Morkes</a>, <span style="color: #99c1ff;">Web Designer/Developer</span>
		</h1>
	</div>
</div><br />

<!-- !main menu -->	
	<div class="container_12">
		<div id="main-menu" class="grid_12">
			 <ul>  
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
			</ul>  
		</div>
	</div><!-- end .container_12 menu-->
	<br />
	<div class="clear" ></div> 
