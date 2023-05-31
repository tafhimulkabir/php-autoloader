<?php

const BASE_URI = __DIR__ . DIRECTORY_SEPARATOR;

$configuration = require_once BASE_URI . 'config' . DIRECTORY_SEPARATOR . 'autoloader_config.php';

require_once BASE_URI . 'loader' . DIRECTORY_SEPARATOR . 'ActualLoader.php';
require_once BASE_URI . 'enum' . DIRECTORY_SEPARATOR . 'AutoloadStandard.php';

use App\Autoloader\Loader\ActualLoader;
use App\Autoloader\Enum\AutoloadStandard;
