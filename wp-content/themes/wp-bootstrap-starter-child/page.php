<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

    <section id="pos-menu">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons.png"
                         alt="logo" class="curls">
                    <a href="<?php echo get_page_link(16) ?>"><h4 class="page-title">Фотографии</h4></a>
                    <div class="line">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/page-img1.jpg"
                             alt="logo" class="rounded img-page">
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit

                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <a href="<?php echo get_page_link(16) ?>">
                        <button type="button" class="btn">Узнать больше</button>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons.png"
                         alt="logo" class="curls">
                    <a href="<?php echo get_page_link(19) ?>"><h4 class="page-title">Документы</h4></a>
                    <div class="line">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/page-img2.jpg"
                             alt="logo" class="rounded img-page">
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit

                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <a href="<?php echo get_page_link(19) ?>">
                        <button type="button" class="btn">Узнать больше</button>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons.png"
                         alt="logo" class="curls">
                    <a href="<?php echo get_page_link(22) ?>"><h4 class="page-title">Награды и знаки</h4></a>
                    <div class="line">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/page-img3.jpg"
                             alt="logo" class="rounded img-page">
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit

                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <a href="<?php echo get_page_link(22) ?>">
                        <button type="button" class="btn">Узнать больше</button>
                    </a>
                </div>
            </div>
    </section>
    <section id="new-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons.png"
                         alt="logo" class="curls">
                    <h4 class="page-title">Новые поступления</h4>
                    <div class="line">
                        <div class="row">
                            <?php
                            $the_query = new WP_Query(array(
                                'category_name' => 'documents, photos, medals',
                                'posts_per_page' => 6,
                                'paged' => $paged));
                            ?>
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        <a href="<?php the_permalink(); ?>">
                                        <div class="img-box-wrapper d-flex align-items-center justify-content-center">
                                            <div class="post-img rounded" style="background-image: url('<?php
                                            $thumb_id = get_post_thumbnail_id();
                                            $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                            echo $thumb_url[0];
                                            ?>');">
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php esc_html_e('Извините, посты не найдены.'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
