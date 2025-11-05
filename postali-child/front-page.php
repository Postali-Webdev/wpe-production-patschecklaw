<?php

/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
 **/


//// ACF | Register Fields ////
$bannerbg = get_field('banner_background');
$featuredbg = get_field('featured_background');
$figurebg = get_field('banner_photo');
// Feature Section | Custom Fields //
$abfimg = get_field('ab_featured');
$abhcontent = get_field('abh_content');
$abbg = get_field('ab_background');
// Award Slider Settings //
$awardimg = get_field('award_slides');


//// Page ////
get_header(); ?>
<!-- <?php echo get_bloginfo('name'); ?> -->


<div id="front-page" class="fixed">

    <!-- Hero Section - Complete -->
    <section id="hero" class="home">
        <div class="header-top" style="background-image: url('<?php echo $bannerbg ?>');" >
            <div class="wrapper">
                <div class="content">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p><?php the_field('banner_heading'); ?></p>
                    <div class="header-description"><?php the_field('banner_description'); ?></div>
                    <p><?php the_field('banner_btn_text'); ?></p>

                    <div class="btn-content">
                        <div class="btn-description">We're Ready to Help</div>
                        <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                    </div>
                </div>

                <div class="header-side">
                    <img src="<?php the_field('banner_photo'); ?>" />
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="wrapper">
                <div class="content">
                    <p><?php the_field('banner_bottom'); ?></p>
                </div>
            </div>
        </div>

    </section>
    <div id="arrow"></div>

    <!-- Featured Section - Complete -->
    <section id="featured" style="background-image: url('<?php echo $featuredbg ?>');">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('featured_title'); ?></h2>
                    <span class="underline"></span>
                    <p><strong><?php the_field('featured_excerpt'); ?></strong></p>
                    <div class="featured-section-image" style="background-image:url('<?php the_field('featured_image'); ?>');"></div>
                </div>
                <div class="column-50"><?php the_field('featured_text'); ?></div>
            </div>
        </div>
    </section>

    <!-- Practice Areas Section - Complete -->
    <section id="practice-areas" style="background-color: <?php the_field('pa_bg'); ?> ">
        <div class="wrapper">
            <div class="heading">
                <h2><?php the_field('practice_area_title'); ?></h2>
                <p><?php the_field('practice_area_excerpt'); ?></p>
            </div>

            <div class="content">
                <?php if (have_rows('practice_area')) : ?>
                    <?php while (have_rows('practice_area')) : the_row(); ?>
                        <div class="p-areas" style=" background-image: url('<?php the_sub_field('pa_image'); ?>');">

                            <div class="accordion">
                                <a class="accordion-btn">
                                    <h3><?php the_sub_field('pa_title'); ?></h3>
                                </a>
                                <div class="panel">
                                    <p><?php the_sub_field('pa_excerpt'); ?></p>
                                    <a href="<?php the_sub_field('pa_link'); ?>"><?php the_sub_field('pa_link_title'); ?> <span class="icon-icon-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Testimonial Slider - Complete -->
    <section id="testimonial-slider" style="background-color: #fff;">
        <div class="wrapper">
            <div class="slider-for">
                <?php if (have_rows('testimonial_slider')) : ?>
                    <?php while (have_rows('testimonial_slider')) : the_row(); ?>
                        <div class="slides">
                            <div class="testimonial">
                                <p><?php the_sub_field('testimonial_text'); ?></p>
                            </div>
                            <!-- <div class="vl"></div> -->
                            <div class="client-cite">
                                <p><?php the_sub_field('testimonial_user'); ?></p>
                                <p><?php the_sub_field('testimonial_title'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- About Section - QA - Clean Up - Complete -->
    <!--<div id="hero" class="about-home">-->
        <?php ?>

        <!-- Default begin -->
        <section id="hero" class="about-home" style="background:<?php echo $abbg ?>;">
            <!--- Start Grid -->
            <div class="header-top">
                <div class="wrapper">
                    <div class="content">
                        <?php echo $abhcontent; ?>
                        <button><a title="about shellie patscheck" href="/about/">About Shellie Patscheck</a></button>
                    </div>
                </div>
            </div>

            <div class="header-bottom">
                <div class="wrapper">
                    <div class="content">
                        <section id="award-slider" style="background-color: #fff;">
                            <div class="wrapper">
                                <div class="slider-for">
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
                        </section>
                    </div>
                </div>
            </div>

            <div class="header-side" style="background-image: url('<?php echo $abfimg ?>');">

        </section>
        <!-- Default end -->
    <!--</div> -->

</div>
<?php get_footer(); ?>