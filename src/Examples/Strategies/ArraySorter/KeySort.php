<?php

namespace Mic2100\DesignPatterns\Examples\Strategies\ArraySorter;

class KeySort implements SortingStrategyInterface
{
    /**
     * {@inherit}
     */
    public function sort(array $data): array
    {
        ksort($data);

        return $data;
    }
}
