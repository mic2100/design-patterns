<?php

namespace Mic2100\DesignPatterns\Examples;

class Sort implements SortingStrategyInterface
{
    /**
     * {@inherit}
     */
    public function sort(array $data): array
    {
        sort($data);

        return $data;
    }
}