<?php

namespace Ray\Tutorial;

use Ray\Di\AbstractModule;

final class AppModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->bind(Users::class)->toInstance(new Users(['DI', 'AOP', 'REST']));
        $this->bind(PrinterInterface::class)->to(Printer::class);
        $this->bind(GreetingInterface::class)->to(CleanGreeting::class);
    }
}
