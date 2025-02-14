<?php
/**
 * Post template image left
 *
 * @package vektor-inc/x-t9
 */

return array(
	'title'    => __( 'X-T9 Post image at left', 'x-t9' ),
	'inserter' => false,
	'content'  => '<!-- wp:post-template -->
	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"1.75em"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top" style="padding-top:1.75em"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0rem"}}}} /-->

	<!-- wp:group {"textColor":"text-bright","layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group has-text-bright-color has-text-color"><!-- wp:post-date /--></div>
	<!-- /wp:group -->
	
	<!-- wp:spacer {"height":15} -->
	<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:post-excerpt {"moreText":"' . esc_html__( 'Read more', 'x-t9' ) . '"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"color":"border-light","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background has-border-light-background-color has-border-light-color is-style-wide"/>
	<!-- /wp:separator -->
	<!-- /wp:post-template -->',
);
