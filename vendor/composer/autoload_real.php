<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit76f2f24a9aa4e8edf6b2067f0687fa87
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit76f2f24a9aa4e8edf6b2067f0687fa87', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit76f2f24a9aa4e8edf6b2067f0687fa87', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit76f2f24a9aa4e8edf6b2067f0687fa87::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit76f2f24a9aa4e8edf6b2067f0687fa87::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire76f2f24a9aa4e8edf6b2067f0687fa87($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire76f2f24a9aa4e8edf6b2067f0687fa87($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
