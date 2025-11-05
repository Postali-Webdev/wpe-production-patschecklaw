<?php

/**
 * Template Name: About the Firm
 * @package Postali Child
 * @author Postali LLC
 **/


// acf PHP - Register Fields
$bannerbg = get_field('default_header_image');
$featuredbg = get_field('featured_background');

get_header(); ?>
<!-- <?php echo get_bloginfo('name'); ?> -->

<section class="about-banner" style="background:url('<?php the_field('banner_background'); ?>">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <div class="banner-content">
                    <?php the_field('banner_content'); ?>
                    <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="columns">
            <div class="column-50">
                <h2><?php the_field('about_section_headline'); ?></h2>
                <div class="separator"></div>
                <?php the_field('about_section_copy'); ?>
                <div class="spacer-30"></div>
                <h3>AWARDS & PROFESSIONAL AFFILIATIONS</h3>
                <div id="award-slider">
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
                </div>
            </div>
            <div class="column-50 shellie">
                <?php 
                $image = get_field('section_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="timeline">
    <div class="container">
        <div class="columns">
            <div class="column-75">
                <h3><?php the_field('timeline_headline'); ?></h3>
                <div id="timeline">
                <?php if (have_rows('timeline')) : ?>
                    <?php while (have_rows('timeline')) : the_row(); ?>
                        <div class="slides">
                            <div>
                                <div class="dot"></div>
                                <div class="date"><?php the_sub_field('date'); ?></div>
                                <div class="headline"><?php the_sub_field('headline'); ?></div>
                                <div class="copy"><?php the_sub_field('copy'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="values">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h2><?php the_field('values_section_headline'); ?></h2>
                <div class="separator"></div>
                <?php the_field('values_section_copy'); ?>
            </div>
        </div>
        <div class="spacer-30"></div>
        <div class="columns callout-boxes">
            <?php if (have_rows('values')) : ?>
                <?php while (have_rows('values')) : the_row(); ?>
                <div class="column-33 callout">
                    <div class="photo">
                        <img src="<?php the_sub_field('values_image'); ?>">
                    </div>
                    <div class="content"><?php the_sub_field('values_copy'); ?></div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>