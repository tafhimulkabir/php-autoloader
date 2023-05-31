<?php

declare(strict_types = 1);

namespace App\Autoloader\Enum;

enum AutoloadStandard
{
    case PSR_0;
    case PSR_4;

    public static function setAutoloadStandard(string $standard): self|string
    {
        $standard = strtoupper(trim($standard));

        return match ($standard) {
            'PSR_0'     => self::PSR_0,
            'PSR_4'     => self::PSR_4,
            default     => 'Oops! Sorry Unsupported Standard!'
        };
    }
}

