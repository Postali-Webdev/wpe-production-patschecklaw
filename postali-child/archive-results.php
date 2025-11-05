<?php
/**
 * Template Name: Results Archive
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
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <h2><?php echo get_the_title() . ' - ' . get_field('case_value'); ?></h2>
                                <?php the_content(); ?>
                            </a>
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