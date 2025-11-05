<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
  
  <?php if( is_front_page() || is_page_template( array('page.php','practice-area-landing.php', 'practice-area-parent.php','interior.php', 'page-practice-interior.php' ))){ get_template_part('partials/before-footer');} ?>
  <?php if(is_page_template( array( 'page-about.php'))){ get_template_part('partials/before-footer');} ?>

<footer>
<div class="container">
<p>
  <span class="footer-link-container">
    <?php the_field('address_1', 'option'); ?>, &nbsp;<?php the_field('city', 'option'); ?>, <?php the_field('state', 'option'); ?>  <?php the_field('zipcode', 'option'); ?> 
  </span>
  <span class="footer-link-container">
    <span class="footer-separator">|</span> Site Contents &copy;
    <?php echo date("Y"); ?> <?php the_field('long_title', 'option'); ?> <span class="footer-separator">|</span>
  </span>
  <span class="footer-link-container">
     <a href="/sitemap/">Sitemap</a></p>
  </span>
  <?php if(is_page_template('front-page.php')) { ?>
  <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:10px auto 20px; padding-bottom:10px !important;"></a>
  <?php } ?>
</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>


