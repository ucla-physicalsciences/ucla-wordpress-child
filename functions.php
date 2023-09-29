<?php
// Load Theme Scripts and Styles
add_action("wp_enqueue_scripts", "ucla_wordpress_child_load_scripts", 99);
function ucla_wordpress_child_load_scripts() {
	wp_enqueue_style( 'ucla-wordpress-child', get_stylesheet_directory_uri() . "/css/ucla-ps.min.css", [], null, "screen" );
}

/**
 * PRINT DATE FUNCTIONS
 */

 function custom_datetime_object($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("Ymd");
 }
 
 function custom_unixtimestamp($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("d.m.Y H:i:s");
 }
 
 function custom_html_datetime($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("Y-m-d H:i");
 }
 
 function custom_html_date($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("Y-m-d");
 }
 
 function custom_html_time($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("H:i");
 }
 
 function custom_year($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("Y");
 }
 
 function custom_public_date($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("F j, Y");
 }
 
 function custom_public_date_day($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("l, F j, Y");
 }
 
 function custom_public_datetime($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("F j, Y, g:i a");
 }
 
 function custom_public_time($field_name)
 {
	 $date = new DateTime($field_name);
	 echo $date->format("g:i a");
 }
 
 function custom_public_date_format($field_name, $format)
 {
	 //$format = ('l, F j, Y, g:i a');
	 $date = new DateTime($field_name);
	 echo $date->format($format);
 }