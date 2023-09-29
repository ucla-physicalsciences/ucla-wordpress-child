<?php
// Load Theme Scripts and Styles
add_action("wp_enqueue_scripts", "ucla_wordpress_child_load_scripts");
function ucla_wordpress_child_load_scripts() {
	wp_enqueue_style( 'ucla-wordpress-child', get_template_directory_uri() . "/css/ucla-ps.min.css", [], null, "screen" );
}