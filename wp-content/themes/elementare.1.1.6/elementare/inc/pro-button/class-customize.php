<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
use WPTRT\Customize\Section\Button;
final class Elementare_Updgrade_Pro_Button {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {
		
		get_template_part( '/inc/pro-button/Button');

		$manager->register_section_type( Button::class );

		$manager->add_section(
			new Button( $manager, 'cresta_elementare_buy_pro', [
				'title'       => __( 'Elementare PRO Theme', 'elementare' ),
				'button_text' => __( 'More Info',        'elementare' ),
				'button_url'  => 'https://crestaproject.com/downloads/elementare/',
				'priority' => 1,
			] )
		);
		
		$manager->add_section(
			new Button( $manager, 'cresta_elementare_documentation', [
				'title'       => __( 'Need help?', 'elementare' ),
				'button_text' => __( 'Theme Documentation',        'elementare' ),
				'button_url'  => admin_url( add_query_arg( array( 'page' => 'elementare-welcome', 'tab' => 'documentation' ), 'themes.php' ) ),
				'priority' => 999,
			] )
		);
		
		$manager->add_section(
			new Button( $manager, 'cresta_elementare_locked_pro', [
				'title'       => __( 'Change sections position', 'elementare' ),
				'button_text' => __( 'PRO Version',        'elementare' ),
				'button_url'  => 'https://crestaproject.com/downloads/elementare/',
				'panel'  => 'cresta_elementare_onepage',
				'priority' => 1,
			] )
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'elementare-customize-controls-pro-button', trailingslashit( get_template_directory_uri() ) . 'inc/pro-button/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'elementare-customize-controls-pro-button', trailingslashit( get_template_directory_uri() ) . 'inc/pro-button/customize-controls.css' );
	}
}

// Doing this customizer thang!
Elementare_Updgrade_Pro_Button::get_instance();
