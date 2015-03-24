<?php

use Baobab\Helper\Paths;

return array(

    /* --------------------------------------------------------------- */
    // Path to classes to load using composer's PSR-0 auto-loading
    /* --------------------------------------------------------------- */

    'always'   => array(
        // Indicate here the namespaces and the corresponding folder where
        // classes respecting the PSR4 autoloading norm can be found
        'psr4' => array(
            'Balsa\\Helpers\\' => Paths::theme('app/helpers'),
            'Balsa\\Models\\' => Paths::theme('app/models')
        )
    ),

    'admin'    => array(
        'psr4' => array(
            'Balsa\\Admin\\' => Paths::theme('app/admin')
        ),
        // You can automatically instantiate classes during the 'after_setup_theme' hook. Just write their fully
        // qualified name in this array as the value. The key is a nickname you want to give it
        'instantiate' => array(
            'ThemeActivation' => '\\Balsa\\Admin\\ThemeActivation'
        )
    ),

    'frontend' => array(
        'psr4' => array(
            'Balsa\\Controllers\\' => Paths::theme('app/controllers')
        )
    )
);