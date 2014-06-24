<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo get_bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>
<div id="page-wrapper">
    <div id="header-wrapper" class="cf">
        <header>
            <nav id="header-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </nav>
        </header>
    </div>
    <div id="header-wrapper2" class="cf">
        <header>
            <a id="sidr-menu" class="mobile" title="Navigation" href="#sidr"><img src="<img src="<?php bloginfo('template_directory'); ?>/images/mobile-nav.png"></a>
            <h1 id="logo">
                <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            </h1>
            <nav id="header-nav">
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">YOUR HEALTH</a></li>
                    <li><a href="">OUR SERVICES</a></li>
                    <li><a href="">CONTACT US</a></li>
                    <li><a href="">888.867.5309</a></li>
                </ul>
            </nav>
        </header>
    </div>