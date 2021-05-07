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
     * @var SortingStrategyInterface|null
     */
    private ?SortingStrategyInterface $sortingStrategy = null;

    /**
     * @param SortingStrategyInterface $sortingStrategy
     */
    public function __construct(SortingStrategyInterface $sortingStrategy)
    {
        $this->setSortingStrategy($sortingStrategy);
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
