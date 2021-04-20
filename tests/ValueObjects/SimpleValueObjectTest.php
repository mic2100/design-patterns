<?php

namespace Mic2100\DesignPatternTests\ValueObjects;

use Mic2100\DesignPatterns\ValueObjects\SimpleValueObject;
use PHPUnit\Framework\TestCase;

class SimpleStrategyTest extends TestCase
{
    /**
     * @covers \Mic2100\DesignPatterns\ValueObjects\SimpleValueObject
     */
    public function testCreateFactoryExpectsValidClass()
    {
        $valueObjectOne = new SimpleValueObject(2.0, 3.0);
        $this->assertSame(6.0, $valueObjectOne->getArea());

        $valueObjectTwo = new SimpleValueObject(2.5, 3.5);
        $this->assertSame(8.75, $valueObjectTwo->getArea());
    }
}