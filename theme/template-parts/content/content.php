<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package claas.dev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('max-w-[50rem] bg-slate-100 p-4 rounded-3xl'); ?>>

	<header class="entry-header">
		<?php

		$title_class = 'text-4xl';
		if (is_sticky() && is_home() && !is_paged()) {
			printf('<span">%s</span>', esc_html_x('Featured', 'post', 'claas-dev'));
		}
		if (is_singular()):
			the_title('<h1 class="' . $title_class . '">', '</h1>');
		else:
			the_title(sprintf('<h1 class="' . $title_class . '"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
		endif;
		?>
	</header><!-- .entry-header -->

	<?php claas_dev_post_thumbnail(); ?>

	<section <?php claas_dev_content_class('entry-content'); ?>>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'claas-dev'),
				'after' => '</div>',
			)
		);
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php claas_dev_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->