<?php

namespace Mic2100\DesignPatterns\Examples\Strategies\ArraySorter;

/**
 * Class ArraySorter
 *
 * Strategies in this example that implement the SortingStrategyInterface:
 * KeySort - Sorts array by the array key
 * ReverseKeySort - Sorts array by the array key in reverse order
 * Sort - Sorts array by the array value
 * ReverseSort - Sorts array by the array value in reverse order
 *
 * @package Mic2100\DesignPatterns\Strategies
 */
class ArraySorter
{
    /**
     * @param SortingStrategyInterface $sortingStrategy
     */
    public function __construct(private ?SortingStrategyInterface $sortingStrategy = null)
    {
    }

    /**
     * Sets the sorting strategy that will be used when calling the sort method
     *
     * @param SortingStrategyInterface $sortingStrategy
     */
    public function setSortingStrategy(SortingStrategyInterface $sortingStrategy): void
    {
        $this->sortingStrategy = $sortingStrategy;
    }

    /**
     * Sorts the array using the provided sorting interface
     *
     * @param array $data
     * @return array
     */
    public function sort(array $data): array
    {
        return $this->sortingStrategy->sort($data);
    }
}
