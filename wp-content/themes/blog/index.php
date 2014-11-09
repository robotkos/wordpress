<?php get_header(); ?>
    <!-- Start Featured Carousel -->
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">
        <?php 
			$args=array(
				'showposts'=>10, // Number of related posts that will be shown.
				'caller_get_posts'=>1
			);
		?>
		<?php $i=0;  $custom_loop = new WP_Query($args); if ( $custom_loop->have_posts() ) : while ( $custom_loop->have_posts() ) : $custom_loop->the_post();   $i++; ?>
 
				
                <li class="<?php if($i%3==0){ ?>last <?php }else{ ?> first <?php } ?> carousel-item">
            <div class="post-margin">
                <h6><a href="#"><?php the_title(); ?></a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="<?php bloginfo('template_url')?>/img/HighRes-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
		<?php endwhile; wp_reset_query(); ?>
		<?php endif;?>	
 
                
        </ul>
        
        <div class="clear"></div>
            
            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
              <div class="clear"></div>
            </div>
      </div>
    </div>
    <!-- Start Featured Carousel -->
    
    	
    
    <!-- Start Main Container -->
    <div class="container zerogrid">
    
        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
 			<div class="wrap-col">
                 
        	<!-- Start Post Item -->
            <div class="post">
			<?php  if (have_posts()) : while (have_posts()) : the_post();  ?>	
            	<div class="post-margin">
            
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <?php echo get_avatar( $size = '70' ); ?>
				</div>
                
                <h4 class="post-title"><a href="<?php the_permalink(); ?>"> <?php the_title() ?></a></h4>
                	<ul class="post-status">
                    <li><i class="fa fa-clock-o"></i><?php the_time('d M Y'); ?></li>
                    <li><i class="fa fa-folder-open-o"></i><a href="<?php the_category ?>" title="View all posts in Illustration" rel="category"><?php the_category('single'); ?></a></li>
                    <li><i class="fa fa-comment-o"></i><?php wp_count_comments(); ?></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
            		<div class="featured-images">
					
                    <?php the_post_thumbnail('large'); ?>                    
					
					<div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    </div>
                    </div>
                    
            <div class="post-margin">
            <p><?php the_excerpt(); ?></p>
            </div>
            
             <ul class="post-social">
             <li><a href="#" target="_blank">
             <i class="fa fa-facebook"></i></a>
             </li>
                        
             <li>
             <a href="#" target="_blank">
             <i class="fa fa-twitter"></i></a>
             </li>
                        
             <li>
             <a href="#" target="_blank">
             <i class="fa fa-google-plus"></i></a>
             </li>
            
            <li>
            <a href="#" target="_blank">
            <i class="fa fa-linkedin"></i></a>
            </li>
            
            <li>
            <a href="<?php the_permalink(); ?>" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
            </li>
            </ul>
            
            <div class="clear"></div>
			
		    <?php endwhile; wp_reset_query(); ?>
			<?php endif;?>	
            </div>

            <!-- End Post Item -->
            
                 
                        
        <!-- Start Pagination -->
            <div class="spacing-20"></div>
			<ul class="pagination">
		
			<?php kama_pagenavi(); ?>
			</ul>
        <!-- End Pagination -->
            
        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->
	<?php get_sidebar(); ?>
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
	
	
    
<?php get_footer(); ?>