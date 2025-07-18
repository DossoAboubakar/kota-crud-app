<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2842e50b8e4b7657380364eb8a26d905
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\' => 5,
        ),
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Tests',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Application\\CrudRepository\\CrudAbonnement' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudAbonnement.php',
        'Application\\CrudRepository\\CrudAddresse' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudAddresse.php',
        'Application\\CrudRepository\\CrudCategorie1' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudCategorie1.php',
        'Application\\CrudRepository\\CrudCategorieListe' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudCategorieListe.php',
        'Application\\CrudRepository\\CrudCategorieService' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudCategorieService.php',
        'Application\\CrudRepository\\CrudCommodite' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudCommodite.php',
        'Application\\CrudRepository\\CrudCommune' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudCommune.php',
        'Application\\CrudRepository\\CrudContact' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudContact.php',
        'Application\\CrudRepository\\CrudFavoris' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudFavoris.php',
        'Application\\CrudRepository\\CrudImageAgence' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudImageAgence.php',
        'Application\\CrudRepository\\CrudListeLocalisation' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudListeLocalisation.php',
        'Application\\CrudRepository\\CrudRequests' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudRequests.php',
        'Application\\CrudRepository\\CrudSignalement' => __DIR__ . '/../..' . '/src/Application/CrudRepository/CrudSignalement.php',
        'Application\\Lib\\DatabaseConnection' => __DIR__ . '/../..' . '/src/Application/Lib/DatabaseConnection.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2842e50b8e4b7657380364eb8a26d905::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2842e50b8e4b7657380364eb8a26d905::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2842e50b8e4b7657380364eb8a26d905::$classMap;

        }, null, ClassLoader::class);
    }
}
