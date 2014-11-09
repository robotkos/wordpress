    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/fancy/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>">
<?php get_header(); ?>
	
    <div class="container zerogrid">
        
    <div class="col-full page-conainer">
	<div class="wrap-col">
    <div class="post-margin">
    	
<?php  if (have_posts()) : while (have_posts()) : the_post();  ?>	
                	<div class="floatL rightFancy page_thank">
                		<div class="page-title"><h5><? the_title(); ?></h5></div>
                		<div class="fanceDesc"><? the_content(); ?>
                		</div>
                	</div>
                	<div class="clear"></div>
	    <?php endwhile;  ?>
		<?php endif;?> 
            
<div class="symple-clear-floats"></div>
    <!-- End Entry -->
    
    </div>
	</div>
    </div>
    
    <div class="clear"></div>
        </div>

<?php get_footer(); ?>