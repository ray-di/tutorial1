<?php

namespace Ray\Tutorial;

use Ray\Di\AbstractModule;
use const PHP_EOL;

final class IntlModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->bind(Users::class)->toInstance(new Users(['DI', 'AOP', 'REST']));
        $this->bind(PrinterInterface::class)->to(IntlPrinter::class);
        $this->bind()->annotatedWith('message')->toInstance('Hello %s !' . PHP_EOL);
        $this->bind(GreetingInterface::class)->to(CleanGreeting::class);
    }
}
