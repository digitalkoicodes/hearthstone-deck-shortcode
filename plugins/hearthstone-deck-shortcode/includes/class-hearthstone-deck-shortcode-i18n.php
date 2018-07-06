<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       digitalkoi.codes
 * @since      1.0.0
 *
 * @package    Hearthstone_Deck_Shortcode
 * @subpackage Hearthstone_Deck_Shortcode/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hearthstone_Deck_Shortcode
 * @subpackage Hearthstone_Deck_Shortcode/includes
 * @author     Jesse Smith <jisuse@gmail.com>
 */
class Hearthstone_Deck_Shortcode_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hearthstone-deck-shortcode',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
