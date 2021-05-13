<?php

namespace Mic2100\DesignPatterns\Examples\Strategies\ArraySorter;

class Sort implements SortingStrategyInterface
{
    /**
     * @inheritDoc
     */
    public function sort(array $data): array
    {
        sort($data);

        return $data;
    }
}
