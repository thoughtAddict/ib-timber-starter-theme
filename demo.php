<?php
/**
 * Template Name: Demo
 * Template Post Type: post
 * Description: Template for a Demo Post.
 */

include_once(get_template_directory().'/common.php');

Timber::render( "demo", $context );