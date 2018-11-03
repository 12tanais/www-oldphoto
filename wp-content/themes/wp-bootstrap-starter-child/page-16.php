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
<!--                            <button type="button" class="btn btn-default dropdown-toggle btn_style"-->
<!--                                    style="padding: .24rem .6rem; background:#8b6c42; "-->
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
                    <?php get_template_part('loop', 'page'); ?>
                </div>
            </div>
        </div>
<?php
get_footer(); ?>