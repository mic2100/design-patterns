<?php

namespace Mic2100\DesignPatterns\Decorators;

class SimpleDecorator implements SimpleDecoratorInterface
{
    /**
     * {inherit}
     */
    public function handle(string $input): string
    {
        return 'Decorated(' . $input . ')';
    }
}
