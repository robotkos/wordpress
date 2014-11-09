<?php get_header(); ?>
<!-- PAGE HEADER -->
<div class="container page-header ph-bg2">
  <div class="row">
    <div class="twelve columns">
      <p class="page-title">Blog</p>
      <ul class="breadcrumbs">
        <li><a href="index-2.html">Home</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- END PAGE HEADER --> 
<!-- BLOG CONTAINER -->
<div class="container main_content">
  <div class="row">
    <div class="nine columns"> 
      <!-- BLOG POSTS -->
      <div class="twelve columns">
	  
	  
	  
        <div class="blog-post"> 
		<?php  if (have_posts()) : while (have_posts()) : the_post();  ?>	
		  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>   
		  
		  <div class="postdate">
          <h3><?php the_time('d'); ?></h3>
          <h6><?php the_time('M Y'); ?></h6>
          </div>		  
          <div class="entry-title">
            <h1 class="uppercase"> <?php the_title ?> </h1>			
            <!-- POSTMETA BLCOK -->
            <p class="postmeta"><?php the_time('d M Y'); ?> | <a href="#"><?php wp_count_comments(); ?></a> | 
              in <a href="#">Images</a> | by <a href="#">Admin</a></p>
            <!-- END POSTMETA BLCOK -->
			
            <p class="entry-text"><?php the_content(); ?><br>
            </p>
            <a class="link-btn" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a> </div>
          <hr/>
		  
		<?php endwhile; wp_reset_query(); ?>
		<?php endif;?>		  
		  
        </div>
		
      <!-- PAGINATION -->
	  
      <div class="pagination">
		<div class="current">
		<?php kama_pagenavi(); ?>
		</div>
      </div>
      <!-- END PAGINATION --> 
      </div>
      <!-- END BLOG POSTS --> 
    </div>
    
    <?php get_sidebar(); ?>
	</div>
</div>
<!-- END BLOG CONTAINER --> 
<?php get_footer(); ?>