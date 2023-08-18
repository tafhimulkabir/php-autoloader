<?php

declare(strict_types = 1);

namespace App\Autoloader\Loader;

class ActualLoader
{
    private static array $configParam;

    public static function getConfigParam(array $config): void
    {
        self::$configParam = $config;
    }


}
