<?php 

/*	Template Functions
*/

// Path constants

define( "THEME", get_bloginfo('template_url') );
define( "JS", get_bloginfo('template_url') . '/js');
define( "LIBS", get_bloginfo('template_url') . '/js/libs');
define( "CSS", get_bloginfo('template_url') . '/css');
define( "IMG", get_bloginfo('template_url') . '/img');


// Hide the annoying WordPress admin bar when logged in.

add_filter('show_admin_bar', '__return_false');  


?>