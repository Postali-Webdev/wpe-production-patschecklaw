<?php

/**
 * Template Name: Interior
 * @package Postali Child
 * @author Postali LLC
 **/


// acf PHP - Register Fields
$bannerbg = get_field('default_header_image');
$featuredbg = get_field('featured_background');

get_header(); ?>
<!-- <?php echo get_bloginfo('name'); ?> -->

<div id="interior">

<section id="hero">
    <!--- Start Grid -->
    <div class="header-top" style="background-image: url('<?php echo $bannerbg ?>');">

        <div class="wrapper">
            <div class="content">
                <div class="breadcrumb"><?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?></div>
                <h1><?php echo get_the_title(); ?></h1>
                <p><?php echo $headerdescription; ?></p>

            </div>
            <div class="btn-wrapper">
                <div class="btn-bottom">
                    <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                    <div class="btn-description"><strong>Call Patscheck Law, P.C.</strong> for a free, no-obligation consultation with a local attorney, ready to help.</div>
                </div>
            </div>
        </div>

    </div>

    <div class="header-bottom" style="background-color: #fff;">
        <div class="wrapper">
            <p><?php the_field('header_bottom'); ?></p>
        </div>
    </div>



</section>



<!-- Content - Odd / Even Start -->
<div id="content">
    <?php
    if (have_rows('content_sections')) {
        while (have_rows('content_sections')) {
            the_row();

            $content = get_sub_field('content');

            if (get_row_index() % 2 == 0) {

                echo '<section class="content odd"><div class="wrapper"><div class="container">';
                echo $content;
                echo '</div></div></section>';
            } else {

                echo '<section class="content even"><div class="wrapper"><div class="container">';
                echo $content;
                echo '</div></div></section>';
            }
        }
    }
    ?>
</div>
<!-- Content - Odd / Even - End -->
</div>



<?php get_footer(); ?>