<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
    <section class="error-404 not-found">
        <span class="ajax-search">
            <h1>Error 404</h1>
            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        </span>
    </section>
<?php
get_footer();
