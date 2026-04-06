<?php
/**
 * Title: Featured Banner
 * Slug: consultinggrove-dark/banner
 * Categories: consultinggrove-dark
 * Keywords: banner
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bannerbg.jpg","id":1269,"dimRatio":80,"overlayColor":"black","isUserOverlayColor":true,"minHeight":650,"tagName":"section","sizeSlug":"large","metadata":{"name":"Banner"},"className":"r-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<section class="wp-block-cover r-cover" style="margin-top:0;margin-bottom:0;min-height:650px"><img class="wp-block-cover__image-background wp-image-1269 size-large" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bannerbg.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"consultinggrove-dark-inner-content","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group consultinggrove-dark-inner-content"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"56px"},"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}}},"textColor":"white-text-color"} -->
<h2 class="wp-block-heading has-text-align-center has-white-text-color-color has-text-color has-link-color" style="font-size:56px"><?php echo esc_html__( 'Building meaningful solutions is our mission.', 'consultinggrove-dark' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}}},"textColor":"white-text-color"} -->
<p class="has-text-align-center has-white-text-color-color has-text-color has-link-color"><?php echo esc_html__( 'Pellentesque dapibus hendrerit tortor. Cras non dolor. Fusce vel dui. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Cras sagittis. Facilisis dictum vulputate nec convallis', 'consultinggrove-dark' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'About Us', 'consultinggrove-dark' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->