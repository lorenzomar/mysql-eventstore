<?php

/**
 * This file is part of the MySqlEventStore package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

$path1 = __DIR__ . '/../vendor/autoload.php';
$path2 = __DIR__ . '/../../../../vendor/autoload.php';

require file_exists($path1) ? $path1 : $path2;

$application = new \Symfony\Component\Console\Application();
$application->add(new \MySqlEventStore\Cli\InitDbCommand());
$application->run();