<?php
/**
 * Title: Header
 * Slug: consultinggrove-dark/header
 * Categories: header, consultinggrove-dark
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"base","textColor":"white","layout":{"type":"constrained"}} -->
<header id="sticky-header" class="wp-block-group has-white-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:20px;padding-right:var(--wp--preset--spacing--20);padding-bottom:20px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"32px"}}} /-->

<!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"white-text-color","style":{"spacing":{"blockGap":"40px"},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons {"className":"consultinggrove-dark-header-btn"} -->
<div class="wp-block-buttons consultinggrove-dark-header-btn"><!-- wp:button {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:12px;padding-bottom:12px"><?php echo esc_html__( 'Contact Us', 'consultinggrove-dark' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->