<?php

namespace Mic2100\DesignPatterns\Strategies;

use Mic2100\DesignPatterns\Examples\Strategies\ArraySorter\SortingStrategyInterface;

/**
 * Class SimpleStrategy
 *
 * Strategies are useful when you want to do a specific task depending on the scenario
 * In this example different sorting strategies are used depending on your requirements.
 *
 * Strategies in this example that implement the SortingStrategyInterface:
 * KeySort - Sorts array by the array key
 * ReverseKeySort - Sorts array by the array key in reverse order
 * Sort - Sorts array by the array value
 * ReverseSort - Sorts array by the array value in reverse order
 *
 * @package Mic2100\DesignPatterns\Strategies
 */
class SimpleStrategy
{
    /**
     * @param SortingStrategyInterface $sortingStrategy
     */
    public function __construct(
        private ?SortingStrategyInterface $sortingStrategy = null
    ) {
    }

    /**
     * @param SortingStrategyInterface $sortingStrategy
     */
    public function setSortingStrategy(SortingStrategyInterface $sortingStrategy): void
    {
        $this->sortingStrategy = $sortingStrategy;
    }

    /**
     * @param array $data
     * @return array
     */
    public function sort(array $data): array
    {
        return $this->sortingStrategy->sort($data);
    }
}
