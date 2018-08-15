<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'wp-bootstrap-starter-bootstrap-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

//added menu in footer
register_nav_menu('primary', __('Primary Menu', 'Bootstrap Canvas WP Child'));
register_nav_menus(array(
    'primary' => __('Primary Menu', 'Bootstrap Canvas WP Child'),
    'footer_menu' => 'Footer Menu',
));

// logo page
function custom_login_css()
{echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/login_styles.css" />';
    ?>
    <script type='text/javascript' src='./wp-includes/js/jquery/jquery.js'></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.login h1 a').on("click", function () {
                window.location.href = './';
                return false;
            });
        });
    </script>
    <?php
}
add_action('login_head', 'custom_login_css');
