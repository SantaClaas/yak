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

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<style>
    body {
        background-color: #DFDBE5;
        background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.05' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
    }
</style>

<body <?php body_class('py-6 pr-6 bg-slate-200 text-slate-900 text-lg grid grid-cols-[auto_1fr] grid-rows-[auto_1fr] min-h-screen'); ?>
>

    <?php wp_body_open(); ?>

    <a href="#content" class="sr-only">
        <?php esc_html_e('Skip to content', 'claas-dev'); ?>
    </a>

    <!-- Open header -->
    <?php get_template_part('template-parts/layout/header', 'content'); ?>


    <aside class="col-start-1 row-start-1 row-end-3 w-20 h-full grid grid-rows-subgrid">
        <!-- Prefer hardcoded navigation as WP one is too hard to get working with these icons.
         WP navigation support will be added at a later point -->
        <nav class="row-start-2 flex flex-col gap-1 p-[5px] w-20 h-full">

            <?php

            $items = wp_get_nav_menu_items('menu-1');

            foreach ($items as $item) {
                echo '<a class="h-14 flex flex-col gap-1 items-center" href="' . $item->url . '">';
                echo $item->title;
                echo '</a>';
            }
            ?>
        </nav>

    </aside>