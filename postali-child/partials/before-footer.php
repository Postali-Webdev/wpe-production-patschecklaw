<section id="before-footer">
    <div class="container">
        <div class="left-column">
            <div class="content-wrapper">

            <!-- Footer CTA Override for SEO - Title -->
            <?php if(get_field('footer_cta_title')) { ?>
                <p><?php the_field('footer_cta_title'); ?></p>
                <?php } else { ?>            
                <p><?php the_field('message_heading', 'options'); ?></p>
                <?php }?>
            
            <!-- Footer CTA Override for SEO - Message -->    
            <?php if(get_field('footer_cta_excerpt')) { ?>
                <p><?php the_field('footer_cta_excerpt'); ?></p>
                <?php } else { ?>            
                <p><?php the_field('message_heading', 'options'); ?></p>
                <?php }?>

                <button class="gradient"><a href="tel:<?php the_field('phone_number', 'option'); ?>">Call <?php the_field('phone_number', 'option'); ?></a></button>
            </div>    
        </div>
        <div class="vl"></div>
        <div class="right-column">
        <?php echo do_shortcode( '[gravityform id="1" title="false"]' ); ?>
        </div>
    </div>
</div>
</section>

