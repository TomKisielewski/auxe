<?php
/**
 * auxe Theme Customizer
 *
 * @package auxe
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function auxe_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'auxe_customize_register' );

function auxe_theme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'auxe_theme_slider_options', array(
        'title'          => __( 'Slider Settings', 'auxe' )
    ) );

    $wp_customize->add_setting( 'auxe_theme_slider_count_setting', array(
        'default'        => '1',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'auxe_theme_slider_count', array(
        'label'      => __( 'Number of slides displaying at once', 'auxe' ),
        'section'    => 'auxe_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'auxe_theme_slider_count_setting'
    ) );

    $wp_customize->add_setting( 'auxe_theme_slider_time_setting', array(
        'default'        => '5000',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'auxe_theme_slider_time', array(
        'label'      => __( 'Slider Time (in ms)', 'auxe' ),
        'section'    => 'auxe_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'auxe_theme_slider_time_setting'
    ) );

    $wp_customize->add_setting( 'auxe_theme_slider_loop_setting', array(
        'default'        => 'true',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'auxe_theme_loop', array(
        'label'      => __( 'Loop Slider Content', 'auxe' ),
        'section'    => 'auxe_theme_slider_options',
        'type'     => 'radio',
        'choices'  => array(
            'true'  => 'yes',
            'false' => 'no',
        ),
        'settings'   => 'auxe_theme_slider_loop_setting'
    ) );

}
add_action( 'customize_register', 'auxe_theme_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function auxe_customize_preview_js() {
	wp_enqueue_script( 'auxe_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'auxe_customize_preview_js' );
