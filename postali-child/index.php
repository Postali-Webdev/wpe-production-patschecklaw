<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$args = array (
	'post_type' => 'post',
	'post_per_page' => '10',
	'post_status' => 'publish',
	'order' => 'DESC',
);
$the_query = new WP_Query($args);

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 block-grid">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article>
                            <div class="img-wrapper">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="featured blog image">
                            </div>
                            <div class="copy-wrapper">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <p class="subtitle-text"><?php the_title(); ?></p>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="spacer-60"></div>
                    <?php the_posts_pagination([   
                        'prev_text' => __( '', 'textdomain' ),
                        'next_text' => __( '', 'textdomain' )
                    ]); ?>
                </div>
                <div class="column-33 sidebar-block block">
                    <?php get_template_part('block','sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>