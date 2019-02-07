<div class="row post-wrapper">
    <?php if (in_category('officialdom')):{
        $category = 'officialdom';
    } elseif (in_category('civilian')):{
        $category = 'civilian';
    }
    elseif (in_category('military')):{
        $category = 'military';
    }
    elseif (in_category('documents')):{
        $category = 'documents';
    }
    elseif (in_category('medals_jp')):{
        $category = 'medals_jp';
    }
    elseif (in_category('medals_ru')):{
        $category = 'medals_ru';
    }
        ?>
    <?php endif; ?>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $new_query = new WP_Query(array(
        'category_name' => $category,
        'posts_per_page' => 12,
        'orderby' => 'date',
        'paged' => $paged
    ));
    ?>

    <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 d-flex flex-wrap">
            <div class="post-box">
                <div class="fun-box-img">
                    <div class="fun-line">
                        <div class="title-box d-flex align-items-center justify-content-center">
                            <a href="<?php the_permalink(); ?>">
                                <h4>
                                    <?php trim_title_chars(50, '...'); ?>
                                </h4>
                            </a>
                        </div>
                        <div class="img-wrapper">
                            <a href="<?php the_permalink(); ?>">
                                <div class="fun-post-img" style="background-image: url('<?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                echo $thumb_url[0];
                                ?>')">
                                </div>
                            </a>
                        </div>
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

