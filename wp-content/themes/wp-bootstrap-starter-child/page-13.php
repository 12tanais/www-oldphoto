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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]') ?>
            </div>
        </div>
    </div>
<?php
get_footer(); ?>