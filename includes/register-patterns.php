<?php

/**
 * Registers block patterns for the theme.
 *
 * This function checks if the `register_block_pattern` function exists, and if it does,
 * registers specific block patterns for the theme, including a transparent header and a menu wrapper.
 *
 * @return void
 */
function directory_theme_register_patterns() {
    if ( function_exists( 'register_block_pattern' ) ) {

        register_block_pattern(
            'directory/header-transparent',
            array(
                'title'      => esc_html__( 'Header Transparent', 'directory' ),
                'categories' => array( 'site-header' ),
                'content'    => defined( 'BLOCKSTRAP_BLOCKS_VERSION' ) ? apply_filters(
                    'directory_pattern_header_transparent',
                    '<!-- wp:site-title /-->'
                ) : '<!-- wp:site-title /-->',
            )
        );


        // menu wrapper
        register_block_pattern(
            'directory/menu-wrapper',
            array(
                'title'      => esc_html__( 'Menu Wrapper', 'directory' ),
                'categories' => array( 'site-header' ),
                'content'    => defined( 'BLOCKSTRAP_BLOCKS_VERSION' ) ? apply_filters(
                    'directory_pattern_menu_wrapper',
                    '<!-- wp:site-title /-->'
                ) : '<!-- wp:site-title /-->',
            )
        );
    }

}

add_action( 'after_setup_theme', 'directory_theme_register_patterns' );