<?php
/*
 * Filters for block patterns.
 */

/**
 * @param $content
 *
 * @return false|string
 */
function directory_theme_pattern_header_default( $content ) {
	ob_start();

	$home_url = get_home_url(); /* <?php echo esc_url( $home_url ); ?> */
	?>
    <!-- wp:blockstrap/blockstrap-widget-skip-links {"content":"\u003ca href=\u0022#main\u0022 class=\u0022btn btn-primary\u0022\u003eSkip to main content\u003c/a\u003e","sd_shortcode":"[bs_skip_links text1='Skip to main content'  hash1='main'  text2=''  hash2=''  text3=''  hash3=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  css_class='' ]"} /-->

    <!-- wp:blockstrap/blockstrap-widget-navbar {"bg":"custom-color","bg_color":"rgba(255,255,255,0.93)","bgtus":true,"container":"navbar-light","inner_container":"container","mb_lg":"","shadow":"shadow","position":"fixed-top","sd_shortcode":"[bs_navbar bg='custom-color'  bg_color='rgba(255,255,255,0.93)'  bg_gradient='linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)'  bg_image_fixed='false'  bg_image_use_featured='false'  bg_image=''  bg_image_id=''  bgtus='true'  cscos='false'  container='navbar-light'  inner_container='container'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow='shadow'  position='fixed-top'  sticky_offset_top=''  sticky_offset_bottom='' ]","sd_shortcode_close":"[/bs_navbar]"} -->
    <nav class="navbar navbar-expand-lg bg-custom-color bg-image-fixed bg-transparent-until-scroll navbar-light fixed-top shadow" style="background-color:rgba(255,255,255,0.93)"><div class="wp-block-blockstrap-blockstrap-widget-navbar container">
            <!-- wp:template-part {"slug":"menu-wrapper","theme":"directory","className":"directory-menu-wrapper d-contents"} /-->
			</div></nav>
	<!-- /wp:blockstrap/blockstrap-widget-navbar -->
	<?php

	return ob_get_clean();
}
add_filter( 'blockstrap_pattern_header_default', 'directory_theme_pattern_header_default', 15 );

/**
 * @param $content
 *
 * @return array|false|string|string[]
 */
function directory_theme_pattern_header_transparent( $content ) {

	// Use the default menu and just change the settings
	return str_replace(
		array(
			'"container":"navbar-light"',
			"cscos='false'",
			"container='navbar-light'",
			' navbar-light ',
		),
		array(
			'"cscos":true,"container":"navbar-dark"', // "cscos":true, is not a mistake
			"cscos='true'",
			"container='navbar-dark'",
			' color-scheme-flip-on-scroll navbar-dark ',
		),
		directory_theme_pattern_header_default( $content )
	);
}
add_filter( 'directory_pattern_header_transparent', 'directory_theme_pattern_header_transparent', 15 );
