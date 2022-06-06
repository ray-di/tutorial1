<?php

namespace Ray\Tutorial;

interface PrinterInterface
{
    public function __invoke(string $user): void;
}
