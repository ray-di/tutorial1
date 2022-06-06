<?php

namespace Ray\Tutorial;

use Ray\Di\AbstractModule;

final class TestModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->bind(Users::class)->toInstance(new Users(['TEST1', 'TEST2']));
    }
}
