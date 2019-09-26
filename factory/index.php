<?php

namespace Design_pattern\Factory;

include_once 'autoload.php';

$factoryLog = new StdoutLoggerFactory;
$StdoutLog = $factoryLog->createLogger();
$StdoutLog->log('this is a log of StdOut Log');