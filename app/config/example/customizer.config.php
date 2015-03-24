<?php

use Baobab\Helper\Customizer;

return array(

    /* --------------------------------------------------------------- */
    // Options for Kirki
    /* --------------------------------------------------------------- */

    /**
     * Define the global settings for the customizer page. This is where you
     * can add some branding to your theme options page
     *
     * @link http://kirki.org/#configuration
     */
    'options'  => array(
        'description'   => __('This is the theme description', 'my-theme'),
        'color_active'  => '#1abc9c',
        'color_light'   => '#8cddcd',
        'color_select'  => '#34495e',
        'color_accent'  => '#FF5740',
        'color_back'    => '#222',
        'stylesheet_id' => 'shoestrap',

        // This defines the panel where all default WordPress sections are stuffed
        'default_panel' => array(
            'id'    => 'panel-default',
            'title' => __('General settings', 'my-theme')
        )
    ),

    /* --------------------------------------------------------------- */
    // Your sections and the corresponding controls
    /* --------------------------------------------------------------- */

    /**
     * Define here how the theme settings will be grouped in the Theme
     * Customizer page
     */
    'panels'   => array(
        Customizer::defaultPanel(
            Customizer::section(
                'section-0-1',
                __('Section 0.1', 'giacometti'),
                __('Section 0.1 description', 'giacometti'))
        ),
        Customizer::panel(
            __('Panel 1', 'giacometti'),
            __('Panel 1 description', 'giacometti'),
            Customizer::section(
                'section-1-1',
                __('Section 1.1', 'giacometti'),
                __('Section 1.1 description', 'giacometti')),
            Customizer::section(
                'section-1-2',
                __('Section 1.2', 'giacometti'),
                __('Section 1.2 description', 'giacometti'))
        ),
        Customizer::panel(
            __('Panel 2', 'giacometti'),
            __('Panel 2 description', 'giacometti'),
            Customizer::section(
                'section-2-1',
                __('Section 2.1', 'giacometti'),
                __('Section 2.1 description', 'giacometti')),
            Customizer::section(
                'section-2-2',
                __('Section 2.2', 'giacometti'),
                __('Section 2.2 description', 'giacometti'))
        )
    ),

    /**
     * Define here the controls that will be used to set the options in your theme.
     * Baobab uses the Kirki library to do the heavy lifting, you can use all of their control types.
     *
     * @link http://kirki.org/#field-types
     */
    'controls' => array(
        Customizer::control(
            'text',
            'setting_2',
            'section-2-1',
            __('My custom control 2', 'giacometti'),
            'Value 2'),
        Customizer::control(
            'text',
            'setting_3',
            'section-1-2',
            __('My custom control', 'giacometti'),
            'some-default-value')
    )

);