<?php
/*
Template Name: My Custom Page Template
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
<!--                <div class="sort">-->
<!--                    <div class="col-md-4 col-lg-4">-->
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default dropdown-toggle btn_style" style="padding: .24rem .6rem; background:#8b6c42; "-->
<!--                                    data-toggle="dropdown"><span-->
<!--                                        class="glyphicon glyphicon-align-justify"-->
<!--                                        style='margin-right: 10px; color: #FFF;'></span><span-->
<!--                                        class="caret"></span></button>-->
<!--                            <ul class="dropdown-menu" role="menu">-->
<!--                                <li onclick="bigphoto()"><a href="#"><span class="glyphicon glyphicon-align-justify"-->
<!--                                                                           style='margin-right: 10px'></span>По одной-->
<!--                                        публикации</a>-->
<!--                                </li>-->
<!--                                <li onclick="dblphoto()"><a href="#"><span class="glyphicon glyphicon-th-large"-->
<!--                                                                           style='margin-right: 10px'></span>По две-->
<!--                                        публикации</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-8 col-lg-8">-->
<!--                        <div class="text-right">-->
<!--                            --><?php //get_search_form(); ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row  post-wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $new_query = new WP_Query(array(
                            'category_name' => 'documents',
                            'posts_per_page' => 12,
                            'orderby' => 'date',
                            'paged' => $paged
                        ));
                        ?>

                        <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex flex-wrap">
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
                                        <!--                    <div class="fun-text">-->
                                        <!--                        <p>-->
                                        <!--                            --><?php //$main_content =  the_field('description');
                                        //                            $tri_content = wp_trim_words($main_content, 7, '...');
                                        //                            echo $tri_content; ?>
                                        <!--                        </p>-->
                                        <!--                    </div>-->
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

                        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pagination_box" style="opacity: 1">
                            <div id="pagination">
                                <?php echo paginate_links(array(
                                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                    'total' => $new_query->max_num_pages,
                                    'current' => max(1, get_query_var('paged')),
                                    'format' => '?paged=%#%',
                                    'show_all' => false,
                                    'type' => 'plain',
                                    'end_size' => 2,
                                    'mid_size' => 1,
                                    'prev_next' => true,
                                    'prev_text' => sprintf('<i></i> %1$s', __('&#9001;', 'text-domain')),
                                    'next_text' => sprintf('%1$s <i></i>', __('&#9002;', 'text-domain')),
                                    'add_args' => false,
                                    'add_fragment' => '',
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer();