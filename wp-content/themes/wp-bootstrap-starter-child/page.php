<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


    <section id="comparison">
        <div class="comp">
            <div id="divisor"></div>
        </div>
<!--       // <div class="slogan"><h1>Look at the world through &nbsp;&nbsp;&nbsp;&nbsp;the eyes of your ancestors!</h1></div>-->
        <input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">
        <div class="mouse-movement">
            <div class='left'>
                <span class="m_movement_arrows unu "></span>
                <span class="m_movement_arrows doi "></span>
                <span class="m_movement_arrows trei "></span>
            </div>
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class='right'>
                <span class="m_movement_arrows unu "></span>
                <span class="m_movement_arrows doi "></span>
                <span class="m_movement_arrows trei"></span>
            </div>
        </div>
    </section>


<?php
get_footer();
