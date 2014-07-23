<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo get_bloginfo('name'); ?> - <?php wp_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<meta name="viewport" content="initial-scale=1.0,width=device-width" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/jquery.sidr.dark.css" />
<script type="text/javascript">
	var $ = jQuery;
	$(function() {
		$(document).click(function(e) {
			if($(e.target).is('.appointment .link'))
			{
				$('.appointment').toggleClass('active');
				return false;
			}
			else if(!$(e.target).parents('.appointment').length)
			{
				$('.appointment').removeClass('active');
			}
		});
	});
</script>

</head>

<body>
<div class="mobile" id="sidr">
	<?php wp_nav_menu( array( 'theme_location' => 'mobilemain-menu' ) ); ?>
	<hr/>
	<?php wp_nav_menu( array( 'theme_location' => 'mobilesub-menu' ) ); ?>
</div>
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
            <a id="sidr-menu" class="mobile" title="Navigation" href="#sidr"><img src="<?php bloginfo('template_directory'); ?>/images/mobile-nav.png"></a>
            <h1 id="logo">
                <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            </h1>
            <nav id="header-nav">
            	<div class="menu-header-menu-container">
					<?php wp_nav_menu( array( 'theme_location' => 'mainnav-menu' ) ); ?>
                </div>
                <div class="phone">888.867.5309</div>              
            </nav>
            
        </header>
    </div>