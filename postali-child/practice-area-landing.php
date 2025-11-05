<?php

/**
 * Template Name: Practice Area Landing
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
<div id="landing">
    <section id="hero" class="default">
        <!--- Start Grid -->
        <div class="header-top" style="background-image: url('<?php echo $bannerbg ?>');">
            <div class="wrapper">
                <div class="content">
                    <div class="breadcrumb"><?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?></div>
                    <h1><?php echo $headerheading ?></h1>
                    <!-- <p><?php echo $headerdescription; ?></p>-->

                </div>
                <div class="btn-wrapper">
                    <div class="btn-content">
                        <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                        <div class="btn-description"><strong>Call Patscheck Law, P.C.</strong> for a free, no-obligation consultation with a local attorney, ready to help.</div>
                    </div>
                </div>
            </div>

        </div>

        <div class="header-bottom">
            <div class="wrapper">
                <p><?php the_field('default_header_bottom'); ?></p>
            </div>
        </div>

    </section>



    <!-- Test -->

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            // Start the loop.
            while (have_posts()) : the_post();

                // Include the page content template.
                get_template_part('template-parts/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }

            // End of the loop.
            endwhile;
            ?>

        </main><!-- .site-main -->

        <?php get_sidebar('content-bottom'); ?>

    </div><!-- .content-area -->

    <?php get_sidebar(); ?>



    <!-- Child Pages of Parent -->
    <section id="childpages">

    <?php
    if( have_rows('practice_areas') ):
    while( have_rows('practice_areas') ) : the_row(); ?>

        <div class="subpage">
            <div class="wrapper">
                <div class="left-column">

                <?php 
                $image = get_sub_field('background_image');
                if( !empty( $image ) ): ?>
                    <div class="practice-area-landing-thumb" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
                <?php endif; ?>
                </div>
                <div class="right-column">
                    <div class="content">
                        <h2 class="subpagetitle"><a href="<?php the_sub_field('pa_link'); ?>" rel="bookmark" title="<?php the_sub_field('pa_title'); ?>"><?php the_sub_field('pa_title'); ?></a></h2>
                        <div class="subexcerpt">
                            <p><?php the_sub_field('pa_description'); ?></p>
                            <?php if( have_rows('child_pages') ): ?>
                            <ul class="child-pages">
                            <?php while( have_rows('child_pages') ) : the_row(); ?>
                            
                                <?php if (get_sub_field('child_page_link')) { ?>
                                <li><a href="<?php the_sub_field('child_page_link'); ?>"><?php the_sub_field('child_page_title'); ?></a></li>
                                <?php } else { ?>
                                <li><?php the_sub_field('child_page_title'); ?></li>
                                <?php } ?>

                            <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <button><a href="<?php the_field('pa_link'); ?>" rel="bookmark" title="<?php the_field('pa_title'); ?>"><?php the_field('pa_title'); ?></a></button>
                    </div>
                </div>
            </div>
        </div>

    <?php 
    endwhile;
    endif; ?>
    </section>


</div>

<?php get_footer(); ?>