<?php


namespace Mic2100\DesignPatterns\Decorators;


interface SimpleDecoratorInterface
{
    /**
     * @param string $input
     * @return string
     */
    public function handle(string $input): string;
}
