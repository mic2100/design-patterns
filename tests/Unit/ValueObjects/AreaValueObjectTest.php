<?php

namespace Mic2100DesignPatternTests\Unit\ValueObjects;

use Mic2100\DesignPatterns\Examples\ValueObjects\Rectangle;
use PHPUnit\Framework\TestCase;

class AreaValueObjectTest extends TestCase
{
    /**
     * @covers \Mic2100\DesignPatterns\Examples\ValueObjects\Rectangle
     */
    public function testCreateFactoryExpectsValidClass()
    {
        $valueObjectOne = new Rectangle(2.0, 3.0);
        $this->assertSame(6.0, $valueObjectOne->getArea());
        $this->assertSame(10.0, $valueObjectOne->getPerimeter());

        $valueObjectTwo = new Rectangle(2.5, 3.5);
        $this->assertSame(8.75, $valueObjectTwo->getArea());
        $this->assertSame(12.0, $valueObjectTwo->getPerimeter());
    }
}
