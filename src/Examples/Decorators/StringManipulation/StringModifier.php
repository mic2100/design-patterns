<?php

namespace Mic2100\DesignPatterns\Examples\Decorators\StringManipulation;

class StringModifier
{
    /**
     * @param StringManipulationInterface|null $modifier
     */
    public function __construct(
        private ?StringManipulationInterface $modifier = null
    ) {

    }

    /**
     * @param string $input
     * @return string
     */
    public function modify(string $input): string
    {
        return $this->modifier?->handle($input) ?? $input;
    }
}
