<?php

return array(

    /* --------------------------------------------------------------- */
    // Image sizes
    /* --------------------------------------------------------------- */

    /**
     * Configure the additional image sizes your application need.
     * @link http://codex.wordpress.org/Function_Reference/add_image_size
     *
     * @key  string The size name.
     *
     * @param int        $width      (required) The image width.
     * @param int        $height     (required) The image height.
     * @param bool|array $crop       (required) Crop option. Since 3.9, define a crop position with an array.
     * @param bool       $media      (optional) Add to media selection dropdown. Make it also available to media
     *                               custom field. Defaults to false.
     * @param string     $mediaLabel (optional) The label to show in the media selection dropdown. Defaults to a
     *                               prettified version of the slug.
     */
    'my_size_id' => array(
        'width'      => 500,
        'height'     => 500,
        'crop'       => true,
        'media'      => true,
        'mediaLabel' => __('My size', 'my_text_domain')
    )
);