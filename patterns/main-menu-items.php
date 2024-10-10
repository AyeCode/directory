<?php
/**
 * Title: Main Menu Items
 * Slug: directory/main-menu-items
 * Categories: call-to-action
 */


// Location switcher if location manager installed
if ( defined( 'GEODIRLOCATION_VERSION' ) ) {
	?>
	<!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"gd_location_switcher","page_id":"70","custom_url":"#about","text":"Set Location","icon_class":"fas fa-map-marker-alt fa-lg text-primary","link_divider":"right","ml":"0","ml_md":"0","mr_lg":"2","pr_lg":"2","content":"<a href=\"##location-switcher\" class=\"nav-link \" ><i class=\"fas fa-map-marker-alt fa-lg text-primary me-2\"></i>Set Location<span class=\"navbar-divider d-none d-lg-block position-absolute top-50 end-0 translate-middle-y\"></span></a>","sd_shortcode":"[bs_nav_item type='gd_location_switcher'  page_id='70'  post_id=''  custom_url='#about'  text='Set Location'  icon_class='fas fa-map-marker-alt fa-lg text-primary'  icon_aria_label=''  link_type=''  link_size=''  link_bg=''  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider='right'  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml='0'  mt_md=''  mr_md=''  mb_md=''  ml_md='0'  mt_lg=''  mr_lg='2'  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg='2'  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->
	<?php
}

// CPTs
if ( defined( 'GEODIRECTORY_VERSION' ) ) {
	$post_types = geodir_get_posttypes( 'array' );

	foreach ( $post_types as $pt => $cpt ) {

		if ( $cpt['public'] ) {
			$name = ! empty( $cpt['labels']['name'] ) ? esc_attr( $cpt['labels']['name'] ) : esc_attr( $pt );
			?>
            <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"<?php echo esc_attr( $pt ); ?>","custom_url":"","text":"<?php echo esc_attr( $name ); ?>","content":"\u003ca href=\u0022#placeholder\u0022 class=\u0022nav-link \u0022 \u003e<?php echo esc_attr( $name ); ?>\u003c/a\u003e","sd_shortcode":"[bs_nav_item type='<?php echo esc_attr( $pt ); ?>'  page_id=''  post_id=''  custom_url=''  text='<?php echo esc_attr( $name ); ?>'  icon_class=''  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type=''  link_size=''  link_bg=''  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->
			<?php
		}
	}
}

// Blog page

if ( 'page' === get_option( 'show_on_front' ) ) {
	$blog_page_id = get_option( 'page_for_posts' );
	if ( $blog_page_id ) {
		?>
        <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"page","page_id":"<?php echo absint( $blog_page_id ); ?>","text":"Blog","content":"\u003ca href=\u0022#placeholder\u0022 class=\u0022nav-link \u0022 \u003eBlog\u003c/a\u003e","sd_shortcode":"[bs_nav_item type='page'  page_id='<?php echo absint( $blog_page_id ); ?>'  post_id=''  custom_url=''  text='Blog'  icon_class=''  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type=''  link_size=''  link_bg=''  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg=''  pr_lg=''  pb_lg=''  pl_lg=''  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->
		<?php
	}
}

// spacer
?>
<!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"spacer","text":" ","icon_class":" ","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","ml_lg":"auto","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"<li class=\"nav-item mt-0 mb-0 ms-auto pt-0 pe-0 pb-0 ps-0\"></li>","sd_shortcode":"[bs_nav_item type='spacer'  page_id=''  post_id=''  custom_url=''  text=' '  icon_class=' '  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg='auto'  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->
<?php

