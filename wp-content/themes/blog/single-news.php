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
                
                <h4><?php the_title() ?></h4>
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
            <p><?php the_content(); ?></p>
			<h6>Video</h6>
			<?php 
			$video= get_post_meta(get_the_ID(), '_Video', true);
			if($video){
				echo $video;
			}
			 ?>
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
				    <?php endwhile;  ?>
		<?php endif;?> 	
            </div>
            <!-- End Post Item -->
            
            
                        
            
<div class="post">
<?php if ( is_active_sidebar( 'true_foot' ) ) : ?>
 
	<div id="true-foot" class="sidebar">
 
		<?php dynamic_sidebar( 'true_foot' ); ?>
 
	</div>
 
<?php endif; ?>
    <div class="post-margin">
<?php
$categories = get_the_category($post->ID);

$args = array();
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'showposts'=>3, // Number of related posts that will be shown.
	'caller_get_posts'=>1
);

}
?>
          <p><?php  $custom_loop = new WP_Query($args); if ( $custom_loop->have_posts() ) : while ( $custom_loop->have_posts() ) : $custom_loop->the_post();  ?>
    <!-- Start Related Item -->
    <div class="related-posts">
  
    <div class="post-avatar">
    
	<div class="attachment-post-widget">
   <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('mini-thumb_7'); ?></a> </div>   </div>
    
    <div class="related-posts-aligned">            
	<h6><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h6>
    <p><?php 
	$text_excerpt= get_post_meta(get_the_ID(), '_text_excerpt', true);
	if($text_excerpt){
		echo $text_excerpt;
	}else{
		the_content();
	}
	 ?>
	</p>
    <div class="clear"></div>
    </div>
    
    <div class="clear"></div>

    </div>
					<?php endwhile; wp_reset_query(); ?>
			<?php endif;?>
    <!-- End Related Item -->
    
        
        <div class="clear"></div>
    </div>
</div>            
            
			<!-- Comments -->
            <div class="comment-container">
            
            <h6 id="comment-header">No Comments, Be The First!</h6>
            
            <ul class="comment-list">
                        </ul>
            
            
            <!-- Comment Form -->
            <div class="commen-form">
            								<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel Reply</a></small></h3>
									<form action="" method="post" id="comment-form-container" class="comment-form">
																			<p class="comment-notes"></p>							<input type="text" name="author" placeholder="Enter Name" class="comment-name"  />
<input type="text" name="email" placeholder="Enter Email" class="comment-email"  />
<input type="text" name="url" placeholder="Enter URL" class="comment-url" />
												<textarea name="comment" placeholder="Enter Message Here" class="comment-text-area"></textarea>						<p class="form-allowed-tags"></p>						<p class="form-submit">
							<input name="submit" type="submit" id="comment-submit" value="Send Comment" />
							<input type='hidden' name='comment_post_ID' value='49' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
											</form>
							</div><!-- #respond -->
			            <div class="clear"></div>
            </form>
            </div>
            <!-- End Comment Form -->
            
            </div>
            <!-- End Comments -->            
            
            
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