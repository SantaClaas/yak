<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package claas.dev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-slate-100 p-4 rounded-xl p-4 flex flex-col justify-between gap-3 w-max'); ?> class="">

	<?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded-xl h-80 max-w-[40rem] mb-4 mx-auto object-cover object-center']); ?>


	<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	<div <?php claas_dev_content_class('entry-content'); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Continue reading<span class="sr-only"> "%s"</span>', 'claas-dev'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'claas-dev'),
				'after' => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


</article><!-- #post-${ID} -->
