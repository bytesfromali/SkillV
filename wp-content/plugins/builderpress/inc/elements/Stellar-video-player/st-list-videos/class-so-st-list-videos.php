<?php
/**
 * BuilderPress Siteorigin St-list-videos widget
 *
 * @version     1.0.0
 * @author      ThimPress
 * @package     BuilderPress/Classes
 * @category    Classes
 * @author      Thimpress, vinhnq
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'BuilderPress_SO_St_list_videos' ) ) {
	/**
	 * Class BuilderPress_SO_St_list_videos
	 */
	class BuilderPress_SO_St_list_videos extends BuilderPress_SO_Widget {

		/**
		 * BuilderPress_SO_St-list-videos constructor.
		 */
		public function __construct() {
			// set config class
			$this->config_class = 'BuilderPress_Config_St_list_videos';

			parent::__construct();
		}
	}
}

add_action( 'widgets_init', 'builder_press_so_register_widget_st_list_videos' );

if ( ! function_exists( 'builder_press_so_register_widget_st_list_videos' ) ) {
	/**
	 * Register widget
	 */
	function builder_press_so_register_widget_st_list_videos() {
		register_widget( 'BuilderPress_SO_St_list_videos' );
	}
}
