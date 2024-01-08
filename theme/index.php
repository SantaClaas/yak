<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package claas.dev
 */

get_header();
?>

<script>
	function share(text, url) {
		const shareData = {
			title: document.title,
			text,
			url: window.location.href,
		}

		if (!navigator.share || !navigator.canShare || !navigator.canShare(shareData))
			return;

		navigator.share(shareData)
			.then(() => console.debug('Successful share'))
			.catch((error) => console.error('Error sharing', error));
	}
</script>

<main id="content"
	class="col-start-2 grid gap-2 grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 h-min">
	<?php
	if (have_posts()) {

		if (is_home() && !is_front_page()):
			?>
							<header class="entry-header">
								<h1 class="entry-title">
									<?php single_post_title(); ?>
								</h1>
							</header><!-- .entry-header -->
							<?php
		endif;

		// Load posts loop.
		while (have_posts()) {
			the_post();
			get_template_part('template-parts/content/content');
		}

		// Previous/next page navigation.
		claas_dev_the_posts_navigation();

	} else {
		// If no content, include the "No posts found" template.
		get_template_part('template-parts/content/content', 'none');
	}
	?>

</main><!-- #content -->

<!-- Enable share buttons only if sharing is supported -->
<script>
	if(!navigator.share)
		return;

	const shareButtons = document.querySelectorAll('#share');
	shareButtons.forEach(button => button.classList.remove('hidden'));

</script>
<template id="hiding-this">

	<?php
	get_footer();
