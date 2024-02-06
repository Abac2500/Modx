<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb57b5f8dcd09844621e909fd4a940283
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TinyMCERTE\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TinyMCERTE\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TinyMCERTE\\Plugins\\Events\\OnManagerPageBeforeRender' => __DIR__ . '/../..' . '/src/Plugins/Events/OnManagerPageBeforeRender.php',
        'TinyMCERTE\\Plugins\\Events\\OnRichTextBrowserInit' => __DIR__ . '/../..' . '/src/Plugins/Events/OnRichTextBrowserInit.php',
        'TinyMCERTE\\Plugins\\Events\\OnRichTextEditorInit' => __DIR__ . '/../..' . '/src/Plugins/Events/OnRichTextEditorInit.php',
        'TinyMCERTE\\Plugins\\Events\\OnRichTextEditorRegister' => __DIR__ . '/../..' . '/src/Plugins/Events/OnRichTextEditorRegister.php',
        'TinyMCERTE\\Plugins\\Plugin' => __DIR__ . '/../..' . '/src/Plugins/Plugin.php',
        'TinyMCERTE\\Processors\\GetTreeProcessor' => __DIR__ . '/../..' . '/src/Processors/GetTreeProcessor.php',
        'TinyMCERTE\\TinyMCERTE' => __DIR__ . '/../..' . '/src/TinyMCERTE.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb57b5f8dcd09844621e909fd4a940283::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb57b5f8dcd09844621e909fd4a940283::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb57b5f8dcd09844621e909fd4a940283::$classMap;

        }, null, ClassLoader::class);
    }
}
