<?php

use App\Application\WhoIsWinnerDetector;
use App\Infrastructure\DataReader;
use App\Infrastructure\ZeroRemover;

require_once __DIR__ . '/vendor/autoload.php';

$detector = new WhoIsWinnerDetector(new ZeroRemover());
$expression = (new DataReader())->read();

echo $detector->detect($expression)->name();