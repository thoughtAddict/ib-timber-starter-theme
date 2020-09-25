<?php

// --------------------------------------------------------------
// Retrieve the Post ID
// --------------------------------------------------------------
$post_id = get_the_ID();

// --------------------------------------------------------------
// Timber Context and Post capture
// --------------------------------------------------------------
$context = Timber::get_context();
if ( !$post_id ) {
  $post = new TimberPost();
} else {
  $post = Timber::query_post();
}
$context['post'] = $post;

// --------------------------------------------------------------
// Variables that might be used in all Twig templates
// --------------------------------------------------------------
$context["siteUrl"] = site_url();

// --------------------------------------------------------------
// What front-end UI library are we going to use?
//
// Note that this is useful for this demo theme, as I wanted
// to show the Timber/Twig and ACF use in multiple UI frameworks.
//
// Frameworks:
//  UIKit (default)
//  Bootstrap 3.x
//  Bootstrap 4.x (Future)
// --------------------------------------------------------------
$frontend = isset($_GET['frontend']) ? $_GET['frontend'] : "uikit";
$context["frontend"] = in_array(strtolower($frontend), array("b3x", "b4x")) ? strtolower($frontend) : "uikit";