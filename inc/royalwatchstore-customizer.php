<?php
/**
 * Royal Watch Store Theme Customizer.
 *
 * @package Royal Watch Store
 */

 if ( ! class_exists( 'royalwatchstore_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class royalwatchstore_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_preview_init',                  array( $this, 'royalwatchstore_customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', 	   array( $this, 'royalwatchstore_customizer_script' ) );
			add_action( 'customize_register',                      array( $this, 'royalwatchstore_customizer_register' ) );
			add_action( 'after_setup_theme',                       array( $this, 'royalwatchstore_customizer_settings' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function royalwatchstore_customizer_register( $wp_customize ) {
			
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';			
			
			/**
			 * Helper files
			 */
			require ROYAL_WATCH_STORE_PARENT_INC_DIR . '/customizer/sanitization.php';
		}


	
		
		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function royalwatchstore_customize_preview_js() {
			wp_enqueue_script( 'royalwatchstore-customizer', ROYAL_WATCH_STORE_PARENT_INC_URI . '/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}
		
		
		function royalwatchstore_customizer_script() {
			 wp_enqueue_script( 'royalwatchstore-customizer-section', ROYAL_WATCH_STORE_PARENT_INC_URI .'/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );	
		}

		// Include customizer customizer settings.
			
		function royalwatchstore_customizer_settings() {	
			   require ROYAL_WATCH_STORE_PARENT_INC_DIR . '/customizer/customizer-options/royalwatchstore-header.php';
			   require ROYAL_WATCH_STORE_PARENT_INC_DIR . '/customizer/customizer-options/royalwatchstore-frontpage.php';
			   require ROYAL_WATCH_STORE_PARENT_INC_DIR . '/customizer/customizer-options/royalwatchstore-footer.php';
			   require ROYAL_WATCH_STORE_PARENT_INC_DIR . '/customizer/customizer-pro/class-customize.php';
		}

	}
}// End if().

/**
 *  Kicking this off by calling 'get_instance()' method
 */
royalwatchstore_Customizer::get_instance();