<?php

use Ray\Tutorial\CleanGreeting;
use Ray\Tutorial\Printer;
use Ray\Tutorial\Users;

require dirname(__DIR__) . '/vendor/autoload.php';

$greeting = new CleanGreeting(
    new Users(['DI', 'AOP', 'REST']),
    new Printer
);

$greeting();
