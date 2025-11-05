<?php
/**
 * Template Name: Single Testimonial
 * 
 * @package Postali Child
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

<section class="banner" style="background-image:url('/wp-content/uploads/2021/10/tile-expungement-attorney-scaled.jpg');">
    <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="columns">
            <div class="column-50 block">
                <h1><?php echo get_the_title() . ' - ' . get_field('case_value'); ?></h1>
                <div class="btn-content">
                    <div class="btn-description">Call For a Free Consultation.</div>
                    <div class="inner-row">
                        <button><a href="tel:505-591-4667">505-591-4667</a></button>
                        <a class="form-link" href="/contact/">Online Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <?php while( have_posts() ) : the_post(); ?>
                        <article>
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="spacer-60"></div>
                    <?php the_posts_pagination(); ?>
                </div>
                <div class="column-33 sidebar-block block">
                    <?php get_template_part('block','sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
    


</div>

<?php
get_template_part('partials/before-footer');

get_footer(); ?>