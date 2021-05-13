<?php

namespace Mic2100\DesignPatterns\Examples\Decorators\StringManipulation;

interface StringManipulationInterface
{
    /**
     * @param string $input
     * @return string
     */
    public function handle(string $input): string;
}
