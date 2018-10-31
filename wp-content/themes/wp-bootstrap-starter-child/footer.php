<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
    <footer id="colophon">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 order-xl-12"><p
                            class="copy">&copy;
                        <span><?php echo date('Y'); ?></span> <?php echo '<a href="' . home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
                    </p></div>
            </div>
        </div>
    </footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>