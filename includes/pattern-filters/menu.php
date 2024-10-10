<?php
/*
 * Filters for block patterns.
 */


/**
 * Get the default menu.
 *
 * @return false|string
 */
function directory_theme_get_default_menu() {
	ob_start();
	?>
    <!-- wp:blockstrap/blockstrap-widget-nav {"anchor":"main-nav","font_size":"fs-sm","ml_lg":"","rounded_size":"lg","width":"w-100","sd_shortcode":"[bs_nav anchor='main-nav'  inside_navbar='1'  container=''  flex_direction=''  nav_style=''  flex_justify_content=''  flex_justify_content_md=''  flex_justify_content_lg=''  nav_fill=''  font_size='fs-sm'  font_size_custom=''  bg=''  mt=''  mr='auto'  mb=''  ml='auto'  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg='0'  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size='lg'  shadow=''  width='w-100'  css_class='' ]","sd_shortcode_close":"[/bs_nav]"} -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav_main-nav" aria-label="Open menu"><span class="navbar-toggler-icon"></span></button><div class="wp-block-blockstrap-blockstrap-widget-nav blockstrap-nav collapse navbar-collapse" id="navbarNav_main-nav"><ul class="wp-block-blockstrap-blockstrap-widget-nav navbar-nav me-auto ms-auto me-lg-0 rounded-lg w-100 fs-sm">

            <!-- wp:pattern {"slug":"directory/main-menu-items"} /-->

	</ul></div>
	<!-- /wp:blockstrap/blockstrap-widget-nav -->
	<?php

	return ob_get_clean();
}
add_filter( 'directory_pattern_menu_default', 'directory_theme_pattern_menu_default', 15 );
