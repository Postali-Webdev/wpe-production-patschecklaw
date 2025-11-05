<?php

/**
 * Template Name: Practice Parent
 * @package Postali Child
 * @author Postali LLC
 **/

// acf PHP - Register Fields
$bannerbg = get_field('default_header_image');
$headerheading = get_field('default_header_title');
$headerdescription = get_field('default_header_bottom');
$headerimg = get_field('header_image');



get_header(); ?>

<!-- <?php echo get_bloginfo('name'); ?> -->

    <section id="hero" class="default" style="background-image: url('<?php echo $bannerbg ?>');">
        <!--- Start Grid -->
        <div class="header-top container">
            <div class="wrapper columns">
                <div class="content column-66">
                    <div class="breadcrumb"><?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?></div>
                    <h1><?php echo $headerheading; ?></h1>
                    <!--<p><?php echo $headerdescription; ?></p> -->
                    <div class="btn-wrapper">
                        <div class="btn-content">
                            <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                            <div class="btn-description"><strong>Call Patscheck Law, P.C.</strong> for a free, no-obligation consultation with a local attorney, ready to help.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="header-bottom">
        <div class="container">
            <div class="columns">
                <div class="column-75">
                    <p><?php the_field('default_header_bottom'); ?></p>
                </div>
            </div>
        </div>
    </section>


<!-- After Header -->

<div id="after-header">

    <?php
    $ahbhimg = get_field('ah_background');
    $ahtitle = get_field('ah_title');
    $ahcontent = get_field('ah_description');
    $ahfimg = get_field('ah_featured_image');
    ?>

    <section id="hero" class="default" style="background-image: url('<?php echo $ahbhimg ?>');">
        <!--- Start Grid -->
        <div class="container">
            <div class="columns" id="tough">
                <div class="column-66">
                    <h2><?php echo $ahtitle; ?></h2>
                    <div class="spacer-30"></div>
                    <?php echo $ahcontent; ?>
                    <p class="ct">Call Today</p>
                    <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                    <div class="spacer-60"></div>
                </div>
                <div class="column-33 photo">
                    &nbsp;
                </div>
            </div>
        </div>
    </section>
</div>


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
<!-- Content - Odd / Even - Start -->


<?php get_footer(); ?>