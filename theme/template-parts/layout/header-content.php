<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package claas.dev
 */

?>

<header id="masthead" class="mb-6 col-start-2 col-end-3">


	<hgroup>
		<?php
		if (is_front_page()):
			?>
			<h1 class="text-9xl font-light lowercase">
				<?php bloginfo('name'); ?>
			</h1>
			<?php
		else:
			?>
			<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php bloginfo('name'); ?>
				</a></p>
			<?php
		endif;

		$claas_dev_description = get_bloginfo('description', 'display');
		if ($claas_dev_description || is_customize_preview()):
			?>
			<p class="text-4xl">
				<?php echo $claas_dev_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</p>
		<?php endif; ?>
	</hgroup>


</header><!-- #masthead -->