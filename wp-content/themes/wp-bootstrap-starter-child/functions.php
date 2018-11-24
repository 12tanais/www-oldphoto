<?php
//new fonts
function theme_assets() {
    wp_enqueue_style( 'et-googleFonts', "https://fonts.googleapis.com/css?family=IBM+Plex+Serif|Pattaya|Roboto&subset=cyrillic-ext" );
    wp_enqueue_style( 'et-googleFonts', "https://fonts.googleapis.com/css?family=Roboto+Condensed:700&subset=cyrillic" );
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );


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

function trim_title_chars($count, $after)
{
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title, 0, $count);
    else $after = '';
    echo $title . $after;
}

//my file js
function load(){
    // my js file
    wp_enqueue_script('view_script', get_template_directory_uri().'-child/js/js.js','', '1.0', true);
}
add_action('wp_enqueue_scripts', 'load');




function themeslug_theme_customizer( $wp_customize ) {

    $wp_customize->add_setting( 'mytheme_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_logo', array(
        'label'    => 'Logo',
        'section'  => 'mytheme_logo_section',
        'settings' => 'mytheme_logo',
    ) ) );
}
add_action('customize_register', 'themeslug_theme_customizer');

if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"), false, '1.12.4');
wp_enqueue_script('jquery');
}



function updateNumbers() {
    global $wpdb;
    $querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post' ";
    $pageposts = $wpdb->get_results($querystr, OBJECT);
    $counts = 0 ;
    if ($pageposts):
        foreach ($pageposts as $post):
            setup_postdata($post);
            $counts++;
            add_post_meta($post->ID, 'incr_number', $counts, true);
            update_post_meta($post->ID, 'incr_number', $counts);
        endforeach;
    endif;
}

add_action ( 'publish_post', 'updateNumbers' );
add_action ( 'deleted_post', 'updateNumbers' );
add_action ( 'edit_post', 'updateNumbers' );





