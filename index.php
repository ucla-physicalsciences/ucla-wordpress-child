<?php
get_header(); ?>
<main class="container">
  <div class="ucla">
    <?php if (is_home() && !is_front_page() && !empty(single_post_title('', false))) : ?>
      <div class="col">
        <header class="page-header">
          <?php get_breadcrumbs() ?>
          <h1 class="page-title headline-text__xl"><?php single_post_title(); ?></h1>
        </header><!-- .page-header -->
      </div>
  </div>
  <div class="ucla">
  <?php endif;

    if (have_posts()) {

      // Load posts loop.
      while (have_posts()) {
        the_post();
        get_template_part('template-parts/content/content');
      }
    } else {

      // If no content, include the "No posts found" template.
      get_template_part('template-parts/content/content-none');
    } ?>
  </div>
</main>
<?php get_footer(); ?>