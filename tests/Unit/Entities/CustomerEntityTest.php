<?php

namespace Mic2100DesignPatternTests\Unit\Entities;

use Mic2100\DesignPatterns\Examples\Entities\Customer;
use PHPUnit\Framework\TestCase;

class CustomerEntityTest extends TestCase
{
    /**
     * @covers \Mic2100\DesignPatterns\Examples\Entities\Customer
     */
    public function testCreateFactoryExpectsValidClass()
    {
        $valueObjectOne = new Customer(
            10,
            'Mike',
            'Bardsley',
            'mike@home.com'
        );
        $this->assertSame(10, $valueObjectOne->getId());
        $this->assertSame('Mike', $valueObjectOne->getForename());
        $this->assertSame('Bardsley', $valueObjectOne->getSurname());
        $this->assertSame('mike@home.com', $valueObjectOne->getEmail());
    }
}