if ( defined( 'USERSWP_VERSION' ) ) {
	// Sign in/out with UWP
	?>
    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"uwp_login","text":"Sign in","icon_class":"far fa-user","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#placeholder\u0022 class=\u0022nav-link \u0022 \u003e\u003ci class=\u0022far fa-user me-2\u0022\u003e\u003c/i\u003eSign in\u003c/a\u003e","sd_shortcode":"[bs_nav_item type='uwp_login'  page_id=''  post_id=''  custom_url=''  text='Sign in'  icon_class='far fa-user'  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->

    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"uwp_logout","text":"Sign out","icon_class":"fas fa-sign-out-alt","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#placeholder\u0022 class=\u0022nav-link \u0022 \u003e\u003ci class=\u0022fas fa-sign-out-alt me-2\u0022\u003e\u003c/i\u003eSign out\u003c/a\u003e","sd_shortcode":"[bs_nav_item type='uwp_logout'  page_id=''  post_id=''  custom_url=''  text='Sign out'  icon_class='fas fa-sign-out-alt'  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->
	<?php
} else {
	// Signin/out without UWP
	?>
    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"wp-login","text":"Sign in","icon_class":"far fa-user","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#placeholder\u0022 class=\u0022nav-link \u0022 \u003e\u003ci class=\u0022far fa-user me-2\u0022\u003e\u003c/i\u003eSign in\u003c/a\u003e","sd_shortcode":"[bs_nav_item type='wp-login'  page_id=''  post_id=''  custom_url=''  text='Sign in'  icon_class='far fa-user'  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->

    <!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"wp-logout","text":"Sign out","icon_class":"fas fa-sign-out-alt","link_bg":"outline-light","mt_lg":"0","mb_lg":"0","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#placeholder\u0022 class=\u0022nav-link \u0022 \u003e\u003ci class=\u0022fas fa-sign-out-alt me-2\u0022\u003e\u003c/i\u003eSign out\u003c/a\u003e","sd_shortcode":"[bs_nav_item type='wp-logout'  page_id=''  post_id=''  custom_url=''  text='Sign out'  icon_class='fas fa-sign-out-alt'  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type=''  link_size=''  link_bg='outline-light'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg=''  font_weight=''  mt=''  mr=''  mb=''  ml=''  mt_md=''  mr_md=''  mb_md=''  ml_md=''  mt_lg='0'  mr_lg=''  mb_lg='0'  ml_lg=''  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->
	<?php
}
?>

<!-- wp:blockstrap/blockstrap-widget-nav-item {"type":"add_gd_place","text":"Add listing","icon_class":"fas fa-plus","link_type":"btn-round","link_size":"small","link_bg":"primary","text_align_lg":"text-lg-end","ml":"0","ml_md":"0","ml_lg":"3","pt_lg":"0","pr_lg":"0","pb_lg":"0","pl_lg":"0","content":"\u003ca href=\u0022#placeholder\u0022 class=\u0022btn btn-round btn-primary btn-sm \u0022 \u003e\u003ci class=\u0022fas fa-plus me-2\u0022\u003e\u003c/i\u003eAdd listing\u003c/a\u003e","sd_shortcode":"[bs_nav_item type='add_gd_place'  page_id=''  post_id=''  custom_url=''  text='Add listing'  icon_class='fas fa-plus'  icon_aria_label=''  link_new_window='false'  link_nofollow='false'  link_attributes=''  link_type='btn-round'  link_size='small'  link_bg='primary'  link_pt=''  link_pr=''  link_pb=''  link_pl=''  link_pt_md=''  link_pr_md=''  link_pb_md=''  link_pl_md=''  link_pt_lg=''  link_pr_lg=''  link_pb_lg=''  link_pl_lg=''  link_divider=''  text_color=''  text_justify='false'  text_align=''  text_align_md=''  text_align_lg='text-lg-end'  font_weight=''  mt=''  mr=''  mb=''  ml='0'  mt_md=''  mr_md=''  mb_md=''  ml_md='0'  mt_lg=''  mr_lg=''  mb_lg=''  ml_lg='3'  pt=''  pr=''  pb=''  pl=''  pt_md=''  pr_md=''  pb_md=''  pl_md=''  pt_lg='0'  pr_lg='0'  pb_lg='0'  pl_lg='0'  border=''  rounded=''  rounded_size=''  shadow=''  visibility_conditions=''  css_class='' ]"} /-->