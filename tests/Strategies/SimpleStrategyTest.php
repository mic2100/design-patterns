<?php

namespace Mic2100\DesignPatternTests\Strategies;

use Mic2100\DesignPatterns\Examples\{KeySort, KeyReverseSort, ReverseSort, Sort};
use Mic2100\DesignPatterns\Strategies\SimpleStrategy;
use PHPUnit\Framework\TestCase;

class SimpleStrategyTest extends TestCase
{
    /**
     * @covers \Mic2100\DesignPatterns\Strategies\SimpleStrategy
     */
    public function testCreateFactoryExpectsValidClass()
    {
        $sorter = new SimpleStrategy(new Sort);
        $array = [3 => 4, 2 => 2, 0 => 1, 1 => 3];

        $sortedOne = $sorter->sort($array);
        $this->assertSame([1, 2, 3, 4], $sortedOne);

        $sorter->setSortingStrategy(new ReverseSort);
        $sortedTwo = $sorter->sort($array);
        $this->assertSame([4, 3, 2, 1], $sortedTwo);

        $sorter->setSortingStrategy(new KeySort);
        $sortedThree = $sorter->sort($array);
        $this->assertSame([0 => 1, 1 => 3, 2 => 2, 3 => 4], $sortedThree);

        $sorter->setSortingStrategy(new KeyReverseSort);
        $sortedFour = $sorter->sort($array);
        $this->assertSame([3 => 4, 2 => 2, 1 => 3, 0 => 1], $sortedFour);
    }
}