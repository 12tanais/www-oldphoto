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
                                    <input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">

        </section>


<?php
get_footer();
