<?php
/*
Template Name: My Custom Page Template
*/
get_header(); ?>
    <div class="container-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons.png"
                             alt="logo" class="curls">
                        <h1>Контакты</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]') ?>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/photog.png"
                         alt="photo" class="photo-class">
                </div>
            </div>
        </div>
    </div>
<?php
get_footer(); ?>