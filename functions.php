<?php

/**
 * Load the classes required by the theme using composer's auto-loading feature
 */
$classLoader = require_once('vendor/composer/autoload.php');

use Baobab\Theme\BaobabTheme;

/**
 * Define our concrete theme class
 */
class BalsaTheme extends BaobabTheme
{

    //------------------------------------------------------------------------------------------------------------------
    // Required variables

    /** @var GiacomettiTheme The unique instance of our theme */
    static $instance = null;

    /** @var \Composer\Autoload\ClassLoader The class loader */
    static $classLoader = null;

    //------------------------------------------------------------------------------------------------------------------
    // All we need to bootstrap the theme

    /**
     * Bootstrap the theme. This is the first function you should call before using anything else.
     *
     * @param \Composer\Autoload\ClassLoader $classLoader The composer class loader that will be used to autoload our
     *                                                    classes.
     */
    public static function bootstrap($classLoader)
    {
        self::$classLoader = $classLoader;
        self::getInstance();
    }
}

/**
 * Gentlemen, start your engines!
 */
BalsaTheme::bootstrap($classLoader);