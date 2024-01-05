<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package claas.dev
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('py-6 pr-6 bg-slate-200 text-slate-900 text-lg grid grid-cols-[auto_1fr] grid-rows-[auto_1fr] min-h-screen'); ?>>

<?php wp_body_open(); ?>

	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'claas-dev' ); ?></a>

	<!-- Open header -->
	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<!-- Prefer hardcoded navigation as WP one is too hard to get working with these icons.
		 WP navigation support will be added at a later point -->
	<nav class="flex flex-col justify-center gap-1 col-start-1 col-end-2 row-start-1 row-end-3 w-20 p-[5px]">
        <a class="h-14 flex flex-col gap-1 items-center" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path
                    d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z">
                </path>
            </svg>

            <span class="text-base font-semibold">
                Home
            </span>
        </a>

        <a class="h-14 flex flex-col gap-1 items-center" href="/about">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path
                    d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
                </path>
            </svg>

            <span class="text-base font-semibold">
                About
            </span>
        </a>

        <a class="h-14 flex flex-col gap-1 items-center" href="/contact">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path
                    d="M160-40v-80h640v80H160Zm0-800v-80h640v80H160Zm320 400q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm70-80q45-56 109-88t141-32q77 0 141 32t109 88h70v-480H160v480h70Zm118 0h264q-29-20-62.5-30T480-280q-36 0-69.5 10T348-240Zm132-280q-17 0-28.5-11.5T440-560q0-17 11.5-28.5T480-600q17 0 28.5 11.5T520-560q0 17-11.5 28.5T480-520Zm0 40Z">
                </path>
            </svg>

            <span class="text-base font-semibold">
                Contact
            </span>
        </a>
    </nav>

	<main id="content" class="col-start-2">
