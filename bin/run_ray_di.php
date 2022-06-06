<?php

use Ray\Di\Injector;
use Ray\Tutorial\AppModule;
use Ray\Tutorial\GreetingInterface;

require dirname(__DIR__) . '/vendor/autoload.php';

$module = new AppModule();
$injector = new Injector($module);
$greering = $injector->getInstance(GreetingInterface::class);
$greering();
