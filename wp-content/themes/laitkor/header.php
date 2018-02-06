<!DOCTYPE html><!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">

<![endif]--><!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8">

<![endif]--><!--[if IE 8]>
<html class="no-js lt-ie9">

<![endif]--><!--[if gt IE 8]>
<!-->
<html class="no-js" >

    <!--<![endif]-->

    <head>
        <!-- Basic Page Needs
            ================================================== -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- Title of The Site 
            ================================================== -->
        <title><?php wp_title(); ?></title>
        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-1990734-86', 'auto');
              ga('send', 'pageview');

        </script>
        <!-- Author & Description Meta Tag 
            ================================================== -->
        <!-- <meta content="Your Name Here" name="author">
        <meta content="Your Description Here" name="description"> -->
        <!-- The Moile Responsive Meta Tag 
            ================================================== -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1.5" name="viewport">
        <!-- Google Web Font 
            ================================================== -->
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/fonts.css" rel="stylesheet" type="text/css">

        <!-- Main Stylesheet 
            ================================================== -->
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">
        <!-- Favicons 
            ================================================== -->
        <link href="<?php echo get_bloginfo('template_url'); ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo get_bloginfo('template_url'); ?>/images/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="<?php echo get_bloginfo('template_url'); ?>/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="<?php echo get_bloginfo('template_url'); ?>/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="<?php echo get_bloginfo('template_url'); ?>/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
        <!-- Modernizr 
            ================================================== -->
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- Color Skins 
            ================================================== -->
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-red.css" rel="stylesheet" title="red">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-green.css" rel="stylesheet" title="green">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-purple.css" rel="stylesheet" title="purple">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-blue.css" rel="stylesheet" title="blue">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-turquoise.css" rel="stylesheet" title="turquoise">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-sun-flower.css" rel="stylesheet" title="sun-flower">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-orange.css" rel="stylesheet" title="orange">
        <link href="<?php echo get_bloginfo('template_url'); ?>/css/colors/color-emerald.css" rel="stylesheet" title="emerald">
        <link href="<?php echo get_bloginfo('template_url') ?>/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_url') ?>/css/default.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_url') ?>/css/style3.css" rel="stylesheet">
        <script>
            // define a theme base javascript variable
            var theme_base_url = "<?php echo get_bloginfo('template_url'); ?>";

        </script>
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="main clearfix" id="loader">
            <div class="loading"></div>
            <h3 class="loading-title">It's Loading...</h3>
        </div>
        <!-- Preloader -->
        <!--        <div class="mask">
                    <div class="loader">
                        <images alt="preloader" src="<?php echo get_bloginfo('template_url'); ?>/images/loading.gif"></images>
                    </div>
                </div>-->
        <!-- Preloader End-->
        <!-- Styleswitcher-->
        <div id="content" style="display: none;">
            <div class="colors-switcher">
                <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>
                <ul class="colors-list">
                    <li>
                        <a class="red" onclick="setActiveStyleSheet('red');
                                return false;" title="Red">
                        </a></li>
                    <li>
                        <a class="green" onclick="setActiveStyleSheet('green');
                                return false;" title="Green">
                        </a></li>
                    <li class="no-margin">
                        <a class="purple" onclick="setActiveStyleSheet('purple');
                                return false;" title="Purple">
                        </a></li>
                    <li>
                        <a class="blue" onclick="setActiveStyleSheet('blue');
                                return false;" title="Blue">
                        </a></li>
                    <li class="no-margin">
                        <a class="turquoise" onclick="setActiveStyleSheet('turquoise');
                                return false;" title="Turquoise">
                        </a></li>
                    <li>
                        <a class="sun-flower" onclick="setActiveStyleSheet('sun-flower');
                                return false;" title="Sun Flower">
                        </a></li>
                    <li class="no-margin">
                        <a class="orange" onclick="setActiveStyleSheet('orange');
                                return false;" title="Orange">
                        </a></li>
                    <li class="no-margin">
                        <a class="emerald" onclick="setActiveStyleSheet('emerald');
                                return false;" title="Emerald">
                        </a></li>
                </ul>
            </div>
            <!-- Styleswitcher End -->
            <!-- Header -->
            <header>
                <nav id="main-menu" class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-navicon"></i></button>
                            <!-- Logo --><a class="header-logo" href="#">
                                <images alt="Rise Logo" src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png"> </a>
                            <!-- Logo --></div>
                        <!-- End .navbar-header -->
                        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                            <!-- Navigation -->
                            <?php
                            /* $menu_args = array('menu_class'=> 'nav navbar-nav');
                              wp_nav_menu($menu_args); */

                            if (is_front_page()) {
                                ?>
                                <ul id="nav" class="nav navbar-nav">
                                    <li class="active"><a class="colapse-menu1" href="#home">Home</a></li>
                                    <li><a class="colapse-menu1" href="#about">About us</a></li>
                                    <li><a class="colapse-menu1" href="#services">Services</a></li>
                                    <li><a class="colapse-menu1" href="#portfolio">Portfolio</a></li>
                                    <li><a class="colapse-menu1" href="#clients">Clients</a></li>
                                    <li><a href="#">Other Services<i class="carret"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="https://www.laitkor.com/" target="_blank">Development Services</a></li>
                                            <li><a href="http://www.verifyqa.com/" target="_blank">QA Services</a></li>
                                            <li><a href="http://www.cloudegg.com/" target="_blank">System Admin Services</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="colapse-menu1" href="#contact">Contact</a></li>

                                    <!--<ul class="sub-menu">
                                            <li><a href="shortcodes.html">Shortcodes</a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                            <li><a href="portfolio-single-slider.html">Portfolio Single 
                                            Slider</a></li>
                                            <li><a href="portfolio-single-video.html">Portfolio Single 
                                            video</a></li>
                                    </ul>-->
                                    <!-- /.sub-menu -->
                                    </li>
                                </ul>
                            <?php } else { ?>
                                <ul id="nav1" class="nav navbar-nav">
                                    <li class="active"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>#about">About us</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>#services">Services</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>#Portfolio">Portfolio</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>#Clients">Clients</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>#Contact">Contact</a></li>

                                    <!--<ul class="sub-menu">
                                            <li><a href="shortcodes.html">Shortcodes</a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                            <li><a href="portfolio-single-slider.html">Portfolio Single 
                                            Slider</a></li>
                                            <li><a href="portfolio-single-video.html">Portfolio Single 
                                            video</a></li>
                                    </ul>-->
                                    <!-- /.sub-menu -->
                                    </li>
                                </ul>
                            <?php } ?>
                            <!-- Navigation End --></div>
                        <!-- End .collapse --></div>
                    <!-- End .container -->
                </nav>
                <!-- End #main-menu -->
            </header>

            <!-- Header End -->
