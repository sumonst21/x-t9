<?php
/**
 * Site title Nav Float with header top contact
 *
 * @package vektor-inc/x-t9
 */

return array(
	'title'      => __( 'Site title Nav Float with header top contact', 'x-t9' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"0rem","right":"0rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="padding-right:0rem;padding-left:0rem"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.7rem","bottom":"0.7rem","right":"0rem"}}},"className":"site-logo\u002d\u002dset","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap","justifyContent":"left"}} -->
	<div class="wp-block-group site-logo--set" style="padding-top:0.7rem;padding-right:0rem;padding-bottom:0.7rem"><!-- wp:site-logo {"width":100} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em"}}}} -->
	<div class="wp-block-group" style="padding-top:1em"><!-- wp:site-title /-->
	
	<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"d-sm-up","fontSize":"x-small"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0rem"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
	<div class="wp-block-group" style="padding-bottom:0rem"><!-- wp:social-links {"iconColor":"text-bright","iconColorValue":"rgba(0,0,0,0.5)","size":"has-small-icon-size","className":"is-style-logos-only d-md-up","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"1rem"}}} -->
	<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only d-md-up"><!-- wp:social-link {"url":"https://wordpress.org/","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org/","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org/","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org/","service":"youtube"} /--></ul>
	<!-- /wp:social-links -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"1rem"}}}} -->
	<div class="wp-block-group" style="padding-left:1rem"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0rem","bottom":"0rem"}}},"fontSize":"small"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size"><a class="wp-block-button__link" style="border-radius:0px;padding-top:0rem;padding-bottom:0rem">Contact</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}}}} -->
	<div class="wp-block-group" style="padding-top:0.5rem;padding-bottom:0.5rem"><!-- wp:navigation {"className":"nav\u002d\u002dopen\u002d\u002dlg-up","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"},"fontSize":"small"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:separator {"color":"border-light","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background has-border-light-background-color has-border-light-color is-style-wide"/>
	<!-- /wp:separator -->',
);
