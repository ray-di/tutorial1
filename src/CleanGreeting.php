<?php

namespace Ray\Tutorial;

final class CleanGreeting implements GreetingInterface
{
    public function __construct(
        private readonly Users $users,
        private readonly PrinterInterface $printer
    ) {}

    public function __invoke(): void
    {
        foreach ($this->users as $user) {
            ($this->printer)($user);
        }
    }
}
