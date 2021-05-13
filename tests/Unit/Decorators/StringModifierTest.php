<?php

namespace Mic2100DesignPatternTests\Unit\Decorators;

use Mic2100\DesignPatterns\Examples\Decorators\StringManipulation\{
    StringModifier, StringToLower, StringToUpper
};
use PHPUnit\Framework\TestCase;

class StringModifierTest extends TestCase
{
    /**
     * @var StringModifier
     */
    private StringModifier $strToUpper;

    /**
     * @var StringModifier
     */
    private StringModifier $strToLower;

    public function setUp(): void
    {
        parent::setUp();

        $this->strToUpper = new StringModifier(new StringToUpper());
        $this->strToLower = new StringModifier(new StringToLower());
    }

    /**
     * @covers \Mic2100\DesignPatterns\Examples\Decorators\StringManipulation\StringToLower
     * @dataProvider dataStringsToTest
     *
     * @param string $input
     */
    public function testStringModifierCheckStringGoesToLowerCase(string $input)
    {
        $this->assertSame(strtolower($input), $this->strToLower->modify($input));
    }

    /**
     * @covers \Mic2100\DesignPatterns\Examples\Decorators\StringManipulation\StringToUpper
     * @dataProvider dataStringsToTest
     *
     * @param string $input
     */
    public function testStringModifierCheckStringGoesToUpperCase(string $input)
    {
        $this->assertSame(strtoupper($input), $this->strToUpper->modify($input));
    }

    /**
     * @return \string[][]
     */
    public function dataStringsToTest(): array
    {
        return [
            ['StrIng 1'],
            ['sTriNg 2'],
            ['stRinG 3'],
        ];
    }
}
