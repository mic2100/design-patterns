<?php

namespace Mic2100\DesignPatterns\Examples\Strategies\ArraySorter;

class ReverseSort implements SortingStrategyInterface
{
    /**
     * @inheritDoc
     */
    public function sort(array $data): array
    {
        rsort($data);

        return $data;
    }
}
