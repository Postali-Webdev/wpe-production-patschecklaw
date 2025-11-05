<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$blogDefault = get_field('default_blog_image', 'options');
$bg_image = '/wp-content/uploads/2021/10/tile-expungement-attorney-scaled.jpg';

get_header();?>



<div class="body-container">

<section class="banner" style="background-image:url('<?php echo $bg_image; ?>');">
    <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="columns">
            <div class="column-50 block">
                <p class="blog-date"><strong><?php echo get_the_date(); ?></strong></p>
                <h1><?php echo get_the_title(); ?></h1>
                <p>Category: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></p>
            </div>
        </div>
    </div>
</section>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <div class="article-single-featured-image">
                        <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                        <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <img src="<?php echo $featImg[0]; ?>" class="article-featured-image"  />
                        <?php } else { ?>
                            <img src="<?php echo $blogDefault; ?>" id="article-featured-image-default" class="article-featured-image" >
                        <?php } ?>
                    </div>
                    <div class="spacer-60"></div>
                    <?php the_content(); ?>
                    <div class="spacer-30"></div>
                    <button>
                    <a href="<?php if( is_singular('testimonials') ) {
                        echo '/reviews/';
                    } else {
                        echo '/blog/';
                    }?>" >View All <?php if( is_singular('testimonials') ) {
                        echo 'Reviews';
                    } else {
                        echo 'Blogs';
                    } ?></a></button>
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

<?php 
get_template_part('partials/before-footer');
get_footer();?>