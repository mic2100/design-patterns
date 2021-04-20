<?php

namespace Mic2100\DesignPatternTests\Singletons;

use Exception;
use Mic2100\DesignPatterns\Singletons\SimpleSingleton;
use PHPUnit\Framework\TestCase;

class SimpleSingletonTest extends TestCase
{
    /**
     * @covers \Mic2100\DesignPatterns\Singletons\SimpleSingleton
     * @throws Exception
     */
    public function testCreateSingletonInstantiateExpectsError(): void
    {
        $this->expectException('Error');

        new SimpleSingleton;
    }

    /**
     * @covers \Mic2100\DesignPatterns\Singletons\SimpleSingleton
     */
    public function testCreateSingletonExpectsSuccess(): void
    {
        $singletonOne = SimpleSingleton::getInstance();
        $singletonTwo = SimpleSingleton::getInstance();

        $this->assertInstanceOf(SimpleSingleton::class, $singletonOne);
        $this->assertInstanceOf(SimpleSingleton::class, $singletonTwo);

        $this->assertEquals($singletonOne->getTime(), $singletonTwo->getTime());
    }
}