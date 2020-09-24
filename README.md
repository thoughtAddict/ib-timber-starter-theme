
# InfiniteBooya Timber/Twig Starter Theme

This theme will be used (and hopefully useful) during the Timber/Twig tutorials over at [InfiniteBooya.com](https://infinitebooya.com)

It is heavily based off the [Timber "Starter Theme"](https://github.com/timber/starter-theme)

## Installing the Theme

Install this theme as you would any other, and be sure the Timber plugin is activated:

1. Make sure you have installed the plugin for the [Timber Library](https://wordpress.org/plugins/timber-library/) (and Advanced Custom Fields - they [play quite nicely](https://timber.github.io/docs/guides/acf-cookbook/#nav) together). 
2. Download the zip for this theme (or clone it) and move it to `wp-content/themes` in your WordPress installation. 
3. Rename the folder to something that makes sense for your website (generally no spaces and all lowercase). You could keep the name `ib-timber-starter-theme` but the point of a starter theme is to make it your own.
4. Activate the theme in Appearance >  Themes.
5. Modify away... And maybe read [the docs](https://timber.github.io/docs/).

## What's here?

`static/` is where you can keep your static front-end scripts, styles, or images. In other words, your Sass files, JS files, fonts, and SVGs would live here.

`templates/` contains all of your Twig templates. These pretty much correspond 1 to 1 with the PHP files that respond to the WordPress template hierarchy. At the end of each PHP template, you'll notice a `Timber::render()` function whose first parameter is the Twig file where that data (or `$context`) will be used. Just an FYI.

## Other Resources

* [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/) will help with the file naming convention for your PHP and Twig files.
* [Twig for Timber Cheatsheet](http://notlaura.com/the-twig-for-timber-cheatsheet/)
* [The Twig Home Site](https://twig.symfony.com/)
