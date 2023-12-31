<?php
/**
 * Custom template for displaying people
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
**/

?>

<article <?php post_class('ucla-ps-c-people ucla-card ucla-card__person'); ?> id="post-<?php the_ID(); ?>">
	
		<div class="entry-content">

			<?php 
			$image = get_field( 'p-photo' );
		
			if( $image ):

				// Image variables.
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption'];
				$size = 'square_lrg';
				$avatar = $image['sizes'][ $size ];
			
		 ?>
		 	<figure>
		 		<a href="<?php echo esc_url( get_permalink() ); ?>"><img class="ucla-card__image u-photo avatar" src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($alt); ?>" /></a>

		 <?php 
    	if( $caption ): ?>
        <figcaption><?php echo esc_html($caption); ?></figcaption>
		<?php endif; 
		
			if( $image ): ?>
				</figure>
			<?php endif; ?>
		<?php endif; ?>

			<h1 class="ucla-card__title p-name"><a class="ucla-card__name-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_field('p-given-name')." ".get_field('p-family-name') ); ?></a></h1>
		
			<?php if( get_field('p-job-title') ): ?>
				<p class="ucla-card__title p-job-title"><?php echo esc_html( get_field( 'p-job-title' ) ); ?></p>
			<?php endif; ?>
				
			<?php if( get_field('p-org') ): ?>
				<p class="ucla-card__person-department p-org"><?php echo esc_html( get_field( 'p-org' ) ); ?></p>
			<?php endif; ?>
			
			<?php if( get_field('p-tel') ): ?><p class="ucla-card__person-contact tel"><?php echo esc_html( get_field( 'p-tel' ) ); ?></p><?php endif; ?>
			<?php if( get_field('p-email') ): ?><p class="ucla-card__person-contact email"><a href="mailto:<?php echo esc_attr( get_field( 'p-email' ) ); ?>" class="email contact"><?php echo esc_html( get_field( 'p-email' ) ); ?></a></p><?php endif; ?>
			
	
	
</div> <!-- close person block -->



		</div><!-- .entry-content -->



	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		//edit_post_link();

		// Single bottom post meta.
		//twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	?>

</article><!-- .post -->
