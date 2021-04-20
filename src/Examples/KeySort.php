<?php

namespace Mic2100\DesignPatterns\Examples;

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