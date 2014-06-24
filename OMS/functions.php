<?php

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
	  'mainnav-menu' => __( 'Main Navigation Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
	  'mobilemain-menu' => __( 'Mobile Menu - Main Nav' ),
	  'mobilesub-menu' => __( 'Mobile Menu - Sub Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
