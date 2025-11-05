<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
' https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 
})(window,document,'script','dataLayer','GTM-K7JPKBR');</script>
<!-- End Google Tag Manager -->

	<!-- Schema JSON-LD -->
	<?php 
	// Global Schema
	$global_schema = get_field('global_schema', 'options');
	if ( !empty($global_schema) ) :
		echo '<script type="application/ld+json">';
		echo $global_schema;
		echo '</script>';
	endif;

	// Single Page Schema
	$single_schema = get_field('single_schema');
	if ( !empty($single_schema) ) :
		echo '<script type="application/ld+json">';
		echo $single_schema;
		echo '</script>';
	endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?> <?php echo get_bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7JPKBR "
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

	<header>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>

			<div id="header-top_right">
				<div id="header-top_menu">
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>

					<div id="header-top_mobile">
						<a id="menu-icon" class="icon"><hr><hr><hr></a>	
					</div>
				</div>
			</div>
		</div>
	</header>
	