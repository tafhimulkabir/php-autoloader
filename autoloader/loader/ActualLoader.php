<?php

declare(strict_types = 1);

namespace App\Autoloader\Loader;

class ActualLoader
{
    private const EXT = '.php';

    private static array $configParam;

    public static function getConfigParam(array $config): void
    {
        self::$configParam = $config;
    }

    private static function loader(string $name): void
    {

    }

}
