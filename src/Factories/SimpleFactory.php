<?php

namespace Mic2100\DesignPatterns\Factories;

use Exception;
use Mic2100\DesignPatterns\Examples\KeySort;
use Mic2100\DesignPatterns\Examples\KeyReverseSort;
use Mic2100\DesignPatterns\Examples\ReverseSort;
use Mic2100\DesignPatterns\Examples\Sort;
use Mic2100\DesignPatterns\Examples\SortingStrategyInterface;

/**
 * Class SimpleFactory
 *
 * Factories are useful when you want to instantiate a class
 *
 * In this example the strategy pattern examples are being returned based on the number that is passed to the create
 * method. The method is set to return the SortingStrategyInterface or throw an Exception.
 *
 * @package Mic2100\DesignPatterns\Factories
 */
class SimpleFactory
{
    /**
     * @param int $number
     * @return SortingStrategyInterface
     * @throws Exception
     */
    public static function create(int $number)
    {
        switch ($number) {
            case 1:
                return new KeySort;

            case 2:
                return new KeyReverseSort;

            case 3:
                return new Sort;

            case 4:
                return new ReverseSort;

            default:
                throw new Exception('Unrecognised class number: ' . $number);
        }
    }
}