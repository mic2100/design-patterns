<?php

namespace Mic2100\DesignPatterns\Examples\Strategies\ArraySorter;

interface SortingStrategyInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function sort(array $data): array;
}
