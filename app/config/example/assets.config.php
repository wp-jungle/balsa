<?php

use Baobab\Helper\Urls;

return array(

    /* --------------------------------------------------------------- */
    // TinyMCE styles
    /* --------------------------------------------------------------- */

    'editor'  => array(
        Urls::assets('css/editor-style.css')
    ),

    /* --------------------------------------------------------------- */
    // CSS
    //
    // You can place a manifest.json file at the root of the assets
    // directory and Baobab will automatically try to find a hash or
    // version number for each asset handle. This will solve caching
    // problems when the assets are recompiled.
    /* --------------------------------------------------------------- */

    'styles'  => array(
        // Short declaration, value is assumed to be the source URL. All other parameters have default values.
        'my-theme'  => Urls::assets('css/main.min.css'),

        // Long declaration
        'other-css' => array(
            'src'        => Urls::assets('css/other.min.css'),
            'deps'       => array(),
            'ver'        => false,
            'media'      => 'all',
            'unregister' => false,
            'when'  => function ()
            {
                // Only enqueue this on archive pages
                return is_archive();
            }
        )
    ),

    /* --------------------------------------------------------------- */
    // JS
    //
    // You can place a manifest.json file at the root of the assets
    // directory and Baobab will automatically try to find a hash or
    // version number for each asset handle. This will solve caching
    // problems when the assets are recompiled.
    /* --------------------------------------------------------------- */

    'scripts' => array(
        // Short declaration, value is assumed to be the source URL. All other parameters have default values.
        'my-theme'      => Urls::assets('js/scripts.min.js'),

        // Long declaration
        'other-js'      => array(
            'src'        => Urls::assets('js/other.min.js'),
            'deps'       => array(),
            'ver'        => false,
            'in_footer'  => false,
            'unregister' => false,
            'when'  => null
        ),

        // If src is omitted, we assume that script is registered somewhere else
        'comment-reply' => array(
            'when' => function ()
            {
                // Only include this script where comments are required
                return is_single() && comments_open() && get_option('thread_comments');
            }
        )
    )

);