<?php

use Phel\Phel;

$projectRootDir = __DIR__ . '/src/';

require __DIR__ . '/vendor/autoload.php';

Phel::run($projectRootDir, 'hello-world\\boot');

