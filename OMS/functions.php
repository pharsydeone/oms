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

// function to find location within array
function relative_value_array($array, $current_val = '', $offset = 1) 
{
	$values = array_values($array);
	$current_val_index = array_search($current_val, $values);

	if( isset($values[$current_val_index + $offset]) ) 
	{
		return $values[$current_val_index + $offset];
	}

    return false;
};

// previous page link function
function ruab_prev_page_link() {
    global $post;

    $output = '';
	
	if ( isset($post->post_parent) && $post->post_parent > 0 ) {
        $children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);

		// throw the children ids into an array
		foreach( $children as $child ) { $child_id_array[] = $child->ID; }
		
		$prev_page_id = relative_value_array($child_id_array, $post->ID, -1);
		$output = '';
		
		if( '' != $prev_page_id ) 
		{
			$output .= '<a href="' . get_page_link($prev_page_id) . '"><img src="'. get_template_directory_uri() .'/images/arrow-left.png" /></a>';
		} else { 
			$output .= '<a href="' . get_page_link(end($child_id_array)) . '"><img src="'. get_template_directory_uri() .'/images/arrow-left.png" /></a>';
		}
	};
	return $output;
};

//next page link function
function ruab_next_page_link() {
    global $post;

	$output = '';	
	
    if ( isset($post->post_parent) && $post->post_parent > 0 ) {
        $children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);

		// throw the children ids into an array
		foreach( $children as $child ) { $child_id_array[] = $child->ID; }

		$next_page_id = relative_value_array($child_id_array, $post->ID, 1);

		if( '' != $next_page_id ) {
			$output .= '<a href="' . get_page_link($next_page_id) . '"><img src="'. get_template_directory_uri() .'/images/arrow-right.png" /></a>';
		} else { 
			$output .= '<a href="' . get_page_link($child_id_array[0]) . '"><img src="'. get_template_directory_uri() .'/images/arrow-right.png" /></a>';
		}
	};
	return $output;
};


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
