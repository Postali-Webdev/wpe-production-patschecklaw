<?php

/**
 * Template Name: Form Success
 * @package Postali Child
 * @author Postali LLC
 **/


get_header(); ?>
<!-- Banner -->
<div id="contact" class="fixed">
    <section id="header-banner" class="default" style="background-image: url('/wp-content/uploads/2021/08/header-contact-misc.jpg');">
        <div class="header-top">
            <div class="wrapper">
                <div class="content">
                    <div class="breadcrumb"><?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?></div>
                    <h1><?php echo the_title(); ?></h1>
                    
                </div>
            </div>
        </div>
    </section>
</div>
<!-- -->
<section id="form-success-container">
    <div class="container">
        <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
                <!-- Hero Section - Complete -->
            <h2>Thank you!</h2>
            <p><strong>Thank you for contacting Patscheck Law.</strong> We will review your form submission and contact you as soon as we can. If you need immediate assistance, do not hesitate to contact us today at <a href="tel:505-325-9898">505-325-9898</a>.</p>
        <?php endwhile; endif; ?>
    </div>
</section>



<?php get_footer(); ?>