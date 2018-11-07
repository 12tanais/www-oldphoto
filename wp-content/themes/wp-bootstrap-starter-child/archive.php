<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="page-title">
                    <h1 class="text-left"><?php wp_title("", true); ?></h1>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <?php get_template_part('loop', 'page'); ?>
            </div>
        </div><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
