<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/rob/royalslider-wysiwyg
 * @since      1.0.0
 *
 * @package    Royalslider_Wysiwyg
 * @subpackage Royalslider_Wysiwyg/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Royalslider_Wysiwyg
 * @subpackage Royalslider_Wysiwyg/admin
 * @author     Rob Gabaree <rob@rawb.net>
 */
class Royalslider_Wysiwyg_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		// jQuery Text Editor
		wp_enqueue_style( 'royalslider-wysiwyg-jqte', plugin_dir_url(__FILE__) . 'vendor/jte/1.4.0/jquery-te-1.4.0.css', array(), '1.4.0', 'all' );

		// Administration
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/royalslider-wysiwyg-admin.css', array( 'royalslider-wysiwyg-jqte' ), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		// jQuery Text Editor
        wp_enqueue_script( 'royalslider-wysiwyg-jte', plugin_dir_url(__FILE__) . 'vendor/jte/1.4.0/jquery-te-1.4.0.min.js', array( 'jquery' ), '1.4.0', true );

		// Administration
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/royalslider-wysiwyg-admin.js', array( 'royalslider-wysiwyg-jte' ), $this->version, true );

	}

}
