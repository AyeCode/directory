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



function directory_pattern_menu_wrapper( $content ) {
    ob_start();

    $home_url = get_home_url(); /* <?php echo esc_url( $home_url ); ?> */
    ?>
    <!-- wp:blockstrap/blockstrap-widget-navbar-brand {"text":"\u003cspan class=\u0022text-primary\u0022\u003eD\u003c/span\u003eirectory","img_max_width":150,"custom_url":"/","brand_font_size":"h4","brand_font_weight":"font-weight-bold","bg_gradient":"linear-gradient(135deg,rgb(34,227,7) 0%,rgb(245,245,245) 100%)","bg_on_text":true,"mb_lg":"1","pt_lg":"0","pr_lg":"0","pb_lg":"0","rounded_size":"lg","sd_shortcode":"[bs_navbar_brand text='\u003cspan class=\u0022text-primary\u0022\u003eD\u003c/span\u003eirectory'  icon_image=''  img_max_width='150'  type='home'  custom_url='/'  text_color=''  brand_font_size='h4'  brand_font_weight='font-weight-bold'  brand_font_italic=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  bg=''  bg_color='#0073aa'  bg_gradient='linear-gradient(135deg,rgb(34,227,7) 0%,rgb(245,245,245) 100%)'  bg_on_text='true'  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg='1'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg=''  border=''  rounded=''  rounded_size='lg'  shadow=''  css_class='' ]"} -->
    <a class="navbar-brand d-flex align-items-center mb-1 pt-0 pe-0 pb-0 rounded-lg" href="<?php echo esc_url( $home_url ); ?>"><span class="mb-0 props.attributes.brand_font_size props.attributes.brand_font_weight props.attributes.brand_font_italic"><span class="text-primary">D</span>irectory</span></a>
    <!-- /wp:blockstrap/blockstrap-widget-navbar-brand -->
    <?php
    echo directory_theme_get_default_menu(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    ?>
    <?php

    return ob_get_clean();
}
add_filter( 'directory_pattern_menu_wrapper', 'directory_pattern_menu_wrapper', 15 );