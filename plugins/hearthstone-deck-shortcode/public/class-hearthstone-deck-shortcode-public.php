<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       digitalkoi.codes
 * @since      1.0.0
 *
 * @package    Hearthstone_Deck_Shortcode
 * @subpackage Hearthstone_Deck_Shortcode/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Hearthstone_Deck_Shortcode
 * @subpackage Hearthstone_Deck_Shortcode/public
 * @author     Jesse Smith <jisuse@gmail.com>
 */
class Hearthstone_Deck_Shortcode_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hearthstone_Deck_Shortcode_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hearthstone_Deck_Shortcode_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/hearthstone-deck-shortcode-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hearthstone_Deck_Shortcode_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hearthstone_Deck_Shortcode_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/hearthstone-deck-shortcode-public.js', array( 'jquery' ), $this->version, false );

	}

	public function add_shortcode(){
		add_shortcode('deck', array($this, 'deck'));
	}

	public function deck($atts, $content = null){
		
	}

}
