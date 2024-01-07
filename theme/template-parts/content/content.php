<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package claas.dev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('max-w-[40rem] bg-slate-100 p-4 rounded-xl p-4 space-y-3'); ?>>

	<?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded-xl h-80 object-cover object-center']); ?>

	<section class="text-xl">
		<?php
		echo get_avatar(get_the_author_meta('ID'), $size = '60', $default = '', $alt = '', $args = array('class' => 'rounded-full h-7 w-7 inline-block align-middle'));
		?>
		<span class="align-middle">
			<?php echo esc_html(get_the_author()) ?>
		</span>
	</section>
	<?php

	$title_class = 'text-3xl';
	if (is_sticky() && is_home() && !is_paged()) {
		printf('<span">%s</span>', esc_html_x('Featured', 'post', 'claas-dev'));
	}
	if (is_singular()):
		the_title('<h1 class="' . $title_class . '">', '</h1>');
	else:
		the_title(sprintf('<h1 class="' . $title_class . '"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
	endif;
	?>


</article><!-- #post-${ID} -->