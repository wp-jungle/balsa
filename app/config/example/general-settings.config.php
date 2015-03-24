<?php

return array(

    /*
    * Edit this file in order to configure your general theme
    * settings or preferences.
    */

    /* --------------------------------------------------------------- */
    // Theme textdomain
    /* --------------------------------------------------------------- */

    'text_domain'  => 'my_domain',

    /* --------------------------------------------------------------- */
    // Ajax namespace (if not specified, defaults to the sanitized
    // text_domain
    /* --------------------------------------------------------------- */

    'ajax_namespace' => 'myNamespace',

    /* --------------------------------------------------------------- */
    // Admin bar management
    /* --------------------------------------------------------------- */

    // You can hide the admin bar for some roles. If this array is empty
    // or if you don't include this setting, everyone will be able to
    // see the admin bar.
    'admin_bar'    => array(
        // Shall we show or hide the admin bar?
        'mode'  => 'show', // show|hide

        // The roles affected by the mode above. e.g. here, administrators
        // and authors will be able to see the admin bar
        'roles' => array('administrator', 'author')
    ),

    /* --------------------------------------------------------------- */
    // Restrict access to the administration panel
    /* --------------------------------------------------------------- */

    // You can allow/forbid admin panel access for some roles. If this array is empty
    // or if you don't include this setting, everyone will be able to
    // access the admin panel.
    'admin_access' => array(
        // Shall we allow or forbid the access?
        'mode'  => 'allow', // allow|forbid

        // The roles affected by the mode above. e.g. here, administrators
        // and authors will be able to access the admin panel
        'roles' => array('administrator', 'author')
    )

);