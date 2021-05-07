<?php

namespace Mic2100\DesignPatterns\ValueObjects;

/**
 * Class SimpleValueObject
 *
 * These are a little like entities but generally they don't contain any identification
 * The are more useful that just passing around an array. This is so you are able to pre check any data upon
 * construction of the object. You can also provide some utility functions if this fits within the scope of the
 * object.
 * The can me made immutable by only allowing the values to the set during the construction.
 *
 * Goto the Examples folder to see an example of how this could be used.
 *
 * @package Mic2100\DesignPatterns\ValueObjects
 */
class SimpleValueObject
{
    /**
     * @param mixed $value1
     * @param mixed $value2
     */
    public function __construct(
        private mixed $value1,
        private mixed $value2
    ) {
    }

    /**
     * @return mixed
     */
    public function getValue1(): mixed
    {
        return $this->value1;
    }

    /**
     * @return mixed
     */
    public function getValue2(): mixed
    {
        return $this->value2;
    }
}
