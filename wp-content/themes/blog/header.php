<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo('name'); wp_title(); ?></title>

<link rel='stylesheet' id='reset-css'  href='<?php bloginfo('template_url')?>/css/reset.css' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='<?php bloginfo('template_url')?>/css/superfish.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href='<?php bloginfo('template_url')?>/css/font-awsome/css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href='<?php bloginfo('template_url')?>/css/orbit.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href="<?php bloginfo('stylesheet_url'); ?>" type='text/css' media='all' />
<link rel='stylesheet' id='color-scheme-css'  href='<?php bloginfo('template_url')?>/css/color/green.css' type='text/css' media='all' />
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/zerogrid.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/responsive.css" type="text/css" media="screen">
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.carouFredSel-6.2.1-packed.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/hoverIntent.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/superfish.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/orbit.min.js'></script>
 <script src="<?php bloginfo('template_url')?>/js/css3-mediaqueries.js"></script>

<script type="text/javascript" language="javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */
			
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>
</head>

<body class="home blog">

	<!-- Start Header -->
    <div class="container zerogrid">
        <div class="col-full"><div class="wrap-col">
        	<div id="header-nav-container">
            
                    <a href="<?php bloginfo('home'); ?>">
                    <img src="<?php bloginfo('template_url')?>/images/logo.png" id="logo" />
                    </a>
 	<!--ul class="sf-menu">
	<li class="menu-item"><a href="index.html">Home</a></li>
	<li class="menu-item current-menu-item"><a href="blog.html">Blog</a></li>
<li class="menu-item"><a href="#">Features</a>
<ul class="sub-menu">
	<li class="menu-item"><a href="#">Menu 01</a></li>
	<li class="menu-item"><a href="#">Menu 02</a></li>
	<li class="menu-item"><a href="#">Menu 03</a></li>
</ul>
</li>
<li class="menu-item"><a href="about.html">About us</a></li>
</ul-->	 
                
					<!-- Navigation Menu -->

	<?php wp_nav_menu(array('menu' => 'first','menu_class' => 'sf-menu', 'container'=> '')); ?>

                    <!-- End Navigation Menu -->
                    
                    <div class="clear"></div>
                    
            </div>
			</div>
        </div>
    <div class="clear"></div> 
    </div>
    <div class="spacing-30"></div>
    <!-- End Header -->
	