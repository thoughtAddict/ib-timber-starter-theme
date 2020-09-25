<?php
/**
 * Template Name: Demo - Simple Post
 * Template Post Type: post
 * Description: Template for a Simple Demo Post.
 */

include_once(get_template_directory().'/common.php');

Timber::render( "demoSimple-" . $frontend, $context );