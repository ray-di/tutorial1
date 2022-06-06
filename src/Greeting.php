<?php

namespace Ray\Tutorial;

final class Greeting implements GreetingInterface
{
    public function __invoke(): void
    {
        $users = ['DI', 'AOP', 'REST'];
        foreach ($users as $user) {
            echo 'Hello ' . $user . '!' . PHP_EOL;
        }
    }
}
