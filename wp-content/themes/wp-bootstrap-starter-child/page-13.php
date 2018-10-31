<?php
/*
Template Name: My Custom Page Template
*/
get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="page-title text-center">
                    <h1 class="text-center">Контакты</h1>
                </div>
            </div>
            <div class="col-lg-12 col-xl-12">
                <?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]') ?>
            </div>
        </div>
    </div>

<?php
get_footer(); ?>