<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <header class="entry-header">
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

                <?php if ('post' === get_post_type()) : ?>
                    <div class="entry-meta">
                        <?php wp_bootstrap_starter_posted_on(); ?>
                    </div><!-- .entry-meta -->
                <?php
                endif; ?>
            </header><!-- .entry-header --></div>
        <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-5 offset-md-0 col-lg-4 offset-lg-0 col-xl-4 offset-xl-0 ">
            <?php
            if (is_single()) :
                the_content();
            else :
                the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
            endif;

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'wp-bootstrap-starter'),
                'after' => '</div>',
            ));
            ?>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
            <div class="entry-content">
                <?php if (get_field('description')): ?>

                   <span class="post-description-title">Описание: </span><?php the_field('description'); ?>
                <?php endif; ?>
            </div><!-- .entry-content -->
            <div class="entry-content">

                <?php if (get_field('additional_data')): ?>
                        <span class="post-description-title">Дополнительные данные:</span><?php the_field('additional_data'); ?>
                <?php endif; ?>
            </div>
            <div class="entry-content">

                <?php if (get_field('photoworkshop')): ?>
                    <span class="post-description-title">Фотостудия: </span><?php the_field('photoworkshop'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-12">
            <footer class="entry-footer">
                <?php wp_bootstrap_starter_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
    </div>
</article><!-- #post-## -->
