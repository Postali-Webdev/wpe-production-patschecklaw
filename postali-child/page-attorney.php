<?php

/**
 * About Attorney Page
 * Template Name: About Attorney
 * @package Postali Parent
 * @author Postali LLC
 */

// ACF PHP - Register Fields

$bannerbg = get_field('ab_header_background');
$headerheading = get_field('ab_header_title');
$headerdescription = get_field('ab_header_description');
$headerimg = get_field('ab_header_image');
$headerbottom = get_field('ab_header_bottom');

$legalcontent = get_field('legal_background');
$aboutcontent = get_field('about_attorney');

$featuredbg = get_field('featured_background');
$fpatitle = get_field('featured_pa_title');




get_header(); ?>

<!-- <?php echo get_bloginfo('name'); ?> -->
<div id="about" class="fixed;">
    <!-- Default begin -->
    <section id="hero" class="default about">
        <!--- Start Grid -->
        <div class="header-top" style="background-image: url('<?php echo $bannerbg ?>');">
            <div class="wrapper">
                <div class="content">
                    <div class="breadcrumb"><?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?></div>
                    <h1><?php echo $headerheading; ?></h1>
                    <div class="header-description">
                        <p><?php echo $headerdescription; ?></p>
                    </div>

                </div>
                <div class="btn-wrapper">
                    <div class="btn-content">
                        <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                        <div class="btn-description"><strong>Call Patscheck Law, P.C.</strong> for a free, no-obligation consultation with a local attorney, ready to help.</div>
                    </div>
                </div>
            </div>

            <div class="header-side header-side-mobile" style="background-image: url('<?php echo $headerimg ?>');"></div>

        </div>

        <div class="header-bottom" style="background-color: #fff;">
            <div class="wrapper">
                <?php echo $headerbottom; ?>
            </div>
        </div>

        <div class="header-side header-side-desktop" style="background-image: url('<?php echo $headerimg ?>');">

    </section>
    <!-- Default end -->


    <section id="block" class="featured" style="background-image: url('<?php echo $featuredbg ?>');">
        <div class="container">
            <div class="left-column"><?php echo $legalcontent; ?></div>
            <div class="right-column"><?php echo $aboutcontent; ?></div>
        </div>
    </section>
    <!-- Award Slider -->
    <section id="award-slider">

        <div class="wrapper">
            <div class="content">
                <div class="heading">Shellie’s Awards & Professional Affiliations</div>

                <section id="award-slider" style="background-color: #fff;">
                    <div class="container">
                        <div class="slider-for">
                            <!--  $t_text = get_sub_field('testimonial_text');
                        $t_user = get_sub_field('testimonial_user');
                        $t_title = get_sub_field('testimonial_title');
                        -->
                            <?php if (have_rows('award_slider', 'option')) : ?>
                                <?php while (have_rows('award_slider', 'option')) : the_row(); ?>
                                    <div class="slides">
                                        <div>
                                            <img src="<?php the_sub_field('award_image'); ?>" />
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </section>
    <!-- Default end -->

</div>
<section id="about-pa">
    <div id="practice-areas">
        <div class="wrapper">
            <div class="pa-1">
                <p><?php echo $fpatitle; ?>Practice Areas</p>
            </div>

            <?php if (have_rows('featured_practice_areas')) : ?>
                <?php while (have_rows('featured_practice_areas')) : the_row();

                    $paimg = get_sub_field('featured_image');
                    $patitle = get_sub_field('featured_title');
                    $palink = get_sub_field('featured_link');

                ?>

                    <div class="pa-bg" style="background-image: url('<?php echo $paimg; ?>');">
                        <div class="link"><a href="<?php echo $palink; ?>"><?php echo $patitle; ?></a></div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
            </div>

<?php get_footer(); ?>