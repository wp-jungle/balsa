<?php

return array(

    /* --------------------------------------------------------------- */
    // Default values for widget area properties
    /* --------------------------------------------------------------- */

    /**
     * Here are the default values for each widget area. This allows to globally specify some wrapper tags according to
     * the markup you want.
     *
     * @param string $class            Extra CSS class to assign to the sidebar in the Widgets interface.
     *                                 Default empty.
     *
     * @param string $before_widget    HTML content to prepend to each widget's HTML output when assigned to this
     *                                 sidebar. Default is an opening list item element.
     *
     * @param string $after_widget     HTML content to append to each widget's HTML output when assigned to this
     *                                 sidebar. Default is a closing list item element.
     *
     * @param string $before_title     HTML content to prepend to the sidebar title when displayed. Default is an
     *                                 opening h2 element.
     *
     * @param string $after_title      HTML content to append to the sidebar title when displayed. Default is a closing
     *                                 h2 element.
     *
     * @see http://codex.wordpress.org/Function_Reference/register_sidebar
     */
    'defaults' => array(
        'class'         => '',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ),

    /* --------------------------------------------------------------- */
    // Widget areas
    /* --------------------------------------------------------------- */

    /**
     * Declare all your widget areas in the following array. Each area can be declared:
     *
     * - with slug => title
     * This allows to quickly declare areas using all default parameters
     *
     * - with slug => area properties array
     * This allows to change the default parameters (wrappers, description)
     */
    'areas'    => array(

        /** A first area declared with the short declaration style */
        'widget_area_1' => __('Area 1 title', 'my_text_domain'),

        /** A second area with more options */
        'widget_area_2' => array(
            'name'          => __('Area 2 title', 'my_text_domain'),
            'description'   => __('Area 2 description', 'my_text_domain'),
            'class'         => 'my-custom-class',
            'before_widget' => '<aside>',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        )
    )
);