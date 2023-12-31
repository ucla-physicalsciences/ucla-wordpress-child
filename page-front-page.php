<?php
/**
 * Template Name: Front Page
 * The template for displaying the front page aka home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 **/

get_header();

/* Start the Loop */
?>
<main id="main" role="main">
<?php
if ( have_posts() ) {
while ( have_posts() ) {
	the_title( '<h1 class="visuallyhidden">', '</h1>' );
	the_post();
	get_template_part( 'template-parts/page/acf-blocks' );
	get_template_part( 'template-parts/content/content-front-page' );
	}
}
?>
</main> 
<?php get_footer();
