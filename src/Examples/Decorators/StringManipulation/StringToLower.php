<?php

namespace Mic2100\DesignPatterns\Examples\Decorators\StringManipulation;

class StringToLower implements StringManipulationInterface
{
    /**
     * @inheritDoc
     */
    public function handle(string $input): string
    {
        return strtolower($input);
    }
}
