    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/fancy/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>">
<div>
<?php  if (have_posts()) : while (have_posts()) : the_post();  ?>	
                	<div class="floatL rightFancy page_thank">
                		<div class="categoriesTitle"><? the_title(); ?></div>
                		<div class="fanceDesc"><? the_content(); ?>
                		</div>
                	</div>
                	<div class="clear"></div>
	    <?php endwhile;  ?>
		<?php endif;?> 
            </div>
<script language = 'javascript'>
  var delay = 5000;
  setTimeout("document.location.href='/'", delay);
</script>
