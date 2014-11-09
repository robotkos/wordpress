<?php get_header(); ?>
<!-- PAGE HEADER -->
<div class="container page-header ph-bg2">
  <div class="row">
    <div class="twelve columns">
      <p class="page-title"> <? the_title(); ?></p>
      <ul class="breadcrumbs">
        <li><a href="index-2.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="#"> <? the_title(); ?>t</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- END PAGE HEADER --> 

<!-- BLOG CONTAINER -->
<div class="container main_content">
  <div class="row">
    <div class="nine columns"> 
      <!-- Single Post -->
      <div class="twelve columns">
	  <?php  if (have_posts()) : while (have_posts()) : the_post();  ?>	
        <div class="blog-post"> <a href="single_post.html">
		<?php the_post_thumbnail('large'); ?>
		
		</a>
          <div class="postdate">
          <h3><?php the_time('d'); ?></h3>
          <h6><?php the_time('M Y'); ?></h6>
          </div>
          <div class="entry-title">
            <h1 class="uppercase"> <? the_title(); ?> </h1>
            <!-- POSTMETA BLCOK -->
            <p class="postmeta">20 January 2013 | <a href="#">3 Comments</a> | 
              in <a href="#">Images</a> | by <a href="#">Admin</a></p>
            <!-- END POSTMETA BLCOK -->
            <p class="entry-text"><?php the_content(); ?> </p>
            <br>
            <div class="quoteBox">
              <div class="quote-text"> <?php the_content(); ?> </div>
            </div>
           </div><hr/>
          <!-- SOCIAL BLOCK -->
            <div class="social_block">
            <h1>Share This Post</h1>
              <ul class="pagination">
                <li>
                  <div class="fb-btn">
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../connect.facebook.net/en_GB/all.js#xfbml=1&appId=364290536976994";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
                  </div>
                </li>
                <li>
                  <div class="tweet-btn"><a href="http://twitter.com/share" class="twitter-share-button" 
          data-count="horizontal"data-via="creativusmouse" data-url=    
          "http://www.creativusmouse.com/Proteus/html_preview" data-text="Check this out">Tweet</a> 
                    <script type="text/javascript" src="../../../platform.twitter.com/widgets.js"></script></div>
                </li>
                <li>
                  <div class="gplus-btn">
                    <div class="g-plusone" data-size="medium"></div>
                    <script type="text/javascript">
          (function() {
          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
          po.src = '../../../apis.google.com/js/plusone.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
          </script></div>
                </li>
              </ul>
              <div class="clear"></div>
            </div>
            <!-- END SOCIAL BLOCK -->
          <hr/>
        </div>
	    <?php endwhile;  ?>
		<?php endif;?> 		
        <!-- END Single Post -->
        <div class="clear"></div>
        <h1><?php wp_count_comments(); ?></h1>
			<?php comments_template(); ?>
      </div>
    </div>
	<?php get_sidebar(); ?>

  </div>
</div>
<!-- END BLOG CONTAINER --> 
<?php get_footer(); ?>