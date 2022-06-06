
<?php

use Ray\Di\Injector;
use Ray\Tutorial\AppModule;
use Ray\Tutorial\GreetingInterface;
use Ray\Tutorial\IntlModule;
use Ray\Tutorial\TestModule;

require dirname(__DIR__) . '/vendor/autoload.php';

$module = new AppModule();
$module->override(new IntlModule());
$injector = new Injector($module);
$greering = $injector->getInstance(GreetingInterface::class);
$greering();
