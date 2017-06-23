<?php if (function_exists('register_sidebar'))  
      
    register_sidebar(array(  
    'name'=>'recentwork',  
    'before_widget' => '<div class="dynawidget">',  
    'after_widget' => '</div>',  
    'before_title' => '<h2 class="subhead">',  
    'after_title' => '</h2>',  
    ));  
      
    register_sidebar(array(  
    'name'=>'recentposts',  
    'before_widget' => '<div class="dynawidget">',  
    'after_widget' => '</div>',  
    'before_title' => '<h2 class="subhead">',  
    'after_title' => '</h2>',  
    ));  
    
    register_sidebar(array(  
    'name'=>'twitter',  
    'before_widget' => '<div class="dynawidget">',  
    'after_widget' => '</div>',  
    'before_title' => '<h2 class="subhead">',  
    'after_title' => '</h2>',  
    ));  
         
    register_sidebar(array(  
    'name'=>'contact',  
    'before_widget' => '<div class="dynawidget">',  
    'after_widget' => '</div>',  
    'before_title' => '<h2>',  
    'after_title' => '</h2>',  
    )); 
    
    add_theme_support('post-thumbnails');

    add_filter('the_excerpt','post_image');	





    


