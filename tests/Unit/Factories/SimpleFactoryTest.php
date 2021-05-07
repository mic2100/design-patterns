<?php

namespace Mic2100DesignPatternTests\Unit\Factories;

use Exception;
use Mic2100\DesignPatterns\Examples\Strategies\ArraySorter\{KeySort, KeyReverseSort, ReverseSort, Sort};
use Mic2100\DesignPatterns\Factories\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    /**
     * @covers \Mic2100\DesignPatterns\Factories\SimpleFactory
     * @throws Exception
     */
    public function testCreateFactoryExpectsException()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Unrecognised class number: 99');

        SimpleFactory::create(99);
    }

    /**
     * @dataProvider dataValidClassNumbers
     * @covers \Mic2100\DesignPatterns\Factories\SimpleFactory
     * @param int $number
     */
    public function testCreateFactoryExpectsValidClass(int $number, string $expectedClass)
    {
        $class = SimpleFactory::create($number);

        $this->assertInstanceOf($expectedClass, $class);
    }

    /**
     * @return array[]
     */
    public function dataValidClassNumbers(): array
    {
        return [
            [1, KeySort::class],
            [2, KeyReverseSort::class],
            [3, Sort::class],
            [4, ReverseSort::class],
        ];
    }
}
