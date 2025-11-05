<?php
/**
 * Template Name: Testimonials Archive
 * 
 * @package Postali Child
 * @author Postali LLC
 */


get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <?php while( have_posts() ) : the_post(); ?>
                        <article>
                            <p>"<?php echo esc_html(get_the_content()); ?>"</p>
                            <p><strong><?php the_field('author'); ?></strong></p>
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