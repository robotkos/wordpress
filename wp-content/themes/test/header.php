
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); wp_title(); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="description" content="HTML Template best suited for business sites and portfolios" />
<meta name="keywords" content="Some keywords that best describe your business" />
<meta name="author" content="Creativusmouse" />

<!-- CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/foundation.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="icon" href="<?php bloginfo('template_url')?>/images/favicon.ico" />
<link href="<?php bloginfo('template_url')?>/titan/css/jquery.titanlighbox.css" rel="stylesheet">
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/rs-plugin/css/settings.css" media="screen" />

<!-- GOOGLE FONT - SOURCE SANS PRO -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet'>

<!-- JAVASCRIPT FOUNDATION (COMPRESSED) -->
<script src="<?php bloginfo('template_url')?>/js/foundation.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/modernizr.foundation.js"></script>
<script src="<?php bloginfo('template_url')?>/js/app.js"></script>
<script src="http://code.jquery.com/jquery-1.7.0.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>

<!-- JQUERY KENBURN SLIDER  -->
<script src="<?php bloginfo('template_url')?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php bloginfo('template_url')?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- THEMES PANEL -->
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/themes_panel/farbtastic/farbtastic.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/themes_panel/themes_panel.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/colors.css">

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>



<!-- HEADER -->
<div id="header">
  <div class="row">
    <div class="three columns"> <a href="index-2.html" title="Proteus" id="logo"></a> </div>
    
    <!-- NAVIGATION -->
    <div class="nine columns">
      <nav class="top-bar">
        <ul>
          <!-- RESPONSIVE NAVIGATION -->
          <li class="name">
            <h1><a href="#"> Please select your page</a></h1>
          </li>
          <li class="toggle-topbar"><a href="#"></a></li>
          <!-- END RESPONSIVE NAVIGATION -->
        </ul>
        <section>
        <?php wp_nav_menu('menu=first'); ?>
          <!--ul class="right">
            <li> <a class="active" href="index-2.html">Home</a> </li>
            <li class="has-dropdown"> <a href="#">Pages</a>
              <ul class="dropdown">
                <li><a href="left_sidebar.html">Left Sidebar Page</a></li>
                <li><a href="full_width.html">Full Width Page</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="error.html">404 Error Page</a></li>
              </ul>
            </li>
            <li class="has-dropdown"> <a href="#">Shortcodes</a>
              <ul class="dropdown">
                <li><a href="columns.html">Columns</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="tabs_and_toggles.html">Tabs &amp; Toggles</a></li>
                <li><a href="pricing_tables.html">Pricing Tables</a></li>
              </ul>
            </li>
            <li class="has-dropdown"> <a href="#">Blog</a>
              <ul class="dropdown">
                <li><a href="blog.html">Blog Index</a></li>
                <li><a href="single_post.html">Single Post</a></li>
              </ul>
            </li>
            <li class="has-dropdown"> <a href="#">Portfolio</a>
              <ul class="dropdown">
                <li><a href="portfolio_2_col.html" class="">Portfolio 2 Columns</a></li>
                <li><a href="portfolio_3_col.html">Portfolio 3 Columns</a></li>
                <li><a href="portfolio_4_col.html">Portfolio 4 Columns</a></li>
                <li><a href="portfolio_single.html">Single Project</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul-->
        </section>
      </nav>
    </div>
    <!-- END NAVIGATION -->
    <div class="shadow-down"></div>
  </div>
</div>
<!--END HEADER --> 
<!-- SLIDER -->