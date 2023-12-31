<?php

/**
 * Partial to display a person
 */
?>


<article <?php post_class('ucla-card ucla-card__person ucla-ps-c-person entry-content'); ?> id="post-<?php the_ID(); ?>">
	<?php if (has_post_thumbnail()) : ?>
		<figure>
			<?php the_post_thumbnail('square_thumb', ['class' => 'ucla-card__image u-photo avatar']); ?>
			<?php $caption = get_the_post_thumbnail_caption() ?>
			<?php if ($caption) : ?>
				<figcaption class="ucla-card__person-credit"><?php echo esc_html($caption); ?></figcaption>
			<?php endif; ?>
		</figure>
	<?php endif; ?>

	<div class="ucla-card__body">

		<?php
		if (function_exists('get_field')) :
			echo '<h1 class="ucla-card__title p-name">' . esc_html(get_field('p-given-name') . " " . get_field('p-family-name'));
			if (get_field('p-honorific-suffix')) :
				echo esc_html(", " . get_field('p-honorific-suffix'));
			endif;
			echo '</h1>';
		else :
			the_title('<h1 class="ucla-card__title p-name">', '</h1>');
		endif; ?></h1>


		<?php
		if (function_exists('get_field')) :
			if (get_field('p-personal-pronouns')) : ?>
				<p class="ucla-card__person-pronouns"><b><?php echo esc_html(get_field('p-personal-pronouns')); ?></b>
				</p>
			<?php endif; ?>
			<?php
			if (get_field('p-job-title')) : ?>
				<p class="ucla-card__person-department"><span class="p-job-title"><?php echo esc_html(get_field('p-job-title')); ?><?php if (get_field('p-org')) : ?>,
						<span class="p-org"><?php echo esc_html(get_field('p-org')); ?></span>
					<?php endif; ?></p>
			<?php endif; ?>

			<p class="ucla-card__person-contact"><?php if (get_field('p-tel')) : ?><span class="tel"><?php echo esc_html(get_field('p-tel')); ?></span><br><?php endif; ?>
				<a href="mailto:<?php echo esc_attr(get_field('p-email')); ?>" class="contact"><?php echo esc_html(get_field('p-email')); ?></a>
			</p>

			<?php if (get_field('p-summary')) : ?>
				<p class="ucla-card__description p-summary"><?php echo esc_html(get_field('p-summary')); ?></p>
			<?php endif; ?>

			<?php if (get_field('p-adr')) : ?>
				<address>
					<?php echo get_field('p-adr'); ?>
				</address>
			<?php endif; ?>

			<?php
			$person_links = get_field('p-links');
			$custom_links = array('Website', 'Google Scholar', 'Open Researcher');
			if ( $person_links ):
			?>

			<?php

				if ( $person_links ){
						foreach ($person_links as $person_link) :
						if (in_array($person_link['p-link-site'], $custom_links)) :
				?>
						<p><a href="<?php echo esc_url($person_link['p-link-url']); ?>" class="url website">
								<?php
								if ($person_link['p-link-site'] == "Website")
									echo esc_html($person_link['p-link-name']);
								else
									echo esc_html($person_link['p-link-site']);
								?>
							</a></p>
			<?php
						endif;
					endforeach;	
				}
		
			?>

				<ul class="social-links">
					<?php
					foreach ($person_links as $person_link) :
						if (!in_array($person_link['p-link-site'], $custom_links)) :
					?>
							<li><a href="<?php echo esc_url($person_link['p-link-url']); ?>">
									<i class="fab fa-<?php echo esc_html(strtolower($person_link['p-link-site'])); ?>" aria-hidden="true"></i>
									<?php echo esc_html($person_link['p-link-site']); ?>
								</a>
							</li>
					<?php
						endif;
					endforeach;
					?>
				</ul>

			<?php endif; ?>
		<?php endif; ?>


		<?php the_content(); ?>

	</div>

</article>

</main>