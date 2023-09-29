<?php
// Load Theme Scripts and Styles
add_action("wp_enqueue_scripts", "ucla_wordpress_child_load_scripts", 99);
function ucla_wordpress_child_load_scripts() {
	wp_enqueue_style( 'ucla-wordpress-child', get_stylesheet_directory_uri() . "/css/ucla-ps.min.css", [], null, "screen" );
}

/**
 * Function and filters to remove width|height attributes. 
 * https://wordpress.stackexchange.com/questions/22302/how-do-you-remove-hard-coded-thumbnail-image-dimensions
 * https://petragregorova.com/articles/how-to-remove-height-and-width-attributes-from-images-in-wordpress/
 */

 function remove_width_attribute( $html ) { 
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html ); 
  return $html;
}

add_filter("post_thumbnail_html", "remove_width_attribute", 10);
add_filter("image_send_to_editor", "remove_width_attribute", 10);
//add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );


// Filters the returned oEmbed HTML.
// https://developer.wordpress.org/reference/hooks/oembed_dataparse/
add_filter( 'oembed_dataparse', 'remove_width_attribute', 10 );  


/**
 * Add media alternate image sizes besides WP defaults
 * https://developer.wordpress.org/reference/functions/add_image_size/
 * add_image_size( string $name, int $width, int $height, bool|array $crop = false )
 */

add_image_size("square", "600", "600", true);
add_image_size("square_thumb", "300", "300", true);

/** REMOVE wp-emoji **/

remove_action("wp_head", "print_emoji_detection_script", 7);
remove_action("wp_print_styles", "print_emoji_styles");

// https://managewp.com/hack-improve-wordpress-toolbar

add_action("admin_bar_menu", "ucla_ps_edit_toolbar", 999);

function ucla_ps_edit_toolbar($wp_toolbar)
{
  $wp_toolbar->remove_node("updates");
  $wp_toolbar->remove_node("comments");
  //$wp_toolbar->remove_node('wp-logo');
  //$wp_toolbar->remove_node('site-name');
  //$wp_toolbar->remove_node('new-content');
  //$wp_toolbar->remove_node('top-secondary');
}

/**
 * Removes some menus by page.
 */
add_action("admin_menu", "ucla_ps_remove_menus");
function ucla_ps_remove_menus()
{
  remove_menu_page("edit-comments.php");
  remove_menu_page("link-manager.php"); //Comments
  //remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'jetpack' );                    //Jetpack*
  //remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
}

// Breadcrumbs
function get_breadcrumb()
{
  echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
  if (is_single()) {
    echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
    echo get_post_type(get_the_ID());
    // if (is_single()) {
    //     echo " &nbsp;&nbsp;&#47;&nbsp;&nbsp; ";
    //     the_title();
    // }
  } elseif (is_page()) {
    // echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
    // echo the_title();
  } elseif (is_search()) {
    echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;Search Results for... ";
    echo '"<em>';
    echo the_search_query();
    echo '</em>"';
  }
}


function ucla_ps_customizer_settings($wp_customize)
{

  $wp_customize->add_setting('ucla_footer_dept_name', array(
    'type' => 'theme_mod',
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control('ucla_footer_dept_name', array(
    'label' => __('Department Name', 'ucla-wordpress'),
    'type' => 'text',
    'section' => 'ucla_theme_options',
    'settings' => 'ucla_footer_dept_name'
  ));

}

add_action('customize_register', 'ucla_ps_customizer_settings');

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