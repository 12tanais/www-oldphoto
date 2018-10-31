<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="background-color-page">
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e('Skip to content', 'wp-bootstrap-starter'); ?></a>
    <?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
    <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>"
            role="banner">
        <div class="container-fluid" style="position: relative">
            <div class="nav-cover"></div>
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <a href="<?php echo get_page_link(7) ?>">
                        <h1 class="logo">OldPhoto</h1>
                    </a>
                </div>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                            aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'div',
                        'container_id' => 'main-nav',
                        'container_class' => 'collapse navbar-collapse  justify-content-around',
                        'menu_id' => false,
                        'menu_class' => 'navbar-nav',
                        'depth' => 3,
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    ));
                    ?>

            </nav>
        </div>

    </header><!-- #masthead -->
    <div id="content" class="site-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div></div>
            </div>
        </div>
        <?php endif; ?>


