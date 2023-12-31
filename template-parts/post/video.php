<?php
/**
 * Partial to display a video
*/
?>

<article <?php post_class("c-video"); ?> id="post-<?php the_ID(); ?>">

  <?php if( get_field('ucla_ps_video_url') ):?>
  <?php the_field('ucla_ps_video_url'); ?>
  <?php endif; ?>
  <?php the_title( '<h1 class="p-name">', '</h1>' );?>
  <div class="e-content">
  
    
    <?php if( get_field('ucla_ps_video_summary') ):?>
      <p class="lede"><?php the_field('ucla_ps_video_summary'); ?></p>
    <?php endif; ?>

    <?php the_content(); ?>

  </div>


  <?php
		get_template_part( 'template-parts/navigation' );



	?>

</article>