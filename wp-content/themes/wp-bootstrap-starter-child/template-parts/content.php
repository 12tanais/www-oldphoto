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
            <header class="row entry-header">
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

                    <?php if ('post' === get_post_type()) : ?>
                        <div class="entry-meta">
                            <?php wp_bootstrap_starter_posted_on(); ?>
                        </div><!-- .entry-meta -->
                    <?php
                    endif; ?>
                </div>
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
                <?php elseif (get_field('documents-descriptions')): ?>
                    <span class="post-description-title">Описание: </span><?php the_field('documents-descriptions'); ?>
                <?php endif; ?>
            </div><!-- .entry-content -->
            <div class="entry-content">

                <?php if (get_field('additional_data')): ?>
                    <span class="post-description-title">Дополнительные данные: </span><?php the_field('additional_data'); ?>
                <?php elseif (get_field('additional_data_documents')): ?>
                    <span class="post-description-title">Дополнительные данные: </span><?php the_field('additional_data_documents'); ?>
                <?php endif; ?>

            </div>
            <div class="entry-content">

                <?php if (get_field('photoworkshop')): ?>
                    <span class="post-description-title">Фотостудия: </span><?php the_field('photoworkshop'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <footer class="entry-footer">
                <?php wp_bootstrap_starter_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="text-center">Похожие публикации</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row post-wrapper">
                        <?php
                        $post_id_my = array(get_the_ID());
                        if( in_category( 'photos' ) ){
                            $categoryPost = 'photos';
                            $className =  'col-lg-3 col-xl-3';
                        }elseif ( in_category('documents') ) {
                            $categoryPost = 'documents';
                            $className =  'col-lg-4 col-xl-4';
                        }elseif ( in_category('medals') ){
                            $categoryPost = 'medals';
                            $className =  'col-lg-3 col-xl-3';
                        }
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $new_query = new WP_Query(array(
                            'category_name' => $categoryPost,
                            'posts_per_page' => 4,
                            'orderby' => 'rand',
                            'paged' => $paged,
                            'post__not_in' => $post_id_my,
                        ));
                        ?>

                        <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                            <div class="col-12 col-sm-12 col-md-6 d-flex flex-wrap <?php echo $className?>">
                                <div class="post-box">
                                    <div class="fun-box-img">
                                        <div class="fun-line">
                                            <div class="title-box d-flex align-items-center justify-content-center">
                                                <!--                            <p>Дата публикации: --><?php //echo the_date() ?><!--</p>-->
                                                <a href="<?php the_permalink(); ?>">
                                                    <h4>
                                                        <?php trim_title_chars(40, '...'); ?>
                                                    </h4>
                                                </a>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="fun-post-img" style="background-image: url('<?php
                                                $thumb_id = get_post_thumbnail_id();
                                                $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                                echo $thumb_url[0];
                                                ?>')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fun-box-text">
                                        <div class="fun-news-button">
                                            <p class="text-center">
                                                <a class="btn btn-light" href="<?php the_permalink(); ?>"
                                                   role="button">Узнать больше</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</article><!-- #post-## -->
