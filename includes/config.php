<?php
/**
 * Handle all theme configuration here
 **/
namespace StrategicPlan\Theme\Includes\Config;


define( 'STRATEGICPLAN_THEME_URL', get_stylesheet_directory_uri() );
define( 'STRATEGICPLAN_THEME_STATIC_URL', STRATEGICPLAN_THEME_URL . '/static' );
define( 'STRATEGICPLAN_THEME_CSS_URL', STRATEGICPLAN_THEME_STATIC_URL . '/css' );
define( 'STRATEGICPLAN_THEME_JS_URL', STRATEGICPLAN_THEME_STATIC_URL . '/js' );
define( 'STRATEGICPLAN_THEME_IMG_URL', STRATEGICPLAN_THEME_STATIC_URL . '/img' );
define( 'STRATEGICPLAN_THEME_CUSTOMIZER_PREFIX', 'ucfstrategicplan_' );


/**
 * Defines sections used in the WordPress Customizer.
 *
 * @since 1.0.0
 * @author Cadie Stockman
 */
function define_customizer_sections( $wp_customize ) {
	$wp_customize->add_section(
		STRATEGICPLAN_THEME_CUSTOMIZER_PREFIX . 'headers',
		array(
			'title' => 'Headers'
		)
	);
}

add_action( 'customize_register', __NAMESPACE__ . '\define_customizer_sections' );


/**
 * Defines settings and controls used in the WordPress Customizer.
 *
 * @since 1.0.0
 * @author Cadie Stockman
 */
function define_customizer_fields( $wp_customize ) {
	// Headers
	$wp_customize->add_setting(
		'header_breadcrumb_text',
		array(
			'default' => ''
		)
	);

	$wp_customize->add_control(
		'header_breadcrumb_text',
		array(
			'type'        => 'text',
			'label'       => 'Header breadcrumb text',
			'description' => 'Text to display above the page title on all subpages (excluding those using custom header markup). This text links back to the site homepage.',
			'section'     => STRATEGICPLAN_THEME_CUSTOMIZER_PREFIX . 'headers'
		)
	);
}

add_action( 'customize_register', __NAMESPACE__ . '\define_customizer_fields' );
