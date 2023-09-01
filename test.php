<?php
require_once __DIR__ . '/vendor/autoload.php';
foreach ((new \iggyvolz\crazy\Crazy()) as $line) echo "$line\n";