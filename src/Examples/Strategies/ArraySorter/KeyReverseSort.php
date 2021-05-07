<?php

namespace Mic2100\DesignPatterns\Examples\Strategies\ArraySorter;

class KeyReverseSort implements SortingStrategyInterface
{
    /**
     * {@inherit}
     */
    public function sort(array $data): array
    {
        krsort($data);

        return $data;
    }
}
