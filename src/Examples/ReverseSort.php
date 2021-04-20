<?php

namespace Mic2100\DesignPatterns\Examples;

class ReverseSort implements SortingStrategyInterface
{
    /**
     * {@inherit}
     */
    public function sort(array $data): array
    {
        rsort($data);

        return $data;
    }
}