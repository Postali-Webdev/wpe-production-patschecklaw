<?php

/**
 * Template Name: Contact
 * @package Postali Child
 * @author Postali LLC
 **/


// acf PHP - Register Fields
$bannerbg = get_field('header_image');
$headerdescription = get_field('heading_description');
$featuredbg = get_field('featured_background');
?>

<?php get_header(); ?>
<!-- <?php echo get_bloginfo('name'); ?> -->
<div id="contact" class="fixed">

    <!-- Hero Section - Complete -->
    <section id="header-banner" class="default" style="background-image: url('<?php echo $bannerbg ?>');">
        <div class="header-top">
            <div class="wrapper">
                <div class="content">
                    <div class="breadcrumb"><?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?></div>
                    <h1><?php echo $headerdescription; ?></h1>
                    <!-- <p><?php echo $headerdescription; ?></p> -->

                </div>
                <div class="btn-wrapper">
                    <div class="btn-bottom">
                        <button><a href="tel:<?php the_field('phone_number', 'option'); ?>">Call <?php the_field('phone_number', 'option'); ?></a></button>
                    </div>
                </div>

            </div>

        </div>
        <div class="header-side">
            <figure id="contact-form">
                <div class="wrapper">
                    <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                </div>
            </figure>
        </div>



    </section>

</div>
<!-- Before Footer Section - QA - Clean Up - Complete -->
<div id="before-footer">
    <section id="contact-footer">
        <div class="content">
            <div class="wrapper">
                <div class="contact-info">

                    <div class="top">
                        <p><?php the_field('long_title', 'option'); ?></p>
                        <p><?php the_field('address_1', 'option'); ?></p>
                        <p><?php the_field('city', 'option'); ?>, <?php the_field('state', 'option'); ?> <?php the_field('zipcode', 'option'); ?></p>
                    </div>

                    <div class="middle">
                        <p style="padding:0; font-weight: 400; line-height: 30px; font-size: 18px;"><span style="color: #E7543E; font-weight: 600;">PH</span> <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
                        <p style="padding:0; font-weight: 400; line-height: 30px; font-size: 18px;"><span style="color: #E7543E; font-weight: 600;">EM</span> <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
                    </div>

                    <div class="bottom">
                        <p><a target="_blank" href="https://www.google.com/maps/dir//1690+N+Butler+Ave+Farmington,+NM+87401/@36.7464939,-108.1970019,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x873b8f993a8545b5:0x75bee4b873f2fa45" style="font-size: 18px; color: #fff;text-decoration: underline;">Driving Directions</a></p>
                    </div>

                </div>
            </div>
        </div>



        <div class="map">
            <div class="wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.0030371879716!2d-108.1991905839271!3d36.74649817841886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x873b8f993a8545b5%3A0x75bee4b873f2fa45!2s1690%20N%20Butler%20Ave%2C%20Farmington%2C%20NM%2087401!5e0!3m2!1sen!2sus!4v1631577509216!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>


    </section>
</div>




<?php get_footer(); ?>