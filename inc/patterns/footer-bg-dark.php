<?php
/**
 * Nav Float with header top contact
 *
 * @package vektor-inc/x-t9
 */

return array(
	'title'      => __( 'Nav Float with header top contact', 'x-t9' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"backgroundColor":"bg-black","textColor":"text-normal-darkm"} -->
	<div class="wp-block-group has-text-normal-darkm-color has-bg-black-background-color has-text-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"0rem","left":"1rem"}}}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:0rem;padding-left:1rem"><!-- wp:image {"align":"center","width":180,"sizeSlug":"full","linkDestination":"media"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/inc/patterns/images/x-t9-logo-yoko-white-trans.png" alt="" width="180"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:social-links {"iconColor":"text-dark-bg","iconColorValue":"rgba( 255,255,255,0.6 )","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"1rem"}}}} -->
	<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only" style="margin-bottom:1rem"><!-- wp:social-link {"url":"https://wordpress.org/","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org/","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org/","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org/","service":"youtube"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"mt-0","layout":{"inherit":true}} -->
	<div class="wp-block-group mt-0"><!-- wp:separator {"color":"border-normal-darkm","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background has-border-normal-darkm-background-color has-border-normal-darkm-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-top:1rem"><!-- wp:navigation {"textColor":"text-dark-darkbg","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"fontSize":"small"} /-->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"textColor":"text-dark-darkbg","fontSize":"small"} -->
	<p class="has-text-align-center has-text-dark-darkbg-color has-text-color has-small-font-size" style="text-transform:uppercase">Copyright (C) X-T9 All Rights Reserved.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
