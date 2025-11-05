<?php
    $bg_image = '/wp-content/uploads/2021/10/tile-expungement-attorney-scaled.jpg';
    
    if( is_post_type_archive( 'results' ) ) {
        $archive_type = get_field('results', 'options');
    }

    if( is_post_type_archive( 'testimonials' ) ) {
        $archive_type = get_field('testimonials', 'options');
    }

    if( $archive_type ) {
        $title = $archive_type['banner_title'];
        $subheadline = $archive_type['banner_subheadline'];
    } else {
        $title = 'Legal Blog';
        $subheadline = false;
    }
    

?>
<section class="banner" style="background-image:url('<?php echo $bg_image; ?>');">
    <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="columns">
            <div class="column-50 block">
                <h1><?php echo $title; ?></h1>
                <?php if($subheadline) : ?><p><?php echo $subheadline; ?></p><?php endif; ?>
                <div class="btn-content">
                    <div class="btn-description">Call For a Free Consultation.</div>
                    <div class="inner-row">
                        <button><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></button>
                        <a class="form-link" href="/contact/">Online Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>