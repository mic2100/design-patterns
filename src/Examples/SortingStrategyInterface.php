<?php

namespace Mic2100\DesignPatterns\Examples;

interface SortingStrategyInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function sort(array $data): array;
}