<!-- FOOTER -->
<div class="container footer">
  <div class="row">
    <div class="three columns">
      <h5>Navigation</h5>
      <div class="list-type-footer">
        <ul>
          <li> <a href="index-2.html">Home</a> </li>
          <li> <a href="team.html">Pages</a> </li>
          <li> <a href="typography.html">Shortcodes</a> </li>
          <li> <a href="blog.html">Blog</a> </li>
          <li> <a href="portfolio_4_col.html">Portfolio</a> </li>
          <li> <a href="contact.html">Contact</a> </li>
        </ul>
      </div>
    </div>
    <div class="three columns">
      <h5>Monthly Archives</h5>
      <div class="list-type-footer">
        <ul>
          <li> <a href="index-2.html">February 2013</a> </li>
          <li> <a href="portfolio_4_col.html">January 2013</a> </li>
          <li> <a href="blog.html">December 2012</a> </li>
          <li> <a href="features.html">November 2012</a> </li>
          <li> <a href="contact.html">October 2012</a> </li>
        </ul>
      </div>
    </div>
    <div class="three columns">
      <h5>Latest Posts</h5>
      <p><a href="single_post.html"> <img class="img_float_left" src="<?php bloginfo('template_url')?>/images/thumb_1.jpg" width="40" height="40" alt=
      "" /> <strong>Nullam dictum felis eu</strong></a><br />
        Lorem ipsum dolor sit amet.</p>
      <p><a href="single_post.html"> <img class="img_float_left" src="<?php bloginfo('template_url')?>/images/thumb_2.jpg" width="40" height="40" alt=
      "" /> <strong>Nullam dictum felis eut</strong></a><br />
        Lorem ipsum dolor sit amet.</p>
      <p><a href="single_post.html"> <img class="img_float_left" src="<?php bloginfo('template_url')?>/images/thumb_3.jpg" width="40" height="40" alt=
      "" /> <strong>Nullam dictum felis eu</strong></a><br />
        Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="three columns">
      <h5>Contact Us</h5>
      <img class="img_float_left" src="<?php bloginfo('template_url')?>/images/footer_icon_1.png" alt="" />
      <p> (+44) 773 339 9999 </p>
      <img class="img_float_left" src="<?php bloginfo('template_url')?>/images/footer_icon_2.png" alt="" />
      <p> <a href="mailto:youremailaddress">info@yourwebsite.com</a> </p>
      <img src="<?php bloginfo('template_url')?>/images/footer_icon_3.png" alt="" class="img_float_left" />
      <p class="tab"> <strong>Your Company LDT</strong><br />
        Street nr 100<br />
        London, NW1 2RG<br />
        UK </p>
    </div>
  </div>
</div>
<!-- END FOOTER --> 
<!-- SUBFOOTER -->
<div class="container subfooter">
  <div class="row">
    <div class="six columns">
      <p> &#169; Copyright - Proteus - HTML Theme by creativusmouse.com </p>
    </div>
    <div class="six columns">
      <div class="large-social-block"> <a href="#"><span class="social dribbble"></span></a> <a href="#"><span class="social flickr"></span></a> <a href="#"><span class="social linkedin"></span></a> <a href="#"><span class="social google"></span></a> <a href="#"><span class="social twitter"></span></a> <a href="#"><span class="social facebook"></span></a>
 </div>
    </div>
  </div>
</div>
<!-- END SUBFOOTER --> 

<!-- JAVASCRIPT --> 
<script type="text/javascript">// Slider JS
				var tpj=jQuery;
				tpj(document).ready(function() {
				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
					tpj('.fullwidthbanner').revolution(
						{
							delay:9000,
							startwidth:960,
							startheight:500,

							onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

							thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
							thumbHeight:50,
							thumbAmount:3,

							hideThumbs:200,
							navigationType:"none",					//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
							navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
							navigationStyle:"round",				//round,square,navbar

							touchenabled:"on",						// Enable Swipe Function : on/off
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
							stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

							hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
							hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
							hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
							fullWidth:"on",
							shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
						});
			});
			</script> 
<script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script> 
<script src="<?php bloginfo('template_url')?>/js/jquery.infieldlabel.min.js"></script> 
<script src="<?php bloginfo('template_url')?>/js/scripts.js"></script>
<script src="<?php bloginfo('template_url')?>/js/app.js"></script> 

<!-- Titan Lightbox --> 
<script src="<?php bloginfo('template_url')?>/titan/js/prettify.js"></script> 
<script src="<?php bloginfo('template_url')?>/titan/js/jquery.titanlighbox.js"></script> <!-- Themes Panel --> 
<script src="<?php bloginfo('template_url')?>/themes_panel/farbtastic/farbtastic.js"></script> 
<script src="<?php bloginfo('template_url')?>/themes_panel/themes_panel.js"></script>
</body>
</html>