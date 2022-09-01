<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita52bb14ebf1390d678d29ff8f1d4802a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita52bb14ebf1390d678d29ff8f1d4802a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita52bb14ebf1390d678d29ff8f1d4802a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita52bb14ebf1390d678d29ff8f1d4802a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
