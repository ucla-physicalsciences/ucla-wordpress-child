<section <?php post_class('entry-content home'); ?> id="post-<?php the_ID(); ?>">
  <?php

  if (!is_search()) {
    get_template_part('template-parts/header/featured-image');
  }
  ?>

  <?php
  $title = get_the_title();
  if (is_singular()) {
    the_title('<h1 class="visuallyhidden">', '</h1>');
  } else if (!is_singular()) {

    the_title('<h1 class="visuallyhidden"><a href="' . esc_url(get_permalink()) . '">', '</a></h1>');
  }

  if (has_excerpt() && !is_singular()) {
  ?>
    <div class="p-summary lede">
      <?php the_excerpt(); ?>
    </div>
  <?php
  }

  ?>
  <?php
  $content = get_the_content();
  if (strlen($content) > 0) {
  ?>
    <div class="e-content">

      <?php the_content(); ?>

    </div><!-- .entry-content -->
  <?php } ?>
</section><!-- .post -->