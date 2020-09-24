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
