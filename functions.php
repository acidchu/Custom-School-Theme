<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

 /**
 * After Setup Theme Hooks, Styles and Scripts
 */
require get_stylesheet_directory() . '/includes/custom-functions.php';

 /**
 * Customizer settings
 */
require get_stylesheet_directory() . '/includes/customizer.php';

/**
 *  Extra Functions
 */
require get_stylesheet_directory() . '/includes/extra-functions.php';

/**
 *  Social icon overrides (compass icon instead of digg)
 */
require get_stylesheet_directory() . '/includes/social-icons.php';

/**
 * On first activation, copy the Customizer settings (logo, colours, homepage
 * sections, menus, Additional CSS) from Bevan Theme (this theme's old name) or
 * the original School Center theme, since
 * WordPress stores them per theme folder.
 */
function custom_school_theme_import_theme_mods() {
    if ( get_option( 'custom_school_theme_mods_imported' ) ) {
        return;
    }
    foreach ( array( 'bevan-theme', 'school-center', 'education-center' ) as $old_theme ) {
        $old_mods = get_option( 'theme_mods_' . $old_theme );
        if ( is_array( $old_mods ) && $old_mods ) {
            $new_mods = get_option( 'theme_mods_' . get_stylesheet(), array() );
            // Keep anything WordPress already set during the switch (widgets, menu locations).
            update_option( 'theme_mods_' . get_stylesheet(), array_merge( $old_mods, is_array( $new_mods ) ? $new_mods : array() ) );
            break;
        }
    }
    update_option( 'custom_school_theme_mods_imported', 1 );
}
add_action( 'after_switch_theme', 'custom_school_theme_import_theme_mods' );
