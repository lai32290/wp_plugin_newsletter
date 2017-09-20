<?php
/*
Plugin Name: WP Test Newslatter
Author: LXuancheng
Text Domain: wp-test-newslatter
License: GPL2
Version: 0.0.1
Description: This is a plugin simple
 */

if(!defined('ABSPATH')) exit;

require_once(plugin_dir_path(__FILE__) . '/includes/newsletter-scripts.php');

require_once(plugin_dir_path(__FILE__) . '/includes/newsletter-curso-class.php');

function register_newsletter_curso() {
    register_widget("Newsletter_Curso_Widget");
}

add_action('widgets_init', 'register_newsletter_curso');
