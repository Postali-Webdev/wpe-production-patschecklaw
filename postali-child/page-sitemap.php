<?php
/**
 * Template Name: Sitemap
 * @package Postali Child
 * @author Postali LLC
**/

get_header();?>
<?php if(is_page('sitemap')){ get_template_part('partials/hero');} ?>

<section id="sitemap-contaner">
    <div class="container">
        <?php if(is_page('sitemap')){ get_template_part('partials/sitemap');} ?>
    </div>
</section>
<?php get_footer();?>
