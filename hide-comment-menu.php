<?php

/**
 * Plugin Name: Hide Comment Menu
 * Plugin URI: http://www.daveredfern.com
 * Description: Hides the comments menu. Useful if you disable comments site wide.
 * Version: 1.0.0
 * Author: Dave Redfern
 * Author URI: http://www.daveredfern.com
 * License: GPL2
 */

add_action('admin_menu', 'my_remove_menu_pages');

function my_remove_menu_pages() {
	remove_menu_page('edit-comments.php');	
}