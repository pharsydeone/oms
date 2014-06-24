<?php

function clean_custom_menus($isHomePage) {
	$menu_name = 'sidenav-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		
		// check to see if this is the home page, if so assign special class.  
		// Media query will show\hide nav depending on size and page
		// Class definitions are in the css file.
		if($isHomePage) {
			$doDisplayMainNavClass = 'showHomeNavForMobile';
		} else {
			$doDisplayMainNavClass = 'hideHomeNavForMobile';
		}
		
		$menu_list = '<nav id="main-nav" class="'. $doDisplayMainNavClass .'">' ."\n";
		$menu_list .= '<div class="nav-column"></div>' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$description = $menu_item->description;
			$url = $menu_item->url;
			
			if($url == current_page_url()) {
				$navItemClass = "nav-row current_page_item";
			} else {
				$navItemClass = "nav-row";
			}
			
			$menu_list .= "\t\t\t\t\t". '<div class="'. $navItemClass .'"><a href="'. $url .'">'. '<span class="link-title">'. $title .'</span>';
			if (!empty($description)) {
				$menu_list .= '<hr/><span class="link-subtitle">'. $description .'</span>';
			}
			$menu_list .= '</a></div>' ."\n";
		}
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
	  'topnav-menu' => __( 'Top Navigation Menu' ),
	  'sidenav-menu' => __( 'Side Navigation Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
	  'mobilemain-menu' => __( 'Mobile Menu - Main Nav' ),
	  'mobilesub-menu' => __( 'Mobile Menu - Sub Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
