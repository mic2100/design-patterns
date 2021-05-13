<?php

namespace Mic2100\DesignPatterns\Examples\Decorators\StringManipulation;

class StringToUpper implements StringManipulationInterface
{
    /**
     * @inheritDoc
     */
    public function handle(string $input): string
    {
        return strtoupper($input);
    }
}
