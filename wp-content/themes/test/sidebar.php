    <!-- SIDEBAR -->
    <div class="sidebar three columns">
      <h2 class="sb-header">Latest Posts</h2>
	  	  
      <p><?php  $custom_loop = new WP_Query('showposts=3'); if ( $custom_loop->have_posts() ) : while ( $custom_loop->have_posts() ) : $custom_loop->the_post();  ?>
					 <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('mini-thumb',array('class'=> 'img_float_left')); ?> <strong><?php the_title(); ?></strong><br></a>
        <?php the_time('d M Y'); ?> </p>
			<?php endwhile; wp_reset_query(); ?>
			<?php endif;?>
    
      <div class="divider3"></div>
      <h2 class="sb-header"> Blog Categories </h2>
      <div class="list-type-sidebar">
        <ul>
			<?php wp_list_categories('title_li'); ?>
        </ul>
      </div>

    </div>
    <!-- END SIDEBAR --> 