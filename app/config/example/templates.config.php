<?php

return array(

    /* --------------------------------------------------------------- */
    // General settings
    /* --------------------------------------------------------------- */

    /**
     * You can pick the engin you want. Valid values are:
     * - 'none' for plain PHP templates
     * - 'blade' for Blade templates
     */
    'engine' => 'blade',

    /* --------------------------------------------------------------- */
    // Blade templating engine
    /* --------------------------------------------------------------- */

    /**
     * You can disable blade simply by removing this configuration entry.
     */
    'blade' => array(

        /**
         * All the paths required by the blade engine
         */
        'paths' => array(
            /**
             * Where your views are located
             */
            'views' => \Baobab\Helper\Paths::theme('app/views'),

            /**
             * Where Blade will store its compiled views. This location must be writable by your web server user.
             */
            'cache' => \Baobab\Helper\Paths::storage('cache/blade')
        )
    )
);