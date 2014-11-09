<?php get_header(); ?>
  
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
                     <?php echo get_avatar( $size = '70' ); ?></div>
                
                <h4><a href="<?php the_permalink(); ?>"> <?php the_title() ?></a></h4>
                	<ul class="post-status">
                    <li><i class="fa fa-clock-o"></i><?php the_time('d M Y'); ?></li>
                   <li><i class="fa fa-folder-open-o"></i><a href="<?php the_category ?>" title="View all posts in Illustration" rel="category"><?php the_category('single'); ?></a></li>
                    <li><i class="fa fa-comment-o"></i><?php wp_count_comments(); ?></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
           <div class="featured-images">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?>  </a>                  
                    <div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    </div>
                    </div>
            
            <div class="post-margin">
            <p><?php the_content(); ?></p>

			<!-- Post Tags -->
            
            <div class="post-tags">
            <span class="fa-stack fa-lg">
               <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
            </span><a href="#" rel="tag">Color Schemes</a>, <a href="#" rel="tag">Gallery</a>, <a href="#" rel="tag">Images</a>, <a href="#" rel="tag">Light</a>, <a href="#" rel="tag">Post</a>, <a href="#" rel="tag">Slider</a>, <a href="#" rel="tag">Standard</a></div>
            <div class="clear"></div>            <!-- End Post Tags -->
            
            </div>
            
            <!-- Post Social -->
            <ul class="post-social">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        
             <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        
             <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            
            <li><a href="#" target="_blank">
            <i class="fa fa-linkedin"></i></a></li>
            </ul>
            <!-- End Post Social -->
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
		
        <!-- Start Sidebar -->
	<?php get_sidebar(); ?>
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->

<?php get_footer(); ?>