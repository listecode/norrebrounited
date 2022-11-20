<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

	<section>
        <article class="matchcon">
            <img class="matches" src="<?php echo get_stylesheet_directory_uri() ?>/matchcalender.webp" alt="kamp-oversigt">
        </article>
    </section>

<?php get_footer(); ?>
