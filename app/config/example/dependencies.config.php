<?php

return [

    /**
     * This file can be used to declare plugin dependencies: if your theme requires or encourages the use of a
     * third-party plugin, you can warn the user about that.
     *
     * Behind the scene, Baobab is using the excellent TGM Plugin Activation library by Thomas Griffin. Baobab will
     * specify sensible defaults for most options, just override what you need.
     *
     * By default, you can put all plugins that you want to bundle with the theme in the vendor/bundled directory.
     *
     * @link http://tgmpluginactivation.com/
     */

    /* --------------------------------------------------------------- */
    // List of plugin dependencies
    /* --------------------------------------------------------------- */

    /**
     * @link https://github.com/thomasgriffin/TGM-Plugin-Activation/blob/master/example.php#L43
     */

    'plugins' => [

        // This is an example of how to include a plugin pre-packaged with a theme.
        [
            'name'               => 'TGM Example Plugin', // The plugin name.
            'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
            'source'             => 'tgm-example-plugin.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false,
            // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false,
            // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ],

        // This is an example of how to include a plugin from a private repo in your theme.
        [
            'name'         => 'TGM New Media Plugin', // The plugin name.
            'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
            'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
            'required'     => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader',
            // If set, overrides default API URL and points to an external URL.
        ],

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        [
            'name'     => 'BuddyPress',
            'slug'     => 'buddypress',
            'required' => false,
        ],

        // Below is a set of recommended plugins for a production environment

        /** ----
         * Google Analytics
         */
        // Basic integration, quick and easy
        [
            'name'     => 'GA Google Analytics',
            'slug'     => 'ga-google-analytics',
            'required' => false,
        ],
        // Feature-full, dashboard widgets, etc.
        [
            'name'     => 'GA Google Analytics',
            'slug'     => 'google-analytics-dashboard-for-wp',
            'required' => false,
        ],

        // Below is a set of recommended plugins for a development environment

        // To debug rewrite rules
        [
            'name'     => 'Rewrite rules inspector',
            'slug'     => 'rewrite-rules-inspector',
            'required' => false,
        ],
    ],

    /* --------------------------------------------------------------- */
    // Options of the TGM library
    /* --------------------------------------------------------------- */

    /**
     * @link https://github.com/thomasgriffin/TGM-Plugin-Activation/blob/master/example.php#L82
     */

    'options' => [

        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',
        // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        
        // If you want to overwrite strings you could do it here too
        /* 
        'strings'      => array(
            'page_title'                      => __('Install Required Plugins', 'tgmpa'),
            'menu_title'                      => __('Install Plugins', 'tgmpa'),
            'installing'                      => __('Installing Plugin: %s', 'tgmpa'), // %s = plugin name.
            'oops'                            => __('Something went wrong with the plugin API.', 'tgmpa'),
            'notice_can_install_required'     => _n_noop('This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.'), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop('This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.',
                'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'),
            // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop('The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.',
                'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'),
            // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'),
            // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.',
                'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'),
            // %1$s = plugin name(s).
            'install_link'                    => _n_noop('Begin installing plugin', 'Begin installing plugins'),
            'activate_link'                   => _n_noop('Begin activating plugin', 'Begin activating plugins'),
            'return'                          => __('Return to Required Plugins Installer', 'tgmpa'),
            'plugin_activated'                => __('Plugin activated successfully.', 'tgmpa'),
            'complete'                        => __('All plugins installed and activated successfully. %s', 'tgmpa'),
            // %s = dashboard link.
            'nag_type'                        => 'updated'
            // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
        */
    ],

];